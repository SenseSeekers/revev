<?php

/**
 * MyClass Class Doc Comment
 *
 *  PHP Version 8.0.1
 * 
 * @category Class
 * @package  MyPackage
 * @author   Md. Nurul Islam Talukder Nahid <nitalukder62443@gmail.com>
 * @license  https://github.com/SenseSeekers/revev/blob/main/LICENSE MIT License
 * @link     https://www.revevx.com/
 * 
 * @return string[]
 * phpcs:disable
 * 
 */
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="src/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- Local CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Page Title -->
    <title>Revev | Shop Now</title>

    <style>
        * {
            box-sizing: border-box !important;
        }

        .img {
            vertical-align: middle !important;
        }

        /* Position the image w3container (needed to position the left and right arrows) */
        .w3container {
            position: relative !important;
        }

        /* Hide the images by default */
        .w3mySlides {
            display: none !important;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .w3cursor {
            cursor: pointer !important;
            padding: 16px 0 !important;
        }

        /* Next & w3previous buttons */
        .w3prev,
        .w3next {
            cursor: pointer !important;
            position: absolute !important;
            top: 40% !important;
            width: auto !important;
            padding: 16px !important;
            margin-top: -50px !important;
            color: white !important;
            font-weight: bold !important;
            font-size: 20px !important;
            border-radius: 0 3px 3px 0 !important;
            user-select: none !important;
            -webkit-user-select: none !important;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0 !important;
            border-radius: 3px 0 0 3px !important;
        }

        /* On hover, add a black background color with a little bit see-through */
        .w3prev:hover,
        .w3next:hover {
            background-color: rgba(0, 0, 0, 0.8) !important;
        }

        /* Number text (1/3 etc) */
        .w3numbertext {
            color: #f2f2f2 !important;
            font-size: 12px !important;
            padding: 8px 12px !important;
            position: absolute !important;
            top: 0 !important;
        }

        /* w3Container for image text */
        .w3caption-w3container {
            text-align: center !important;
            background-color: #222 !important;
            padding: 2px 16px !important;
            color: white !important;
        }

        .w3row:after {
            content: "" !important;
            display: table !important;
            clear: both !important;
            border-radius: 2px !important;
        }

        /* Six columns side by side */
        .w3column {
            float: left !important;
            width: 16.66% !important;
            padding: auto 0 !important;
        }

        /* Add a transparency effect for thumnbail images */
        .w3demo {
            opacity: 0.6 !important;
        }

        .w3active,
        .w3demo:hover {
            opacity: 1 !important;
        }
    </style>

</head>

<body class="d-flex flex-column min-vh-100">