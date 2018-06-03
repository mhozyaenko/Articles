<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 03.06.2018
 * Time: 22:17
 */
$arr = include "array.php";
$cat = @$_GET["category"];
if (empty($cat)):
for ($i = 0; $i<count($arr); $i++): ?>
<div class="article">
    <h2><?=$arr[$i]["name"]?></h2>
    <p><?=substr($arr[$i]["text"], 0, 80)?></p>
    <a href="/?page=article&num=<?=$i?>">Read more</a>
</div>

<?php endfor;
else:
for ($i=0; $i<count($arr); $i++):
  if ($cat == $arr[$i]["cat"]): ?>
<div class="article">
    <h2><?=$arr[$i]["name"]?></h2>
<p><?=substr($arr[$i]["text"], 0, 80)?></p>
<a href="/?page=article&num=<?=$i?>">Read more</a>
</div>
<?php  endif;
endfor;
endif;
 ?>
<div class="categories">
    <ul>
        <li><a href="/?page=gallery&category=category1">Category1</a></li>
        <li><a href="/?page=gallery&category=category2">Category2</a></li>
        <li><a href="/?page=gallery&category=category3">Category3</a></li>
    </ul>
</div>