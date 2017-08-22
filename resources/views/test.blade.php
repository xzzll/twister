<!DOCTYPE html>
<html>
 <head></head>
 <body>
   <!-- {{print_r($errors)}} -->
  <meta charset="utf-8" />
  <title>twiter</title>
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style media="screen">
     #myCarousel{
       width: 100%;
       height: 100%;
     }
   </style>
  <nav class="navbar navbar-default" role="navigation">
   <div class="container-fluid" style="margin:0 100px;">
    <div class="navbar-header">
     <a class="navbar-brand" href="{{url('home')}}">Twiter</a>
    </div>
    <div>
     <ul class="nav navbar-nav">
      <li class="active"><a href="">home</a></li>
      <li><a href="#">moments</a></li>
      <li><a href="#">moments</a></li>
      <li><a href="#">moments</a></li>
      <li><a href="#">Message</a></li>
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> wo <b class="caret"></b> </a>
       <ul class="dropdown-menu">
        <li class="divider"></li>
        <li><a href="#">星期一</a></li>
        <li class="divider"></li>
        <li><a href="#">星期二</a></li>
        <li class="divider"></li>
        <li><a href="#">星期三</a></li>
        <li class="divider"></li>
        <li><a href="#">星期四</a></li>
        <li class="divider"></li>
        <li><a href="#">星期五</a></li>
       </ul> </li>
     </ul>
    </div>
    <form class="navbar-form navbar-left" role="search">
     <div class="form-group">
      <input type="text" class="form-control" placeholder="Search" />
     </div>
     <button type="submit" class="btn btn-default">提交</button>
    </form>
   </div>
  </nav>
  <div class="container">
   <div class="row">
    <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;">
        <!-- 第一部分 -->

     <div class="row">
      <div class="thumbnail">
       <img src="{{URL::asset('img/1.jpg')}}" alt="" />
       <div class="caption">
        <h3>缩略图标签</h3>
        <p> <a href="#" class="btn btn-primary" role="button"> 按钮 </a> <a href="#" class="btn btn-default" role="button"> 按钮 </a> </p>
       </div>
      </div>
     </div>
     <p></p>
     <p></p>
     <p></p>
     <p></p>
     <p></p>
     <p></p>
     <p></p>
    </div>
    <div class="col-xs-6 col-sm-6" style="background-color: #dedef8;">
        <!-- 第二部分 -->

     <!-- 轮播图 -->
     <div id="myCarousel" class="carousel slide">
      <!-- 轮播（Carousel）指标 -->
      <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- 轮播（Carousel）项目 -->
      <div class="carousel-inner">
       <div class="item active">
        <img src="{{URL::asset('img/5.jpg')}}" alt="First slide" />
        <div class="carousel-caption">
         标题 1
        </div>
       </div>
       <div class="item">
        <img src="{{URL::asset('img/6.jpg')}}" alt="Second slide" />
        <div class="carousel-caption">
         标题 2
        </div>
       </div>
       <div class="item">
        <img src="{{URL::asset('img/4.jpg')}}" alt="Third slide" />
        <div class="carousel-caption">
         标题 3
        </div>
       </div>
      </div>
      <!-- 轮播（Carousel）导航 -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹ </a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">› </a>
     </div>
     <!-- 结束,第三部分文章标题列表 -->
     <div class="">
        <a href="#"><h2>文章标题</h2></a>
        <p>{{$rq['pic']}}</p>
        <p>{{$rq['yy']}}</p>



     </div>
     <div class="">
        <a href="#"><h2>文章标题</h2></a>
        <p>test</p>
        <p>test</p>
        <p>test</p>
        <p>test</p>
        <p>test</p>
        <p>test</p>

     </div>
     <div class="">
        <a href="#"><h2>文章标题</h2></a>
        <p>test</p>
        <p>test</p>
        <p>test</p>
        <p>test</p>
        <p>test</p>
        <p>test</p>

     </div>
     <div class="">
        <a href="#"><h2>文章标题</h2></a>
        <p>test</p>
        <p>test</p>
        <p>test</p>
        <p>test</p>
        <p>test</p>
        <p>test</p>

     </div>
    </div>
    <div class="clearfix visible-xs"></div>
    <div class="col-xs-6 col-sm-3" style="background-color: #dedef8;">
    <!-- 第san部分 -->

<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion"
                href="#collapseOne">
                测试栏目1

                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                lomo.
            </div>
        </div>
    </div>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion"
                href="#collapseTwo">
                测试栏目2
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                lomo.
            </div>
        </div>
    </div>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion"
                href="#collapseThree">
                测试栏目3
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                lomo.
            </div>
        </div>
    </div>
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion"
                href="#collapseFour">
                测试栏目4
                </a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                lomo.
            </div>
        </div>
    </div>
</div>
<script>
$(function () { $('#collapseFour').collapse({
        toggle: false
    })});
    $(function () { $('#collapseTwo').collapse('show')});
    $(function () { $('#collapseThree').collapse('toggle')});
    $(function () { $('#collapseOne').collapse('hide')});
</script>

    </div>
   </div>
  </div>
 </body>
</html>
