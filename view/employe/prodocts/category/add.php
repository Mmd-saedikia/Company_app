<?php
require_once "../../../../functions/helpers.php";
require_once "../../../../functions/pdo.php";
$users = $conn->query("SELECT * FROM `category`")->fetch();
require_once "../../layouts/header.php";
require_once "../../layouts/navbar.php";
?>
<!-- Layout container -->
<!-- <div class="layout-page"> -->
<!-- Content wrapper -->
<!-- <div class="content-wrapper"> -->
<!-- Menu -->
<?php require_once "../../layouts/sidebar.php"; ?>
<!-- / Menu -->

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
  <?php if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="ti ti-check me-1"></i>
      <?= $_SESSION['success'] ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php } ?>
  <?php if (isset($_SESSION['error'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="ti ti-alert-circle me-1"></i>
      <?= $_SESSION['error'] ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php } ?>
  <div class="row">
    <form action="<?= Url("controllers/employe/category/insertcontroller.php") ?>" method="post">
      <div class="col-md-6">
        <div class="card mb-4">
          <h5 class="card-header">فرم اضافه کردن دسته بندی</h5>
          <div class="card-body">
            <div>
              <label for="defaultFormControlInput" class="form-label">نام</label>
              <input
                type="text"
                class="form-control"
                id="defaultFormControlInput"
                name="name"
                aria-describedby="defaultFormControlHelp" />
            </div>
            <br>
            <button class="btn btn-info">ارسال</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!--/ Content -->

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
    <div
      class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
      <div>
        ©
        <script>
          document.write(new Date().getFullYear());
        </script>
        ,ساخته شده با ❤️ توسط <a href="https://pixinvent.com" target="_blank" class="fw-medium">Pixinvent</a>
      </div>
      <div class="d-none d-lg-inline-block">
        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">لایسنس</a>
        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">قالب های بیشتر</a>

        <a
          href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
          target="_blank"
          class="footer-link me-4">داکیومنتیشن</a>

        <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">پشتیبانی</a>
      </div>
    </div>
  </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!--/ Content wrapper -->
</div>

<!--/ Layout container -->
<?php require_once "../../layouts/header.php"; ?>