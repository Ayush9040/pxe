<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td>
        <?php echo e($data->first_name); ?> <?php echo e($data->last_name); ?>

    </td>
    <td>
        <?php echo e($data->email); ?>

    </td>
    <td>
        <?php echo e($data->phone); ?>

    </td>
    
        <?php if($data->activestatus==1): ?>
        <td> <?php echo e(__('Active')); ?> </td>
        <?php else: ?>
        <td> <?php echo e(__('InActive')); ?> </td>
        <?php endif; ?>  

    
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm "
                href="<?php echo e(route('back.user.show',$data->id)); ?>">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="<?php echo e(route('back.user.destroy',$data->id)); ?>">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/u384171748/domains/block55.in/public_html/core/resources/views/back/user/table.blade.php ENDPATH**/ ?>