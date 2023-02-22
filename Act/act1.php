<?php
    require_once ("shapes.php");
    $shapeOptions = array('square', 'circle');
    $length ="";
    $surface="";
    $volume="";
    $val="";

    if(isset($_POST['Submit'])){
        if(isset($_POST['val']) && isset($_POST['shape'])){
            $selectedShape = $shapeOptions[$_POST['shape']];
            $val =$_POST['val'];
            $shape = null;

            if($selectedShape == 'square' ){
                    $shape = new square($val);
            }
            else{
                    $shape = new circle($val);
            }

            if($selectedShape == 'square' ){
                $val = "Square Value: ". $val;
            }
            else{
                $val = "Radius: " . $val;
            }
            $surface = "The surface area: " .round($shape->area(), 2);
            $volume = "The volume: ".round($shape->vol(),2);
        }





    }

?>

<DOCTYPE html>
    <html>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Shapes Solver</title>
    </head>

    <body>
    <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
        <form method="POST">
            <label>Choose a Shape:</label>
            <select class="form-select" name="shape">
                <?php foreach ($shapeOptions as $index => $shape):?>
                    <option value="<?= $index ?>" <?= isset($_POST['shape']) && $_POST['shape'] == $index ? 'selected' : '' ?>>
                        <?= $shape ?>

                    </option>
                <?php endforeach;?>
            </select>
            <div class="mb-3">
                <label for="input_number" class="form-label">Enter A Square's Length or Circle's Radius: </label>
                <input id="input_val" class="form-control" type="number" name="val" required>
            </div>
            <div style="text-align: center">
                <input name="Submit" value="Submit" type="submit" class="btn btn-primary"/>
            </div>
            </form>
            <div style="text-align: center">
                <?php echo $val; ?>
                </br>
                <?php echo $surface; ?>
                </br>
                <?php echo $volume; ?>
            </div>
    </div>

    </body>

    </html>


