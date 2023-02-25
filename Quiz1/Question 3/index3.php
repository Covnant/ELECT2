<?php
require_once ("salary.php");
$person =null;

if(isset($_POST['Submit']))
    if(isset ($_POST['Name']) && isset ($_POST['Salary']) && isset ($_POST['MonthStay']) && isset ($_POST['class'])){
        $class = $_POST['class'];
        $name = $_POST['Name'];
        $salary = $_POST['Salary'];
        $MonthStay = $_POST['MonthStay'];
        if($class == "employee"){
            $person = new Employee($name,$salary,$MonthStay);
        }
        else{
            $person = new Manager($name,$salary,$MonthStay);
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
            <label>Choose:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="class" id="employee-check" value="employee" checked>
                <label class="form-check-label" for="employee-check">Employee</label>
            </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="class" id="manager-check" value="manager">
            <label class="form-check-label" for="manager-check">Manager</label>
        </div>


            </select>
            <div class="mb-3">
                <label for="input_name" class="form-label">Enter The Name: </label>
                <input id="input_name" class="form-control" type="text" name="Name" required>

                <label for="input_name2" class="form-label">Enter The Salary: </label>
                <input id="input_name2" class="form-control" type="text" name="Salary" required>
                <label for="input_name2" class="form-label">Enter The Months of Stay: </label>
                <input id="input_ProdName" class="form-control" type="text" name="MonthStay" required>


            </div>
            <div style="text-align: center">
                <input name="Submit" value="Submit" type="submit" class="btn btn-primary"/>
            </div>
        </form>
        <div style="text-align: center">
            <?php echo $person->calculate13Pay(); ?>
            <?php echo $person->calculateHrPay(); ?>

        </div>
    </div>
