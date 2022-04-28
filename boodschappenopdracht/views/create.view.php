<?php require('partials/header.php'); ?>
    <form method = "POST" action = "/submit">
        <label for = "groceryName">Boodschap:</label>
        <input type = "text" name = "Name" id = "groceryName" required></input><br>
        <label for = "groceryNumber">Aantal</label>
        <input type = "number" name = "Number" id = "groceryNumber" min = 1 required></input><br>
        <label for = "groceryPrice">Prijs</label>
        <input type = "number" name = "Price" id = "groceryPrice" min = 0 step = 0.01 required></input><br>
        <input type="submit">
    </form>
<?php require('partials/footer.php'); ?>