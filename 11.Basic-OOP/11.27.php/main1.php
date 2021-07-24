<?php

namespace Project;
include "pulsar.php";
include "hornet.php";

use \Project\Bike as Pulsar;
use \Project\Motorcycles\Bike as Hornet; // alias

$b = new Bike();
echo $b->getName();

$h = new Hornet();
echo $h->getName();

$p = new Pulsar();
echo $p->getName();
