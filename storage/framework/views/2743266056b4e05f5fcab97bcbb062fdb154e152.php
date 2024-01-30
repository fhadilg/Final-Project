<nav class="navbar navbar-expand-lg bg-green">
    <div class="container">
        <div class="logo-mobile">
            <img src="<?php echo e(asset('image/logoTA.png')); ?>" height=42 class="align-middle">
            <img src="<?php echo e(asset('image/logoBrin.png')); ?>" height=42 class="align-middle" style="margin-left:15px">
            <img src="<?php echo e(asset('image/logoTelkom.png')); ?>" height=42 class="align-middle" style="margin-left:15px">
        </div>
        <div class="logo-desktop">
            <img src="<?php echo e(asset('image/logoTA.png')); ?>" height=42 class="align-middle">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav flex-wrap ms-md-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo e($tittle === 'halamanutama' ? 'active' : ''); ?>" aria-current="page"
                        href="/"><b>HALAMAN UTAMA</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e($tittle === 'hariini' ? 'active' : ''); ?>" href="hariini"><b>HARI INI</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e($tittle === 'tentang' ? 'active' : ''); ?>" href="tentang"><b>TENTANG</b></a>
                </li>
                <li class="nav-item logo-desktop">
                    <img src="<?php echo e(asset('image/logoBrin.png')); ?>" height=42 class="align-middle"
                        style="margin-left:15px">
                </li>
                <li class="nav-item logo-desktop">
                    <img src="<?php echo e(asset('image/logoTelkom.png')); ?>" height=42 class="align-middle"
                        style="margin-left:15px">
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\cd\ta\resources\views/partial/navbar.blade.php ENDPATH**/ ?>