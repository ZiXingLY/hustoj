<?php
/**
 * Created by IntelliJ IDEA.
 * User: anshi
 * Date: 2018/10/28
 * Time: 10:09 AM
 */
//    $cur_path = "template/sweet/";
//    echo 'pdf test';
//    echo $cur_path;
//    echo '\n';
//    $dir=basename(getcwd());
//
//    echo $dir;
$php_url = dirname($_SERVER['PHP_SELF']);
echo $php_url;

?>
PDF.js使用：(<a href="http://dnt.dkill.net/DNT/PDF/pdfjs/demo.html">在线DEMO</a>)<br /><br />
<form action="pdfjs/web/viewer.html" method="get">
    PDF路径： <input type="text" name="file" value="<?php echo $php_url?>/PDF/test.pdf" /><input type="submit" value="提交" />

    fileInput <input type="file" name="filename">
</form>
<br />可以通过：<mark>file=xxx</mark> 来传参
