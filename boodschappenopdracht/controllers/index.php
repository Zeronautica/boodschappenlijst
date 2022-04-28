<?php

class Grocery {}
$boodschappen = $table->selectAll('boodschappen', 'Grocery');
$total = 0;
foreach ($boodschappen as $product) {
    $total = $total + $product->Subtotal;
}
require 'views/index.view.php';