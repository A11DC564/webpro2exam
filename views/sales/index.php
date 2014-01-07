<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>商品と売上を管理するシステム</title>

        <!-- Bootstrap core CSS -->
        <link href="./views/css/bootstrap.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
          <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">商品一覧</a></li>
                        <li class="active"><a href="index.php?page=sale">売り上げ一覧</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="jumbotron">
            <h1>売り上げ一覧</h1>
            <p>これまでに購入された商品の一覧です。</p>
            <p>
            <table class="table table-bordred">
        <thead>
          <tr>
            <th>日時</th>
            <th>商品名</th>
            <th>個数</th>
            <th>合計（個数 * 単価）</th>
          </tr>
        </thead>
        <tbody>
          <? foreach ($resuly as $info) { ?>
          <tr>
            <td><? echo date("Y/m/d G:i", strtotime($info['sales_at'])); ?></td>
            <td><?= $info['name'] ?></td>
            <td><?= $info['quantity'] ?></td>
            <td><? $price = $info['price']*$info['quantity'];
            echo $price;
            ?></td>
          </tr>
          <? } ?>
         
        </tbody>
      </table>
        </p>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="./views/css/bootstrap.css"></script>
</body>
</html>
