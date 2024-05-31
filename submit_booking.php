<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $city = $_POST['city'];
    $area = $_POST['area'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];

    $to = 'agdzyuihg009y@gmail.com'; // بريدك الإلكتروني
    $subject = 'طلب حجز جديد';
    $message = "الاسم: $name\n";
    $message .= "المحافظة: $city\n";
    $message .= "المنطقة: $area\n";
    $message .= "قرب نقطة دالة: $location\n";
    $message .= "رقم الجوال: $phone\n";

    // إرسال البريد الإلكتروني
    mail($to, $subject, $message);

    // إعادة توجيه المستخدم إلى الصفحة الأولى
    header("Location: index.html");
    exit;
}
?>
