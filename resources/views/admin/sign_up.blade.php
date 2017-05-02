<!-- TODO: Investigate this broken page -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gentallela Alela! | </title>
  <!-- Bootstrap core CSS -->
  <link href="//ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{url('/')}}/backend/css/animate.min.css" rel="stylesheet">
  <!-- Custom styling plus plugins -->
  <link href="{{url('/')}}/backend/css/custom.css" rel="stylesheet">
  <link href="{{url('/')}}/backend/css/icheck/flat/green.css" rel="stylesheet">
  <script src="{{url('/')}}/backend/js/jquery.min.js"></script>
  <!--[if lt IE 9]>
    <script src="../assets/backend/js/ie8-responsive-file-warning.js"></script>
  <![endif]-->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}/admin/index" class="site_title">Gentellela Alela!</a>
          </div>
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
                    <li><a href="{{url('/')}}/admin/index">Dashboard</a></li>
                    <li><a href="{{url('/')}}/admin/index2">Dashboard2</a></li>
                    <li><a href="{{url('/')}}/admin/index3">Dashboard3</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/')}}/admin/form">General Form</a></li>
                    <li><a href="{{url('/')}}/admin/form_advanced">Advanced Components</a></li>
                    <li><a href="{{url('/')}}/admin/form_validation">Form Validation</a></li>
                    <li><a href="{{url('/')}}/admin/form_wizards">Form Wizard</a></li>
                    <li><a href="{{url('/')}}/admin/form_upload">Form Upload</a></li>
                    <li><a href="{{url('/')}}/admin/form_buttons">Form Buttons</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/')}}/admin/general_elements">General Elements</a></li>
                    <li><a href="{{url('/')}}/admin/media_gallery">Media Gallery</a></li>
                    <li><a href="{{url('/')}}/admin/typography">Typography</a></li>
                    <li><a href="{{url('/')}}/admin/icons">Icons</a></li>
                    <li><a href="{{url('/')}}/admin/glyphicons">Glyphicons</a></li>
                    <li><a href="{{url('/')}}/admin/widgets">Widgets</a></li>
                    <li><a href="{{url('/')}}/admin/invoice">Invoice</a></li>
                    <li><a href="{{url('/')}}/admin/inbox">Inbox</a></li>
                    <li><a href="{{url('/')}}/admin/calendar">Calendar</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/')}}/admin/tables">Tables</a></li>
                    <li><a href="{{url('/')}}/admin/tables_dynamic">Table Dynamic</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/')}}/admin/chartjs">Chart JS</a></li>
                    <li><a href="{{url('/')}}/admin/chartjs2">Chart JS2</a></li>
                    <li><a href="{{url('/')}}/admin/morisjs">Moris JS</a></li>
                    <li><a href="{{url('/')}}/admin/echarts">ECharts </a></li>
                    <li><a href="{{url('/')}}/admin/other_charts">Other Charts </a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/')}}/admin/e_commerce">E-commerce</a></li>
                    <li><a href="{{url('/')}}/admin/e_commerce_backend">E-commerce Backend</a></li>
                    <li><a href="{{url('/')}}/admin/projects">Projects</a></li>
                    <li><a href="{{url('/')}}/admin/project_detail">Project Detail</a></li>
                    <li><a href="{{url('/')}}/admin/contacts">Contacts</a></li>
                    <li><a href="{{url('/')}}/admin/profile">Profile</a></li>
                    <li><a href="{{url('/')}}/admin/real_estate">Real Estate</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{url('/')}}/admin/page_404">404 Error</a></li>
                    <li><a href="{{url('/')}}/admin/page_500">500 Error</a></li>
                    <li><a href="{{url('/')}}/admin/coming_soon">Coming Soon</a></li>
                    <li><a href="{{url('/')}}/admin/plain_page">Plain Page</a></li>
                    <li><a href="{{url('/')}}/admin/login">Login Page</a></li>
                    <li><a href="{{url('/')}}/admin/sign_up">SignUp Page</a></li>
                    <li><a href="{{url('/')}}/admin/pricing_tables">Pricing Tables</a></li>
                  </ul>
                </li>
                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
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
      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
              <li role="presentation" class="dropdown">
                <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="caret"></span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <li>
                    <a>
                      <span class="image">
                                        <img src="{{url('/')}}/backend/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="{{url('/')}}/backend/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="{{url('/')}}/backend/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="{{url('/')}}/backend/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
              <li role="presentation" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                  <i class="fa fa-bell"></i>
                  <span class="caret"></span>
                </a>
                <ul class="animated fadeInDown dropdown-menu" role="menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="clearfix"></div>
      <!-- /top navigation -->
    </div>
  </div>
  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>
  <script src="//ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/bootstrap.min.js"></script>
  <!-- chart js -->
  <script src="{{url('/')}}/backend/js/chartjs/chart.min.js"></script>
  <!-- bootstrap progress js -->
  <script src="{{url('/')}}/backend/js/progressbar/bootstrap-progressbar.min.js"></script>
  <!-- icheck -->
  <script src="{{url('/')}}/backend/js/icheck/icheck.min.js"></script>
  <script src="{{url('/')}}/backend/js/custom.js"></script>
  <!-- pace -->
  <script src="{{url('/')}}/backend/js/pace/pace.min.js"></script>
  <!-- /footer content -->
</body>
</html>
