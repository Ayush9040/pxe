@extends('master.back')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0  pl-3"><b>{{ __('Customers Details') }}</b> </h3>
                <a class="btn btn-primary btn-sm" href="{{route('back.user.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">
        <form action="{{route('back.user.update',$user->id)}}" method="POST">
            @csrf
            @method('PUT')  
            @include('alerts.alerts')
			<div class="card">

					<!-- Nested Row within Card Body -->
                    <div class="card-body">
                        <div class="gd-responsive-table">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>{{ __("First Name") }}</th>
                                    <td> <input type="text" name="first_name" class="form-control" id="text"
                                     value="{{$user->first_name}}" ></td>
                                </tr>
                                <tr>
                                    <th>{{ __("Last Name") }}</th>
                                    <td><input type="text" name="last_name" class="form-control" id="text"
                                     value="{{$user->last_name}}" ></td>
                                </tr>
                                <tr>
                                    <th>{{ __("Email Address") }}</th>
                                    <td><input type="text" name="email" class="form-control" id="text"
                                         value="{{$user->email}}" ></td>
                                </tr>
                                <tr>
                                    <th>{{ __("Phone Number") }}</th>
                                    <td><input type="text" name="phone" class="form-control" id="text"
                                         value="{{$user->phone}}" ></td>
                                </tr>
                                <input type="hidden" name="user_id" id="" value="{{$user->id}}">
                               @if($user->vault==1)
                                <tr>
                                    <th>{{ __("Access code") }}</th>
                                    <td><input type="password" name="password" class="form-control" id="text"
                                        placeholder="{{ __('Access code') }}" value="" ></td>
                                </tr>
                                @else
                                <tr>
                                    <th>{{ __("Password") }}</th>
                                    <td><input type="password" name="password" class="form-control" id="text"
                                        placeholder="{{ __('Password') }}" value="" ></td>
                                </tr>
                                @endif

                                <tr>
                                    <th>{{ __("Total Orders") }}</th>
                                    <td>{{count($user->orders)}}</td>
                                </tr>
                                <tr>
                                    <th>{{ __("Joined") }}</th>
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th>{{ __("Category") }}</th>
                                    <td>
                                        <select name="membership" id="membership">
                                            <option value="white">white</option>
                                            <option value="red">red</option>
                                            <option value="black">black</option>
                                            <option value="grey">grey</option>
                                            <option value=""></option>
                                        </select>
                                    </td>
                                </tr>
                                @if($user->b2bstatus==1 or $user->vault==1)
                                <tr>
                                   
                                    <th>{{ __(" Customer Active") }}</th>
                                    @if($user->activestatus==1)
                                    <td>
                                        <select name="activestatus" id="activestatus">
                                            <option value="0">Inactive</option>
                                            <option value="1" selected>Active</option>
                                            
                                        </select>
                                    </td>
                                    @else
                                    <td>
                                        <select name="activestatus" id="activestatus">
                                            <option value="0" selected>Inactive</option>
                                            <option value="1" >Active</option>
                                            
                                        </select>
                                    </td>
                                    @endif
                                </tr>
                                
                                @endif

                            </table>
                            <button type="submit" class="btn btn-secondary ">{{ __('Submit') }}</button>
                        </div>
                    </div>
			</div>
        </form>
		</div>

	</div>

</div>

@endsection
