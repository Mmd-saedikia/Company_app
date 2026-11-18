<?php
require_once "../../../functions/pdo.php";
require_once "../../../functions/helpers.php";
require_once "../layouts/header.php";
$category = $conn->query("SELECT * FROM `category`")->fetchAll();
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

        <!-- Bootstrap Table with Header - Dark -->
        <div class="card">
          <h5 class="card-header">لیست ورود و خروجی کارمندان</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead class="table-dark">
                <tr>
                  <th>نام</th>
                  <th>وضعیت</th>
                  <th>اقدامات</th>
                </tr>
              </thead>
              <?php foreach ($category as $product) { ?>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td><?= $product['name'] ?></td>
                    <?php if ($product['status'] == 1) { ?>
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
                          <a class="dropdown-item" href="<?= Url("view/employe/prodoct/update.php?id=") . $product['id'] ?>"><i class="ti ti-pencil me-1"></i>ادیت</a>
                          <a class="dropdown-item" href="<?= Url("controllers/employe/prodoct/deletecontroller.php?id=") . $product['id'] ?>"><i class="ti ti-pencil me-1"></i>حذف</a>
                          <a class="dropdown-item" href="<?= Url("controllers/employe/prodoct/status-prodoct.php?id=") . $product['id'] ?> "><i class="ti ti-power me-1"></i> تغییر وضعیت</a>
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