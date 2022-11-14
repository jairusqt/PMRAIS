<?php 
require 'core/init.php';
$data = new db();
$metals_data = $data->select('metal_inspection');

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
    <h1 class="text-center">Metal Inspection</h1>
    <div class="center">
        <table>
            <tr>
                <th>Tool ID</th>
                <th>Tool name</th>
                <th>Received date</th>
                <th>Inspection date</th>
                <th>QA Operator</th>
            </tr>
            <?php foreach($metals_data as $metal_data){ ?>
            <tr>
                <td class="text-center"><?php echo $metal_data['metal_tool_id']; ?></td>
                <td class="text-center"><?php echo $metal_data['tool_name']; ?></td>
                <td class="text-center"><?php echo $metal_data['received_date']; ?></td>
                <td class="text-center"><?php echo $metal_data['inspection_date']; ?></td>
                <td class="text-center"><?php echo $metal_data['qa_operator']; ?></td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>