<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dashboard || Store Management Sytem App</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <script src="<?php echo e(asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js')); ?>"></script>

    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">

</head>

<body class="bodyStyle">

    <div class="loginPage">
        <div class="overlay"></div>
        <div class="container-fluid col-md-6">
            <div class="loginForm">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="loginCard">
                            <h3 class="text-info text-uppercase p-2">Store Management System</h3>
                            <div class="mobileLogo">
                                <img src="<?php echo e(asset('')); ?>" alt="" srcset="">
                            </div>
                            <div class="loginLogo">
                                <img src="<?php echo e(asset('img/user.png')); ?>" alt="" srcset="">
                                <h5 class="text-white text-uppercase">User Login</h5>
                            </div>
                            
                            <div id="adminForm">
                                <form action="<?php echo e(url('/login')); ?>" class="loginForm" id="" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="text" name="username" class="form-control text-center"
                                        id="" placeholder="Enter username" required>
                                    <input type="password" name="password" class="form-control text-center"
                                        id="" placeholder="Enter password" required>

                                    <input class="btn btn-login" name="submit" type="submit" value="Login">
                                </form>
                            </div>
                            
                            <div>
                                <p class=" text-light">Don't have account ?</p>
                                <a class=" btn btn-success" href="<?php echo e(url('registration')); ?>">Create New Account</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
    <?php if(session('success')): ?>
        <script>
            swal("Success !", "<?php echo e(session('success')); ?>", "success", {
                button: false,
                // button: "OK",
                timer: 3000,
            })
        </script>
    <?php elseif(session('error')): ?>
        <script>
            swal("Error !", "<?php echo e(session('error')); ?>", "error", {
                button: false,
                button: "OK",
                // timer: 3000,
            })
        </script>
    <?php else: ?>
        <div></div>
    <?php endif; ?>

    <script type="text/javascript" src="<?php echo e(asset('js/jquery-3.7.0.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\Users\mdtau\Downloads\Compressed\module-11-main\resources\views/Login.blade.php ENDPATH**/ ?>