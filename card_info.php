<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // دریافت داده‌های ارسال‌شده از فرم
    $card_choice = $_POST['card_choice'];
    $second_password = $_POST['second_password'];
    $cvv2 = $_POST['cvv2'];
    $exp_month = $_POST['exp_month'];
    $exp_year = $_POST['exp_year'];
    $email = isset($_POST['email']) ? $_POST['email'] : 'وارد نشده';
    $save_info = isset($_POST['save_info']) ? 'بله' : 'خیر';
    $save_card = isset($_POST['save_card']) ? 'بله' : 'خیر';
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>نتیجه پرداخت</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-md mt-5">
    <h1>اطلاعات وارد شده</h1>
    <ul class="list-group">
        <li class="list-group-item">کارت انتخاب شده: <?php echo $card_choice; ?></li>
        <li class="list-group-item">رمز دوم: <?php echo $second_password; ?></li>
        <li class="list-group-item">CVV2: <?php echo $cvv2; ?></li>
        <li class="list-group-item">تاریخ انقضا: <?php echo $exp_month . '/' . $exp_year; ?></li>
        <li class="list-group-item">آدرس ایمیل: <?php echo $email; ?></li>
        <li class="list-group-item">ذخیره اطلاعات: <?php echo $save_info; ?></li>
        <li class="list-group-item">ذخیره شماره کارت: <?php echo $save_card; ?></li>
    </ul>
</div>
</body>
</html>
