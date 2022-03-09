<?php $__env->startSection('head'); ?>
    <style>
        :root {
            --input-padding-x: 1.5rem;
            --input-padding-y: .75rem;
        }
        .card-signin {
            border: 0;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
        }

        .card-signin .card-title {
            margin-bottom: 2rem;
            font-weight: 300;
            font-size: 1.5rem;
        }

        .card-signin .card-body {
            padding: 2rem;
        }

        .form-signin {
            width: 100%;
        }

        .form-signin .btn {
            font-size: 80%;
            border-radius: 5rem;
            letter-spacing: .1rem;
            font-weight: bold;
            padding: 1rem;
            transition: all 0.2s;
        }

        .form-label-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-label-group input {
            height: auto;
            border-radius: 2rem;
        }

        .form-label-group>input,
        .form-label-group>label {
            padding: var(--input-padding-y) var(--input-padding-x);
        }

        .form-label-group>label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0;
            /* Override default `<label>` margin */
            line-height: 1.5;
            color: #495057;
            border: 1px solid transparent;
            border-radius: .25rem;
            transition: all .1s ease-in-out;
        }

        .form-label-group input::-webkit-input-placeholder {
            color: transparent;
        }

        .form-label-group input:-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-moz-placeholder {
            color: transparent;
        }

        .form-label-group input::placeholder {
            color: transparent;
        }

        .form-label-group input:not(:placeholder-shown) {
            padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
            padding-bottom: calc(var(--input-padding-y) / 3);
        }

        .form-label-group input:not(:placeholder-shown)~label {
            padding-top: calc(var(--input-padding-y) / 3);
            padding-bottom: calc(var(--input-padding-y) / 3);
            font-size: 12px;
            color: #777;
        }

        .btn-google {
            color: white;
            background-color: #ea4335;
        }

        .btn-facebook {
            color: white;
            background-color: #3b5998;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 20%;
            height: auto
        }

        /* Fallback for Edge
        -------------------------------------------------- */

        @supports (-ms-ime-align: auto) {
            .form-label-group>label {
                display: none;
            }
            .form-label-group input::-ms-input-placeholder {
                color: #777;
            }
        }

        /* Fallback for IE
        -------------------------------------------------- */

        @media  all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .form-label-group>label {
                display: none;
            }
            .form-label-group input:-ms-input-placeholder {
                color: #777;
            }
        }

    </style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">

                        <form  method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>

                            <a  href="<?php echo e(url('/')); ?>">
                                <img class="center" src="<?php echo e(asset('img/logo_a1.png')); ?>" alt="<?php echo e(config('app.name', 'DigitalLANDSCAPE')); ?>" >
                            </a>
                            <h5 class="card-title text-center">Login</h5>


                            <div class="form-label-group">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                                <label for="email"><?php echo e(__('E-Mail Address')); ?></label>
                            </div>

                            <div class="form-label-group">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                                <label for="password"><?php echo e(__('Password')); ?></label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <label class="custom-control-label" for="remember">
                                    <?php echo e(__('Remember Me')); ?>

                                </label>
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase">
                                <?php echo e(__('Login')); ?>

                            </button>
                            <hr class="my-4">
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4 text-right">


                                    <?php if(Route::has('password.request')): ?>
                                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                            <?php echo e(__('Recuperar Palavra Passe?')); ?>

                                        </a>
                                    <?php endif; ?>
                                    <?php if(Route::has('register')): ?>
                                            <a class="btn btn-link" href="<?php echo e(route('register')); ?>">
                                                <?php echo e(__('Novo Registro?')); ?>

                                            </a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.extra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/digitalandscape.esa.ipb.pt/resources/views/auth/login.blade.php ENDPATH**/ ?>