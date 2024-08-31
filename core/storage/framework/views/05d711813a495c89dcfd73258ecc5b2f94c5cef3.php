<?php $__env->startSection('content'); ?>

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b><?php echo e(__('Create Ticket')); ?></b> </h3>
                <a class="btn btn-primary btn-sm" href="<?php echo e(route('back.ticket.index')); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
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
								<form class="admin-form" action="<?php echo e(route('back.ticket.store')); ?>" method="POST"
									enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>

									<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


									<div class="form-group">
										<label for="email"><?php echo e(__('User Email')); ?> *</label>
										<input type="email" name="email" class="form-control" id="email"
											placeholder="<?php echo e(__('Enter Email')); ?>" value="<?php echo e(old('email')); ?>" >
									</div>

									<div class="form-group">
										<label for="subject"><?php echo e(__('Subject')); ?> *</label>
										<input type="subject" name="subject" class="form-control" id="subject"
											placeholder="<?php echo e(__('Enter Subject')); ?>" value="<?php echo e(old('subject')); ?>" >
									</div>


									<div class="form-group">
										<label for="message"><?php echo e(__('Message')); ?> *</label>
										<textarea name="message" id="message" class="form-control" rows="5"
											placeholder="<?php echo e(__('Enter Message')); ?>"
											><?php echo e(old('message')); ?></textarea>
									</div>

									<div class="form-group position-relative">
										<label class="file">
											<input type="file"  accept="image/*"  class="upload-photo" name="file" id="file"
												aria-label="File browser example">
											<span class="file-custom text-left"><?php echo e(__('Upload File')); ?></span>
										</label>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u384171748/domains/block55.in/public_html/core/resources/views/back/ticket/create.blade.php ENDPATH**/ ?>