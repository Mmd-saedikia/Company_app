<?php
require_once "../../../functions/pdo.php";
require_once "../../../functions/helpers.php";
require_once "../layouts/header.php";
$products = $conn->query("SELECT * FROM products INNER JOIN category")->fetchAll();
//  ON products.categary_id = category.id;
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
          <h5 class="card-header">لیست کحصولات</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead class="table-dark">
                <tr>
                  <th>نام محصول</th>
                  <th>قیمت</th>
                  <th>دسته بندی</th>
                  <th>موجودی</th>
                  <th>وضعیت</th>
                  <th>اقدامات</th>
                </tr>
              </thead>
              <?php foreach ($products as $product) { ?>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['category_id'] ?></td>
                    <td><?= $product['count'] ?></td>
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