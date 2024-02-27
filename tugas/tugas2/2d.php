<?php

// disini logic yang digunakan adalah ketika 1 dan j ditambah dan hasillnya habis dengan 2 maka akan di cetak kotak dengan warna hitam

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {

        if (($i + $j) % 2 == 0) {
            echo "<div style='height: 50px; width: 50px; background-color: black; color:white; display: inline-block; text-align: center; line-height: 50px; border: 1px black solid; margin: -1px;'></div>";
        } else {
            echo "<div style='height: 50px; width: 50px; background-color: white; display: inline-block; text-align: center; line-height: 50px; border: 1px black solid; margin: -1px;'></div>";
        }
    }
    echo "<br>";
}