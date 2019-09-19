<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location:index.php");
    }
    include("config.php");
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
?>
<html lang="en">
<head>
<!-- Character set configuration -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Viewport configuration, scaling options -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS Stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/registration-frm-1.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Font Awesome icon -->
<link href="css/font-awesome.min.css" rel="stylesheet">
      <style>
      body
      {
        font-family: Arial, Helvetica, sans-serif;
        /* background-image: url("image/white_texture.png"); */
      }

      #booking .booking-wrap .search {
          background-color: rgba(255, 255, 255, .9);
          min-height: 380px;
          margin-top: 20px;
          display: block;
          float: left;
          width: 526px;
      }

      a, abbr, acronym, address, b, bdo, big, blockquote, body, br, button, cite, code, dd, del, dfn, div, dl, dt, em, fieldset, form, h1, h2, h3, h4, h5, h6, html, i, img, ins, kbd,
       legend, li, map, object, ol, p, pre, q, samp, small, span, strong, sub, sup, tbody, td, tfoot, th, thead, tr, tt, ul, var
      {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
      }

      .button
      {
        position: absolute;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 50%;
      }
      .customfont
      {
        font-size: 14px;
      }

      </style>
      
    <script>
    var dateToday = new Date();
    var dates = $("#doj").datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3,
        minDate: dateToday,
        onSelect: function(selectedDate) {
            var option = this.id == "from" ? "minDate" : "maxDate",
                instance = $(this).data("datepicker"),
                date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
            dates.not(this).datepicker("option", option, date);
        }
    });
    </script>
<!-- Character set configuration -->
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
<!-- Google web font  -->
<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700|Roboto:300,400,500" rel="stylesheet">
<!-- Character set configuration -->
<title>Registration Details</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Viewport configuration, scaling options -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS Stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/registration-frm-1.css" rel="stylesheet">
<!-- Font Awesome icon -->
<link href="css/font-awesome.min.css" rel="stylesheet">
      <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins');
      /* BASIC */
      
      </style>
      <link href="css/custumcss.css" rel="stylesheet">
</head>