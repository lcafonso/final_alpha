<!-- Navigation -->
<nav class="navbar navbar-dark navbar-expand-md fixed-top">
    <div class="container-fluid">
        <!-- Logotipo -->
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(asset('img/logo_b1.png')); ?>" alt="<?php echo e(config('app.name', 'DigitalLANDSCAPE')); ?>" >
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('gallery')); ?>">
                        Fotografias
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('contacts')); ?>">
                        Contatos
                    </a>
                </li>


                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">

                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                  </li>
                   
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="<?php echo e(asset(Auth::user()->profile->file)); ?>" style="width:40px; height:40px; position:absolute; top:0px; right:-10px; border-radius:50%">
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
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>
</div>
<?php /**PATH /var/www/digitalandscape.esa.ipb.pt/resources/views/layouts/partials/nav.blade.php ENDPATH**/ ?>