<?php

	define('PathPrefix', 'controllers/');
	define('PathPostfix', 'Controller.php');

	$template = 'default';

	define('TemplatePrefix', "views/{$template}/");
	define('TemplatePostfix', ".tpl");

	define('TemplateWebPath', "Templates/{$template}/");

	require('library/Smarty/libs/Smarty.class.php');
	$smarty = new Smarty();

	$smarty->setTemplateDir(TemplatePrefix);
	$smarty->setCompileDir('tmp/smarty/templates_c');
	$smarty->setCacheDir('tmp/smarty/cashe');
	$smarty->setConfigDir('library/Smarty/configs');

	$smarty->assign('templateWebPath', TemplateWebPath);