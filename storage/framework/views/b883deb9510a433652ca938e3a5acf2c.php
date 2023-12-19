<div class="adminSidebar" id="adminSidebar">
    <div class="adminSidebarOptions">
        <div class="adminLogo">
            <div class="text-center text-white my-3">
                <a class="logoLink" href="#"><img src="<?php echo e(asset('img/user.png')); ?>" alt="" /></a>
                <div class="sideTitle">
                    <h6>Tausiful Bari</h6>
                    <h6>Owner</h6>
                    <h6>Dhaka Store</h6>
                    <hr />
                </div>
            </div>
        </div>
        <ul class="navSidebar">
            <li class="navSbarItem">
                <a class="navSbarLink  <?php echo e('/' == request()->path() ? 'active' : ''); ?>" href="<?php echo e(url('/')); ?>">
                    <i class="fas fa-th-large"></i>
                    <span class="sideTitle">Home</span>
                </a>
            </li>
            <li class="navSbarItem">
                <?php
                    use Illuminate\Support\Str;
                    $isProduct = Str::startsWith(request()->path(), 'edit-product/');
                    $isTransaction = Str::startsWith(request()->path(), 'transaction-details/');

                ?>
                <a class="navSbarLink  <?php echo e('product' == request()->path() || 'new-product' == request()->path() || $isProduct ? 'active' : ''); ?>"
                    href="<?php echo e(url('product')); ?>">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="sideTitle">Product</span>
                </a>
            </li>
            <li class="navSbarItem">
                <a class="navSbarLink <?php echo e('transactions' == request()->path() || 'make-transaction' == request()->path() || $isTransaction ? 'active' : ''); ?>"
                    href="<?php echo e(url('transactions')); ?>">
                    <i class="fas fa-chart-bar"></i>
                    <span class="sideTitle">Transactions</span>
                </a>
            </li>
            <li class="navSbarItem">
                <a class="navSbarLink <?php echo e('customer' == request()->path() ? 'active' : ''); ?>"
                    href="<?php echo e(url('customer')); ?>">
                    <i class="fas fa-house-user"></i>
                    <span class="sideTitle">Customers</span>
                </a>
            </li>

        </ul>
    </div>
</div>
<?php /**PATH C:\Users\mdtau\Downloads\Compressed\module-11-main\resources\views/components/Sidebar.blade.php ENDPATH**/ ?>