@extends('master.back')

@section('content')

<!-- Start of Main Content -->
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>{{ __('Manage Blogs') }}</b> </h3>

                <!--<div class="right">-->
                <!--  <a class="btn btn-primary  btn-sm" href="{{route('back.post.create')}}"><i class="fas fa-plus"></i> {{ __('Add') }}</a>-->
                <!--    <form class="d-inline-block" action="{{route('back.bulk.delete')}}" method="get">-->
                <!--      <input type="hidden" value="" name="ids[]" id="bulk_delete">-->
                <!--      <input type="hidden" value="posts" name="table">-->
                <!--      <button class="btn btn-danger btn-sm">{{__('Delete')}}</button>-->
                <!--    </form>-->
                <!--</div>-->
              </div>

        </div>
    </div>

	<!-- DataTales -->
	<!-- <div class="card shadow mb-4">
		<div class="card-body">
			@include('alerts.alerts')
			<div class="gd-responsive-table">
				<table class="table table-bordered table-striped" id="admin-table" width="100%" cellspacing="0">

					<thead>
						<tr>
                            <th> <input type="checkbox" data-target="blog-bulk-delete" class="form-control bulk_all_delete"> </th>
                            <th>{{ __('Image') }}</th>
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('Category') }}</th>
							<th>{{ __('Actions') }}</th>
						</tr>
					</thead>

					<tbody>
              @include('back.post.table',compact('datas'))
					</tbody>

				</table>
			</div>
		</div>
	</div> -->

  <div class="card-body">
      <div class="row">
            <form class="admin-form" action="{{ route('back.post.store') }}" method="POST" enctype="multipart/form-data">
                @include('alerts.alerts')
                @csrf
                <div class="form-group">
					<label for="name">{{ __('Set Image') }} *</label>
					<br>
						<img class="admin-img" src="{{  asset('assets/images/placeholder.png') }}"
							alt="No Image Found">
					<br>
					<span class="mt-1">{{ __('Image Size Should Be 708 x 277.') }}</span>
				</div>

				<div class="form-group position-relative ">
					<label class="file">
						<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"
							aria-label="File browser example" >
						<span class="file-custom text-left">{{ __('Upload Image...') }}</span>
					</label>
				</div>

                <div class="form-group">
					<label for="title">{{ __('Title') }} *</label>
					<input type="text" name="title" class="form-control" id="title"
						placeholder="{{ __('Enter Title') }}" value="{{ old('title') }}" >
				</div>
                    
                <div class="form-group">
					<label for="details">{{ __('Details') }} *</label>
					<textarea name="details" id="details" class="form-control" rows="5"
						placeholder="{{ __('Enter Details') }}"
						>{{ old('details') }}</textarea>
				</div>

                <div class="form-group">
					<label for="blog">{{ __('Select Blog') }} *</label>
					<select name="blog" id="blog" class="form-control" >
						<option value="" selected disabled>{{__('Select Blog')}}</option>
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
						class="btn btn-secondary ">{{ __('Submit') }}</button>
				</div>
            </form>
      </div>
<!--<div class="row">-->
<!--                <div class="col-5 col-md-3">-->
<!--                    <div class="nav flex-column nav-pills nav-secondary" id="v-pills-tab" role="tablist" aria-orientation="vertical">-->
<!--                        <a class="nav-link active" id="v-pills-t9-tab" data-toggle="pill" href="#v-pills-t9" role="tab" aria-controls="v-pills-t9" aria-selected="true">{{ __('Blog 1') }}</a>-->
<!--                        <a class="nav-link" id="v-pills-t1-tab" data-toggle="pill" href="#v-pills-t1" role="tab" aria-controls="v-pills-t1" aria-selected="false">{{ __('Blog 2') }}</a>-->
<!--                        <a class="nav-link" id="v-pills-t2-tab" data-toggle="pill" href="#v-pills-t2" role="tab" aria-controls="v-pills-t2" aria-selected="false">{{ __('Blog 3') }}</a>-->
<!--                        <a class="nav-link" id="v-pills-t5-tab" data-toggle="pill" href="#v-pills-t5" role="tab" aria-controls="v-pills-t5" aria-selected="false">{{ __('Blog 4') }}</a>-->
<!--                        <a class="nav-link" id="v-pills-t3-tab" data-toggle="pill" href="#v-pills-t3" role="tab" aria-controls="v-pills-t3" aria-selected="false">{{ __('Blog 5') }}</a>-->
<!--                        <a class="nav-link" id="v-pills-t4-tab" data-toggle="pill" href="#v-pills-t4" role="tab" aria-controls="v-pills-t4" aria-selected="false">{{ __('Blog 6') }}</a>-->
<!--                        <a class="nav-link" id="v-pills-t6-tab" data-toggle="pill" href="#v-pills-t6" role="tab" aria-controls="v-pills-t6" aria-selected="false">{{ __('Blog 7') }}</a>-->
<!--                    </div>-->
<!--                </div>-->


