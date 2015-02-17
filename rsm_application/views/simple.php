<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modern Template</title>

<style type="text/css">
body{font-family:Arial, Helvetica, sans-serif;	}
*{padding:0px;margin:0px;}
.header {text-align:center;}
h2 {display:block; background:#ccc; border-bottom:1px solid #000;}
</style>


</head>
<body>
<div class="header">
	<h1><?php if ($_POST["first_name"]) {echo $_POST["first_name"];} ?> <?php if ($_POST["last_name"]) { echo $_POST["last_name"]; } ?></h1>
	<p><?php if ($_POST["street"]) {echo $_POST["street"]; ?> <?php if ($_POST["city"]) { echo $_POST["city"]; } ?>, <?php if ($_POST["state"]) { echo $_POST["state"]; } ?> <?php if ($_POST["zip"]) { echo $_POST["zip"]; } ?><br /><?php if ($_POST["phone"]) {echo $_POST["phone"];} ?><br /><?php if ($_POST["email"]) {echo 'Email - '.$_POST["email"];} ?></p>
	<h2>Professional Experience & Acheivements</h2>
	<p><strong><?php if ($_POST["employer"]) {echo $_POST["employer"];} ?> - <?php if ($_POST["end_date"]) {echo $_POST["start_date"].' to '.$_POST["end_date"]; } else {echo $_POST["start_date"]." to Present";} ?></strong></p>
	<br />
	<p><strong><?php if ($_POST["title"]) {echo $_POST["title"]; ?></strong></p>
	<p><?php if ($_POST["work_description"]) {echo $_POST["work_description"];} ?></p>
	<?php if ($_POST["employer2"]) { ?>
	<br />
	<br />
	<p><strong><?php if ($_POST["employer2"]) {echo $_POST["employer2"];} ?> - <?php if ($_POST["end_date2"]) {echo $_POST["start_date2"].' to '.$_POST["end_date2"]; } else {echo $_POST["start_date2"]." to Present";} ?></strong></p>
	<br />
	<p><strong><?php if ($_POST["title2"]) {echo $_POST["title2"]; ?></strong></p>
	<p><?php if ($_POST["work_description2"]) {echo $_POST["work_description2"];} ?></p>
	<?php } ?>
	<?php if ($_POST["employer2"]) { ?>
	<br />
	<br />
	<p><strong><?php if ($_POST["employer3"]) {echo $_POST["employer3"];} ?> - <?php if ($_POST["end_date3"]) {echo $_POST["start_date"].' to '.$_POST["end_date3"]; } else {echo $_POST["start_date3"]." to Present";} ?></strong></p>
	<br />
	<p><strong><?php if ($_POST["title3"]) {echo $_POST["title3"]; ?></strong></p>
	<p><?php if ($_POST["work_description3"]) {echo $_POST["work_description3"];} ?></p>
	<?php } ?>

	<h2>Education</h2>
	<p><?php if ($_POST["area_of_study"]) {echo $_POST["area_of_study"].', ';} ?><?php if ($_POST["school"]) {echo $_POST["school"];} ?> <?php if ($_POST["school_year"]) {echo $_POST["school_year"];} ?></p>
    <?php if ($_POST["school2"]) { ?>
	<p><?php if ($_POST["area_of_study2"]) {echo $_POST["area_of_study2"].', ';} ?><?php if ($_POST["school2"]) {echo $_POST["school2"];} ?> <?php if ($_POST["school_year2"]) {echo $_POST["school_year2"];} ?></p>
	<?php } ?>
	<?php if ($_POST["school3"]) { ?>
	<p><?php if ($_POST["area_of_study3"]) {echo $_POST["area_of_study3"].', ';} ?><?php if ($_POST["school3"]) {echo $_POST["school3"];} ?> <?php if ($_POST["school_year3"]) {echo $_POST["school_year3"];} ?></p>
	<?php } ?>
</div>
</body>
</html>
