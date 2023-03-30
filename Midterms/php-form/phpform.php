<?php
require_once "products.php";

$total = null;
$user = null;
$option = array(

    new products('Apple','100'),
    new products('Avocado','200'),
    new products('Beef','300'),
    new products('Chicken','400')
);
if(isset ($_POST['Submit']) && isset($_POST['prod']) && isset($_POST['user']) && isset($_POST['spend'])){

foreach($_POST['prod'] as $Checked => $value):
    $total += $value;
endforeach;

?>

DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Shapes Solver</title>
</head>

<body>
<div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
    <form method="POST">
        <div class="mb-3">
            <label for="input_name" class="form-label">Username: </label>
            <input id="input_name" class="form-control" type="text" name="user" required>

            <label for="input_limit" class="form-label">Spending Limit: </label>
            <input id="input-limit" class="form-control" type="text" name="spend" required>
        </div>

        <?php foreach($option as $index => $product): ?>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="<?= $product->getPrice() ?>" id="opt" name="prod[]">
                <label class="form-check-label" for="opt">
                    <?= $product->getName(). "," ?>
                    <?= $product->getPrice() ?>
                </label>
            </div>
        <?php endforeach; ?>

        <div style="text-align: center">
            <input name="Submit" value="Submit" type="submit" class="btn btn-primary"/>
        </div>
    </form>
    <div style="text-align: center">
        <?php
        if($total > ){
        echo ""
        }
        }

        ?>

    </div>
</div>

</body>

</html>
