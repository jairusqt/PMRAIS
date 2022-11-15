<?php 
require 'core/init.php';
$data = new db();

if(isset($_POST['submit'])){
    $insert_data = array(
        'qa_operator' => mysqli_real_escape_string($data->con, $_POST['qaOperator']),
        'tool_name' => mysqli_real_escape_string($data->con, $_POST['toolName']),
        'received_date' => mysqli_real_escape_string($data->con, $_POST['receivedDate']),
        'inspection_date' => mysqli_real_escape_string($data->con, $_POST['inspectionDate']),
        'time_start' => mysqli_real_escape_string($data->con, $_POST['timeStart']),
        'time_end' => mysqli_real_escape_string($data->con, $_POST['timeEnd'])


    );
    if($data->insert('metal_inspection',$insert_data)){
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
    
</head>
<body class="center">
    <div class="grid-container float-right">
        <div>
            <a class="btn" href="inspectionTable.php">Inspection Table</a>
        </div>
    </div>
    <div>
        <h2 class="text-center">INSPECTION ENTRY</h2>
        <form action="" method="post">
            <div class="grid-container-2">
                <div class="mx-auto p2">
                    <h4 class="label">QA Operator: </h4>
                    <input type="text" name="qaOperator">
                </div>
                <div class="mx-auto p2">
                    <h4 class="label">Tool Name: </h4>
                    <input type="text" name="toolName">
                </div>
                <div class="mx-auto p2">
                    <h4 class="label">Received Date: </h4>
                    <input type="date" name="receivedDate">
                </div>
                <div class="mx-auto p2">
                    <h4 class="label">Inspection Date: </h4>
                    <input type="date" name="inspectionDate">
                </div>
                <div class="mx-auto p2">
                    <h4 class="label">Time Start: </h4>
                    <input type="time" name="timeStart">
                </div>
                <div class="mx-auto p2">
                    <h4 class="label">Time end: </h4>
                    <input type="time" name="timeEnd">
                </div>
            </div>
            <div class="grid-container">
                <button href="inspectionTable.php" class="mx-auto btn" type="submit" name="submit"> Submit </button>
            </div>
        </form>
    </div>
</body>
</html>