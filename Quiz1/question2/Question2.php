<?php

    $product = null;
    require_once ("prod.php");
    if(isset($_POST['Submit'])){
        if(isset($_POST['selectedOption']) && isset($_POST['Director&Author'])
            && isset($_POST['Rating&Genre'])
            && isset($_POST['ProdName'])
            && isset($_POST['Price'])
        ){
            $choice = $_POST['selectedOption'];
            $field1 = $_POST['Director&Author'];
            $field2 = $_POST['Rating&Genre'];
            $field3 =$_POST['ProdName'];
            $field4 = $_POST['Price'];


                if($choice == "1")
                {
                    $product = new Book($field1,$field2,$field3,$field4);
                }
                else
                {
                    $product = new Movie($field1,$field2,$field3,$field4);
                }




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
            <select class="form-select" name="selectedOption">

                    <option value="1">Book</option>
                    <option value="2">Movie</option>


            </select>
            <div class="mb-3">
                <label for="input_name" class="form-label">Enter The name of Director/Author: </label>
                <input id="input_name" class="form-control" type="text" name="Director&Author" required>

                <label for="input_name2" class="form-label">Enter The Rating/Genre: </label>
                <input id="input_name2" class="form-control" type="text" name="Rating&Genre" required>
                <label for="input_name2" class="form-label">Enter The Product's Name: </label>
                <input id="input_ProdName" class="form-control" type="text" name="ProdName" required>
                <label for="input_name2" class="form-label">Enter The Product's Price: </label>
                <input id="input_Price" class="form-control" type="text" name="Price" required>

            </div>
            <div style="text-align: center">
                <input name="Submit" value="Submit" type="submit" class="btn btn-primary"/>
            </div>
        </form>
        <div style="text-align: center">
            <?php echo $product->Display(); ?>
        </div>
    </div>

    </body>

    </html>