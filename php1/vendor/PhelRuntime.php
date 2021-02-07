<?php

// @generated by Phel
use Phel\Runtime\RuntimeFactory;

require __DIR__ .'/autoload.php';

$rt = RuntimeFactory::initialize();
$rt->addPath("gin0115\\", [__DIR__ . '/../src/']);
$rt->addPath("gin0115-tests\\", [__DIR__ . '/../tests/']);
$rt->addPath("mabasic\\json\\", [__DIR__ . '/mabasic/phel-json/src/']);
$rt->addPath("phel\\", [__DIR__ . '/phel-lang/phel-lang/src/phel/']);
$rt->loadNs("phel\\core");
return $rt;