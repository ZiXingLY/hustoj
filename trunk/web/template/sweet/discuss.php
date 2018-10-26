<?php
   $view_discuss=ob_get_contents();
    ob_end_clean();
//require_once("../../lang/cn.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $OJ_NAME?></title>
<!--    --><?php //include("css.php");?>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
    <?php include("nav.php");?>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
	<?php echo $view_discuss?>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--    --><?php //include("js.php");?>
  </body>
<script>
    //layui.use('table', function(){
    //    var table = layui.table;
    //
    //    //转换静态表格
    //    table.init('demo', {
    //        limit: 10,
    //        // height: 315 //设置高度
    //        // ,
    //        //limit: <?php ////echo $limit ?>//////注意：请务必确保 limit 参数（默认：10）是与你服务端限定的数据条数一致
    //        //支持所有基础参数
    //    });
    //    // var element = layui.element;
    //    //…
    //});
</script>
</html>
