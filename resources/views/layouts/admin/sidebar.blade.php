  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Admin</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                  <li class="nav-item">
                      <a href="{{ route('admin.dashboard') }}"
                          class="nav-link @if (Route::currentRouteName() == 'admin.dashboard') active @endif">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              {{ __('custom.dashboard.dashboard') }}
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                  </li>

                  {{-- Start services --}}
                  <li class="nav-item has-treeview menu-open">
                      <a href="#" class="nav-link @if (Route::currentRouteName() == 'admin.service.index' ||
                              Route::currentRouteName() == 'admin.service.create' ||
                              Route::currentRouteName() == 'admin.service.custom_update' ||
                              Route::currentRouteName() == 'admin.service.destroy' ||
                              Route::currentRouteName() == 'admin.service-category.index' ||
                              Route::currentRouteName() == 'admin.service-category.create' ||
                              Route::currentRouteName() == 'admin.service-category.custom_update' ||
                              Route::currentRouteName() == 'admin.service-category.destroy') active @endif">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              {{ __('custom.dashboard.services') }}
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('admin.service-category.index') }}"
                                  class="nav-link  @if (Route::currentRouteName() == 'admin.service-category.index' ||
                                          Route::currentRouteName() == 'admin.service-category.create' ||
                                          Route::currentRouteName() == 'admin.service-category.custom_update' ||
                                          Route::currentRouteName() == 'admin.service-category.destroy') active @endif">
                                  <i class="nav-icon fas fa-th"></i>

                                  <p>{{ __('custom.dashboard.service_category') }}</p>
                              </a>
                          </li>
                          <li class="nav-item ">
                              <a href="{{ route('admin.service.index') }}"
                                  class="nav-link @if (Route::currentRouteName() == 'admin.service.index' ||
                                          Route::currentRouteName() == 'admin.service.create' ||
                                          Route::currentRouteName() == 'admin.service.custom_update' ||
                                          Route::currentRouteName() == 'admin.service.destroy') active @endif">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>{{ __('custom.dashboard.services') }}</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  {{-- End services --}}

                  <li class="nav-item has-treeview menu-open">
                      <a href="#" class="nav-link @if (Route::currentRouteName() == 'admin.project.index' ||
                              Route::currentRouteName() == 'admin.project.create' ||
                              Route::currentRouteName() == 'admin.project.custom_update' ||
                              Route::currentRouteName() == 'admin.project.destroy' ||
                              Route::currentRouteName() == 'admin.project-category.index' ||
                              Route::currentRouteName() == 'admin.project-category.create' ||
                              Route::currentRouteName() == 'admin.project-category.custom_update' ||
                              Route::currentRouteName() == 'admin.project-category.destroy') active @endif">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              {{ __('custom.dashboard.projects') }}
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('admin.project-category.index') }}"
                                  class="nav-link @if (Route::currentRouteName() == 'admin.project-category.index' ||
                                          Route::currentRouteName() == 'admin.project-category.create' ||
                                          Route::currentRouteName() == 'admin.project-category.custom_update' ||
                                          Route::currentRouteName() == 'admin.project-category.destroy') active @endif">
                                  <i class="nav-icon fas fa-th"></i>

                                  <p>{{ __('custom.dashboard.project_category') }}</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('admin.project.index') }}"
                                  class="nav-link @if (Route::currentRouteName() == 'admin.project.index' ||
                                          Route::currentRouteName() == 'admin.project.create' ||
                                          Route::currentRouteName() == 'admin.project.custom_update' ||
                                          Route::currentRouteName() == 'admin.project.destroy') active @endif">
                                  <i class="nav-icon fas fa-cubes"></i>
                                  <p>
                                      {{ __('custom.dashboard.projects') }}
                                      <span class="right badge badge-danger">New</span>
                                  </p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('admin.team-members.index') }}"
                          class="nav-link @if (Route::currentRouteName() == 'admin.team-members.index') active @endif ">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              {{ __('custom.dashboard.team_members') }}
                              <span class="right badge badge-danger">New</span>
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.client.index') }}"
                          class="nav-link @if (Route::currentRouteName() == 'admin.client.index') active @endif ">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              {{ __('custom.dashboard.clients') }}
                              <span class="right badge badge-danger">New</span>
                          </p>
                      </a>
                  </li>


              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
