<?php $__env->startSection('content'); ?>

<!-- Start of Main Content -->
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b><?php echo e(__('Manage Blogs')); ?></b> </h3>

                <!--<div class="right">-->
                <!--  <a class="btn btn-primary  btn-sm" href="<?php echo e(route('back.post.create')); ?>"><i class="fas fa-plus"></i> <?php echo e(__('Add')); ?></a>-->
                <!--    <form class="d-inline-block" action="<?php echo e(route('back.bulk.delete')); ?>" method="get">-->
                <!--      <input type="hidden" value="" name="ids[]" id="bulk_delete">-->
                <!--      <input type="hidden" value="posts" name="table">-->
                <!--      <button class="btn btn-danger btn-sm"><?php echo e(__('Delete')); ?></button>-->
                <!--    </form>-->
                <!--</div>-->
              </div>

        </div>
    </div>

	<!-- DataTales -->
	<!-- <div class="card shadow mb-4">
		<div class="card-body">
			<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<div class="gd-responsive-table">
				<table class="table table-bordered table-striped" id="admin-table" width="100%" cellspacing="0">

					<thead>
						<tr>
                            <th> <input type="checkbox" data-target="blog-bulk-delete" class="form-control bulk_all_delete"> </th>
                            <th><?php echo e(__('Image')); ?></th>
                            <th><?php echo e(__('Title')); ?></th>
                            <th><?php echo e(__('Category')); ?></th>
							<th><?php echo e(__('Actions')); ?></th>
						</tr>
					</thead>

					<tbody>
              <?php echo $__env->make('back.post.table',compact('datas'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</tbody>

				</table>
			</div>
		</div>
	</div> -->

  <div class="card-body">
      <div class="row">
            <form class="admin-form" action="<?php echo e(route('back.post.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group">
					<label for="name"><?php echo e(__('Set Image')); ?> *</label>
					<br>
						<img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"
							alt="No Image Found">
					<br>
					<span class="mt-1"><?php echo e(__('Image Size Should Be 708 x 277.')); ?></span>
				</div>

				<div class="form-group position-relative ">
					<label class="file">
						<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"
							aria-label="File browser example" >
						<span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
					</label>
				</div>

                <div class="form-group">
					<label for="title"><?php echo e(__('Title')); ?> *</label>
					<input type="text" name="title" class="form-control" id="title"
						placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e(old('title')); ?>" >
				</div>
                    
                <div class="form-group">
					<label for="details"><?php echo e(__('Details')); ?> *</label>
					<textarea name="details" id="details" class="form-control" rows="5"
						placeholder="<?php echo e(__('Enter Details')); ?>"
						><?php echo e(old('details')); ?></textarea>
				</div>

                <div class="form-group">
					<label for="blog"><?php echo e(__('Select Blog')); ?> *</label>
					<select name="blog" id="blog" class="form-control" >
						<option value="" selected disabled><?php echo e(__('Select Blog')); ?></option>
						<option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
					</select>
				</div>

                <div class="form-group">
					<button type="submit"
						class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>
				</div>
            </form>
      </div>
<!--<div class="row">-->
<!--                <div class="col-5 col-md-3">-->
<!--                    <div class="nav flex-column nav-pills nav-secondary" id="v-pills-tab" role="tablist" aria-orientation="vertical">-->
<!--                        <a class="nav-link active" id="v-pills-t9-tab" data-toggle="pill" href="#v-pills-t9" role="tab" aria-controls="v-pills-t9" aria-selected="true"><?php echo e(__('Blog 1')); ?></a>-->
<!--                        <a class="nav-link" id="v-pills-t1-tab" data-toggle="pill" href="#v-pills-t1" role="tab" aria-controls="v-pills-t1" aria-selected="false"><?php echo e(__('Blog 2')); ?></a>-->
<!--                        <a class="nav-link" id="v-pills-t2-tab" data-toggle="pill" href="#v-pills-t2" role="tab" aria-controls="v-pills-t2" aria-selected="false"><?php echo e(__('Blog 3')); ?></a>-->
<!--                        <a class="nav-link" id="v-pills-t5-tab" data-toggle="pill" href="#v-pills-t5" role="tab" aria-controls="v-pills-t5" aria-selected="false"><?php echo e(__('Blog 4')); ?></a>-->
<!--                        <a class="nav-link" id="v-pills-t3-tab" data-toggle="pill" href="#v-pills-t3" role="tab" aria-controls="v-pills-t3" aria-selected="false"><?php echo e(__('Blog 5')); ?></a>-->
<!--                        <a class="nav-link" id="v-pills-t4-tab" data-toggle="pill" href="#v-pills-t4" role="tab" aria-controls="v-pills-t4" aria-selected="false"><?php echo e(__('Blog 6')); ?></a>-->
<!--                        <a class="nav-link" id="v-pills-t6-tab" data-toggle="pill" href="#v-pills-t6" role="tab" aria-controls="v-pills-t6" aria-selected="false"><?php echo e(__('Blog 7')); ?></a>-->
<!--                    </div>-->
<!--                </div>-->


<!--                <div class="col-7 col-md-9">-->
<!--                <div class="tab-content" id="v-pills-tabContent">-->

<!--                <div class="tab-pane fade show active" id="v-pills-t9" role="tabpanel" aria-labelledby="v-pills-t9-tab">-->
<!--                            <form class="admin-form" action="<?php echo e(route('back.post.store')); ?>" method="POST" enctype="multipart/form-data">-->
<!--                                <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
<!--                                <?php echo csrf_field(); ?>-->
<!--                                <div class="form-group">-->
<!--										<label for="name"><?php echo e(__('Set Image')); ?> *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1"><?php echo e(__('Image Size Should Be 708 x 277.')); ?></span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title"><?php echo e(__('Title')); ?> *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e(old('title')); ?>" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details"><?php echo e(__('Details')); ?> *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="<?php echo e(__('Enter Details')); ?>"-->
<!--											><?php echo e(old('details')); ?></textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog"><?php echo e(__('Select Blog')); ?> *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled><?php echo e(__('Select Blog')); ?></option>-->
<!--											<option value="1">1</option>-->
<!--                                            <option value="2">2</option>-->
<!--                                            <option value="3">3</option>-->
<!--                                            <option value="4">4</option>-->
<!--                                            <option value="5">5</option>-->
<!--                                            <option value="6">6</option>-->
<!--                                            <option value="7">7</option>-->
<!--										</select>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<button type="submit"-->
<!--											class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>-->
<!--									</div>-->

                                       
<!--                            </form>-->
<!--                        </div>-->




<!--                        <div class="tab-pane fade show " id="v-pills-t1" role="tabpanel" aria-labelledby="v-pills-t1-tab">-->
<!--                        <form class="admin-form" action="<?php echo e(route('back.post.store')); ?>" method="POST" enctype="multipart/form-data">-->
<!--                                <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
<!--                                <?php echo csrf_field(); ?>-->
<!--                                <div class="form-group">-->
<!--										<label for="name"><?php echo e(__('Set Image')); ?> *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1"><?php echo e(__('Image Size Should Be 708 x 277.')); ?></span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title"><?php echo e(__('Title')); ?> *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e(old('title')); ?>" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details"><?php echo e(__('Details')); ?> *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="<?php echo e(__('Enter Details')); ?>"-->
<!--											><?php echo e(old('details')); ?></textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog"><?php echo e(__('Select Blog')); ?> *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled><?php echo e(__('Select Blog')); ?></option>-->
<!--											<option value="1">1</option>-->
<!--                                            <option value="2">2</option>-->
<!--                                            <option value="3">3</option>-->
<!--                                            <option value="4">4</option>-->
<!--                                            <option value="5">5</option>-->
<!--                                            <option value="6">6</option>-->
<!--                                            <option value="7">7</option>-->
<!--										</select>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<button type="submit"-->
<!--											class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>-->
<!--									</div>-->

                                       
<!--                            </form>-->
<!--                        </div>-->




<!--                        <div class="tab-pane fade" id="v-pills-t2" role="tabpanel" aria-labelledby="v-pills-t2-tab">-->

<!--                        <form class="admin-form" action="<?php echo e(route('back.post.store')); ?>" method="POST" enctype="multipart/form-data">-->
<!--                                <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
<!--                                <?php echo csrf_field(); ?>-->
<!--                                <div class="form-group">-->
<!--										<label for="name"><?php echo e(__('Set Image')); ?> *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1"><?php echo e(__('Image Size Should Be 708 x 277.')); ?></span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title"><?php echo e(__('Title')); ?> *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e(old('title')); ?>" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details"><?php echo e(__('Details')); ?> *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="<?php echo e(__('Enter Details')); ?>"-->
<!--											><?php echo e(old('details')); ?></textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog"><?php echo e(__('Select Blog')); ?> *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled><?php echo e(__('Select Blog')); ?></option>-->
<!--											<option value="1">1</option>-->
<!--                                            <option value="2">2</option>-->
<!--                                            <option value="3">3</option>-->
<!--                                            <option value="4">4</option>-->
<!--                                            <option value="5">5</option>-->
<!--                                            <option value="6">6</option>-->
<!--                                            <option value="7">7</option>-->
<!--										</select>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<button type="submit"-->
<!--											class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>-->
<!--									</div>-->

                                       
<!--                            </form>-->
<!--                        </div>-->



<!--                        <div class="tab-pane fade" id="v-pills-t5" role="tabpanel" aria-labelledby="v-pills-t5-tab">-->
<!--                        <form class="admin-form" action="<?php echo e(route('back.post.store')); ?>" method="POST" enctype="multipart/form-data">-->
<!--                                <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
<!--                                <?php echo csrf_field(); ?>-->
<!--                                <div class="form-group">-->
<!--										<label for="name"><?php echo e(__('Set Image')); ?> *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1"><?php echo e(__('Image Size Should Be 708 x 277.')); ?></span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title"><?php echo e(__('Title')); ?> *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e(old('title')); ?>" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details"><?php echo e(__('Details')); ?> *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="<?php echo e(__('Enter Details')); ?>"-->
<!--											><?php echo e(old('details')); ?></textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog"><?php echo e(__('Select Blog')); ?> *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled><?php echo e(__('Select Blog')); ?></option>-->
<!--											<option value="1">1</option>-->
<!--                                            <option value="2">2</option>-->
<!--                                            <option value="3">3</option>-->
<!--                                            <option value="4">4</option>-->
<!--                                            <option value="5">5</option>-->
<!--                                            <option value="6">6</option>-->
<!--                                            <option value="7">7</option>-->
<!--										</select>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<button type="submit"-->
<!--											class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>-->
<!--									</div>-->

                                       
<!--                            </form>-->
<!--                        </div>-->




<!--                        <div class="tab-pane fade" id="v-pills-t3" role="tabpanel" aria-labelledby="v-pills-t3-tab">-->
<!--                        <form class="admin-form" action="<?php echo e(route('back.post.store')); ?>" method="POST" enctype="multipart/form-data">-->
<!--                                <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
<!--                                <?php echo csrf_field(); ?>-->
<!--                                <div class="form-group">-->
<!--										<label for="name"><?php echo e(__('Set Image')); ?> *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1"><?php echo e(__('Image Size Should Be 708 x 277.')); ?></span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title"><?php echo e(__('Title')); ?> *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e(old('title')); ?>" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details"><?php echo e(__('Details')); ?> *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="<?php echo e(__('Enter Details')); ?>"-->
<!--											><?php echo e(old('details')); ?></textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog"><?php echo e(__('Select Blog')); ?> *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled><?php echo e(__('Select Blog')); ?></option>-->
<!--											<option value="1">1</option>-->
<!--                                            <option value="2">2</option>-->
<!--                                            <option value="3">3</option>-->
<!--                                            <option value="4">4</option>-->
<!--                                            <option value="5">5</option>-->
<!--                                            <option value="6">6</option>-->
<!--                                            <option value="7">7</option>-->
<!--										</select>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<button type="submit"-->
<!--											class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>-->
<!--									</div>-->

                                       
<!--                            </form>-->
<!--                        </div>-->


<!--                        <div class="tab-pane fade" id="v-pills-t4" role="tabpanel" aria-labelledby="v-pills-t4-tab">-->
<!--                        <form class="admin-form" action="<?php echo e(route('back.post.store')); ?>" method="POST" enctype="multipart/form-data">-->
<!--                                <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
<!--                                <?php echo csrf_field(); ?>-->
<!--                                <div class="form-group">-->
<!--										<label for="name"><?php echo e(__('Set Image')); ?> *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1"><?php echo e(__('Image Size Should Be 708 x 277.')); ?></span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title"><?php echo e(__('Title')); ?> *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e(old('title')); ?>" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details"><?php echo e(__('Details')); ?> *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="<?php echo e(__('Enter Details')); ?>"-->
<!--											><?php echo e(old('details')); ?></textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog"><?php echo e(__('Select Blog')); ?> *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled><?php echo e(__('Select Blog')); ?></option>-->
<!--											<option value="1">1</option>-->
<!--                                            <option value="2">2</option>-->
<!--                                            <option value="3">3</option>-->
<!--                                            <option value="4">4</option>-->
<!--                                            <option value="5">5</option>-->
<!--                                            <option value="6">6</option>-->
<!--                                            <option value="7">7</option>-->
<!--										</select>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<button type="submit"-->
<!--											class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>-->
<!--									</div>-->

                                       
<!--                            </form>-->
<!--                        </div>-->



<!--                        <div class="tab-pane fade" id="v-pills-t6" role="tabpanel" aria-labelledby="v-pills-t6-tab">-->
<!--                        <form class="admin-form" action="<?php echo e(route('back.post.store')); ?>" method="POST" enctype="multipart/form-data">-->
<!--                                <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
<!--                                <?php echo csrf_field(); ?>-->
<!--                                <div class="form-group">-->
<!--										<label for="name"><?php echo e(__('Set Image')); ?> *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1"><?php echo e(__('Image Size Should Be 708 x 277.')); ?></span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title"><?php echo e(__('Title')); ?> *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e(old('title')); ?>" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details"><?php echo e(__('Details')); ?> *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="<?php echo e(__('Enter Details')); ?>"-->
<!--											><?php echo e(old('details')); ?></textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog"><?php echo e(__('Select Blog')); ?> *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled><?php echo e(__('Select Blog')); ?></option>-->
<!--											<option value="1">1</option>-->
<!--                                            <option value="2">2</option>-->
<!--                                            <option value="3">3</option>-->
<!--                                            <option value="4">4</option>-->
<!--                                            <option value="5">5</option>-->
<!--                                            <option value="6">6</option>-->
<!--                                            <option value="7">7</option>-->
<!--										</select>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<button type="submit"-->
<!--											class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>-->
<!--									</div>-->

                                       
<!--                            </form>-->
<!--                        </div>-->






<!--</div>-->
<!--</div>-->






<!--</div>-->
</div>

</div>

</div>
<!-- End of Main Content -->



  <!-- <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="confirm-deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content"> -->

		<!-- Modal Header -->
        <!-- <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel"><?php echo e(__('Confirm Delete?')); ?></h3>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
		</div> -->

		<!-- Modal Body -->
        <!-- <div class="modal-body">
			<?php echo e(__('You are going to delete this post. All contents related with this post will be lost.')); ?> <?php echo e(__('Do you want to delete it?')); ?>

		</div> -->

		<!-- Modal footer -->
        <!-- <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
			<form action="" class="d-inline btn-ok" method="POST">

                <?php echo csrf_field(); ?>

                <?php echo method_field('DELETE'); ?>

                <button type="submit" class="btn btn-danger"><?php echo e(__('Delete')); ?></button>

			</form>
		</div>

      </div>
    </div>
  </div> -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u384171748/domains/block55.in/public_html/core/resources/views/back/post/index.blade.php ENDPATH**/ ?>