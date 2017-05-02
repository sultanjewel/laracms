<div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}/admin/index" class="site_title"><i class="fa fa-paw"></i> <span>{{config('app.name','LaraCMS')}}</span></a>
          </div>
          <div class="clearfix"></div>
          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="{{url('/')}}/backend/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>John Doe</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->
          <br />
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/')}}/admin/index">Dashboard</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/index2">Dashboard2</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/index3">Dashboard3</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/')}}/admin/form">General Form</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/form_advanced">Advanced Components</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/form_validation">Form Validation</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/form_wizards">Form Wizard</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/form_upload">Form Upload</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/form_buttons">Form Buttons</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/')}}/admin/general_elements">General Elements</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/media_gallery">Media Gallery</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/typography">Typography</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/icons">Icons</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/glyphicons">Glyphicons</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/widgets">Widgets</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/invoice">Invoice</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/inbox">Inbox</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/calendar">Calendar</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/')}}/admin/tables">Tables</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/tables_dynamic">Table Dynamic</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/')}}/admin/chartjs">Chart JS</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/chartjs2">Chart JS2</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/morisjs">Moris JS</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/echarts">ECharts </a>
                    </li>
                    <li><a href="{{url('/')}}/admin/other_charts">Other Charts </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/')}}/admin/e_commerce">E-commerce</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/projects">Projects</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/project_detail">Project Detail</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/contacts">Contacts</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/profile">Profile</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/')}}/admin/page_404">404 Error</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/page_500">500 Error</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/plain_page">Plain Page</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/login">Login Page</a>
                    </li>
                    <li><a href="{{url('/')}}/admin/pricing_tables">Pricing Tables</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                      <li><a href="#level1_1">Level One</a>
                      <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                          <li class="sub_menu"><a href="{{url('/')}}/admin/level2">Level Two</a>
                          </li>
                          <li><a href="#level2_1">Level Two</a>
                          </li>
                          <li><a href="#level2_2">Level Two</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#level1_2">Level One</a>
                      </li>
                  </ul>
                </li>
                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>
