<?
//20
$menu = new CController();
$arMenu = $menu->getMenu();
?>
<nav class='navbar navbar-expand-lg p-0'>
    <a class='site-logo site-title' href='/'>
      <? include('logo.php'); ?>
    </a>
    <button class='navbar-toggler ml-auto' type='button' data-toggle='collapse'
            data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent'
            aria-expanded='false' aria-label='Toggle navigation'>
        <span class='fas fa-bars'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav main-menu ml-auto'>
<!--          20-1-->
            <? foreach ($arMenu as $item) { ?>
                <li><a href='<?= $item['link']; ?>'><?= $item['name']; ?></a></li>
            <? } ?>
        </ul>
        <div class='cart'>
            <a href='#'><i class='flaticon-supermarket'></i></a>
        </div>
        <div class='search-bar'>
            <a href='#0'><i class='flaticon-search'></i></a>
        </div>
        <div class='header-action d-flex flex-wrap align-items-center'>
            <a href='register.html' class='cmn-btn'>Join Now</a>
        </div>
    </div>
</nav>
