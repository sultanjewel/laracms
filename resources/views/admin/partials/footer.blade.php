      <!-- footer content -->
      <footer>
        <div class="pull-right">
          {{config('app.name','LaraCMS')}} {{date('Y')}}
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>
  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--[if lt IE 9]>
        <script src="../assets/backend/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- bootstrap progress js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.9.0/bootstrap-progressbar.min.js"></script>
  <!-- icheck -->
  <script src="{{url('/')}}/backend/js/icheck/icheck.min.js"></script>
  <!-- pace -->
  <script src="{{url('/')}}/backend/js/pace/pace.min.js"></script>
  <!-- Include Bootstrap Datepicker -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/bootstrap.min.js"></script>
  @yield('js')
  <script src="{{url('/')}}/backend/js/custom.js"></script>
  <script type="text/javascript">
      $('.nav.side-menu li').removeClass('current-page');
      $('.nav.side-menu li').removeClass('active');
      var current = $('.nav.side-menu li#'+"@yield('menuselect')");
      current.addClass('current-page');
      current.parents('li').addClass('active');
  </script>
</body>
</html>