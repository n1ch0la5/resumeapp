<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tech Resume</title>
<style type="text/css">
    body,
    html {font-family:Arial, Helvetica, sans-serif; padding:0; margin:0;}
    h1, h2 {margin:0;}
    table {width:100%; border-collapse: collapse;}
    tr {padding:0 3em;}
    .header td {padding:1em;}
    td {padding:0.5em 1em;}
    .left {width:20%; color:#bc8f4e; font-style:italic; font-weight:bold;}
    .right {width:80%;}
    .header td {background: #eeeeee; border-bottom: 2px solid #d9aa38;}
        .header-left {width:80%;}
        .header-right {width:20%;}
</style>
</head>
<body>
    <table>
        <tr class="header">
            <td class="header-left"><h1><?php if ($_POST["first_name"]) {echo $_POST["first_name"];} ?> <?php if ($_POST["last_name"]) { echo $_POST["last_name"]; } ?></h1><br /><?php if ($_POST["title"]) {echo "<h2>".$_POST["title"]."</h2>";} ?></td>
            <td class="header-right"><?php if ($_POST["email"]) {echo "e:".$_POST["email"];} ?><br /><?php if ($_POST["phone"]) {echo "p:".$_POST["phone"];} ?></td>
        </tr>
        <tr>
            <td class="left">Personal Profile</td>
            <td class="right"><?php if ($_POST["statement"]) {echo $_POST["statement"];} ?></td>
        </tr>
        <tr>
            <td colspan="2"><hr /></td>
        </tr>
        <tr>
            <td class="left">Work Experience</td>
            <td class="right"><strong><?php if ($_POST["title"]) {echo $_POST["title"]." at ";} ?><?php if ($_POST["employer"]) {echo $_POST["employer"];} ?></strong><br /><em><?php if ($_POST["end_date"]) {echo $_POST["start_date"].' - '.$_POST["end_date"]; } else {$_POST["start_date"];} ?></em></td>
        </tr>
        <tr>
            <td class="left">&nbsp;</td>
            <td class="right"><?php if ($_POST["work_description"]) {echo $_POST["work_description"];} ?></td>
        </tr>
        <?php if ($_POST["employer2"]) { ?>
        <tr>
            <td class="left">&nbsp;</td>
            <td class="right"><strong><?php if ($_POST["title2"]) {echo $_POST["title2"]." at ";} ?><?php if ($_POST["employer2"]) {echo $_POST["employer2"];} ?></strong><br /><em><?php if ($_POST["end_date2"]) {echo $_POST["start_date2"].' - '.$_POST["end_date2"]; } else {$_POST["start_date2"];} ?></em></td>
        </tr>
        <tr>
            <td class="left">&nbsp;</td>
            <td class="right"><?php if ($_POST["work_description2"]) {echo $_POST["work_description2"];} ?></td>
        </tr>
        <?php } ?>
        <?php if ($_POST["employer3"]) { ?>
        <tr>
            <td class="left">&nbsp;</td>
            <td class="right"><strong><?php if ($_POST["title3"]) {echo $_POST["title3"]." at ";} ?><?php if ($_POST["employer3"]) {echo $_POST["employer3"];} ?></strong><br /><em><?php if ($_POST["end_date3"]) {echo $_POST["start_date3"].' - '.$_POST["end_date3"]; } else {$_POST["start_date3"];} ?></em></td>
        </tr>
        <tr>
            <td class="left">&nbsp;</td>
            <td class="right"><?php if ($_POST["work_description3"]) {echo $_POST["work_description3"];} ?></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="2"><hr /></td>
        </tr>
        <tr>
            <td class="left">Education</td>
            <td class="right"><strong><?php if ($_POST["school"]) {echo $_POST["school"];} ?></strong><br /><em><?php if ($_POST["degree"]) {echo $_POST["degree"];} ?><?php if ($_POST["area_of_study"]) {echo ', '.$_POST["area_of_study"];} ?><?php if ($_POST["school_year"]) {echo ', '.$_POST["school_year"];} ?></em></td>
        </tr>
        <tr>
            <td class="left">&nbsp;</td>
            <td class="right"><?php if ($_POST["ed_description"]) {echo $_POST["ed_description"];} ?></td>
        </tr>
        <?php if ($_POST["school2"]) { ?>
        <tr>
            <td class="left">&nbsp;</td>
            <td class="right"><strong><?php if ($_POST["school2"]) {echo $_POST["school2"];} ?></strong><br /><em><?php if ($_POST["degree2"]) {echo $_POST["degree2"];} ?><?php if ($_POST["area_of_study2"]) {echo ', '.$_POST["area_of_study2"];} ?><?php if ($_POST["school_year2"]) {echo ', '.$_POST["school_year2"];} ?></em></td>
        </tr>
        <tr>
            <td class="left">&nbsp;</td>
            <td class="right"><?php if ($_POST["ed_description2"]) {echo $_POST["ed_description2"];} ?></td>
        </tr>
        <?php } ?>
        <?php if ($_POST["school3"]) { ?>
        <tr>
            <td class="left">&nbsp;</td>
            <td class="right"><strong><?php if ($_POST["school3"]) {echo $_POST["school3"];} ?></strong><br /><em><?php if ($_POST["degree3"]) {echo $_POST["degree3"];} ?><?php if ($_POST["area_of_study3"]) {echo ', '.$_POST["area_of_study3"];} ?><?php if ($_POST["school_year3"]) {echo ', '.$_POST["school_year3"];} ?></em></td>
        </tr>
        <tr>
            <td class="left">&nbsp;</td>
            <td class="right"><?php if ($_POST["ed_description3"]) {echo $_POST["ed_description3"];} ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>