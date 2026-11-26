<?php
require_once "../../../functions/pdo.php";
require_once "../../../functions/helpers.php";
require_once "../layouts/header.php";
$employees = $conn->query("SELECT * FROM `employees`")->fetchAll()
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
          <h5 class="card-header">لیست کارمندان</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead class="table-dark">
                <tr>
                  <th>نام کارکن</th>
                  <th>وضعیت</th>
                  <th>اقدامات</th>
                </tr>
              </thead>

              <tbody class="table-border-bottom-0">
                <?php foreach ($employees as $employe) { ?>
                  <tr>
                    <td><?= $employe['username'] ?></td>
                    <?php if ($employe['status'] == 1) { ?>
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
                          <a class="dropdown-item" href="<?= Url("view/admin/dashboard/update.php?id=") . $employe['id'] ?>"><i class="ti ti-pencil me-1"></i> ویرایش</a>
                          <a class="dropdown-item delete-btn" href="" data-bs-toggle="modal" data-bs-target="#deleteModal" data-url="<?= Url("controllers/admin/deleteController.php?id=") . $employe['id'] ?>"><i class="ti ti-trash me-1"></i> حذف</a>
                          <a class="dropdown-item" href="<?= Url("controllers/admin/status-employees.php?id=") . $employe['id'] ?> "><i class="ti ti-power me-1"></i> تغییر وضعیت</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php  } ?>
              </tbody>

            </table>
          </div>
        </div>
      </div>
      <!-- / Content -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel">تأیید حذف</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              آیا مطمئن هستید که می‌خواهید این کارمند را حذف کنید؟
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">نه</button>
              <a href="#" id="confirmDelete" class="btn btn-danger">بله، حذف کن</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php require_once "../layouts/footer.php"; ?>