<!--                <div class="col-7 col-md-9">-->
<!--                <div class="tab-content" id="v-pills-tabContent">-->

<!--                <div class="tab-pane fade show active" id="v-pills-t9" role="tabpanel" aria-labelledby="v-pills-t9-tab">-->
<!--                            <form class="admin-form" action="{{ route('back.post.store') }}" method="POST" enctype="multipart/form-data">-->
<!--                                @include('alerts.alerts')-->
<!--                                @csrf-->
<!--                                <div class="form-group">-->
<!--										<label for="name">{{ __('Set Image') }} *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="{{  asset('assets/images/placeholder.png') }}"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1">{{ __('Image Size Should Be 708 x 277.') }}</span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left">{{ __('Upload Image...') }}</span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title">{{ __('Title') }} *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="{{ __('Enter Title') }}" value="{{ old('title') }}" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details">{{ __('Details') }} *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="{{ __('Enter Details') }}"-->
<!--											>{{ old('details') }}</textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog">{{ __('Select Blog') }} *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled>{{__('Select Blog')}}</option>-->
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
<!--											class="btn btn-secondary ">{{ __('Submit') }}</button>-->
<!--									</div>-->

                                       
<!--                            </form>-->
<!--                        </div>-->




<!--                        <div class="tab-pane fade show " id="v-pills-t1" role="tabpanel" aria-labelledby="v-pills-t1-tab">-->
<!--                        <form class="admin-form" action="{{ route('back.post.store') }}" method="POST" enctype="multipart/form-data">-->
<!--                                @include('alerts.alerts')-->
<!--                                @csrf-->
<!--                                <div class="form-group">-->
<!--										<label for="name">{{ __('Set Image') }} *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="{{  asset('assets/images/placeholder.png') }}"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1">{{ __('Image Size Should Be 708 x 277.') }}</span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left">{{ __('Upload Image...') }}</span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title">{{ __('Title') }} *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="{{ __('Enter Title') }}" value="{{ old('title') }}" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details">{{ __('Details') }} *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="{{ __('Enter Details') }}"-->
<!--											>{{ old('details') }}</textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog">{{ __('Select Blog') }} *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled>{{__('Select Blog')}}</option>-->
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
<!--											class="btn btn-secondary ">{{ __('Submit') }}</button>-->
<!--									</div>-->

                                       
<!--                            </form>-->
<!--                        </div>-->




<!--                        <div class="tab-pane fade" id="v-pills-t2" role="tabpanel" aria-labelledby="v-pills-t2-tab">-->

<!--                        <form class="admin-form" action="{{ route('back.post.store') }}" method="POST" enctype="multipart/form-data">-->
<!--                                @include('alerts.alerts')-->
<!--                                @csrf-->
<!--                                <div class="form-group">-->
<!--										<label for="name">{{ __('Set Image') }} *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="{{  asset('assets/images/placeholder.png') }}"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1">{{ __('Image Size Should Be 708 x 277.') }}</span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left">{{ __('Upload Image...') }}</span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title">{{ __('Title') }} *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="{{ __('Enter Title') }}" value="{{ old('title') }}" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details">{{ __('Details') }} *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="{{ __('Enter Details') }}"-->
<!--											>{{ old('details') }}</textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog">{{ __('Select Blog') }} *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled>{{__('Select Blog')}}</option>-->
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
<!--											class="btn btn-secondary ">{{ __('Submit') }}</button>-->
<!--									</div>-->

                                       
<!--                            </form>-->
<!--                        </div>-->



<!--                        <div class="tab-pane fade" id="v-pills-t5" role="tabpanel" aria-labelledby="v-pills-t5-tab">-->
<!--                        <form class="admin-form" action="{{ route('back.post.store') }}" method="POST" enctype="multipart/form-data">-->
<!--                                @include('alerts.alerts')-->
<!--                                @csrf-->
<!--                                <div class="form-group">-->
<!--										<label for="name">{{ __('Set Image') }} *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="{{  asset('assets/images/placeholder.png') }}"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1">{{ __('Image Size Should Be 708 x 277.') }}</span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left">{{ __('Upload Image...') }}</span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title">{{ __('Title') }} *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="{{ __('Enter Title') }}" value="{{ old('title') }}" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details">{{ __('Details') }} *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="{{ __('Enter Details') }}"-->
<!--											>{{ old('details') }}</textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog">{{ __('Select Blog') }} *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled>{{__('Select Blog')}}</option>-->
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
<!--											class="btn btn-secondary ">{{ __('Submit') }}</button>-->
<!--									</div>-->

                                       
<!--                            </form>-->
<!--                        </div>-->




