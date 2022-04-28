<?php

$table->insert('boodschappen', [
    'Name' => $_POST['Name'],
    'Number' => $_POST['Number'],
    'Price' => $_POST['Price'],
    'Subtotal' => $_POST['Number'] * $_POST['Price']
]);
header('Location: /groceries');