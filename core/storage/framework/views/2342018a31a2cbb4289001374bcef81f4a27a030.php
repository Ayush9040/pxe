<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td>
        <img src="<?php echo e($data->image ? asset('assets/images/'.$data->image) : asset('assets/images/placeholder.png')); ?>" alt="Image Not Found">
    </td>

    
    <td>
       <?php echo e(strtoupper($data->title)); ?>

    </td>

    

    <td>
        <div class="action-list">
            
            <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="<?php echo e(route('back.exclusive.destroy',$data->id)); ?>">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\xampp\htdocs\pxe\core\resources\views/back/exclusive/table.blade.php ENDPATH**/ ?>