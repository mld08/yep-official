<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Access Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-access {
            max-width: 400px;
            margin: 20px auto;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        .card-header {
            background: black;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .card-header h5 {
            margin: 0;
            font-size: 1.5rem;
        }
        .card-body {
            text-align: center;
            padding: 30px 20px;
        }
        .qr-code img {
            width: 150px;
            height: 150px;
            margin: 20px 0;
        }
        .attendee-info p {
            margin: 5px 0;
            font-size: 1rem;
        }
        .footer-note {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>
<body>

    <div class="card card-access">
        <div class="card-header">
            <h5>Youth Empowerment Program</h5>
            <p>Reserved Access</p>
        </div>
        <div class="card-body">
            <div class="attendee-info">
                <h6><strong>Name:</strong> {{ $registration->first_name }} {{ $registration->surname }}</h6>
                <p><strong>Event:</strong> Youth Empowerment Program 2025</p>
                <p><strong>Date:</strong> January 21 - 23, 2025</p>
            </div>
            <div class="qr-code">
                <img src="{{ storage_path('app/public/' . $registration->qr_code_path) }}" alt="QR Code">
            </div>
            <p>Scan the QR Code to verify your registration.</p>
        </div>
        <div class="footer-note">
            Please present this card at the entrance.
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
