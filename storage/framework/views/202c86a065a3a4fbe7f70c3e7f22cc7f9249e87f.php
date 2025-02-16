<?php $__env->startSection('content'); ?>

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-edit bg-blue"></i>
                    <div class="d-inline">
                        <h5>Doctors</h5>
                        <span>Delete doctor</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                        <li class="breadcrumb-item active" aria-current="page">delete</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <?php if(Session::has('message')): ?>
                <div class="alert bg-success alert-success text-white" role="alert">
                    <?php echo e(Session::get('message')); ?>

                </div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <h3>Confirm delete</h3>
                </div>
                <div class="card-body">
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($user->image); ?>" width="120">
                    <h2><?php echo e($user->name); ?></h2>
                    <form class="forms-sample" action="<?php echo e(route('doctor.destroy', [$user->id])); ?>" method="post"><?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger mr-2">Confirm</button>
                            <a href="<?php echo e(route('doctor.index')); ?>" class="btn btn-secondary">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CHATTI\Desktop\emna-laravel\resources\views/admin/doctor/delete.blade.php ENDPATH**/ ?>