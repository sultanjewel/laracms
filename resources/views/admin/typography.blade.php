@extends('layouts.admin')
@section('title','Default Page')
@section('menuselect','default')
@section('content')
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Typography</h3>
            </div>
            <div class="title_right">
              <div class="pull-right">
                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                <input style="padding: 5px 16px;" type="text" placeholder="Search..." class="autocomplete-input input tooltip-button ui-autocomplete-input" data-placement="bottom" title="" name="" data-original-title="Type 'jav' to see the available tags..." autocomplete="off">
                <i class="glyph-icon icon-search"></i>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Typography <small>different design elements</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-8 col-lg-8 col-sm-7">
                    <!-- blockquote -->
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                        posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                      </footer>
                    </blockquote>
                    <blockquote class="blockquote-reverse">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                        posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                      </footer>
                    </blockquote>
                  </div>
                  <div class="col-md-4 col-lg-4 col-sm-5">
                    <h1>h1. Bootstrap heading</h1>
                    <h2>h2. Bootstrap heading</h2>
                    <h3>h3. Bootstrap heading</h3>
                    <h4>h4. Bootstrap heading</h4>
                    <h5>h5. Bootstrap heading</h5>
                    <h6>h6. Bootstrap heading</h6>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12">
                    <h4>Labels and badges</h4>
                    <span class="label label-default">Default</span>
                    <span class="label label-primary">Primary</span>
                    <span class="label label-success">Success</span>
                    <span class="label label-info">Info</span>
                    <span class="label label-warning">Warning</span>
                    <span class="label label-danger">Danger</span>
                    <span class="badge badge-success">42</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endsection  
@section('css') 
<!-- Specific stylesheets for this page--> 
@endsection  
@section('js') 
<!-- Specific javascripts for this page--> 
@endsection
