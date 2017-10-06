<!DOCTYPE html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>正大仓储</title>
  <meta name="keywords" content="BugTRace"/>
  <meta name="description" content="BugTRace Home Page"/>
  <link href="static/default.css" rel="stylesheet" type="text/css" media="screen" />
  <script type="text/javascript" src="static/js/jquery.min.js"></script>
  <script type="text/javascript" src="static/js/bootstrap.min.js"></script>
</head>
<body>  
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="http://www.frunto.com">正大仓储</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <?foreach($menu as $k=>$v){?>
                <li class="<?=$k==(seg(2)?seg(2):'index')?'active ':''?>bt" ><a href="?/store/<?=$k?>/" ><?=$v?></a></li>
              <?}?>
              <li><a href="?/logout/" > <?if(isset($u['id'])):?><?=$u['name']?$u['name']:$u['email']?> / 退出登录</a><?endif;?></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          <div class="row-fluid">
          <?=$al_content?>
          </div>
          <div class="content" > 
  </div> 
        </div>
      </div>
    </div> <!-- /container -->
    
</body>
</html>
