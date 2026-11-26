<?php
require_once "../../../functions/pdo.php";
require_once "../../../functions/helpers.php";
require_once "../layouts/header.php";
$users = $conn->query("SELECT * FROM employees")->fetchAll();
?>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Menu -->
    <!-- Menu -->

    <?php require_once "../layouts/sidebar.php"; ?>

    <!-- / Menu -->

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
          <h5 class="card-header">لیست ورود و خروجی کارمندان</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>نام کاربری کارمند</th>
                  <th>تاریخ ساخت اکانت</th>
                  <th>وضعیت</th>
                  <th>اقدامات</th>
                </tr>
              </thead>
              <?php foreach ($users as $user) { ?>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['created_at'] ?></td>
                    <?php if ($user['status'] == 1) { ?>
                      <td><span class="badge bg-label-primary me-1">فعال</span></td>
                    <?php
                    } else { ?>
                      <td><span class="badge bg-label-danger me-1">غیرفعال</span></td>
                    <?php } ?>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="ti ti-dots-vertical"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?= Url("view/admin/time/time.php?id=") . $user['id'] ?>"><i class="ti ti-pencil me-1"></i>جزئیات</a>
                          <a class="dropdown-item" href="<?= Url("controllers/employe/status-users.php?id=") . $user['id'] ?> "><i class="ti ti-power me-1"></i> تغییر وضعیت</a>
                        </div>
                      </div>
                    </td>
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