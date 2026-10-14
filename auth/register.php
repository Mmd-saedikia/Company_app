<!doctype html>
<html lang="en">
<?php
require_once "../functions/helpers.php";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>رجیستر</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
</head>

<body class="auth-bg d-flex align-items-center justify-content-center">
    <div class="auth-card card border-0 shadow-lg p-4">
        <div class="text-center mb-3">
            <i class="bi bi-person-plus display-6 text-success"></i>
            <div class="fw-bold fs-5 mt-2">ساخت اکانت جدید</div>
        </div>
        <form action="<?= Url("controllers/auth/registercontroller.php") ?>" method="post">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">نام کاربر</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">کلمه عبور</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="col-12">
                    <label class="form-label">تکرار کلمه عبور</label>
                    <input type="password" name="confpassword" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success w-100 mt-3">Sign up</button>
        </form>
        <div class="text-center mt-3 small">
            Already have an account? <a href="./login.php" class="text-decoration-none">Sign in</a>
        </div>
        <div class="text-center mt-2 small">
            Made by Mohammad Rezaei — <a href="https://MOHAMMAD-REZAEI.IR" target="_blank" rel="noopener"
                class="text-decoration-none">MOHAMMAD-REZAEI.IR</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>