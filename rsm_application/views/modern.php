<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modern Template</title>

<style type="text/css">
body{font-family:Arial, Helvetica, sans-serif;	}
*{padding:0px;margin:0px;}
h1 {text-align:center; font-size:2em; color:#005A8A;}
h2 {text-align:center; font-size:1.5em; color:#005A8A; border-bottom:1px solid #000;}
strong {color:#005A8A;}
.contact {margin-bottom:1px solid #000;}
</style>


</head>
<body>
<h1><?php if ($_POST["first_name"]) {echo $_POST["first_name"];} ?> <?php if ($_POST["last_name"]) { echo $_POST["last_name"]; } ?></h1>
<p class='contact'><?php if ($_POST["street"]) {echo $_POST["street"]; ?>&block;<?php if ($_POST["city"]) { echo $_POST["city"]; } ?>, <?php if ($_POST["state"]) { echo $_POST["state"]; } ?> <?php if ($_POST["zip"]) { echo $_POST["zip"]; } ?>&block;<?php if ($_POST["phone"]) {echo 'Phone: '.$_POST["phone"];} ?>&block;<?php if ($_POST["email"]) {echo 'Email: '.$_POST["email"];} ?></p>
<p class="statement"><?php if ($_POST["statement"]) {echo $_POST["statement"];} ?></p>

<h2>Professional Experience</h2>
<p><strong><?php if ($_POST["employer"]) {echo $_POST["employer"];} ?></strong> - <?php if ($_POST["employer_location"]) {echo $_POST["employer_location"];} ?>
    <br />
    <em><?php if ($_POST["title"]) {echo $_POST["title"]; ?> - <?php if ($_POST["end_date"]) {echo $_POST["start_date"].' - '.$_POST["end_date"]; } else {echo $_POST["start_date"];} ?></em>
</p>
<p><?php if ($_POST["work_description"]) {echo $_POST["work_description"];} ?></p>
<?php if ($_POST["employer2"]) { ?>
<p><strong><?php if ($_POST["employer2"]) {echo $_POST["employer2"];} ?></strong> - <?php if ($_POST["employer_location2"]) {echo $_POST["employer_location2"];} ?>
    <br />
    <em><?php if ($_POST["title2"]) {echo $_POST["title2"]; ?> - <?php if ($_POST["end_date2"]) {echo $_POST["start_date2"].' - '.$_POST["end_date2"]; } else {echo $_POST["start_date2"];} ?></em>
</p>
<p><?php if ($_POST["work_description3"]) {echo $_POST["work_description3"];} ?></p>
<?php } ?>
<?php if ($_POST["employer3"]) { ?>
<p><strong><?php if ($_POST["employer3"]) {echo $_POST["employer3"];} ?></strong> - <?php if ($_POST["employer_location3"]) {echo $_POST["employer_location3"];} ?>
    <br />
    <em><?php if ($_POST["title3"]) {echo $_POST["title3"]; ?> - <?php if ($_POST["end_date3"]) {echo $_POST["start_date3"].' - '.$_POST["end_date3"]; } else {echo $_POST["start_date3"];} ?></em>
</p>
<p><?php if ($_POST["work_description3"]) {echo $_POST["work_description3"];} ?></p>
<?php } ?>

<h2>Education</h2>
<p><strong><?php if ($_POST["school"]) {echo $_POST["school"];} ?></strong> - <em><?php if ($_POST["degree"]) {echo $_POST["degree"];} ?><?php if ($_POST["area_of_study"]) {echo ', '.$_POST["area_of_study"];} ?></em><?php if ($_POST["school_year"]) {echo ' - '.$_POST["school_year"];} ?>
</p>
<p><strong><?php if ($_POST["school2"]) {echo $_POST["school2"];} ?></strong> - <em><?php if ($_POST["degree2"]) {echo $_POST["degree2"];} ?><?php if ($_POST["area_of_study2"]) {echo ', '.$_POST["area_of_study2"];} ?></em><?php if ($_POST["school_year2"]) {echo ' - '.$_POST["school_year2"];} ?>
</p>
<p><strong><?php if ($_POST["school3"]) {echo $_POST["school3"];} ?></strong> - <em><?php if ($_POST["degree3"]) {echo $_POST["degree3"];} ?><?php if ($_POST["area_of_study3"]) {echo ', '.$_POST["area_of_study3"];} ?></em><?php if ($_POST["school_year3"]) {echo ' - '.$_POST["school_year3"];} ?>
</p>
</body>
</html>
