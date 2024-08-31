<?php
    $user = Auth::user();
?>
<div class="col-lg-4">
    <aside class="user-info-wrapper">
      <div class="user-info">
        <div class="user-avatar">

          <img id="avater_photo_view" src="<?php echo e($user->photo ? asset('assets/images/'.$user->photo) : asset('assets/images/profile_icon.png')); ?>" alt="User">
        </div>

        <div class="user-data">
          <h4 class="h5 uppercase"><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></h4><span class="uppercase"><?php echo e($user->membership); ?></span><span class="uppercase"><?php echo e(__('Joined')); ?> <?php echo e($user->created_at->format('M D Y')); ?></span>
        </div>
      </div>
      <nav class="list-group">
        <a class="list-group-item <?php echo e(request()->is('user/dashboard') ? 'active' : ''); ?> uppercase" href="<?php echo e(route('user.dashboard')); ?>"><i class="icon-command"></i><?php echo e(__('Dashboard')); ?></a>
        <a class="list-group-item <?php echo e(request()->is('user/profile') ? 'active' : ''); ?> uppercase" href="<?php echo e(route('user.profile')); ?>"><i class="icon-user"></i><?php echo e(__('Profile')); ?></a>
        <a class="list-group-item <?php echo e(request()->is('user/ticket') ? 'active' : ''); ?> uppercase" href="<?php echo e(route('user.ticket')); ?>"><i class="icon-file-text"></i><?php echo e(__('Support Ticket')); ?></a>
        <a class="list-group-item with-badge <?php echo e(request()->is('user/orders') ? 'active' : ''); ?> uppercase" href="<?php echo e(route('user.order.index')); ?>"><i class="icon-shopping-bag"></i><?php echo e(__('Orders')); ?><span class="badge badge-default badge-pill"><?php echo e($user->orders->count()); ?></span></a>
        <a class="list-group-item <?php echo e(request()->is('user/addresses') ? 'active' : ''); ?> uppercase" href="<?php echo e(route('user.address')); ?>"><i class="icon-map-pin"></i><?php echo e(__('Address')); ?></a>
        <a class="list-group-item  with-badge <?php echo e(request()->is('user/wishlists') ? 'active' : ''); ?> uppercase" href="<?php echo e(route('user.wishlist.index')); ?>"><i class="icon-heart"></i><?php echo e(__('Wishlist')); ?><span class="badge badge-default badge-pill"><?php echo e($user->wishlists->count()); ?></span></a>
        <!--<a class="list-group-item remove-account with-badge uppercase" data-bs-toggle="modal" data-bs-target=".modal" href="javascript:;"><i class="icon-trash"></i><?php echo e(__('Delete Account')); ?></a>-->
        <a class="list-group-item with-badge uppercase" href="<?php echo e(route('user.logout')); ?>"><i class="icon-log-out"></i><?php echo e(__('Log out')); ?></a>
      </nav>
    </aside>

    <div class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title uppercase" ><?php echo e(__('Remove Account')); ?></h5>
            <button type="button" class="btn-close uppercase" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="uppercase"><?php echo e(__('Are You Sure?')); ?></p>
            <p class="uppercase"><?php echo e(__('Do you remove you account?')); ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary uppercase" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
            <a href="<?php echo e(route('user.account.remove')); ?>" type="button" class="btn btn-danger uppercase"><?php echo e(__('Remove Account')); ?></a>
          </div>
        </div>
      </div>
    </div>

  </div>
<?php /**PATH /home/u384171748/domains/block55.in/public_html/core/resources/views/includes/user_sitebar.blade.php ENDPATH**/ ?>