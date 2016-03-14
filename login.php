<?php header('Access-Control-Allow-Origin: *');


    $stime= $_GET['first_name'];
    $etime= $_GET['last_name'];
    $xyz= $_GET['start_time'];
    $abc= $_GET['end_time'];
    echo "\n";
    echo "First Name:   " . $stime;
    echo "\n";
    echo "Last Name:   " . $etime;
    echo "\n";
    echo "Start Time:   " . $xyz;
    echo "\n";
    echo "End Time:   " . $abc;
?>

