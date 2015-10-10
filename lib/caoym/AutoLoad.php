<?php
/**
 * $Id: AutoLoad.php 56761 2014-12-08 05:17:37Z caoyangmin $
 * @author caoym(caoyangmin@gmail.com)
 * @brief AutoLoad
 */
namespace caoym;
require __DIR__.'/utils/ClassLoader.php';
require __DIR__.'/utils/AutoClassLoader.php';
use caoym\utils\ClassLoader;
ClassLoader::addInclude(dirname(__DIR__));
spl_autoload_register(array(__NAMESPACE__.'\utils\ClassLoader', 'autoLoad'));
