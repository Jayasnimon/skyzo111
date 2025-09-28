<?php
// API Token
$token = "TjV2eWI3UXNmU2J2MmV0VHBYOHN4SnVNYVA5V0lieENqdEszaWlQTTBjdDlmT3lVaGVCcXJmSU5vRm1TN1RkcTBQOHZHNFJLQmduUitGWlVFMVo1SVZiRVU0cEF5Y2pnZFRxY2pjeGs2SXd6VXpIZlJxVmYyd2ViZzZvUTJVeGhXUlpHQ0NXTUhKSHBNL2dBZmQvTVJVbWtYVDBkWXdqRTVLbjZrZDlRTWR5SFFpUUZDOFNYWnR5Mm5Cb2xJTXpI"; 

// Header
$header = array(
    "Authorization: Bearer " . $token
);

// Body (array langsung)
$post_body = array(
    "email_user" => "monnhyper@gmail.com",
    "tipe"       => "tambah",
    "jumlah"     => 5000,
    "notifikasi" => true
);

// Inisialisasi cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://bukaolshop.net/api/v1/member/saldo");
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body); // kirim array langsung
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi
$hasil = curl_exec($ch);
curl_close($ch);

// Output hasil
echo $hasil;
?>