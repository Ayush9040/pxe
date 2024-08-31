<ul class="nav">

    <li class="nav-item">
        <a href="{{ route('back.dashboard') }}">
            <i class="fas fa-home"></i>
            <p class="uppercase">{{ __('Dashboard') }}</p>
        </a>
    </li>

    @php
        if(Auth::guard('admin')->user()->role->section != 'null'){
            $section = json_decode(Auth::guard('admin')->user()->role->section,true);
        }else{
            $section = [];
        }
    @endphp

    @if (in_array('Manage Categories',$section))
    <li class="nav-item">
        <a data-toggle="collapse" href="#category">
            <i class="fas fa-list-alt"></i>
            <p class="uppercase">{{ __('Manage Categories') }}</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="category">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="{{ route('back.category.index') }}">
                        <span class="sub-item uppercase">{{ __('Categories') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.subcategory.index') }}">
                        <span class="sub-item uppercase">{{ __('Sub categories') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.childcategory.index') }}">
                        <span class="sub-item uppercase">{{ __('Child categories') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.premiumcategory.index') }}">
                        <span class="sub-item uppercase">{{ __('Premium categories') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    @endif

    @if (in_array('Manage Products',$section))
    <li class="nav-item">
        <a data-toggle="collapse" href="#items">
            <i class="fab fa-product-hunt"></i>
            <p class="uppercase">{{ __('Manage Products') }}</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="items">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="{{ route('back.brand.index') }}">
                        <span class="sub-item uppercase">{{ __('Brands') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.item.add') }}">
                        <span class="sub-item uppercase">{{ __('Add Product') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.item.index') }}">
                        <span class="sub-item uppercase">{{ __('All Products') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.item.stock.out') }}">
                        <span class="sub-item uppercase">{{ __('Stock Out Products') }}</span>
                    </a>
                </li>
                <!--<li>-->
                <!--    <a class="sub-link" href="{{ route('back.campaign.index') }}">-->
                <!--        <span class="sub-item">{{ __('Campaign Offer') }}</span>-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a class="sub-link" href="{{ route('back.bulk.product.index') }}">-->
                <!--        <span class="sub-item">{{ __('CSV Import & Export') }}</span>-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a class="sub-link" href="{{ route('back.review.index') }}">-->
                <!--      <span class="sub-item">{{ __('Product Reviews') }}</span></a>-->
                <!--</li>-->
            </ul>
        </div>
    </li>
    @endif

    @if (in_array('Manage Orders',$section))
    <li class="nav-item {{ request()->is('orders/*') ? 'submenu' : '' }}">
        <a data-toggle="collapse" href="#order">
            <i class="fab fa-first-order"></i>
            <p class="uppercase">{{ __('Manage Orders') }} </p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="order">
            <ul class="nav nav-collapse">
                <li class="{{!request()->input('type') && request()->is('admin/orders')  ? 'active' : ''}}">
                    <a class="sub-link" href="{{ route('back.order.index') }}">
                        <span class="sub-item uppercase">{{ __('All Orders') }}</span>
                    </a>
                </li>
                <li class="{{request()->input('type') == 'Pending' ? 'active' : ''}}">
                    <a class="sub-link" href="{{ route('back.order.index').'?type='.'Pending' }}">
                        <span class="sub-item uppercase">{{ __('Pending Orders') }}</span>
                    </a>
                </li>
                <li class="{{request()->input('type') == 'In Progress' ? 'active' : ''}}">
                    <a class="sub-link" href="{{ route('back.order.index').'?type='.'In Progress' }}">
                        <span class="sub-item uppercase">{{ __('Progress Orders') }}</span>
                    </a>
                </li>

                <li class="{{request()->input('type') == 'Delivered' ? 'active' : ''}}">
                    <a class="sub-link" href="{{ route('back.order.index').'?type='.'Delivered' }}">
                        <span class="sub-item uppercase">{{ __('Delivered Orders') }}</span>
                    </a>
                </li>
                <li class="{{request()->input('type') == 'Canceled' ? 'active' : ''}}">
                    <a class="sub-link" href="{{ route('back.order.index').'?type='.'Canceled' }}">
                        <span class="sub-item uppercase">{{ __('Canceled Orders') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    @endif

    <li class="nav-item">
        <a data-toggle="collapse" href="#bundle">
            <i class="fas fa-list-alt"></i>
            <p class="uppercase">{{ __('Manage Bundles') }}</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="bundle">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="{{ route('back.category.index') }}">
                        <span class="sub-item uppercase">{{ __('Add Bundle Categories') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.subcategory.index') }}">
                        <span class="sub-item uppercase">{{ __('Add Bundle Product') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.childcategory.index') }}">
                        <span class="sub-item uppercase">{{ __('All Bundle Products') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    @if (in_array('Transactions',$section))
    <li class="nav-item">
        <a  href="{{ route('back.transaction.index') }}">
            <i class="fas fa-random"></i>
          <p class="uppercase">{{ __('Transactions') }}</p>
        </a>
    </li>
    @endif

    @if (in_array('Ecommerce',$section))
    <li class="nav-item">
        <a data-toggle="collapse" href="#ecommerce">
            <i class="fas fa-newspaper"></i>
            <p class="uppercase">{{ __('Ecommerce') }}</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="ecommerce">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="{{ route('back.code.index') }}">
                      <span class="sub-item uppercase">{{ __('Set Coupons') }}</span></a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.shipping.index') }}">
                        <span class="sub-item uppercase">{{ __('Shipping') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.state.index') }}">
                        <span class="sub-item uppercase">{{ __('State Tax') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.tax.index') }}">
                        <span class="sub-item uppercase">{{ __('Tax') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.currency.index') }}">
                        <span class="sub-item uppercase">{{ __('Currency') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.setting.payment') }}">
                        <span class="sub-item uppercase">{{ __('Payment') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    @endif



   @if (in_array('Customer List',$section))
      <li class="nav-item">
        <a href="{{ route('back.user.index') }}">
          <i class="fas fa-users"></i>
          <p class="uppercase">{{ __('Customer List') }}</p></a>
    </li>
    @endif
    @if (in_array('Customer List',$section))
      <li class="nav-item">
        <a href="{{ route('back.b2b.index') }}">
          <i class="fas fa-users"></i>
          <p class="uppercase">{{ __('B2B Customer List') }}</p></a>
    </li>
    @endif
    @if (in_array('Customer List',$section))
      <li class="nav-item">
        <a href="{{ route('back.vault.index') }}">
          <i class="fas fa-users"></i>
          <p class="uppercase">{{ __('VAULT Customer List') }}</p></a>
    </li>
    @endif
    

    <!-- @if (in_array('Customer List',$section)) -->
      <!-- <li class="nav-item">
        <a href="{{ route('back.franchise.index') }}">
          <i class="fas fa-users"></i>
          <p>{{ __('Franchise') }}</p></a>
    </li> -->
    <!-- @endif -->

    <!-- <li class="nav-item">
                    <a  class="sub-link" href="{{ route('back.slider.index') }}">
                    <i class="fas fa-users"></i>
                        <p class="sub-item">{{ __('Sliders') }}</p>
                    </a>
                </li> -->

    @if (in_array('Transactions',$section))
    <li class="nav-item">
        <a href="{{ route('back.ticket.index') }}">
            <i class="fas fa-comments"></i>
          <p class="uppercase">{{ __('Manages Tickets') }}</p></a>
    </li>
    @endif

    @if (in_array('Transactions',$section))
    <li class="nav-item">
        <a data-toggle="collapse" href="#content">
            <i class="fas fa-tasks"></i>
            <p class="uppercase">{{ __('Manage Site') }}</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="content">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="{{ route('back.setting.system') }}">
                        <span class="sub-item uppercase">{{ __('General Settings') }}</span>
                    </a>
                </li>
                <li>
                  <a class="sub-link" href="{{ route('back.homePage') }}">
                     <span class="sub-item uppercase">{{ __('Home Page') }}</span>
                   </a>
               </li>
                <li>
                    <a  class="sub-link" href="{{ route('back.slider.index') }}">
                        <span class="sub-item uppercase">{{ __('Sliders') }}</span>
                    </a>
                </li>
                <li>
                    <a  class="sub-link" href="{{ route('back.exclusive.index') }}">
                        <span class="sub-item uppercase">{{ __('Exclusive deals') }}</span>
                    </a>
                </li>
                <!--<li>-->
                <!--    <a class="sub-link" href="{{ route('back.service.index') }}">-->
                <!--        <span class="sub-item">{{ __('Services') }}</span>-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a class="sub-link" href="{{ route('back.setting.section') }}">-->
                <!--        <span class="sub-item">{{ __('Visibility') }}</span>-->
                <!--    </a>-->
                <!--</li>-->

                <li>
                    <a class="sub-link" href="{{ route('back.setting.social') }}">
                        <span class="sub-item uppercase">{{ __('Social Login') }}</span>
                    </a>
                </li>

                <li>
                    <a class="sub-link" href="{{ route('back.setting.email') }}">
                        <span class="sub-item uppercase">{{ __('Email Settings') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.setting.sms') }}">
                        <span class="sub-item uppercase">{{ __('SMS Settings') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.subscribers.announcement') }}">
                      <span class="sub-item uppercase">{{ __('Announcement') }}</span></a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.cookie.alert') }}">
                      <span class="sub-item uppercase">{{ __('Cookies Alert') }}</span></a>
                </li>

                <li>
                    <a class="sub-link" href="{{ route('back.setting.maintainance') }}">
                      <span class="sub-item uppercase">{{ __('Maintainance') }}</span></a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('admin.sitemap.index') }}">
                      <span class="sub-item uppercase">{{ __('Sitemap') }}</span></a>
                </li>
                <!--<li>-->
                <!--    <a class="sub-link" href="{{ route('back.language.index') }}">-->
                <!--      <span class="sub-itemuppercase">{{ __('Language') }}</span></a>-->
                <!--</li>-->
            </ul>
        </div>
    </li>
    @endif



    @if (in_array('Transactions',$section))
    <li class="nav-item">
        <a data-toggle="collapse" href="#faqs">
            <i class="fas fa-question-circle"></i>
            <p class="uppercase">{{ __('Manage Faqs') }}</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="faqs">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="{{ route('back.fcategory.index') }}">
                        <span class="sub-item uppercase">{{ __('Categories') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.faq.index') }}">
                        <span class="sub-item uppercase">{{ __('Faqs') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    @endif



    @if (in_array('Transactions',$section))
    <li class="nav-item">
        <a data-toggle="collapse" href="#post">
            <i class="fas fa-rss-square"></i>
            <p class="uppercase">{{ __('Manage Blogs') }}</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="post">
            <ul class="nav nav-collapse">
                <!--<li>-->
                <!--    <a class="sub-link" href="{{ route('back.bcategory.index') }}">-->
                <!--        <span class="sub-item">{{ __('Categories') }}</span>-->
                <!--    </a>-->
                <!--</li>-->
                <li>
                    <a class="sub-link" href="{{ route('back.post.index') }}">
                        <span class="sub-item uppercase">{{ __('Blogs') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.post.show') }}">
                        <span class="sub-item uppercase">{{ __('Blogs List') }}</span>
                    </a>
                </li>
                <!--<li>-->
                <!--    <a class="sub-link" href="{{ route('back.post.index') }}">-->
                <!--        <span class="sub-item">{{ __('Bloogs') }}</span>-->
                <!--    </a>-->
                <!--</li>-->
            </ul>
        </div>
    </li>
    @endif

    @if (in_array('Transactions',$section))
    <li class="nav-item">
        <a href="{{ route('back.page.index') }}">
            <i class="fas fa-book"></i>
            <p class="uppercase">{{ __('Manages Pages') }}</p>
        </a>
    </li>
    @endif

    @if (in_array('Transactions',$section))
    <li class="nav-item">
        <a href="{{ route('back.subscribers.index') }}">
            <i class="fab fa-telegram-plane"></i>
            <p class="uppercase">{{ __('Subscribers List') }}</p>
        </a>
    </li>
    @endif

    @if (in_array('Transactions',$section))
    <li class="nav-item">
        <a data-toggle="collapse" href="#user">
            <i class="far fa-user"></i>
            <p class="uppercase">{{ __('System User') }}</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="user">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="{{ route('back.role.index') }}">
                        <span class="sub-item uppercase">{{ __('Role') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.staff.index') }}">
                        <span class="sub-item uppercase">{{ __('System User') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    @endif

    @if (in_array('Transactions',$section))
    <li class="nav-item">
        <a data-toggle="collapse" href="#backup">
            <i class="fas fa-hdd"></i>
            <p class="uppercase">{{ __('System Backup') }}</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="backup">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="{{ route('back.system.backup') }}">
                        <span class="sub-item uppercase">{{ __('System Backup') }}</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="{{ route('back.database.backup') }}">
                        <span class="sub-item uppercase">{{ __('Database Backup') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    @endif
    <li class="nav-item">
        <a href="{{ route('front.cache.clear') }}">
            <i class="fas fa-broom"></i>
            <p class="uppercase">{{ __('Cache Clear') }}</p>
        </a>
    </li>

</ul>
