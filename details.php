<?php

require 'core/init.php';
$data = new db;

$metals_data = $data->selectId('metal_inspection','metal_tool_id', $_GET['metal_tool_id']);
$pockets_number_data = $data->select('pockets_number');
$pockets_size_data = $data->select('pockets_size');
$pockets_calc_data = $data->select('pockets_size_calc');
$warpage_check_data = $data->select('warpage_check');
$warpage_side_data = $data->select('warpage_side');

foreach($metals_data as $data){
}
foreach($pockets_number_data as $pocket_number){
    
}
foreach($pockets_calc_data as $pocket_calc){

}
foreach($warpage_check_data as $warpage_data){

}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
    
</head>
<body class="center">
    <form action="">
    <div class="white shadow-md p2">
        <h1 class="text-center">INCOMING INSPECTION SHEET FOR METAL TOOL</h1>
        <h2 class="text-center"></h2>
        <div class="grid-container-3 p2">
            <div class="mx-auto">
                 <h4 class="label">QA Operator: <?php echo $data['qa_operator']; ?></h4> 
                <p class="label"></p>
            </div>
            <div class="mx-auto">
                <h4 class="label">Date Received: <?php echo $data['received_date']; ?></h4>
                <p class="label"></p>
            </div>
            <div class="mx-auto">
                <h4 class="label">Inspection Date: <?php echo $data['inspection_date']; ?></h4>
                <p class="label"></p>
            </div>
        </div>
        <div class="grid-container-2 p2">
            <div class="mx-auto">
                <h4 class="label">Time Start: <?php echo $data['time_start']; ?></h4>
                <p class="label"></p>
            </div>
            <div class="mx-auto">
                <h4 class="label">Time End: <?php echo $data['time_end']; ?></h4>
                <p class="label"></p>
            </div>
        </div>
    </div>
    </form>
    
    <div class="p2">
        <h3 class="label">Tool Name: </h3>
        <h3 class="label"><?php echo $data['tool_name']; ?></h3>
    </div>

    <h2 class="text-center">Number of pockets</h2>

    <div class="p2">
        <table class="">
            <tr>
                <th>Number of pocket</th>
                <th>Actual Number of pockets</th>
                <th>Judgement</th>
            </tr>
            <tr>
                <td class="text_center"> <?php echo $pocket_number['pockets_number']; ?></td>
                <td class="text_center"> <?php echo $pocket_number['actual_pockets_number']; ?></td>
                <td class="text_center"> <?php echo $pocket_number['pockets_number_judgment']; ?>.</td>
            </tr>
        </table>
    </div>

    <div>
    <h2 class="text-center">Warpage Check</h2>
    
    <div class="p2">
        <table>
            <tr>
                <th colspan="4">WARPAGE</th>
            </tr>
            <tr>
                <th>Spec (mm)</th>
                <th>Side</th>
                <th>Measurement data (mm)</th>
                <th>Judgement</th>
            </tr>
            <tr>
                <td class="text-center" rowspan="5"><?php echo $warpage_data['unit_spec']; ?></td>
            </tr>
        <?php foreach($warpage_side_data as $warpage_side){ ?>
            <tr>
                <td class="text-center"><?php echo $warpage_side['unit_side']; ?></td>
                <td class="text-center"><?php echo $warpage_side['unit_measurement']; ?></td>
                <td class="text-center"><?php echo $warpage_side['unit_judgment']; ?></td>
            </tr>
        <?php } ?>    

        </table>
    </div>

    <h2 class="text-center">Size of pockets</h2>
    <div class="p2">
        <table>
            <tr>
                <th colspan="3">Position</th>
                <th colspan="2">Spec[mm]</th>
                <th colspan="2">Measurement data[mm]</th>
                <th rowspan="2">R <br> (measurement only)</th>
                <th rowspan="2">Judgement</th>
            </tr>
            <tr>
                <th></th>
                <th>x</th>
                <th>y</th>
                <th>L</th>
                <th>W</th>
                <th>L</th>
                <th>W</th>
            </tr>
            
            <?php foreach($pockets_size_data as $pockets_size){ ?>
            <tr>
                <td class="text-center"><?php echo $pockets_size['pockets_size_id']; ?></td>
                <td class="text-center"><?php echo $pockets_size['position_x']; ?></td>
                <td class="text-center"><?php echo $pockets_size['position_y']; ?></td>
                <td class="text-center"><?php echo $pockets_size['spec_length']; ?></td>
                <td class="text-center"><?php echo $pockets_size['spec_width']; ?></td>
                <td class="text-center"><?php echo $pockets_size['measurement_length']; ?></td>
                <td class="text-center"><?php echo $pockets_size['measurement_width']; ?></td>
                <td class="text-center"><?php echo $pockets_size['r_measurement']; ?></td>
                <td class="text-center"><?php echo $pockets_size['pockets_size_judgment']; ?></td>
            </tr>
            <?php } ?>
        </table>
        <div class="grid-container-3 p2">
            <div class="mx-auto">
                <h4 class="label">Min: </h4>
                <p class="label"><?php echo $pocket_calc['minimum']; ?></p>
            </div>
            <div class="mx-auto">
                <h4 class="label">Max: </h4>
                <p class="label"><?php echo $pocket_calc['maximum']; ?></p>
            </div>
            <div class="mx-auto">
                <h4 class="label">Average:</h4>
                <p class="label"><?php echo $pocket_calc['average']; ?></p>
            </div>
        </div>
    </div>
    <hr>
    <div class="grid-container-2 p2">
        <div class="mx-auto">
            <img src="assets/images/metal-tool.png" alt="">
        </div>
        <div class="relative mx-auto">
            <img src="assets/images/pocket-portion.png" alt="">
            <h4 class="absolute-measurement label">Measurement only:</h4>
            <h4 class="absolute-length label">Length:</h4>
            <h4 class="absolute-width label">Width:</h4>
        </div>
    </div>

    </div>
    <hr>
    <div>
        <h2 class="text-center">Remarks</h2>
        <h1 class="text-center"><?php echo $data['metal_tool_remarks']; ?></h1>
    </div>
    <hr>
    <div>
        <table>
            <tr>
                <th>Judgement</th>
                <th>Checked by</th>
                <th>Approved by</th>
            </tr>
            <tr>
                <td class="text-center"><?php echo $data['metal_tool_judgment']; ?></td>
                <td class="text-center"><?php echo $data['metal_tool_checker']; ?></td>
                <td class="text-center"><?php echo $data['metal_tool_approver']; ?></td>
            </tr>
        </table>
    </div>

    <div class="grid-container p2">
        <div class="mx-auto p2">
            <button class="btn shadow-md">Done Process</button>
        </div>
    </div>
    <footer>
        <div class="grid-container-3 p2">
            <div class="mx-auto p2">
                <p>FM-QA-001/057</p>
            </div>
            <div class="mx-auto p2">
                <p>00/00/0000</p>
            </div>
            <div class="mx-auto p2">
                <p>Revision 00</p>
            </div>
        </div>
    </footer>

</body>
</html>