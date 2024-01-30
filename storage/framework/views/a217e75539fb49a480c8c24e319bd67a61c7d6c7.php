<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <title>TA</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar2 navbar-fluid">
       <div class="container">
            <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block">
                    <!-- hidden spacer to center brand on mobile --></span>
                <a class="navbar-brand d-none d-lg-inline-block" href="#">
                    <img src="<?php echo e(asset('image/logoTA.png')); ?>" width="120" alt="logo">
                <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
                </a>
                <div class="w-100 text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <br>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                <ul class="navbar-nav ms-auto flex-nowrap">
                    &nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        <img src="<?php echo e(asset('image/logoBrin.png')); ?>" width="49" alt="logo">
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        <img src="<?php echo e(asset('image/logoTelkom.png')); ?>" width="35" alt="logo">
                        </li>
                    
                </ul>
            </div>
       </div>
    </nav>
    <br>
    <div class="container">
    </div>
    <br>
    <div class="container">
        <div class="thumblogin">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Username">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Password">
        </div>
        </div>
    </div>
    <br>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body><?php /**PATH D:\cd\ta\resources\views/loginadmin.blade.php ENDPATH**/ ?>