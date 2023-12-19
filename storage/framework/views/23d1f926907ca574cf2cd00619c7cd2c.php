<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <?php echo $__env->make('components.Sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="adminContentBar" id="adminContentBar">
        <?php echo $__env->make('components.Topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        


        <div class="container mb-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex">

                        <div class="my-3 ">
                            <a class="btn btn-success" href="<?php echo e(url('make-transaction')); ?>">

                                <i class="fas fa-money-check-alt me-2"></i>
                                <span> Sell Product </span>
                            </a>
                        </div>

                    </div>

                    <hr>
                    <h5>All Sold Products List</h5>
                    <hr>
                    <table id="example" data-order='[[ 3, "desc" ]]' class="table table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Total Price</th>
                                <th>Sold Quantity</th>
                                <th>Sell Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($transaction->name); ?></td>
                                    <td><?php echo e($transaction->total_price); ?> Tk</td>
                                    <td><?php echo e($transaction->sell_quantity); ?> <?php echo e($transaction->unit); ?></td>
                                    <td><?php echo e($transaction->created_at); ?></td>
                                    <td>
                                        <a class=" btn btn-secondary"
                                            href="<?php echo e(url('transaction-details/' . $transaction->id)); ?>">View</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
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
    <?php elseif(session('error')): ?>
        <script>
            swal("Error !", "<?php echo e(session('error')); ?>", "error", {
                button: false,
                // button: "OK",
                timer: 3000,
            })
        </script>
    <?php else: ?>
        <div></div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="js/jquery-3.7.0.js"></script>
    <script src="js/dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>

    <script>
        new DataTable("#example", {
            scrollX: true,
            scrollCollapse: true,
            scrollY: "50vh",
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mdtau\Downloads\Compressed\module-11-main\resources\views/Transaction.blade.php ENDPATH**/ ?>