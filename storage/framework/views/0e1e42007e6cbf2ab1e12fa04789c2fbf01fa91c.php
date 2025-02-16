<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mb-4 justify-content-center">
            <div class="col-md-8">
               
                <?php if(auth()->guard()->guest()): ?>
                    <div class="mt-5">
                        <a href="<?php echo e(url('/register')); ?>"> <button class="btn btn-primary">Register as Patient</button></a>
                        <a href="<?php echo e(url('/login')); ?>"><button class="btn btn-success">Login</button></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        
        <form action="<?php echo e(url('/')); ?>" method="GET">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">Find Doctors</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-8">
                                <input type="date" name='date' id="datepicker" class='form-control'>
                            </div>
                            <div class="col-md-6 col-sm-4">
                                <button class="btn btn-primary" type="submit">Go</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        
        <div class="card">
            <div class="card-body">
                <div class="card-header">List of Doctors Available: <?php if(isset($formatDate)): ?> <?php echo e($formatDate); ?>

                    <?php endif; ?>
                </div>
                <div class="card-body table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Expertise</th>
                                <th>Book</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($key + 1); ?></td>
                                    <td><img src="<?php echo e(asset('images')); ?>/<?php echo e($doctor->doctor->image); ?>" alt="doctor photo"
                                            width="100px"></td>
                                    <td><?php echo e($doctor->doctor->name); ?></td>
                                    <td><?php echo e($doctor->doctor->department); ?></td>
                                    <?php if(Auth::check() && auth()->user()->role->name == 'patient'): ?>
                                        <td>
                                            <a href="<?php echo e(route('create.appointment', [$doctor->user_id, $doctor->date])); ?>"><button
                                                    class="btn btn-primary">Appointment</button></a>
                                        </td>
                                    <?php else: ?>
                                        <td>For patients ONLY</td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <td>No doctors available</td>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CHATTI\Desktop\emna-laravel\resources\views/welcome.blade.php ENDPATH**/ ?>