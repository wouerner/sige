<?php

// put full path to Smarty.class.php
 require('lib/smarty/libs/Smarty.class.php');
 $smarty = new Smarty();

// $smarty->setTemplateDir('smarty/templates');
 $smarty->setCompileDir(dirname(__FILE__).'/smarty/templates_c');
 $smarty->setCacheDir('smarty/cache');
 $smarty->setConfigDir('smarty/configs');

 ?>
