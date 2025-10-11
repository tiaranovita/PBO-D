<?php

class LuasLingkaran {

    public const phi = 3.14;
    public int $jari;
}

$Lingkaran = new LuasLingkaran();
$Lingkar->jari = 7;

$rumus = LuasLingkaran::phi * $Lingkaran->jari * $Lingkaran->jari;
echo "hasilnya adalah: ". $rumus