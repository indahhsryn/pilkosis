
<!-- /.content-wrapper -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
<footer class="main-footer">
  <div class="float-right d-none d-sm-inline">
    PILKOSIS
  </div>
  <strong>Copyright &copy; KKSI 2021 <a href="">SMENZA</a>.</strong>
</footer>
</div>
<script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url()?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
<script src="<?= base_url() ?>/assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>/assets/js/myscript.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#table1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  let autologout = new Date();
  autologout.setSeconds(autologout.getSeconds() + 300);
  autologout = new Date(autologout);

  let int_autologout = setInterval(function() {
    let now = new Date();
    if (now > autologout) {
      window.location.assign("<?= base_url('/Login/logout') ?>");
      clearInterval(int_autologout);
    }
  }, 300);

  $('body').on('click', function() {
    autologout = new Date();
    autologout.setSeconds(autologout.getSeconds() + 300);
    autologout = new Date(autologout);
    console.log(autologout)
  });

  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  })
</script>
</body>

</html>



