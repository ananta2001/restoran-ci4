</body>
<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  
<footer class="page-footer font-small">
    <div class="footer-copyright text-center py-3">
        @ 2020 Copyright
    </div>
</footer>

</html>