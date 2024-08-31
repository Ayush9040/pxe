@php
    $user = Auth::user();
@endphp
<div class="col-lg-4">
    <aside class="user-info-wrapper">
      <div class="user-info">
        <div class="user-avatar">

          <img id="avater_photo_view" src="{{$user->photo ? asset('assets/images/'.$user->photo) : asset('assets/images/profile_icon.png')}}" alt="User">
        </div>

        <div class="user-data">
          <h4 class="h5 uppercase">{{$user->first_name}} {{$user->last_name}}</h4><span class="uppercase">{{$user->membership}}</span><span class="uppercase">{{__('Joined')}} {{$user->created_at->format('M D Y')}}</span>
        </div>
      </div>
      <nav class="list-group">
        <a class="list-group-item {{ request()->is('user/dashboard') ? 'active' : '' }} uppercase" href="{{route('user.dashboard')}}"><i class="icon-command"></i>{{__('Dashboard')}}</a>
        <a class="list-group-item {{ request()->is('user/profile') ? 'active' : '' }} uppercase" href="{{route('user.profile')}}"><i class="icon-user"></i>{{__('Profile')}}</a>
        <a class="list-group-item {{ request()->is('user/ticket') ? 'active' : '' }} uppercase" href="{{route('user.ticket')}}"><i class="icon-file-text"></i>{{__('Support Ticket')}}</a>
        <a class="list-group-item with-badge {{ request()->is('user/orders') ? 'active' : '' }} uppercase" href="{{route('user.order.index')}}"><i class="icon-shopping-bag"></i>{{__('Orders')}}<span class="badge badge-default badge-pill">{{$user->orders->count()}}</span></a>
        <a class="list-group-item {{ request()->is('user/addresses') ? 'active' : '' }} uppercase" href="{{route('user.address')}}"><i class="icon-map-pin"></i>{{__('Address')}}</a>
        <a class="list-group-item  with-badge {{ request()->is('user/wishlists') ? 'active' : '' }} uppercase" href="{{route('user.wishlist.index')}}"><i class="icon-heart"></i>{{__('Wishlist')}}<span class="badge badge-default badge-pill">{{$user->wishlists->count()}}</span></a>
        <!--<a class="list-group-item remove-account with-badge uppercase" data-bs-toggle="modal" data-bs-target=".modal" href="javascript:;"><i class="icon-trash"></i>{{__('Delete Account')}}</a>-->
        <a class="list-group-item with-badge uppercase" href="{{route('user.logout')}}"><i class="icon-log-out"></i>{{__('Log out')}}</a>
      </nav>
    </aside>

    <div class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title uppercase" >{{__('Remove Account')}}</h5>
            <button type="button" class="btn-close uppercase" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="uppercase">{{__('Are You Sure?')}}</p>
            <p class="uppercase">{{__('Do you remove you account?')}}</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary uppercase" data-bs-dismiss="modal">{{__('Close')}}</button>
            <a href="{{route('user.account.remove')}}" type="button" class="btn btn-danger uppercase">{{__('Remove Account')}}</a>
          </div>
        </div>
      </div>
    </div>

  </div>
