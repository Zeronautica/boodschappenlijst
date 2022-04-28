<?php require('partials/header.php'); ?>
<table id="boodschappenlijst">
    <thead>
        <tr>
            <?php foreach ($boodschappen[0] as $category => $value) {
                echo "<th>$category</th>";
            } ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($boodschappen as $product) : ?>
            <tr>
                <?php foreach($product as $category => $value) {
                    echo "<td>$value</td>";
                } ?>

            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan = 4>Totaal</td>
            <?= "<td>$total</td>";?>
        </tr>
    </tbody>
</table> 
<?php require('partials/footer.php'); ?> 