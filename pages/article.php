<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 03.06.2018
 * Time: 22:29
 */
$arr = include "array.php";
$num = @$_GET["num"];
?>
<div class="artItem">
<a href="/?page=gallery">Back to gallery</a>
<h3><?=$arr[$num]["name"]?></h3>
<img src="/img/<?=$arr[$num]["img"]?>" alt="">
<p><?=$arr[$num]["text"]?></p>
</div>