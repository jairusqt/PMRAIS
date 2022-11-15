<?php
require 'core/init.php';
$data = new db();
if(isset($_GET['submit'])){
    if(empty($_GET['id_number'])){
        echo "Please enter a value";
    } 
    else {
    $id = (isset($_GET['id_number']) && is_numeric($_GET['id_number'])) ? intval($_GET['id_number']) : 0;
    $select_ids = $data->selectId('metal_inspection', 'metal_tool_id', $id);
        foreach($select_ids as $select_id){
        }
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
<body>
    <form action="" method="get">
            <div class="">
                <input class="mx-auto" type="number" name="id_number">
                <button class="btn" type="submit" name="submit" href="details.php/?id=<?php echo $id; ?>">SEARCH</button>
            </div>
            <div class="white shadow-md p2">
            <h1 class="text-center">INCOMING INSPECTION SHEET FOR METAL TOOL</h1>
            <h2 class="text-center"></h2>
            <div class="grid-container-3 p2">
                <div class="mx-auto">
                     <h4 class="label">QA Operator: <?php echo $select_id['qa_operator']; ?></h4> 
                    <p class="label"></p>
                </div>
                <div class="mx-auto">
                    <h4 class="label">Date Received: <?php echo $select_id['received_date']; ?></h4>
                    <p class="label"></p>
                </div>
                <div class="mx-auto">
                    <h4 class="label">Inspection Date: <?php echo $select_id['inspection_date']; ?></h4>
                    <p class="label"></p>
                </div>
            </div>
            <div class="grid-container-2 p2">
                <div class="mx-auto">
                    <h4 class="label">Time Start: <?php echo $select_id['time_start']; ?></h4>
                    <p class="label"></p>
                </div>
                <div class="mx-auto">
                    <h4 class="label">Time End: <?php echo $select_id['time_end']; ?></h4>
                    <p class="label"></p>
                </div>
            </div>
        </div>
    </form>
</body>
</html> 