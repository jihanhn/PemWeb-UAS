<?php
//  Jihan Haifa Nabilah 
//  41823010096 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $perusahaan = htmlspecialchars($_POST['perusahaan']);
    $telepon = htmlspecialchars($_POST['telepon']);
    $pesan = htmlspecialchars($_POST['pesan']);
    $recaptcha_response = $_POST['recaptcha_response'];

    // Verifikasi reCAPTCHA
    $secretKey = '6LdXZrUqAAAAAOXVcNuDNR1QelhLPsK3l3tZ8nd2';
    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptcha_response");
    $responseData = json_decode($verifyResponse);

    if ($responseData->success) {
        // Koneksi ke database
        $conn = new mysqli('localhost', 'root', '', 'db_klug');

        if ($conn->connect_error) {
            die('Koneksi gagal: ' . $conn->connect_error);
        }

        // Simpan data ke database
        $stmt = $conn->prepare("INSERT INTO hubungi_kami (nama, email, perusahaan, telepon, pesan) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nama, $email, $perusahaan, $telepon, $pesan);

        if ($stmt->execute()) {
            echo 'Pesan Anda telah terkirim.';
        } else {
            echo 'Gagal menyimpan pesan. Silakan coba lagi.';
        }

        $stmt->close();
        $conn->close();
    } else {
        echo 'Verifikasi reCAPTCHA gagal.';
    }
} else {
    echo 'Metode pengiriman tidak valid.';
}
