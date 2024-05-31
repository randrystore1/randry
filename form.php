<?php
// التقاط البيانات المدخلة من النموذج
$firstname = $_POST['firstname'];
$city = $_POST['city'];
$phone = $_POST['phone'];
// إرسال البريد الإلكتروني
$to = 'agdyuhg009y@gmail.com'; // بريد المستلم
$subject = 'نموذج جديد من الموقع'; // موضوع البريد
$message = "الاسم: $firstname\nالمدينة: $city\nرقم الجوال: $phone"; // المحتوى
$headers = 'From: agdyuhg009h@gmail.com'; // بريد المرسل
// إرسال البريد
mail($to, $subject, $message, $headers);
// إعادة التوجيه إلى صفحة شكر بعد الإرسال
header('Location: thank_you.html');
exit();
?>
