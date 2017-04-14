
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Team Maker</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ url('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/style-responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="{{ route('article.index') }}" class="btnmenu logo"><b>Team<span>-</span>Maker</b></a>
            <!--logo end-->
@if( Auth::check())
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">0</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 0 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Games</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">1</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 1 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="{{ url('img/ui-zac.jpg') }}"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                              <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>

            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                {{ Form::open(['route' => 'logout', 'method' => 'post'])}}
                <button type="submit" class="btn decon">Déconnexion</button>
                {{ Form::close() }}
                </ul>
            </div>

@else
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href=" {{ route('register') }} ">Inscription</a></li>
                </ul>
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href=" {{ route('login') }} ">Connexion</a></li>
                </ul>
            </div>
@endif

        </header>
      <!--header end-->
      
      <!-- ************************************************************************************
      MAIN SIDEBAR MENU
      ***************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                @if(auth::check())
                  <p class="centered"><a href="{{ route('article.index') }}"><img src="{{ url('img/ui-sam.jpg') }}" class="img-circle" width="60"></a></p>
                  <h5 class="centered">{{ Auth::user()->name }}</h5>
                  @endif
                  <li class="mt">
                      <a href="{{ route('home.index') }}">
                          <i class="fa fa-home"></i>
                          <span>Accueil</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Jeux</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('article.index') }}">Jeux PC</a></li>
                          <li><a  href="{{ route('article.index') }}">Console</a></li>
                          <li><a  href="{{ route('article.index') }}">Smartphone</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="{{ route('article.index') }}" >
                          <i class="fa fa-calendar"></i>
                          <span>Nouveautés</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                    <a @yield('forumActivation') href="{{ route('forum.index') }}" >
                          <i class="fa fa-comments"></i>
                          <span>Forum</span>
                        </a>
                      </a>
                  </li>
                  @if(auth::check())
                  <li class="sub-menu">
                      <a  href="{{ route('article.index') }}" >
                          <i class="fa fa-cogs"></i>
                          <span>Categories</span>
                      </a>
                  </li>
                  
                  @endif

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> @yield('title')</h3>
            @yield('content')
            <div class="row mt">
                <div class="col-lg-12">
                <p></p>
                </div>
            </div>
            
        </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - Sio2 EpiCode
              <a href="{{ route('article.index') }}#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/jquery-ui-1.9.2.custom.min.js') }}"></script>
    <script src="{{ url('js/jquery.ui.touch-punch.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ url('js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ url('js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ url('js/jquery.nicescroll.js') }}" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="{{ url('js/common-scripts.js') }}"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
