<style>
  h1 {margin:0;}
  table {width:100%;}
  th {font-weight:normal;}
  td {vertical-align:top}
  .left, .right {width:15%;}
  .middle {width:70%;}
</style>

<table>
  <tr>
    <th class="full" colspan="3"><h1><?php if ($_POST["first_name"]) {echo $_POST["first_name"];} ?> <?php if ($_POST["last_name"]) { echo $_POST["last_name"]; } ?></h1></th>
  </tr>
  <tr>
    <th class="full" colspan="3"><?php if ($_POST["street"]) {echo $_POST["street"].' <span>&bull;</span>';} ?> <?php if ($_POST["city"]) { echo $_POST["city"]; } ?>, <?php if ($_POST["state"]) { echo $_POST["state"]; } ?> <?php if ($_POST["zip"]) { echo $_POST["zip"]; } ?> <span>&bull;</span> <?php if ($_POST["phone"]) {echo $_POST["phone"];} ?></th>
  </tr>
  <tr>
    <th class="full" colspan="3"><?php if ($_POST["email"]) {echo $_POST["email"];} ?></th>
  </tr>
  <tr>
    <th class="full" colspan="3"><hr /></th>
  </tr>
  <tr>
    <td class="left"><strong>Education:</strong></td>
    <td class="middle">&nbsp;</td>
    <td class="right">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php if ($_POST["school"]) {echo $_POST["school"];} ?></strong><br /><em><?php if ($_POST["degree"]) {echo $_POST["degree"];} ?><?php if ($_POST["area_of_study"]) {echo ', '.$_POST["area_of_study"];} ?><?php if ($_POST["school_year"]) {echo ', '.$_POST["school_year"];} ?></em></td>
    <td><?php if ($_POST["school"]) {echo '<p class="fltr mrgn-righti">'.$_POST["school-city"].', '.$_POST["school-state"].'</p>';} ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><?php if ($_POST["ed_description"]) {echo $_POST["ed_description"];} ?></td>
  </tr>
  <?php if ($_POST["school2"]) { ?>
  <tr>
    <td>&nbsp;</td>
    <td><?php if ($_POST["school2"]) {echo $_POST["school2"];} ?></strong><br /><em><?php if ($_POST["degree2"]) {echo $_POST["degree2"];} ?><?php if ($_POST["area_of_study2"]) {echo ', '.$_POST["area_of_study2"];} ?><?php if ($_POST["school_year2"]) {echo ', '.$_POST["school_year2"];} ?></em></td>
    <td><?php if ($_POST["school2"]) {echo '<p class="fltr mrgn-righti">'.$_POST["school-city2"].', '.$_POST["school-state2"].'</p>';} ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><?php if ($_POST["ed_description2"]) {echo $_POST["ed_description2"];} ?></td>
  </tr>
  <?php } ?>
  <?php if ($_POST["school3"]) { ?>
  <tr>
    <td>&nbsp;</td>
    <td><?php if ($_POST["school3"]) {echo $_POST["school3"];} ?></strong><br /><em><?php if ($_POST["degree3"]) {echo $_POST["degree2"];} ?><?php if ($_POST["area_of_study3"]) {echo ', '.$_POST["area_of_study3"];} ?><?php if ($_POST["school_year3"]) {echo ', '.$_POST["school_year3"];} ?></em></td>
    <td><?php if ($_POST["school3"]) {echo '<p class="fltr mrgn-righti">'.$_POST["school-city3"].', '.$_POST["school-state3"].'</p>';} ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><?php if ($_POST["ed_description3"]) {echo $_POST["ed_description3"];} ?></td>
  </tr>
  <?php } ?>
  <tr>
    <td class="full" colspan="3"><hr /></td>
  </tr>
  <tr>
    <td class="left"><strong>Experience:</strong></td>
    <td class="middle">&nbsp;</td>
    <td class="right">&nbsp;</td>
  </tr>
  <tr>
    <td class="left"><?php if ($_POST["end_date"]) {echo $_POST["start_date"].' - '.$_POST["end_date"]; } else {$_POST["start_date"];} ?></td>
    <td class="middle"><strong><?php if ($_POST["employer"]) {echo $_POST["employer"];} ?></strong><br /><em><?php if ($_POST["title"]) {echo $_POST["title"];} ?></em></td>
    <td class="right"><?php if ($_POST["employer_location"]) {echo '<p class="fltr mrgn-righti">'.$_POST["employer_location"].'</p>';} ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><?php if ($_POST["work_description"]) {echo $_POST["work_description"];} ?></td>
  </tr>
  <?php if ($_POST["employer2"]) { ?>
  <tr>
    <td class="left"><?php if ($_POST["end_date2"]) {echo $_POST["start_date2"].' - '.$_POST["end_date2"]; } else {$_POST["start_date2"];} ?></td>
    <td class="middle"><strong><?php if ($_POST["employer2"]) {echo $_POST["employer2"];} ?></strong><br /><em><?php if ($_POST["title2"]) {echo $_POST["title2"];} ?></em></td>
    <td class="right"><?php if ($_POST["employer_location2"]) {echo '<p class="fltr mrgn-righti">'.$_POST["employer_location2"].'</p>';} ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><?php if ($_POST["work_description2"]) {echo $_POST["work_description2"];} ?></td>
  </tr>
  <?php } ?>
  <?php if ($_POST["employer3"]) { ?>
  <tr>
    <td class="left"><?php if ($_POST["end_date2"]) {echo $_POST["start_date2"].' - '.$_POST["end_date2"]; } else {$_POST["start_date2"];} ?></td>
    <td class="middle"><strong><?php if ($_POST["employer2"]) {echo $_POST["employer2"];} ?></strong><br /><em><?php if ($_POST["title2"]) {echo $_POST["title2"];} ?></em></td>
    <td class="right"><?php if ($_POST["employer_location2"]) {echo '<p class="fltr mrgn-righti">'.$_POST["employer_location2"].'</p>';} ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><?php if ($_POST["work_description3"]) {echo $_POST["work_description3"];} ?></td>
  </tr>
  <?php } ?>
  <?php if ($_POST["awards"]) { ?>
  <tr>
    <td class="left"><strong>Awards:</strong></td>
    <td class="middle">&nbsp;</td>
    <td class="right">&nbsp;</td>
  </tr>
  <tr>
    <td class="left">&nbsp;</td>
    <td colspan="2" class="middle"><?php echo $_POST["awards"] ?></td>
  </tr>
  <?php } ?>
  <?php if ($_POST["interests"]) { ?>
    <tr>
    <td class="left"><strong>Interests:</strong></td>
    <td class="middle">&nbsp;</td>
    <td class="right">&nbsp;</td>
  </tr>
  <tr>
    <td class="left">&nbsp;</td>
    <td colspan="2" class="middle"><?php echo $_POST["interests"] ?></td>
  </tr>
  <?php } ?>
</table>