<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr id="blog-bulk-delete">
   

  <td>
      <img src="<?php echo e(isset(json_decode($data->photo,true)[0]) ?  asset('assets/images/'.json_decode($data->photo,true)[0]) : asset('assets/images/placeholder.png')); ?>" alt="">

  </td>
  <td>
        <?php echo e($data->blog); ?>

    </td> 
    <td>
        <?php echo e($data->title); ?>

    </td> 
    <td>
    <?php echo e($data->details); ?>

    </td>
    <td>
    <?php echo e($data->created_at); ?>

    </td>
   
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\xampp\htdocs\pxe\core\resources\views/back/post/table.blade.php ENDPATH**/ ?>