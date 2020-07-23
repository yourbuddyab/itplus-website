 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
 <a href="{{route('dashboard')}}" class="brand-link">
    <img src="{{URL::asset('/assets/image/backlogo/favicon.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8"/>
      <span class="brand-text font-weight-light">IT PLUS</span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::asset('/assets/image/backlogo/avtar.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
          <a href="{{url('/backend/home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>

          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Category<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/backend/category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/backend/category/manage-category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Categories</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Services<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/backend/services')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/backend/services/manage-service')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Services</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Products<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/backend/products')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/backend/products/manageproducts')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Products</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Our Portfolio<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/backend/portfolio/')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Portfolio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/backend/portfolio/manageportfolio')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Portfolio</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Testimonial<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/backend/testimonial/')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/backend/testimonial/managetestimonial')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Testimonial</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Team<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/backend/team/')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/backend/team/manageteam')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Team</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>About Us<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/backend/about')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Content</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/backend/about/manage-content')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Content</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Logo<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/backend/logo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/backend/logo/managelogo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Logo</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Slider<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/backend/slider')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/backend/slider/manageslider')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Slider</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Contact Us<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/backend/contact/')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/backend/contact/managecontact')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Contact</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('/backend/contact/managecontactus')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Contact</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('/backend/contact/manageproducts')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Products Enquiry</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <script>
    $(document).ready(function() {
      var url = window.location.pathname;
      $('a[href="' + url + '"]').addClass('menu-open');
      $('a[href="' + url + '"]').parent().parent().css('display','block');
      $('a[href="' + url + '"]').parent().parent().parent().addClass('menu-open');
      $('a[href="' + url + '"]').parent().parent().parent().children(0).addClass('active');
    });
    </script>