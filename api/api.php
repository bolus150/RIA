<?php

if (!isset($_GET['x']) || !$_GET['x'] || !isset($_GET['y']) || !$_GET['y']) {
    echo json_encode(array('code' => 500, 'msg' => "Podałeś błędne dane"));
    die();
}

echo json_encode(
    array(
        'code' => 200,
        'result' => array (
            'sum' => sum($_GET['x'], $_GET['y']),
            'difference' => difference($_GET['x'], $_GET['y']),
            'product' => product($_GET['x'], $_GET['y']),
            'quotient' => quotient($_GET['x'], $_GET['y']),
        ),
        'msg' => "Program obliczył następujące dane: "
    )
);


function sum ($x, $y) {
    return $x + $y;
}

function difference ($x, $y) {
    return $x - $y;
}

function product ($x, $y) {
    return $x * $y;
}

function quotient ($x, $y) {
    return $x / $y;
}