<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام البيانات من النموذج
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // إعداد عنوان البريد الإلكتروني
    $to = "faresalmjoud@gmail.com"; // عنوان بريدك الإلكتروني
    $subject = "New Message from $name"; // عنوان البريد
    $body = "Name: $name\nEmail: $email\nMessage: $message"; // محتوى الرسالة
    $headers = "From: $email"; // المرسل

    // إرسال البريد الإلكتروني
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
