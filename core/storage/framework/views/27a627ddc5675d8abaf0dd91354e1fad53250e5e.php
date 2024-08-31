<?php $__env->startSection('content'); ?>

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 bc-title"><b><?php echo e(__('Create Exclusive Deals')); ?></b> </h3>
                <a class="btn btn-primary btn-sm" href="<?php echo e(route('back.exclusive.index')); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">
			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">

						</div>
					</div>
                    <div class="row">
                        <div class="col-lg-12">
                            
                              <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <form  action="<?php echo e(route('back.exclusive.store')); ?>" method="POST"
                                        enctype="multipart/form-data">

                                        <?php echo csrf_field(); ?>
                                      
                                        <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <div class="form-group">
                                            <label id="change_label" for="name"><?php echo e(__('Thumbnail Image')); ?> </label>
                                            <br>
                                                <img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"
                                                    alt="No Image Found">
                                           
                                        </div>

                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file"  accept="image/*"  class="upload-photo" name="image" id="file"
                                                    aria-label="File browser example" >
                                                <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                            </label>
                                        </div>
                                        <div class="form-group position-relative">
                                            <label id="change_label" for="name"><?php echo e(__('Vedio')); ?> </label>
                                            <label class="file">
                                                <input type="file"  accept="vedio/*"  class="upload" name="video" id="file"
                                                    aria-label="File browser example" >
                                                <span class="file-custom text-left"><?php echo e(__('Upload Vedio...')); ?></span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="title"><?php echo e(__('Title')); ?> *</label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e(old('title')); ?>" >
                                        </div>

                                        

                                        

                                      

                                       

                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>
                                        </div>

                                    </form>
                                </div>
                                
                               
                               
                              </div>
                        </div>
                    </div>

			</div>

		</div>

	</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\pxe\core\resources\views/back/exclusive/create.blade.php ENDPATH**/ ?>