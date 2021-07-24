<?php

// Using for grouping class.
// namespace

namespace Astronomy; // for qualified name;
include "planet.php";
include "earth.php";
// $planet = new Planet(); // এটা এভাবে রান করবে না কারণ Planet টা namespace এর মধ্যে আছে।

$planet = new Planets\Earth(); // unqualified
// $planet = new \Astronomy\Planets\Planet(); // qualified
$planet->getName();
