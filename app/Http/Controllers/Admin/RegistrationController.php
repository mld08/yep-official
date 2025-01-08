<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Registration;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.registrations.index', ['registrations' => Registration::orderBy('created_at', 'asc')->paginate(25)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registration = new Registration();
        return view('admin.registrations.form', ['registration'=>$registration]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'surname' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|unique:registrations,email',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female',
            'status' => 'required|in:student,entrepreneur,employed,unemployed,other',
            'other_status' => 'nullable|string',
            'termsCheckbox' => 'required|accepted',
        ]);

        // Générer un token unique
        $token = Str::random(40);

        // Générer le QR code
        $qrCode = QrCode::format('svg')->size(300)->generate($token);
        $qrCodePath = 'qrcodes/qrcode_' . $token . '.svg';
        Storage::disk('public')->put($qrCodePath, $qrCode);

        // Enregistrer les données dans la base de données
        $registration = Registration::create(array_merge($validated, [
            'token' => $token,
            'qr_code_path' => $qrCodePath,
            'pdf_path' => null, // Temporairement null, jusqu'à la génération du PDF
        ]));

        // Créer un PDF avec le QR code
        $pdf = Pdf::loadView('emails.qrcode', ['registration' => $registration, 'token' => $token]);
        $pdfPath = 'qrcodes/qrcode_' . $token . '.pdf';
        Storage::disk('public')->put($pdfPath, $pdf->output());

        // Mettre à jour l'enregistrement avec le chemin du PDF
        $registration->update(['pdf_path' => $pdfPath]);

        // Ajouter les champs supplémentaires
        //$validated['token'] = $token;
        //$validated['qr_code_path'] = $qrCodePath;
        //$validated['pdf_path'] = $pdfPath;
        //$validated['used'] = false; // Par défaut, la valeur est false

        // Enregistrement des données
        //$registration = Registration::create($validated);

        // Envoyer le mail avec le PDF en pièce jointe
        Mail::send('emails.notification', ['registration' => $registration], function ($message) use ($registration, $pdf) {
            $message->to($registration->email)
                    ->subject('Registration Confirmation')
                    ->attachData($pdf->output(), 'qrcode.pdf');
        });

        return redirect()->back()->with('success', 'Registration successful! Please check your email for confirmation.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        $registration->delete();
        return redirect()->route('admin.registration.index')->with('success','The registration has been deleted.');
    }

    /**
     * Afficher tous les tokens non utilisés.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAlltokens()
    {
        $tokens = Registration::getUnusedTokens();

        return $tokens;

        /*response()->json([
            'unused_tokens' => $tokens
        ])->header('Access-Control-Allow-Origin', '*')
          ->header('Access-Control-Allow-Methods', 'GET')
          ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');*/
    }

    /**
     * Invalider un token.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function invalidateToken(Request $request)
{
    $token = $request->input('token');

    if (!$token) {
        return $this->jsonResponse(['error' => 'Token is required'], 400);
    }

    $result = Registration::invalidateToken($token);

    return $this->jsonResponse(
        ['message' => $result['message'] ?? $result['error']],
        $result['code']
    );
}

private function jsonResponse(array $data, int $statusCode)
{
    return response()->json($data, $statusCode)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'POST')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
}
}
