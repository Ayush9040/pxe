<?php $__env->startSection('content'); ?>

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b><?php echo e(__('Create Category')); ?></b> </h3>
                <a class="btn btn-primary  btn-sm" href="<?php echo e(route('back.fcategory.index')); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="p-5">
								<form class="admin-form" action="<?php echo e(route('back.fcategory.store')); ?>" method="POST"
									enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>

									<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

									<div class="form-group">
										<label for="name"><?php echo e(__('Name')); ?> *</label>
										<input type="text" name="name" class="form-control item-name" id="name"
											placeholder="<?php echo e(__('Enter Name')); ?>" value="<?php echo e(old('name')); ?>" required>
									</div>

									<div class="form-group">
										<label for="slug"><?php echo e(__('Slug')); ?> *</label>
										<input type="text" name="slug" class="form-control" id="slug"
											placeholder="<?php echo e(__('Enter Slug')); ?>" value="<?php echo e(old('slug')); ?>" required>
									</div>

									<div class="form-group">
										<label for="text"><?php echo e(__('Text')); ?> *</label>
										<input type="text" name="text" class="form-control" id="text"
											placeholder="<?php echo e(__('Text')); ?>" value="<?php echo e(old('text')); ?>" required>
									</div>

									<div class="form-group">
										<label for="meta_keywords"><?php echo e(__('Meta Keywords')); ?>

											</label>
										<input type="text" name="meta_keywords" class="tags"
											id="meta_keywords"
											placeholder="<?php echo e(__('Enter Meta Keywords')); ?>"
											value="">
									</div>

									<div class="form-group">
										<label
											for="meta_description"><?php echo e(__('Meta Description')); ?>

											</label>
										<textarea name="meta_descriptions" id="meta_description"
											class="form-control" rows="5"
											placeholder="<?php echo e(__('Enter Meta Description')); ?>"
										></textarea>
									</div>

								<div class="form-group text-center">
										<button type="submit"
											class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>
									</div>

									<div>
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

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u384171748/domains/block55.in/public_html/core/resources/views/back/fcategory/create.blade.php ENDPATH**/ ?>