<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('images/brand/blue.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text text-light">Dashboard</span>
              </a>
            </li>
            {{-- order side menu --}}
            <li class="nav-item ">
              <a class="nav-link "  href="#ordermenu" data-toggle="collapse" aria-expanded="false"  >
                <i class="ni ni-money-coins text-orange"></i>
                <span class="nav-link-text  text-light">Orders</i></span>
              </a>
              <div id='ordermenu' class="collapse sidebar-submenu ">
                <a href="#" class="list-group-item list-group-item-action bg-info">
                    <span class=" menu-collapsed nav-link-text ">{{ __('All Orders') }}</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-info">
                    <span class="  menu-collapsed ">{{ __('Pending Orders') }}</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-info">
                    <span class="  menu-collapsed ">{{ __('Processing Orders') }}</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-info">
                    <span class="  menu-collapsed ">{{ __('Completed Orders') }}</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-info">
                    <span class="  menu-collapsed ">{{ __('Declined Orders') }}</span>
                </a>
            </div>
            </li>
            {{-- category menu --}}
            <li class="nav-item ">
                <a class="nav-link "  href="#categorymenu" data-toggle="collapse" aria-expanded="false"  >
                  <i class="ni ni-archive-2 text-yellow"></i>
                  <span class="nav-link-text text-light">{{ __('Manage Categories') }}</i></span>
                </a>
                <div id='categorymenu' class="collapse sidebar-submenu ">
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class=" menu-collapsed nav-link-text ">{{ __('Main category') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class="  menu-collapsed ">{{ __('Child category') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                    <span class="  menu-collapsed ">{{ __('Sub category') }}</span>
                </a>

              </div>
              </li>
            {{-- product side menu --}}
            <li class="nav-item ">
                <a class="nav-link "  href="#productmenu" data-toggle="collapse" aria-expanded="false"  >
                  <i class="ni ni-cart text-green"></i>
                  <span class="nav-link-text text-light">{{ __('Products') }}</i></span>
                </a>
                <div id='productmenu' class="collapse sidebar-submenu ">
                    <a href="#physical" class="list-group-item list-group-item-action bg-info" >
                        <span class="  menu-collapsed ">{{ __('Add New Products') }}</span>
                    </a>

                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class="  menu-collapsed ">{{ __('All Products') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class="  menu-collapsed ">{{ __('Deactivated Product') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class="  menu-collapsed ">{{ __('Product Catalogs') }}</span>
                  </a>
              </div>
              </li>
              {{-- Customer Side Menu --}}
              <li class="nav-item ">
                <a class="nav-link "  href="#customermenu" data-toggle="collapse" aria-expanded="false"  >
                  <i class="ni ni-circle-08 text-red"></i>
                  <span class="nav-link-text text-light">{{ __('Customers') }}</i></span>
                </a>
                <div id='customermenu' class="collapse sidebar-submenu ">
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class=" menu-collapsed nav-link-text ">{{ __('Customers List') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class="  menu-collapsed ">{{ __('Withdraws') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class="  menu-collapsed ">{{ __('Customer Default Image') }}</span>
                  </a>
              </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link "  href="#affiliate" data-toggle="collapse" aria-expanded="false"  >
                  <i class="ni ni-cart text-blue"></i>
                  <span class="nav-link-text text-light">{{ __('Affiliate Products') }}</i></span>
                </a>
                <div id='affiliate' class="collapse sidebar-submenu ">
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class=" menu-collapsed nav-link-text ">{{ __('Add Affiliate Products') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class="  menu-collapsed ">{{ __('All Affiliate Products') }}</span>
                  </a>

              </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link "  href="#vendormenu" data-toggle="collapse" aria-expanded="false"  >
                  <i class="ni ni-shop text-red"></i>
                  <span class="nav-link-text text-light">{{ __('Vendors') }}</i></span>
                </a>
                <div id='vendormenu' class="collapse sidebar-submenu ">
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class=" menu-collapsed nav-link-text ">{{ __('Vendors List') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class="  menu-collapsed ">{{ __('Withdraws') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class="  menu-collapsed ">{{ __('Vendor Subscriptions') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                    <span class="  menu-collapsed ">{{ __('Default Background') }}</span>
                </a>
              </div>
              </li>

              <li class="nav-item ">
                <a class="nav-link "  href="#vendorverify" data-toggle="collapse" aria-expanded="false"  >
                  <i class="ni ni-check-bold text-success"></i>
                  <span class="nav-link-text text-light">{{ __('Vendor Verifications') }}</i></span>
                </a>
                <div id='vendorverify' class="collapse sidebar-submenu ">
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class=" menu-collapsed nav-link-text ">{{ __('All Verifications') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class="  menu-collapsed ">{{ __('Pending Verification') }}</span>
                  </a>

              </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link list-group-item  bg-info"  href="#" >
                  <i class="ni ni-money-coins text-yellow"></i>
                  <span class="nav-link-text text-light">{{ __('Vendor Subscription Plans') }}</i></span>
                </a>

              </li>

              <li class="nav-item ">
                <a class="nav-link list-group-item  bg-info"  href="#" >
                  <i class="ni ni-cloud-upload-96 text-red"></i>
                  <span class="menu-collapsed text-light">{{ __('Bulk Product Upload') }}</i></span>
                </a>

              </li>
              <li class="nav-item ">
                <a class="nav-link "  href="#chat" data-toggle="collapse" aria-expanded="false"  >
                  <i class="ni ni-chat-round text-light"></i>
                  <span class="nav-link-text text-light">{{ __('Product Discussion') }}</i></span>
                </a>
                <div id='chat' class="collapse sidebar-submenu ">
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class=" menu-collapsed nav-link-text ">{{ __('Product Reviews') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class="  menu-collapsed ">{{ __('Comments') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                    <span class="  menu-collapsed ">{{ __('Reports') }}</span>
                </a>

              </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link list-group-item  bg-info"  href="#" >
                  <i class="ni ni-trophy text-yellow"></i>
                  <span class="menu-collapsed text-light">{{ __('Set Coupons') }}</i></span>
                </a>

              </li>
              <li class="nav-item ">
                <a class="nav-link "  href="#blog" data-toggle="collapse" aria-expanded="false"  >
                  <i class="ni ni-book-bookmark text-purple"></i>
                  <span class="nav-link-text text-light">{{ __('Blog') }}</i></span>
                </a>
                <div id='blog' class="collapse sidebar-submenu ">
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                      <span class=" menu-collapsed nav-link-text ">{{ __('Categories') }}</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-info">
                    <span class=" menu-collapsed nav-link-text ">{{ __('Posts') }}</span>
                </a>
              </div>
              </li>

            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->

          <!-- Heading -->

          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>



          </ul>
        </div>
      </div>
    </div>
  </nav>
