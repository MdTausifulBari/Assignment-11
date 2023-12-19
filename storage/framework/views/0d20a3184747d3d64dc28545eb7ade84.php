<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <?php echo $__env->make('components.Sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="adminContentBar" id="adminContentBar">
        <?php echo $__env->make('components.Topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-end">
                        <div class="my-3 me-3">
                            <a class="btn btn-primary" href="<?php echo e(url('new-product/')); ?>">

                                <i class="fas fa-plus"></i>
                                <span> New Product </span>
                            </a>
                        </div>
                        <div class="my-3 ">
                            <a class="btn btn-success" href="<?php echo e(url('make-transaction')); ?>">

                                <i class="fas fa-money-check-alt me-2"></i>
                                <span> Sell Product </span>
                            </a>
                        </div>
                    </div>

                    <hr>
                    <h5>All Product List</h5>
                    <hr>
                    <table id="example" data-order='[[ 0, "desc" ]]' class="table table-striped" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Quantity (Stock) </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $allProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($product->name); ?></td>
                                    <td><?php echo e($product->details); ?></td>
                                    <td><?php echo e($product->image); ?></td>
                                    <td><?php echo e($product->price); ?> Tk</td>
                                    <td><?php echo e($product->quantity); ?>

                                        (<?php echo e($product->unit == 'liter' ? 'Liters' : $product->unit); ?>)
                                    </td>
                                    <td>
                                        <a class=" btn btn-success"
                                            href="<?php echo e(url('edit-product/' . $product->id)); ?>">Edit</a>
                                        <a class=" btn btn-danger"
                                            href="<?php echo e(url('delete-product/' . $product->id)); ?>">Delete</a>
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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mdtau\Downloads\Compressed\module-11-main\resources\views/ProductList.blade.php ENDPATH**/ ?>