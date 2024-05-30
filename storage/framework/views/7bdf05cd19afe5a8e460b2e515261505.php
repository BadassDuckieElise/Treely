<?php $__env->startSection('content'); ?>
<div class="row mb-3">
    <div class="col-md-8 offset-md-2">
        <form method="GET" action="<?php echo e(url('/commands')); ?>">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search commands..." value="<?php echo e(request()->input('search')); ?>">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="commands-row">
    <div class="col-md-10 offset-md-1">
        <?php if(count($commands) > 0): ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Command</th>
                            <th scope="col">Description</th>
                            <th scope="col">Usage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $commands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $command): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($command['name']); ?></td>
                                <td><?php echo e($command['description']); ?></td>
                                <td><?php echo e($command['usage']); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="alert alert-info" role="alert">
                No commands found.
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.commands', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Treely_new\laravel\resources\views/commands.blade.php ENDPATH**/ ?>