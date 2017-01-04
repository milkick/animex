<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php echo __('CakePHP: the rapid development php framework:'); ?>
            <?php echo $title_for_layout; ?>
        </title>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">  
        <?php echo $this->Html->css('cake.myrule.css?1233');
        echo $this->fetch('css');        
        ?>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>  

        <!-- Le styles -->
        <style>
            body {
                padding-top: 50px;
            }
            .starter-template {
                padding: 40px 15px;
                text-align: center;
            }
        </style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
<!-- 

  navbar-inverse : 黒いスタイルに変更
  navbar-origin : オリジナルスタイルを当ててみると・・・

-->

<nav class="navbar navbar-default navbar-inverse" role="navigation" style="margin-bottom:10px">
  <div class="container-fluid">

    <!-- スマートフォンサイズで表示されるメニューボタンとテキスト -->
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu-4">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <!-- タイトルなどのテキスト -->
      <a class="navbar-brand" href="#">Designup.jp</a>

    </div>

    <!-- グローバルナビの中身 -->
    <div class="collapse navbar-collapse" id="nav-menu-4">
      
      <!-- 各ナビゲーションメニュー -->
      <ul class="nav navbar-nav">

        <!-- 通常のリンク -->
        <li class="active"><a href="<?php echo "http://" . filter_input(INPUT_SERVER, 'HTTP_HOST') . "/animex/users/logout" ?>">ログアウト</a></li>
        <li><a href="#">Link</a></li>

        <!-- ドロップダウンのメニューも配置可能 -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>

      </ul>


    </div>
  </div>
</nav>
        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>


        <!-- Include all compiled plugins (below), or include individual files as needed -->

    </body>
</html>

