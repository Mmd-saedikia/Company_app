<?php
include_once "../../layouts/header.php";
include_once "../../layouts/sidebar.php";
include_once "../../layouts/navbar.php";
?>
<!-- / Menu -->
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Bootstrap Table with Header - Dark -->
        <div class="row">
            <form class="browser-default-validation" method="post" action="<?= Url("controllers/employe/checktime.php") ?>">
                <div class="mb-3">
                    <label class="form-label" for="basic-default-name">ساعت ورودی</label>
                    <input
                        type="text"
                        class="form-control"
                        id="basic-default-name"
                        name="start"
                        placeholder="ساعت ورودی..."
                        required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-name">ساعت خروجی</label>
                    <input
                        type="text"
                        class="form-control"
                        id="basic-default-name"
                        name="end"
                        placeholder="ساعت خروجی..."
                        required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-name">تاریخ روز</label>
                    <input
                        type="date"
                        class="form-control"
                        id="basic-default-name"
                        name="date"
                        placeholder="تاریخ روز..."
                        required />
                </div>
                <input type="hidden" value="<?= $_SESSION['employe_id'] ?>" name="employe_id">
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">ارسال</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Content -->

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
include_once "../../layouts/footer.php";
?>