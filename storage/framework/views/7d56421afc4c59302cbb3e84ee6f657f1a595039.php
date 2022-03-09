<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-secondary" id="menu-toggle">
        <i class="fas fa-bars"></i>
    </button>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item dropdown">

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <img src="<?php echo e(asset(Auth::user()->profile->file)); ?>" style="width:40px; height:40px; position:absolute; top:0px; left:-35px; border-radius:50%">
                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <?php if( Auth::user()->profile->role_id == 1  ): ?>
                        <a class="dropdown-item" href="<?php echo e(route('admin.index')); ?>">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                    <?php endif; ?>
                    <a class="dropdown-item" href="<?php echo e(route('adminprofile.index')); ?>">
                        <i class="far fa-address-card">  </i>
                        Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off">  </i>
                        <?php echo e(__('Logout')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>


            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('admin.index')); ?>">
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/')); ?>">
                    Home
                </a>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH /var/www/digitalandscape.esa.ipb.pt/resources/views/admin/partials/nav.blade.php ENDPATH**/ ?>