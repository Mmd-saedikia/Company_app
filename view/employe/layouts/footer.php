</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="<?= Assets("admin/assets/vendor/libs/jquery/jquery.js") ?>"></script>
<script src="<?= Assets("admin/assets/vendor/libs/popper/popper.js") ?>"></script>
<script src="<?= Assets("admin/assets/vendor/js/bootstrap.js") ?>"></script>
<script src="<?= Assets("admin/assets/vendor/libs/node-waves/node-waves.js") ?>"></script>
<script src="<?= Assets("admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js") ?>"></script>
<script src="<?= Assets("admin/assets/vendor/libs/hammer/hammer.js") ?>"></script>
<script src="<?= Assets("admin/assets/vendor/libs/i18n/i18n.js") ?>"></script>
<script src="<?= Assets("admin/assets/vendor/libs/typeahead-js/typeahead.js") ?>"></script>
<script src="<?= Assets("admin/assets/vendor/js/menu.js") ?>"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var deleteModal = document.getElementById('deleteModal');
    deleteModal.addEventListener('show.bs.modal', function(event) {
      var button = event.relatedTarget;
      var url = button.getAttribute('data-url');
      var confirmBtn = document.getElementById('confirmDelete');
      confirmBtn.setAttribute('href', url);
    });
  });
</script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= Assets("admin/assets/vendor/libs/apex-charts/apexcharts.js") ?>"></script>
<script src="<?= Assets("admin/assets/vendor/libs/swiper/swiper.js") ?>"></script>
<script src="<?= Assets("admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js") ?>"></script>

<!-- Main JS -->
<script src="<?= Assets("admin/assets/js/main.js") ?>"></script>

<!-- Page JS -->
<script src="<?= Assets("admin/assets/js/dashboards-analytics.js") ?>"></script>
</body>

</html>