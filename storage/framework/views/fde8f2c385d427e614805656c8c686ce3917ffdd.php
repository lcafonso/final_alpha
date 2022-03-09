<!-- Bootstrap core JavaScript -->
<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Custom scripts for this template -->


<script src="<?php echo e(asset('js/custom.js')); ?>"></script>



<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<?php /**PATH /var/www/digitalandscape.esa.ipb.pt/resources/views/admin/partials/footer-scripts.blade.php ENDPATH**/ ?>