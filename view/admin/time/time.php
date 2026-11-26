<?php
require_once "../../../functions/pdo.php";
require_once "../../../functions/helpers.php";
require_once "../layouts/header.php";
$id = $_GET['id'];
$time_is = $conn->query("SELECT * FROM employees INNER JOIN check_times ON employees.id = $id")->fetchAll();
?>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Menu -->

    <?php require_once "../layouts/sidebar.php"; ?>
    <!-- / Menu -->

    <!-- Layout container -->
    <!-- <div class="layout-page"> -->
    <!-- Navbar -->

    <?php require_once "../layouts/navbar.php"; ?>


    <!-- / Navbar -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
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
        <!-- Bootstrap Table with Header - Dark -->
        <div class="card">
          <h5 class="card-header">لیست ورود و خروج کامند</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>نام کاربری کارمند</th>
                  <th>تاریخ ورود</th>
                  <th>تاریخ خروج</th>
                  <th>تاریخ تعیین شده</th>
                  <th>تاریخ ثبت شده(در دیتا بیس)</th>
                </tr>
              </thead>
              <?php foreach ($time_is as $time) { ?>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td><?= $time['id'] ?></td>
                    <td><?= $time['username'] ?></td>
                    <td><?= $time['start'] ?></td>
                    <td><?= $time['end'] ?></td>
                    <td><?= $time['date'] ?></td>
                    <td><?= $time['created_at'] ?></td>
                  </tr>
                </tbody>
              <?php  } ?>
            </table>
          </div>
        </div>
      </div>
      <!-- / Content -->

      <!-- Footer -->
      <?php require_once "../layouts/footer.php"; ?>