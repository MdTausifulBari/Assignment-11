<?php $__env->startSection('content'); ?>
    
    <?php echo $__env->make('components.Sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="adminContentBar" id="adminContentBar">
        <?php echo $__env->make('components.Topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        <div class="adminContents">
            <div class="row">
                <div class="col-md-3">
                    <div class="newCard text-center m-2">
                        <div class="bg-info py-2 text-white ">
                            <h4>Today, <?php echo e($todayName); ?></h4>
                        </div>
                        <div class="adminBDMSHomeCard d-flex">
                            <div class="adminBDMSHomeCardIcon">
                                <i class="fas fa-money-check-alt"></i>
                            </div>
                            <div class="adminBDMSHomeCardTxt">
                                <div>
                                    <h5>Total Sales</h5>
                                </div>
                                <div>
                                    <h6><?php echo e($todayData); ?> Tk</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="newCard text-center m-2">
                        <div class="bg-info py-2 text-white ">
                            <h4>Yesterday, <?php echo e($yesterdayName); ?></h4>
                        </div>
                        <div class="adminBDMSHomeCard d-flex">
                            <div class="adminBDMSHomeCardIcon">
                                <i class="fas fa-money-check-alt"></i>
                            </div>
                            <div class="adminBDMSHomeCardTxt">
                                <div>
                                    <h5>Total Sales</h5>
                                </div>
                                <div>
                                    <h6><?php echo e($yesterdayData); ?> Tk</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="newCard text-center m-2">
                        <div class="bg-info py-2 text-white ">
                            <h4>This Month, <?php echo e($currentMonthName); ?></h4>
                        </div>
                        <div class="adminBDMSHomeCard d-flex">
                            <div class="adminBDMSHomeCardIcon">
                                <i class="fas fa-money-check-alt"></i>
                            </div>
                            <div class="adminBDMSHomeCardTxt">
                                <div>
                                    <h5>Total Sales</h5>
                                </div>
                                <div>
                                    <h6><?php echo e($currentMonthData); ?> Tk</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="newCard text-center m-2">
                        <div class="bg-info py-2 text-white ">
                            <h4>Last Month, <?php echo e($lastMonthName); ?></h4>
                        </div>
                        <div class="adminBDMSHomeCard d-flex">
                            <div class="adminBDMSHomeCardIcon">
                                <i class="fas fa-money-check-alt"></i>
                            </div>
                            <div class="adminBDMSHomeCardTxt">
                                <div>
                                    <h5>Total Sales</h5>
                                </div>
                                <div>
                                    <h6><?php echo e($lastMonthData); ?> Tk</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php if(session('success')): ?>
        <script>
            swal("Success !", "<?php echo e(session('success')); ?>", "success", {
                button: false,
                // button: "OK",
                timer: 2000,
            })
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mdtau\Downloads\Compressed\module-11-main\resources\views/HomeCard.blade.php ENDPATH**/ ?>