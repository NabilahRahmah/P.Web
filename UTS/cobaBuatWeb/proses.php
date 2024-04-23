<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Kirim email
    $to = "youremail@example.com"; // alamat email tujuan
    $subject = "Pesan dari $name";
    $body = "Nama: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        $success_message = "Pesan berhasil dikirim!";
    } else {
        $error_message = "Maaf, terjadi kesalahan saat mengirim pesan.";
    }
}
?>