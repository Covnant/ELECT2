<?php
require_once('products.php');

use ProductClass\checkbox\Products;

$total = null;
$option = array(

    new Products('Item1','100'),
    new Products('Item2','200'),
    new Products('Item3','300')
);
if(isset ($_POST['Submit']) && isset($_POST['prod'])){

    foreach($_POST['prod'] as $Checked => $value):
        $total += $value;
        endforeach;
}
?>

<DOCTYPE html>
    <html>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Salary</title>
    </head>

    <body>
    <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
        <form method="POST">
        <?php foreach($option as $index => $product): ?>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?= $product->getPrice() ?>" id="opt" name="prod[]">
            <label class="form-check-label" for="opt">
                <?= $product->getName(). "," ?>
                <?= $product->getPrice() ?>
            </label>
        </div>
        <?php endforeach; ?>
            <div style="text-align: center; margin-top: 10px">
                <input name="Submit" value="Submit" type="submit" class="btn btn-primary"/>
            </div>
        </form>
        <div style="text-align: center">
            <?php echo "Total Amount: ". $total. '<br/>' ?>
        </div>
    </div>
    </body>
    </html>

