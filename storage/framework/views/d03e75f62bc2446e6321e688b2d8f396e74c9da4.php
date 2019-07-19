<!-- Bootstrap core JavaScript -->
<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo e(asset('js/clean-blog.min.js')); ?>"></script>

<script src="<?php echo e(asset('js/custom.js')); ?>"></script>

<script>

    $(function() {
        $(window).scroll(function(){
            if ($(this).scrollTop() > 80) {
                $(".navbar .navbar-brand img").attr("src","<?php echo e(asset('img/logo_a1.png')); ?>");
            } else {
                $(".navbar .navbar-brand img").attr("src","<?php echo e(asset('img/logo_b1.png')); ?>");

            };
        });
    });


</script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/partials/footer-scripts.blade.php ENDPATH**/ ?>