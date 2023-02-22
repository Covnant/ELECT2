<?php
    require_once("Date.php");
    use strToDate\Dateformat;

    $newDate = null;


    if(isset($_POST['Submit'])){
        if(isset($_POST['date'])){
            $input = $_POST['date'];
            $Dateformat = new Dateformat();
            $newDate = $Dateformat->getFormat($input);

        }
    }



?>

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
            <label for="input_date" class="form-label">Enter A Date: </label>
            <input id="input_date" class="form-control" type="date" name="date" required>
        </div>
        <div style="text-align: center">
            <input name="Submit" value="Submit" type="submit" class="btn btn-primary"/>
        </div>
    </form>
    <div style="text-align: center">
        </br>
       <?php echo $newDate;?>
    </div>
</div>

</body>

</html>

