<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Groups</h3><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->surname); ?>

                </div>
                <div class="card-body">

                    <a class="btn btn-primary" href="<?php echo e(route('groups.create')); ?>">Add new group</a>

                        <table class="table">
                        <thead>
                        <tr>
                            <th>Group name</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Course</th>
                            <th># of students</th>
                            <th></th>
                            <th></th>
                            <th></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><?php echo e($group->name); ?></td>
                            <td><?php echo e($group->start); ?></td>
                            <td><?php echo e($group->end); ?></td>
                            <td><?php echo e($group->course->name); ?></td>
                            <td></td>
                            <td><a class="btn btn-success" href="<?php echo e(route('group.subjects', $group->id)); ?>">Subjects</a> </td>
                            <td><a class="btn btn-success" href="<?php echo e(route('students.groups', $group->id)); ?>">Student list</a> </td>
                            <td><a class="btn btn-success" href="<?php echo e(route('groups.edit', $group->id)); ?>">Edit</a> </td>







                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baltic\resources\views/groups/index.blade.php ENDPATH**/ ?>