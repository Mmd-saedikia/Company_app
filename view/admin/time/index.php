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

    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
          <span class="app-brand-logo demo">
            <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                fill="#7367F0" />
              <path
                opacity="0.06"
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                fill="#161616" />
              <path
                opacity="0.06"
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                fill="#161616" />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                fill="#7367F0" />
            </svg>
          </span>
          <span class="app-brand-text demo menu-text fw-bold">کیا</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
          <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
          <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
      </div>

      <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item active open">
          <ul class="menu-sub">
            <li class="menu-item active">
              <a href="../dashboard/index.php" class="menu-link">
                <div data-i18n="Analytics">داشبورد</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="../dashboard/dashboards-crm.php" class="menu-link">
                <div data-i18n="CRM">مدیریت ارتباط با مشتری</div>
              </a>
            </li>
            <li class="menu-item active">
              <a href="../dashboard/list.php" class="menu-link">
                <div data-i18n="eCommerce">لیست کارکنان</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="../dashboard/add-user.php" class="menu-link">
                <div data-i18n="Logistics">اضافه کردن کارمند</div>
              </a>
            </li>
            <li class="menu-item active">
              <a href="C:\xampp\htdocs\company_app\view\admin\time\index.php" class="menu-link">
                <div data-i18n="Analytics">ساعت ورودی و خروجی کامندان</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </aside>
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