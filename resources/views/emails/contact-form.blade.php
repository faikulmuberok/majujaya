<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru dari Form Kontak</title>
</head>
<body>
    <h2>Anda menerima pesan baru dari form kontak website</h2>
    
    <p><strong>Nama:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Subjek:</strong> {{ $details['subject'] }}</p>
    <p><strong>Pesan:</strong></p>
    <p>{{ $details['message'] }}</p>
    
    <p>Silakan balas email ini untuk menanggapi pesan dari {{ $details['name'] }}.</p>
</body>
</html>