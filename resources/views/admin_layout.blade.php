<!DOCTYPE html>
<head>
<title>Trang Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('/backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- datatables css -->
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<!-- //datatables-net -->
<!-- Custom CSS -->
<link href="{{asset('/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('/backend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('/backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset('/backend/css/morris.css')}}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{asset('/backend/css/monthly.css')}}">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{asset('/backend/js/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('/backend/js/raphael-min.js')}}"></script>
<script src="{{asset('/backend/js/morris.js')}}"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="" class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>


</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{asset('/backend/images/admin.png')}}">
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> Đăng xuất</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{URL::to('/dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Tổng quan</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{route('category.create')}}">
                        <i class="fa fa-book"></i>
                        <span>Danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('genre.create')}}">
                        <i class="fa fa-list-alt"></i>
                        <span>Thể loại</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('country.create')}}">
                        <i class="fa fa-flag"></i>
                        <span>Quốc gia</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a>
                        <i class="fa fa-film"></i>
                        <span>Phim</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('movie.create')}}">Thêm phim</a></li>
                        <li><a href="{{route('movie.index')}}">Liệt kê danh sách phim</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a>
                        <i class="fa fa-suitcase"></i>
                        <span>Tập phim</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('episode.create')}}">Thêm tập phim</a></li>
                        <li><a href="{{route('episode.index')}}">Liệt kê danh sách tập phim</a></li>
                    </ul>
                </li>
                
                
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        @yield('admin_content')
    </section>
 <!-- footer -->
          <div class="footer">
            <div class="wthree-copyright">
              <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
          </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="{{asset('/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('/backend/js/scripts.js')}}"></script>
<script src="{{asset('/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('/backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('/backend/js/jquery.scrollTo.js')}}"></script>
<!-- morris JavaScript -->  
<script type="text/javascript" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $('.select-movie').change(function(){
        var id = $(this).val();
        $.ajax({
            url:"{{route('select-movie')}}",
            method:"GET",
            data:{id:id},
            success:function(data)
            {
                $('#show_movie').html(data);
            }
        });
    })
</script>

    <script type="text/javascript">
        $('.select-topview').change(function(){
            var topview = $(this).find(':selected').val();
            var id_phim = $(this).attr('id');
            if(topview == 0){
                var text = 'Ngày';
            }
            else if(topview == 1){
                var text = 'Tuần';
            }
            else{
                var text = 'Tháng';
            }
            $.ajax({
                url:"{{url('/update-topview-phim')}}",
                method:"GET",
                data:{topview:topview, id_phim:id_phim},
                success:function()
                {
                    alert('Thay đổi phim theo topview '+text+' thành công');
                }
            });
        })
    </script>

    <script type="text/javascript">
        $('.select-season').change(function(){
            var season = $(this).find(':selected').val();
            var id_phim = $(this).attr('id');
            var _token =  $('input[name= "_token"]').val();
            
            $.ajax({
                url:"{{url('/update-season-phim')}}",
                method:"GET",
                data:{season:season, id_phim:id_phim, _token:_token},
                success:function()
                {
                    alert('Thay đổi phim theo season '+season+' thành công');
                }
            });
        })
    </script>

    <script type="text/javascript">
        $(document).ready( function () {
            $('#tablephim').DataTable();
        } );
    function ChangeToSlug()
        {

            var slug;
         
            //Lấy text từ thẻ input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '-');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
            document.getElementById('convert_slug').value = slug;
        }

    </script>
    <script type="text/javascript">
        $('.order_position').sortable({
            placeholder : 'ui-state-highlight',
            update: function(event,ui){
                var array_id = [];
                $('.order_position tr').each(function(){
                    array_id.push($(this).attr('id'));
                })
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url:"{{route('resorting')}}",
                    method:"POST",
                    data:{array_id:array_id},
                    success:function(data){
                        alert('sắp xếp thứ tự thành công');
                    }
                })
            }
        })
    </script>
    <!-- //calendar -->
</body>
</html>
