<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'surname',
        'first_name',
        'email',
        'dob',
        'gender',
        'status',
        'other_status',
        'token',
        'used',
        'qr_code_path',
        'pdf_path'
    ];

    /**
     * Récupérer tous les tokens non utilisés.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getUnusedTokens()
    {
        return self::where('used', 0)->pluck('token');
    }

    /**
     * Invalider un token.
     *
     * @param string $token
     * @return array
     */
    public static function invalidateToken($token)
    {
        $registration = self::where('token', $token)->first();

        if (!$registration) {
            return ['error' => 'Token not found', 'code' => 404];
        }

        if ($registration->used) {
            return ['error' => 'Token has already been used', 'code' => 400];
        }

        $registration->used = 1;
        $registration->save();

        return ['message' => 'Token invalidated successfully', 'code' => 200];
    }
}
