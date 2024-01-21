@extends('master.back')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0  pl-3"><b>{{ __('Franchise Details') }}</b> </h3>
                <a class="btn btn-primary btn-sm" href="{{route('back.franchise.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">
        <form method="GET">
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
                                    <td> <input type="text" name="pr_info_name" class="form-control" id="text"
                                     value="{{$user->pr_info_name}}" readonly></td>
                                </tr>

                                <tr>
                                    <th>{{ __("Contact Number") }}</th>
                                    <td> <input type="text" name="mobile_telephone" class="form-control" id="text"
                                     value="{{$user->mobile_telephone}}" readonly></td>
                                </tr>

                                <tr>
                                    <th>{{ __("Email") }}</th>
                                    <td> <input type="text" name="email" class="form-control" id="text"
                                     value="{{$user->email}}" readonly></td>
                                </tr>

                                <!-- <tr>
                                    <th>{{ __("Pincode") }}</th>
                                    <td> <input type="text" name="pincode" class="form-control" id="text"
                                     value="{{$user->pincode}}" ></td>
                                </tr> -->

                                <tr>
                                    <th>{{ __("City") }}</th>
                                    <td> <input type="text" name="cty" class="form-control" id="text"
                                     value="{{$user->city}}" readonly></td>
                                </tr>

                                <tr>
                                    <th>{{ __("Business/work") }}</th>
                                    <td> <input type="text" name="business_describe" class="form-control" id="text"
                                     value="{{$user->business_describe}}" readonly></td>
                                </tr>


                                <tr>
                                    <th>{{ __("Investment") }}</th>
                                    <td> <input type="text" name="business_describe" class="form-control" id="text"
                                     value="{{$user->investment}}" readonly></td>
                                </tr>

                                <!-- <tr>
                                    <th>{{ __("State") }}</th>
                                    <td> <input type="text" name="state" class="form-control" id="text"
                                     value="{{$user->state}}" ></td>
                                </tr> -->
    

                            </table>
                            <!-- <button type="submit" class="btn btn-secondary ">{{ __('Submit') }}</button> -->
                        </div>
                    </div>
			</div>
        </form>
		</div>

	</div>

</div>

@endsection
