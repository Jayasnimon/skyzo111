<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$token = "TjV2eWI3UXNmU2J2MmV0VHBYOHN4SnVNYVA5V0lieENqdEszaWlQTTBjdDlmT3lVaGVCcXJmSU5vRm1TN1RkcTBQOHZHNFJLQmduUitGWlVFMVo1SVZiRVU0cEF5Y2pnZFRxY2pjeGs2SXd6VXpIZlJxVmYyd2ViZzZvUTJVeGhXUlpHQ0NXTUhKSHBNL2dBZmQvTVJVbWtYVDBkWXdqRTVLbjZrZDlRTWR5SFFpUUZDOFNYWnR5Mm5Cb2xJTXpI"; 

$hadiah = $_GET['hadiah'] ?? null;
$email = $_GET['email_penerima'] ?? null;

$header = array(
    "Authorization: Bearer " . $token
);

$post_body = array(
    "email_user" => $email,
    "tipe"       => "tambah",
    "jumlah"     => $hadiah,
    "notifikasi" => true
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://bukaolshop.net/api/v1/member/saldo");
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$hasil = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);

if ($error) {
    echo "cURL Error: " . $error;
} else {
    echo $hasil;
}
?>
