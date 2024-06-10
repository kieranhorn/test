<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $topic = $_POST['topic'];
    $fullName = $_POST['full-name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $message = $_POST['message'];

    $to = "info@egeliboya.com";
    $subject = $topic;
    $body = "Ad-Soyad: $fullName\n\nŞirket ismi: $company\n\nMesaj: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Mesajınız başarıyla gönderildi.</p>";
    } else {
        echo "<p>Mesajınız gönderilirken bir hata oluştu.</p>";
    }
}
?>