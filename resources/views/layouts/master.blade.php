<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Klik n Klik</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{!! asset('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="{!! asset('assets/dist/css/AdminLTE.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="{!! asset('assets/dist/css/skins/_all-skins.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{!! asset('assets/plugins/iCheck/flat/blue.css') !!}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{!! asset('assets/plugins/morris/morris.css') !!}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{!! asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{!! asset('assets/plugins/datepicker/datepicker3.css') !!}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{!! asset('assets/plugins/daterangepicker/daterangepicker-bs3.css') !!}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{!! asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/plugins/datatables/dataTables.bootstrap.css') !!}" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="{!! asset('assets/plugins/datatables/dataTables.bootstrap.css') !!}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-purple">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo"><b>KLik</b> n KLik</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{!! asset('assets/dist/img/user2-160x160.jpg') !!}" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{!! asset('assets/dist/img/user2-160x160.jpg') !!}" class="img-circle" alt="User Image" />
                    <p>
                      {{ Auth::user()->name }}
                      <small>{{ Auth::user()->email }}</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="btn btn-default btn-flat" style="display: none;">
                                            {{ csrf_field() }}
                        </form>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{!! asset('assets/dist/img/user2-160x160.jpg') !!}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            @if (Auth::check())
                      <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i>Home</a></li>
            @role('admin')
              
             <!--  <li><a href="{{ route('karyawan.index') }}"><i class="fa fa-user"></i>Karyawan</a></li> -->
             <li class="treeview">
              <a href="#">
                <i class="fa fa-group"></i> <span>Master</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="{{ route('user.index') }}"><i class="fa fa-user"></i>Pengguna</a></li>
                  <li><a href="{{ url('/index2') }}"><i class="fa fa-group"></i>Karyawan</a></li>
                  <li><a href="{{ route('supplier.index') }}"><i class="fa fa-desktop"></i>Supplier</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pencil-square-o"></i> <span>Barang</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="{{ route('kategori.index') }}"><i class="fa fa-pencil-square-o"></i>Kategori</a></li>
                  <li><a href="{{ route('brand.index') }}"><i class="fa fa-pencil-square-o"></i>Brand</a></li>
                  <li><a href="{{ route('barang.index') }}"><i class="fa fa-laptop"></i>Barang</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i> <span>Transaksi</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="{{ route('tran_masuk.index') }}"><i class="fa fa-shopping-cart"></i>Data Masuk</a></li>
                  <li><a href="{{ route('tran_keluar.index') }}"><i class="fa fa-shopping-cart"></i>Data Keluar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="/laporan"><i class="fa fa-shopping-cart"></i>Laporan Data Masuk</a></li>
                  <li><a href="/laporankeluar"><i class="fa fa-shopping-cart"></i>Laporan Data Keluar</a></li>
              </ul>
            </li>
            <li>
              <a href="/contact"><i class="fa fa-shopping-cart"></i>Contact</a>
            </li>
            @endrole
            @role('member')
              <li><a href="{{ route('kategori.index') }}"><i class="fa fa-pencil-square-o"></i>Kategori</a></li>
              <li><a href="{{ route('brand.index') }}"><i class="fa fa-pencil-square-o"></i>Brand</a></li>
               <li><a href="{{ route('barang.index') }}"><i class="fa fa-laptop"></i>Barang</a></li>
              <li><a href="{{ route('tran_masuk.index') }}"><i class="fa fa-shopping-cart"></i>Data Masuk</a></li>
              <li><a href="{{ route('tran_keluar.index') }}"><i class="fa fa-shopping-cart"></i>Data Keluar</a></li>
            @endrole
            @endif
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Home
            <small>Klik n Klik</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Home</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
              @include('layouts._flash')
              @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>SMK ASSALAAM</b> Bandung
        </div>
        <strong>Admin Klik n Klik .Managemen.</strong> Perangkat Komputer.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="{!! asset('assets/plugins/jQuery/jQuery-2.1.3.min.js') !!}"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{!! asset('assets/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{!! asset('assets/plugins/morris/morris.min.js') !!}" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="{!! asset('assets/plugins/sparkline/jquery.sparkline.min.js') !!}" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="{!! asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="{!! asset('assets/plugins/knob/jquery.knob.js') !!}" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="{!! asset('assets/plugins/daterangepicker/daterangepicker.js') !!}" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="{!! asset('assets/plugins/datepicker/bootstrap-datepicker.js') !!}" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{!! asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{!! asset('assets/plugins/iCheck/icheck.min.js') !!}" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="{!! asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') !!}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="{!! asset('assets/plugins/fastclick/fastclick.min.js') !!}"></script>
    <!-- AdminLTE App -->
    <script src="{!! asset('assets/dist/js/app.min.js') !!}" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{!! asset('assets/dist/js/pages/dashboard.js') !!}" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{!! asset('assets/dist/js/demo.js') !!}" type="text/javascript"></script>

    <!-- DATA TABES SCRIPT -->
    <script src="{!! asset('assets/plugins/datatables/jquery.dataTables.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('assets/plugins/datatables/dataTables.bootstrap.js') !!}" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
    <script src="{!! asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') !!}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
  </body>
</html>