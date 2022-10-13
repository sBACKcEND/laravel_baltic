<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Subjects</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Subject name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($subject->group_id == request()->route('name') ): ?>
                                        <td><?php echo e($subject->name); ?></td>
                                        <td></td>
                                </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baltic\resources\views/subjects/index.blade.php ENDPATH**/ ?>