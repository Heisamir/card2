<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container-md">
    <nav class="navbar bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./digital-wallet-logo-design-template-with-pixel-effect-logo-concept-of-credit-card-crypto-wallet-fast-online-payment-free-vector.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                اطلاعات کارت
            </a>
        </div>
    </nav>

    <!-- فرم ارسال اطلاعات -->
    <form action="card_info.php" method="POST">
        <label for="form-select" class="form-label">انتخاب کارت</label>
        <select name="card_choice" class="form-select" aria-label="Default select example">
            <option selected>هیچ کدام</option>
            <option value="1">کارت اول</option>
            <option value="2">کارت دوم</option>
            <option value="3">کارت سوم</option>
        </select>

        <div class="input-group mb-3" dir="ltr">
            <button type="button" class="btn btn-success">درخواست رمز پویا</button>
            <input name="second_password" dir="rtl" type="text" class="form-control" placeholder="ورودرمز">
            <label for="inputPassword" class="col-sm-2 col-form-label" dir="rtl">رمز دوم :</label>
        </div>

        <div class="input-group mb-3">
            <label for="cvv2" class="col-sm-2 col-form-label">شماره شناسایی دوم(cvv2):</label>
            <input name="cvv2" type="text" class="form-control" placeholder="cvv2">
        </div>

        <div class="row">
            <label for="row" class="col-sm-2 col-form-label">تاریخ انقضای کارت :</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">ماه</span>
                    <input name="exp_month" type="text" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text">سال</span>
                    <input name="exp_year" type="text" class="form-control" required>
                </div>
            </div>

            <div class="input-group mb-3" dir="ltr">
                    <span class="input-group-text" id="basic-addon1">
                        <input name="save_info" class="form-check-input" type="checkbox" value="1" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">ذخیره</label>
                    </span>
                <input name="email" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                <label for="row" class="col-sm-2 col-form-label" dir="rtl">آدرس ایمیل (اختیاری) :</label>
            </div>
        </div>

        <div class="form-check" dir="ltr">
            <input name="save_card" class="form-check-input" type="checkbox" value="1" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">ذخیره شماره کارت و تاریخ انقضا در سامانه های پرداخت سامان</label>
        </div>

        <button type="submit" class="btn btn-primary btn-lg">پرداخت</button>
        <button type="reset" class="btn btn-danger btn-lg">انصراف</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
