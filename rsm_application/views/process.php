<img src="/images/loading-x.gif" alt="loading">
<form style="display:none;" class="process-form" action="<?php if (isset($_GET['template-select'])) echo $_GET['template-select']; ?>" method="post" target="_top">
	<input id="first_name" name="first_name" type="text" placeholder="First" class="input-large" required="" value="<?php if (isset($_GET['first_name'])) echo $_GET['first_name']; ?>">
  	<input id="last_name" name="last_name" type="text" placeholder="Last" class="input-large" required="" value="<?php if (isset($_GET['last_name'])) echo $_GET['last_name']; ?>">
  	<input id="phone" name="phone" type="text" placeholder="000-000-0000" class="input-large" value="<?php if (isset($_GET['phone'])) echo $_GET['phone']; ?>">
  	<input id="email" name="email" type="text" placeholder="example@email.com" class="input-large" required="" value="<?php if (isset($_GET['email'])) echo $_GET['email']; ?>">
  	<input id="street" name="street" type="text" placeholder="123 W. Main St." class="input-large" value="<?php if (isset($_GET['street'])) echo $_GET['street']; ?>">
  	<input id="city" name="city" type="text" placeholder="City" class="input-large" value="<?php if (isset($_GET['city'])) echo $_GET['city']; ?>">
    <input id="state" name="state" class="input-medium" value="<?php if (isset($_GET['state'])) echo $_GET['state']; ?>">
	<input id="zip" name="zip" type="text" placeholder="12345" class="input-large" value="<?php if (isset($_GET['zip'])) echo $_GET['zip']; ?>">    
	<textarea id="statement" name="statement" style="width:100%" rows="10"></textarea>
    <input id="school" name="school" type="text" placeholder="School" class="input-large" value="<?php if (isset($_GET['school'])) echo $_GET['school']; ?>">
    <input id="school-city" name="school-city" type="text" placeholder="City" class="input-large" value="<?php if (isset($_GET['school-city'])) echo $_GET['school-city']; ?>">
    <input id="school-state" name="school-state" class="input-medium" value="<?php if (isset($_GET['school-state'])) echo $_GET['school-state']; ?>">
    <input id="school_year" name="school_year" type="text" placeholder="2007" class="input-large" value="<?php if (isset($_GET['school_year'])) echo $_GET['school_year']; ?>">
    <input id="area_of_study" name="area_of_study" type="text" placeholder="Business" class="input-large" value="<?php if (isset($_GET['area_of_study'])) echo $_GET['area_of_study']; ?>">
    <input id="degree" name="degree" class="input-small" value="<?php if (isset($_GET['degree'])) echo $_GET['degree']; ?>">
    <textarea rows="4" cols="50" id="ed_description" name="ed_description" class="input-large"><?php if (isset($_GET['ed_description'])) echo $_GET['ed_description']; ?></textarea>

    <input id="school2" name="school2" type="text" placeholder="School" class="input-large" value="<?php if (isset($_GET['school2'])) echo $_GET['school2']; ?>">
    <input id="school-city2" name="school-city2" type="text" placeholder="City" class="input-large" value="<?php if (isset($_GET['school-city2'])) echo $_GET['school-city2']; ?>">
    <select id="school-state2" name="school-state2" class="input-medium" value="<?php if (isset($_GET['school-state2'])) echo $_GET['school-state2']; ?>">
    <input id="school_year2" name="school_year2" type="text" placeholder="2007" class="input-large" value="<?php if (isset($_GET['school_year2'])) echo $_GET['school_year2']; ?>">
    <input id="area_of_study2" name="area_of_study2" type="text" placeholder="Business" class="input-large" value="<?php if (isset($_GET['area_of_study2'])) echo $_GET['area_of_study2']; ?>">
    <select id="degree" name="degree2" class="input-small" value="<?php if (isset($_GET['degree2'])) echo $_GET['degree2']; ?>">
    <textarea rows="4" cols="50" id="ed_description2" name="ed_description2" class="input-large"><?php if (isset($_GET['ed_description2'])) echo $_GET['ed_description']; ?></textarea>

    <input id="school3" name="school3" type="text" placeholder="School" class="input-large" value="<?php if (isset($_GET['school'])) echo $_GET['school']; ?>">
    <input id="school-city3" name="school-city3" type="text" placeholder="City" class="input-large" value="<?php if (isset($_GET['school-city'])) echo $_GET['school-city']; ?>">
    <select id="school-state3" name="school-state3" class="input-medium" value="<?php if (isset($_GET['school-state3'])) echo $_GET['school-state']; ?>">
    <input id="school_year3" name="school_year3" type="text" placeholder="2007" class="input-large" value="<?php if (isset($_GET['school_year3'])) echo $_GET['school_year3']; ?>">
    <input id="area_of_study3" name="area_of_study" type="text" placeholder="Business" class="input-large" value="<?php if (isset($_GET['area_of_study3'])) echo $_GET['area_of_study3']; ?>">
    <select id="degree" name="degree3" class="input-small" value="<?php if (isset($_GET['degree3'])) echo $_GET['degree3']; ?>">
    <textarea rows="4" cols="50" id="ed_description3" name="ed_description3" class="input-large"><?php if (isset($_GET['ed_description3'])) echo $_GET['ed_description']; ?></textarea>
    
	<input id="employer" name="employer" type="text" placeholder="Job Inc." class="input-large" value="<?php if (isset($_GET['employer'])) echo $_GET['employer']; ?>">
	<input id="employer_location" name="employer_location" type="text" placeholder="Woodbridge, CT" class="input-large" value="<?php if (isset($_GET['employer_location'])) echo $_GET['employer_location']; ?>">
    <input id="title" name="title" type="text" placeholder="Chief Executive Officer" class="input-large" value="<?php if (isset($_GET['title'])) echo $_GET['title']; ?>">
    <input id="start_date" name="start_date" type="text" placeholder="2008" class="input-large" value='<?php if (isset($_GET['start_date'])) echo $_GET['start_date']; ?>'>
    <input id="end_date" name="end_date" type="text" placeholder="2011" class="input-large" value='<?php if (isset($_GET['end_date'])) echo $_GET['end_date']; ?>'>
    <textarea rows="4" cols="50" id="work_description" name="work_description" class="input-large"><?php if (isset($_GET['work_description'])) echo $_GET['work_description']; ?></textarea>

    <input id="employer2" name="employer2" type="text" placeholder="Job Inc." class="input-large" value="<?php if (isset($_GET['employer2'])) echo $_GET['employer2']; ?>">
	<input id="employer_location2" name="employer_location2" type="text" placeholder="Woodbridge, CT" class="input-large" value="<?php if (isset($_GET['employer_location2'])) echo $_GET['employer_location2']; ?>">
    <input id="title2" name="title2" type="text" placeholder="Chief Executive Officer" class="input-large" value="<?php if (isset($_GET['title2'])) echo $_GET['title2']; ?>">
    <input id="start_date2" name="start_date2" type="text" placeholder="2008" class="input-large" value='<?php if (isset($_GET['start_date2'])) echo $_GET['start_date2']; ?>'>
    <input id="end_date2" name="end_date2" type="text" placeholder="2011" class="input-large" value='<?php if (isset($_GET['end_date2'])) echo $_GET['end_date2']; ?>'>
    <textarea rows="4" cols="50" id="work_description2" name="work_description2" class="input-large"><?php if (isset($_GET['work_description2'])) echo $_GET['work_description2']; ?></textarea>

    <input id="employer3" name="employer3" type="text" placeholder="Job Inc." class="input-large" value="<?php if (isset($_GET['employer3'])) echo $_GET['employer3']; ?>">
	<input id="employer_location3" name="employer_location3" type="text" placeholder="Woodbridge, CT" class="input-large" value="<?php if (isset($_GET['employer_location3'])) echo $_GET['employer_location3']; ?>">
    <input id="title3" name="title3" type="text" placeholder="Chief Executive Officer" class="input-large" value="<?php if (isset($_GET['title3'])) echo $_GET['title3']; ?>">
    <input id="start_date3" name="start_date3" type="text" placeholder="2008" class="input-large" value='<?php if (isset($_GET['start_date3'])) echo $_GET['start_date3']; ?>'>
    <input id="end_date3" name="end_date3" type="text" placeholder="2011" class="input-large" value='<?php if (isset($_GET['end_date3'])) echo $_GET['end_date3']; ?>'>
    <textarea rows="4" cols="50" id="work_description3" name="work_description3" class="input-large"><?php if (isset($_GET['work_description3'])) echo $_GET['work_description3']; ?></textarea>


	<textarea id="awards" name="awards" style="width:100%" rows="10"><?php if (isset($_GET['awards'])) echo $_GET['awards']; ?></textarea>

    <textarea id="interests" name="interests" style="width:100%" rows="10"><?php if (isset($_GET['interests'])) echo $_GET['interests']; ?></textarea>
</form>