<!--                        <div class="tab-pane fade" id="v-pills-t3" role="tabpanel" aria-labelledby="v-pills-t3-tab">-->
<!--                        <form class="admin-form" action="{{ route('back.post.store') }}" method="POST" enctype="multipart/form-data">-->
<!--                                @include('alerts.alerts')-->
<!--                                @csrf-->
<!--                                <div class="form-group">-->
<!--										<label for="name">{{ __('Set Image') }} *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="{{  asset('assets/images/placeholder.png') }}"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1">{{ __('Image Size Should Be 708 x 277.') }}</span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left">{{ __('Upload Image...') }}</span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title">{{ __('Title') }} *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="{{ __('Enter Title') }}" value="{{ old('title') }}" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details">{{ __('Details') }} *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="{{ __('Enter Details') }}"-->
<!--											>{{ old('details') }}</textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog">{{ __('Select Blog') }} *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled>{{__('Select Blog')}}</option>-->
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
<!--											class="btn btn-secondary ">{{ __('Submit') }}</button>-->
<!--									</div>-->

                                       
<!--                            </form>-->
<!--                        </div>-->


<!--                        <div class="tab-pane fade" id="v-pills-t4" role="tabpanel" aria-labelledby="v-pills-t4-tab">-->
<!--                        <form class="admin-form" action="{{ route('back.post.store') }}" method="POST" enctype="multipart/form-data">-->
<!--                                @include('alerts.alerts')-->
<!--                                @csrf-->
<!--                                <div class="form-group">-->
<!--										<label for="name">{{ __('Set Image') }} *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="{{  asset('assets/images/placeholder.png') }}"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1">{{ __('Image Size Should Be 708 x 277.') }}</span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left">{{ __('Upload Image...') }}</span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title">{{ __('Title') }} *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="{{ __('Enter Title') }}" value="{{ old('title') }}" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details">{{ __('Details') }} *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="{{ __('Enter Details') }}"-->
<!--											>{{ old('details') }}</textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog">{{ __('Select Blog') }} *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled>{{__('Select Blog')}}</option>-->
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
<!--											class="btn btn-secondary ">{{ __('Submit') }}</button>-->
<!--									</div>-->

                                       
<!--                            </form>-->
<!--                        </div>-->



<!--                        <div class="tab-pane fade" id="v-pills-t6" role="tabpanel" aria-labelledby="v-pills-t6-tab">-->
<!--                        <form class="admin-form" action="{{ route('back.post.store') }}" method="POST" enctype="multipart/form-data">-->
<!--                                @include('alerts.alerts')-->
<!--                                @csrf-->
<!--                                <div class="form-group">-->
<!--										<label for="name">{{ __('Set Image') }} *</label>-->
<!--										<br>-->
<!--											<img class="admin-img" src="{{  asset('assets/images/placeholder.png') }}"-->
<!--												alt="No Image Found">-->
<!--										<br>-->
<!--										<span class="mt-1">{{ __('Image Size Should Be 708 x 277.') }}</span>-->
<!--									</div>-->

<!--									<div class="form-group position-relative ">-->
<!--										<label class="file">-->
<!--											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"-->
<!--												aria-label="File browser example" >-->
<!--											<span class="file-custom text-left">{{ __('Upload Image...') }}</span>-->
<!--										</label>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="title">{{ __('Title') }} *</label>-->
<!--										<input type="text" name="title" class="form-control" id="title"-->
<!--											placeholder="{{ __('Enter Title') }}" value="{{ old('title') }}" >-->
<!--									</div>-->
                                        
<!--                                    <div class="form-group">-->
<!--										<label for="details">{{ __('Details') }} *</label>-->
<!--										<textarea name="details" id="details" class="form-control text-editor" rows="5"-->
<!--											placeholder="{{ __('Enter Details') }}"-->
<!--											>{{ old('details') }}</textarea>-->
<!--									</div>-->

<!--                                    <div class="form-group">-->
<!--										<label for="blog">{{ __('Select Blog') }} *</label>-->
<!--										<select name="blog" id="blog" class="form-control" >-->
<!--											<option value="" selected disabled>{{__('Select Blog')}}</option>-->
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
<!--											class="btn btn-secondary ">{{ __('Submit') }}</button>-->
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

{{-- DELETE MODAL --}}

  <!-- <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="confirm-deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content"> -->

		<!-- Modal Header -->
        <!-- <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">{{ __('Confirm Delete?') }}</h3>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
		</div> -->

		<!-- Modal Body -->
        <!-- <div class="modal-body">
			{{ __('You are going to delete this post. All contents related with this post will be lost.') }} {{ __('Do you want to delete it?') }}
		</div> -->

		<!-- Modal footer -->
        <!-- <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
			<form action="" class="d-inline btn-ok" method="POST">

                @csrf

                @method('DELETE')

                <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>

			</form>
		</div>

      </div>
    </div>
  </div> -->

{{-- DELETE MODAL ENDS --}}

@endsection
