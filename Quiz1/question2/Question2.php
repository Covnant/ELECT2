<?php
    require_once ("prod.php");
    if(isset($_POST['Submit'])){
        if(isset($_POST['selectedOption']) && isset($_POST['name'])){
            $selVal =
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

                    <option value="1"Book</option>
                    <option value="2">Movie</option>


            </select>
            <div class="mb-3">
                <label for="input_name" class="form-label">Enter The name of Product/Director/Book: </label>
                <input id="input_name" class="form-control" type="text" name="name" required>

                <label for="input_name2" class="form-label">Enter The Price/Rating/Genre: </label>
                <input id="input_name2" class="form-control" type="text" name="name2" required>

            </div>
            <div style="text-align: center">
                <input name="Submit" value="Submit" type="submit" class="btn btn-primary"/>
            </div>
        </form>
        <div style="text-align: center">

        </div>
    </div>

    </body>

    </html>