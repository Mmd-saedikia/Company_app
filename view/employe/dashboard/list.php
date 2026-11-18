<?php
require_once "../../../functions/pdo.php";
require_once "../../../functions/helpers.php";
require_once "../layouts/header.php";
$users = $conn->query("SELECT * FROM users INNER JOIN employees")->fetchAll()
?>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Menu -->

    <?php require_once "./layouts/sidebar.php"; ?>
    <!-- / Menu -->

    <!-- Layout container -->
    <div class="layout-page">
      <!-- Navbar -->

      <?php require_once "./layouts/navbar.php"; ?>


      <!-- / Navbar -->

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="py-3 mb-4"><span class="text-muted fw-light">جدول /</span> جداول پایه</h4>

          <!-- Bootstrap Table with Header - Dark -->
          <div class="card">
            <h5 class="card-header">هد جدول تاریک</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th>نام مشتری</th>
                    <th>نام خانوادگی مشتری</th>
                    <th>نام کاربری کارمند</th>
                    <th>وضعیت</th>
                    <th>اقدامات</th>
                  </tr>
                </thead>
                <?php foreach ($users as $user) { ?>
                  <tbody class="table-border-bottom-0">
                    <tr>
                      <td><?= $user['firstname'] ?></td>
                      <td><?= $user['lastname'] ?></td>
                      <td><?= $user['username'] ?></td>
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
                            <a class="dropdown-item" href="<?= Url("view/employe/dashboard/update.php?id=") . $user['id'] ?>"><i class="ti ti-pencil me-1"></i> ویرایش</a>
                            <a class="dropdown-item" href="<?= Url("controllers/employe/deleteController.php?id=") . $user['id'] ?> "><i class="ti ti-trash me-1"></i> حذف</a>
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
<?php require_once "./layouts/footer.php"; ?>