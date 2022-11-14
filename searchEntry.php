<?php
require 'core/init.php';
$data = new db();
// fetching data through id number
    if(isset($_GET['id_number'])){
        $id = $_GET['id_number'];
        $select_ids = $data->selectId('metal_inspection', 'metal_tools_id', $id);
        var_dump($select_ids);
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
    <form action="<?php  ?>" method="get">
        <input type="text" name="id_number">
        <button class="btn" type="submit"  href="index.php?id=<?php echo $metal_data['metal_tool_id']; ?>">SEARCH</button>
    </form>
</body>
</html> 