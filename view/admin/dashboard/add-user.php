<?php
require_once "../../../functions/helpers.php";
require_once "../../../functions/pdo.php";
$employees = $conn->query("SELECT * FROM `employees`")->fetch()
?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="rtl"
  data-theme="theme-default"
  data-assets-path="../../../public/admin/assets/"
  data-template="horizontal-menu-template">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>اینپوت های پایه - فرم ها | Vuexy - قالب مدیریت بوت استرپ</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../../../public/admin/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="../../fonts/yekan/stylesheet.css">

  <!-- Icons -->
  <link rel="stylesheet" href="../../../public/admin/assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="../../../public/admin/assets/vendor/fonts/tabler-icons.css" />
  <link rel="stylesheet" href="../../../public/admin/assets/vendor/fonts/flag-icons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../../../public/admin/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../../../public/admin/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../../../public/admin/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../../../public/admin/assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="../../../public/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../../../public/admin/assets/vendor/libs/typeahead-js/typeahead.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../../../public/admin/assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="../../../public/admin/assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../../../public/admin/assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
      <!-- Navbar -->

      <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="container-xxl">
          <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
            <a href="index.html" class="app-brand-link gap-2">
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
              <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
              <i class="ti ti-x ti-sm align-middle"></i>
            </a>
          </div>

          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="ti ti-menu-2 ti-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Language -->
              <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class="ti ti-language rounded-circle ti-md"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="fa">
                      <span class="align-middle">فارسی</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                      <span class="align-middle">انگلیسی</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                      <span class="align-middle">فرانسوی</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                      <span class="align-middle">آلمانی</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                      <span class="align-middle">پرتغالی</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ Language -->

              <!-- Search -->
              <li class="nav-item navbar-search-wrapper me-2 me-xl-0">
                <a class="nav-link search-toggler" href="javascript:void(0);">
                  <i class="ti ti-search ti-md"></i>
                </a>
              </li>
              <!-- /Search -->

              <!-- Style Switcher -->
              <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class="ti ti-md"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                      <span class="align-middle"><i class="ti ti-sun me-2"></i>روشن</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                      <span class="align-middle"><i class="ti ti-moon me-2"></i>تاریک</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                      <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>سیستم</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- / Style Switcher-->

              <!-- Quick links  -->
              <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                <a
                  class="nav-link dropdown-toggle hide-arrow"
                  href="javascript:void(0);"
                  data-bs-toggle="dropdown"
                  data-bs-auto-close="outside"
                  aria-expanded="false">
                  <i class="ti ti-layout-grid-add ti-md"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0">
                  <div class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h5 class="text-body mb-0 me-auto">میانبرها</h5>
                      <a
                        href="javascript:void(0)"
                        class="dropdown-shortcuts-add text-body"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="افزودن میانبر"><i class="ti ti-sm ti-apps"></i></a>
                    </div>
                  </div>
                  <div class="dropdown-shortcuts-list scrollable-container">
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-calendar fs-4"></i>
                        </span>
                        <a href="app-calendar.html" class="stretched-link">تقویم</a>
                        <small class="text-muted mb-0">قرار ملاقات</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-file-invoice fs-4"></i>
                        </span>
                        <a href="app-invoice-list.html" class="stretched-link">برنامه فاکتور</a>
                        <small class="text-muted mb-0">مدیریت حساب ها</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-employees fs-4"></i>
                        </span>
                        <a href="app-user-list.html" class="stretched-link">برنامه کاربر</a>
                        <small class="text-muted mb-0">مدیریت کاربران</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-lock fs-4"></i>
                        </span>
                        <a href="app-access-roles.html" class="stretched-link"> مدیریت نقش</a>
                        <small class="text-muted mb-0">مجوز</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-chart-bar fs-4"></i>
                        </span>
                        <a href="index.html" class="stretched-link">داشبورد</a>
                        <small class="text-muted mb-0">پروفایل کاربر</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-settings fs-4"></i>
                        </span>
                        <a href="pages-account-settings-account.html" class="stretched-link">تنظیمات</a>
                        <small class="text-muted mb-0"> تنظیمات حساب</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-help fs-4"></i>
                        </span>
                        <a href="pages-faq.html" class="stretched-link">سوالات متداول</a>
                        <small class="text-muted mb-0">سوالات پر تکرار و مقالات</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                          <i class="ti ti-square fs-4"></i>
                        </span>
                        <a href="modal-examples.html" class="stretched-link">مدال ها</a>
                        <small class="text-muted mb-0">پاپ آپ های مفید</small>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Quick links -->

              <!-- Notification -->
              <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                <a
                  class="nav-link dropdown-toggle hide-arrow"
                  href="javascript:void(0);"
                  data-bs-toggle="dropdown"
                  data-bs-auto-close="outside"
                  aria-expanded="false">
                  <i class="ti ti-bell ti-md"></i>
                  <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end py-0">
                  <li class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h5 class="text-body mb-0 me-auto">اعلان</h5>
                      <a
                        href="javascript:void(0)"
                        class="dropdown-notifications-all text-body"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="علامت گذاری همه به عنوان خوانده شده"><i class="ti ti-mail-opened fs-4"></i></a>
                    </div>
                  </li>
                  <li class="dropdown-notifications-list scrollable-container">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../../public/admin/assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">تبریک به سعید🎉</h6>
                            <p class="mb-0">برنده نشان طلای پرفروش ماهانه</p>
                            <small class="text-muted">1 ساعت پیش</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-danger">RM</span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">رضامحمدی </h6>
                            <p class="mb-0">درخواست کانکشن شما را پذیرفت</p>
                            <small class="text-muted">12 ساعت پیش</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../../public/admin/assets/img/avatars/2.png" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">پیام جدید ✉️</h6>
                            <p class="mb-0">شما پیام جدیدی از سارا دارید</p>
                            <small class="text-muted">1 ساعت پیش</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-shopping-cart"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">اووو شما سفارش جدید دارید🛒</h6>
                            <p class="mb-0">ACME شرکت سفارش جدید 57,700,000 تومانی را انجام داد</p>
                            <small class="text-muted">1 روز پیش</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../../public/admin/assets/img/avatars/9.png" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">درخواست تایید شده است 🚀</h6>
                            <p class="mb-0">پروژه ABC شما تایید شده است.</p>
                            <small class="text-muted">2 روز پیش</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-chart-pie"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">گزارش ماهانه تولید شده است</h6>
                            <p class="mb-0">گزارش مالی ماهانه تیر تولید می شود</p>
                            <small class="text-muted">3 روز پیش </small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../../public/admin/assets/img/avatars/5.png" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">ارسال درخواست کانکشن </h6>
                            <p class="mb-0">معین برای شما درخواست کانکشن فرستاد</p>
                            <small class="text-muted">4 روز پیش </small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../../public/admin/assets/img/avatars/6.png" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">پیام جدید از هانیه</h6>
                            <p class="mb-0">شما یک پیام جدید از سمت هانیه دارید</p>
                            <small class="text-muted">5 روز پیش</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-warning"><i class="ti ti-alert-triangle"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">مصرف CPU بالا است</h6>
                            <p class="mb-0">درصد استفاده از CPU در حال حاضر 88.63 درصد است.</p>
                            <small class="text-muted">5 روز پیش</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-menu-footer border-top">
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                      مشاهده تمام اعلان ها
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ Notification -->

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../../../public/admin/assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item  " href="pages-account-settings-account.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../../../public/admin/assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-medium d-block">علی زمانی</span>
                          <small class="text-muted">مدیر </small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-profile-user.html">
                      <i class="ti ti-user-check me-2 ti-sm"></i>
                      <span class="align-middle">پروفایل من </span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item  " href="pages-account-settings-account.html">
                      <i class="ti ti-settings me-2 ti-sm"></i>
                      <span class="align-middle">تنظیمات</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-billing.html">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                        <span class="flex-grow-1 align-middle">صورتحساب</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-faq.html">
                      <i class="ti ti-help me-2 ti-sm"></i>
                      <span class="align-middle">سوالات متداول</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-pricing.html">
                      <i class="ti ti-currency-dollar me-2 ti-sm"></i>
                      <span class="align-middle">قیمت گذاری</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                      <i class="ti ti-logout me-2 ti-sm"></i>
                      <span class="align-middle">خروج</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>

          <!-- Search Small Screens -->
          <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
            <input
              type="text"
              class="form-control search-input border-0"
              placeholder="جستجو..."
              aria-label="Search..." />
            <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
          </div>
        </div>
      </nav>

      <!-- / Navbar -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Menu -->
          <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
            <div class="container-xxl d-flex h-100">
              <ul class="menu-inner">
                <!-- Dashboards -->
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Dashboards">Dashboards</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="index.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
                        <div data-i18n="Analytics">داشبورد</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="dashboards-crm.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
                        <div data-i18n="CRM">CRM</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="list.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-shopping-cart"></i>
                        <div data-i18n="eCommerce">لیست کارمندان</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="add-user.php" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-truck"></i>
                        <div data-i18n="Logistics">اضافه کردن کارمندان</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </aside>
          <!-- / Menu -->

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">فرم ها/</span> اینپوت های پایه</h4>

            <div class="row">
              <form action="<?= Url("controllers/admin/insertController.php") ?>" method="post">
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">ثبت نام کارکنان</h5>
                    <div class="card-body">
                      <div>
                        <label for="defaultFormControlInput" class="form-label">نام کاربری</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          name="username"
                          aria-describedby="defaultFormControlHelp" />
                        <label for="defaultFormControlInput" class="form-label">پسورد</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          name="password"
                          aria-describedby="defaultFormControlHelp" />
                        <label for="defaultFormControlInput" class="form-label">تکرار پسورد</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          name="confpassword"
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
    </div>
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>

  <!-- Drag Target Area To SlideIn Menu On Small Screens -->
  <div class="drag-target"></div>

  <!--/ Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="../../../public/admin/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../../public/admin/assets/vendor/libs/popper/popper.js"></script>
  <script src="../../../public/admin/assets/vendor/js/bootstrap.js"></script>
  <script src="../../../public/admin/assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="../../../public/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../../public/admin/assets/vendor/libs/hammer/hammer.js"></script>
  <script src="../../../public/admin/assets/vendor/libs/i18n/i18n.js"></script>
  <script src="../../../public/admin/assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="../../../public/admin/assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="../../../public/admin/assets/js/main.js"></script>

  <!-- Page JS -->

  <script src="../../../public/admin/assets/js/form-basic-inputs.js"></script>
</body>

</html>