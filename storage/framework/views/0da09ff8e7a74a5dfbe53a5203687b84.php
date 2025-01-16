<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Scriptology</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('shop.index')); ?>">Shop</a>
                    </li>
                </ul>
                <form class="d-flex ms-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <a href="<?php echo e(route('shop.cart')); ?>" class="btn btn-primary ms-3">
                    <i class="bi bi-cart"></i>
                </a>
                       
                <?php if(auth()->guard()->check()): ?>
                    <!-- Jika user sudah login -->
                    <div class="dropdown ms-3">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?>

                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown"> <!-- Added dropdown-menu-end here -->
                            <?php if(Auth::user()->is_admin): ?>
                                <li><a class="dropdown-item" href="<?php echo e(route('admin.dashboard')); ?>">Admin Dashboard</a></li>
                            <?php else: ?>
                                <li><a class="dropdown-item" href="<?php echo e(route('profile')); ?>">Profile</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('password.change')); ?>">Change Password</a></li>
                            <?php endif; ?>
                            <li>
                                <form action="<?php echo e(route('logout')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                <?php else: ?>
                    <!-- Jika user belum login -->
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-primary ms-3">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header><?php /**PATH C:\xampp\htdocs\tokobuku3\resources\views/partials/header.blade.php ENDPATH**/ ?>