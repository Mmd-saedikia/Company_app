<?php
include_once "../layouts/header.php";
require_once "../../../functions/pdo.php";
require_once "../../../functions/helpers.php";
$users = $conn->query("SELECT * FROM users INNER JOIN employees")->fetchAll()
?>

<!-- Menu -->


<?php
include_once "../layouts/sidebar.php";
include_once "../layouts/navbar.php";
?>
<!-- / Menu -->
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
      <h5 class="card-header">لیست مشتری ها</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th>نام مشتری</th>
              <th>نام خانوادگی</th>
              <th>تلفن</th>
              <th>...</th>
              <th>وضعیت</th>
              <th>اقدامات</th>
            </tr>
          </thead>

          <tbody class="table-border-bottom-0">
            <?php foreach ($users as $user) { ?>
              <tr>
                <td><?= $user['firstname'] ?></td>
                <td><?= $user['lastname'] ?></td>
                <td><?= $user['phone'] ?></td>
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
                      <a class="dropdown-item delete-btn" href="" data-bs-toggle="modal" data-bs-target="#deleteModal" data-url="<?= Url("controllers/employe/deleteController.php?id=") . $user['id'] ?>"><i class="ti ti-trash me-1"></i> حذف</a>
                      <a class="dropdown-item" href="<?= Url("controllers/employe/status-users.php?id=") . $user['id'] ?> "><i class="ti ti-power me-1"></i> تغییر وضعیت</a>
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
        آیا مطمئن هستید که می‌خواهید این مشتری را حذف کنید؟
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">نه</button>
        <a href="#" id="confirmDelete" class="btn btn-danger">بله، حذف کن</a>
      </div>
    </div>
  </div>
</div>
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
        ,ساخته شده با ❤️ توسط <a href="https://pixinvent.com" target="_blank" class="fw-medium">Arvand</a>
      </div>
      <div class="d-none d-lg-inline-block">
        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">لایسنس</a>
        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">قالب های بیشتر</a>

        <a
          href="https://demos.pixinvent.com/vuexy-html-employe-template/documentation/"
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
<!-- Content wrapper -->

<?php
include_once "../layouts/footer.php";
?>