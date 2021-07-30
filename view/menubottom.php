<?
//20
$menu = new CController();
$arMenu = $menu->getMenu();
?>
<ul>
  <? foreach ($arMenu as $item) { ?>
  <li><a href='<?=$item["link"];?>'><i class='fas fa-angle-double-right'></i><?= $item['name']; ?></a></li>
  <?};?>
</ul>
