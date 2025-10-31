<?php

require_once('./lingkaran.php');

use App\Math\LuasLingkaran;

$lingkaran = new LuasLingkaran(7);
$lingkaran->tampil('roda'); //panggil method
LuasLingkaran::testing();