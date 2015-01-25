<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Executive Marketing</title>
<style type="text/css">
h1, h2 {margin:0; margin-top:2px; border-top:1px solid #838383;}
table {width:100%; border-collapse: collapse;}
.header {background:#d7d7d7; text-align: center;}
    .header td {border-top:5px solid #838383; padding-top:3px;}
.header-bottom {background:#d7d7d7; text-align: center;}
    .header-bottom td {border-bottom:6px solid #838383;}
.left {width:80%;}
</style>
</head>
<body>
    <table>
        <tr class="header">
            <td colspan="2"><h1><?php if ($_POST["first_name"]) {echo $_POST["first_name"];} ?> <?php if ($_POST["last_name"]) { echo $_POST["last_name"]; } ?></h1></td>
        </tr>
        <tr class="header-bottom">
            <td colspan="2"><?php if ($_POST["street"]) {echo $_POST["street"].' <span>&bull;</span>';} ?> <?php if ($_POST["city"]) { echo $_POST["city"]; } ?>, <?php if ($_POST["state"]) { echo $_POST["state"]; } ?> <?php if ($_POST["zip"]) { echo $_POST["zip"]; } ?> <span>&bull;</span> <?php if ($_POST["phone"]) {echo $_POST["phone"];} ?> <span>&bull; </span><?php if ($_POST["email"]) {echo $_POST["email"];} ?></td>
        </tr>
        <tr>
            <td colspan="2"><blockquote><?php if ($_POST["statement"]) {echo $_POST["statement"];} ?></blockquote></td>
        </tr>
        <tr class="header">
            <td colspan="2"><h2>Professional Experience</h2></td>
        </tr>
        <tr>
            <td class="left"><?php if ($_POST["title"]) {echo $_POST["title"]." at ";} ?><br /><strong><?php if ($_POST["employer"]) {echo $_POST["employer"];} ?></strong></td>
            <td class="right"><em><?php if ($_POST["end_date"]) {echo $_POST["start_date"].' - '.$_POST["end_date"]; } else {$_POST["start_date"];} ?></em></td>
        </tr>
        <tr>
            <td colspan="2"><?php if ($_POST["work_description"]) {echo $_POST["work_description"]} ?></td>
        </tr>
        <?php if ($_POST["employer2"]) { ?>
        <tr>
            <td class="left"><?php if ($_POST["title2"]) {echo $_POST["title2"]." at ";} ?><br /><strong><?php if ($_POST["employer2"]) {echo $_POST["employer2"];} ?></strong></td>
            <td class="right"><em><?php if ($_POST["end_date2"]) {echo $_POST["start_date2"].' - '.$_POST["end_date2"]; } else {$_POST["start_date2"];} ?></em></td>
        </tr>
        <tr>
            <td colspan="2"><?php if ($_POST["work_description"]) {echo $_POST["work_description"]} ?></td>
        </tr>
        <?php } ?>
        <?php if ($_POST["employer3"]) { ?>
        <tr>
            <td class="left"><?php if ($_POST["title3"]) {echo $_POST["title3"]." at ";} ?><br /><strong><?php if ($_POST["employer3"]) {echo $_POST["employer3"];} ?></strong></td>
            <td class="right"><em><?php if ($_POST["end_date3"]) {echo $_POST["start_date3"].' - '.$_POST["end_date3"]; } else {$_POST["start_date3"];} ?></em></td>
        </tr>
        <tr>
            <td colspan="2"><?php if ($_POST["work_description"]) {echo $_POST["work_description"]} ?></td>
        </tr>
        <?php } ?>
        <tr class="header">
            <td colspan="2"><h2>Education</h2></td>
        </tr>
        <tr>
            <td class="left"><strong><?php if ($_POST["school"]) {echo $_POST["school"];} ?></strong><br /><em><?php if ($_POST["degree"]) {echo $_POST["degree"];} ?><?php if ($_POST["area_of_study"]) {echo ', '.$_POST["area_of_study"];} ?><?php if ($_POST["school_year"]) {echo ', '.$_POST["school_year"];} ?></em></td>
            <td class="right">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2"><?php if ($_POST["ed_description"]) {echo $_POST["ed_description"]} ?></td>
        </tr>
        <?php if ($_POST["school2"]) { ?>
        <tr>
            <td class="left"><strong><?php if ($_POST["school2"]) {echo $_POST["school2"];} ?></strong><br /><em><?php if ($_POST["degree2"]) {echo $_POST["degree2"];} ?><?php if ($_POST["area_of_study2"]) {echo ', '.$_POST["area_of_study2"];} ?><?php if ($_POST["school_year2"]) {echo ', '.$_POST["school_year2"];} ?></em></td>
            <td class="right">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2"><?php if ($_POST["ed_description2"]) {echo $_POST["ed_description2"]} ?></td>
        </tr>
        <?php } ?>
        <?php if ($_POST["school3"]) { ?>
        <tr>
            <td class="left"><strong><?php if ($_POST["school3"]) {echo $_POST["school3"];} ?></strong><br /><em><?php if ($_POST["degree3"]) {echo $_POST["degree3"];} ?><?php if ($_POST["area_of_study3"]) {echo ', '.$_POST["area_of_study3"];} ?><?php if ($_POST["school_year3"]) {echo ', '.$_POST["school_year3"];} ?></em></td>
            <td class="right">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2"><?php if ($_POST["ed_description3"]) {echo $_POST["ed_description3"]} ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
