<?php
    $data = array();
    $dataList = array();

    $data[0] = "No";
    $data[1] = "Name";
    $data[2] = "Age";

    array_push($dataList, $data);

    echo json_encode($dataList);
?>