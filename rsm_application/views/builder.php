<h1>Resume Builder</h1>
<div>
<form class="form-horizontal" action="/pdf" method="POST">
<!-- Personal Info -->
<div class="group">
	<h3>Personal Information</h2>
	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="first_name">First Name</label>
	  <div class="controls">
	    <input id="first_name" name="first_name" type="text" placeholder="First" class="input-large" required="">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="last_name">Last Name</label>
	  <div class="controls">
	    <input id="last_name" name="last_name" type="text" placeholder="Last" class="input-large" required="">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="phone">Phone</label>
	  <div class="controls">
	    <input id="phone" name="phone" type="text" placeholder="000-000-0000" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="email">Email</label>
	  <div class="controls">
	    <input id="email" name="email" type="text" placeholder="example@email.com" class="input-large" required="">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="street">Street Address</label>
	  <div class="controls">
	    <input id="street" name="street" type="text" placeholder="123 W. Main St." class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="city">City</label>
	  <div class="controls">
	    <input id="city" name="city" type="text" placeholder="City" class="input-large">
	    
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="control-group">
	  <label class="control-label" for="state">State</label>
	  <div class="controls">
	    <select id="state" name="state" class="input-medium">
	    	<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District Of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
	    </select>
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="zip">Zip Code</label>
	  <div class="controls">
	    <input id="zip" name="zip" type="text" placeholder="12345" class="input-large">
	    
	  </div>
	</div>

	<!-- Textarea -->
	  <h3><label for="statement">Personal Statement</label> </h2>            
	  <textarea id="statement" name="statement" style="width:100%" rows="10"></textarea>
</div>

<!-- Education -->
<div class="group education one">
	<h3>Education</h3>
	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="school">School</label>
	  <div class="controls">
	    <input id="school" name="school" type="text" placeholder="School" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="school-city">City</label>
	  <div class="controls">
	    <input id="school-city" name="school-city" type="text" placeholder="City" class="input-large">
	    
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="control-group">
	  <label class="control-label" for="school-state">State</label>
	  <div class="controls">
	    <select id="school-state" name="school-state" class="input-medium">
	    	<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District Of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
	    </select>
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="school_year">Graduation Year</label>
	  <div class="controls">
	    <input id="school_year" name="school_year" type="text" placeholder="2007" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="area_of_study">Area of Study</label>
	  <div class="controls">
	    <input id="area_of_study" name="area_of_study" type="text" placeholder="Business" class="input-large">
	    
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="control-group">
	  <label class="control-label" for="degree">Degree Earned</label>
	  <div class="controls">
	    <select id="degree" name="degree" class="input-small">
	      <option>A.A.</option>
	      <option>A.S.</option>
	      <option>A.A.S.</option>
	      <option>A.E.</option>
	      <option>A.A.A.</option>
	      <option>A.P.S.</option>
	      <option>B.A.</option>
	      <option>B.S.</option>
	      <option>B.F.A.</option>
	      <option>B.B.A.</option>
	      <option>B.Arch.</option>
	      <option>M.A.</option>
	      <option>M.S.</option>
	      <option>M.Res.</option>
	      <option>M.Phil.</option>
	      <option>LL.M.</option>
	      <option>M.B.A.</option>
	      <option>PhD</option>
	      <option>M.D.</option>
	      <option>Ed.D</option>
	      <option>J.D.</option>
	    </select>
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="ed_description">Description</label>
	  <div class="controls">
	    <textarea rows="4" cols="50" id="ed_description" name="ed_description" class="input-large"></textarea>
	    
	  </div>
	</div>
</div>


<!-- Education -->
<div class="group education two">
	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="school2">School</label>
	  <div class="controls">
	    <input id="school2" name="school2" type="text" placeholder="School" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="school-city2">City</label>
	  <div class="controls">
	    <input id="school-city2" name="school-city2" type="text" placeholder="City" class="input-large">
	    
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="control-group">
	  <label class="control-label" for="school-state2">State</label>
	  <div class="controls">
	    <select id="school-state2" name="school-state2" class="input-medium">
	    	<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District Of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
	    </select>
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="school_year2">Graduation Year</label>
	  <div class="controls">
	    <input id="school_year2" name="school_year2" type="text" placeholder="2007" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="area_of_study2">Area of Study</label>
	  <div class="controls">
	    <input id="area_of_study2" name="area_of_study2" type="text" placeholder="Business" class="input-large">
	    
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="control-group">
	  <label class="control-label" for="degree2">Degree Earned</label>
	  <div class="controls">
	    <select id="degree2" name="degree2" class="input-small">
	      <option>A.A.</option>
	      <option>A.S.</option>
	      <option>A.A.S.</option>
	      <option>A.E.</option>
	      <option>A.A.A.</option>
	      <option>A.P.S.</option>
	      <option>B.A.</option>
	      <option>B.S.</option>
	      <option>B.F.A.</option>
	      <option>B.B.A.</option>
	      <option>B.Arch.</option>
	      <option>M.A.</option>
	      <option>M.S.</option>
	      <option>M.Res.</option>
	      <option>M.Phil.</option>
	      <option>LL.M.</option>
	      <option>M.B.A.</option>
	      <option>PhD</option>
	      <option>M.D.</option>
	      <option>Ed.D</option>
	      <option>J.D.</option>
	    </select>
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="ed_description2">Description</label>
	  <div class="controls">
	    <textarea rows="4" cols="50" id="ed_description2" name="ed_description2" class="input-large"></textarea>
	    
	  </div>
	</div>
</div>

<!-- Education 3-->
<div class="group education three">
	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="school3">School</label>
	  <div class="controls">
	    <input id="school3" name="school3" type="text" placeholder="School" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="school-city3">City</label>
	  <div class="controls">
	    <input id="school-city3" name="school-city3" type="text" placeholder="City" class="input-large">
	    
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="control-group">
	  <label class="control-label" for="school-state3">State</label>
	  <div class="controls">
	    <select id="school-state3" name="school-state3" class="input-medium">
	    	<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District Of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
	    </select>
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="school_year3">Graduation Year</label>
	  <div class="controls">
	    <input id="school_year3" name="school_year3" type="text" placeholder="2007" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="area_of_study3">Area of Study</label>
	  <div class="controls">
	    <input id="area_of_study3" name="area_of_study3" type="text" placeholder="Business" class="input-large">
	    
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="control-group">
	  <label class="control-label" for="degree3">Degree Earned</label>
	  <div class="controls">
	    <select id="degree3" name="degree3" class="input-small">
	      <option>A.A.</option>
	      <option>A.S.</option>
	      <option>A.A.S.</option>
	      <option>A.E.</option>
	      <option>A.A.A.</option>
	      <option>A.P.S.</option>
	      <option>B.A.</option>
	      <option>B.S.</option>
	      <option>B.F.A.</option>
	      <option>B.B.A.</option>
	      <option>B.Arch.</option>
	      <option>M.A.</option>
	      <option>M.S.</option>
	      <option>M.Res.</option>
	      <option>M.Phil.</option>
	      <option>LL.M.</option>
	      <option>M.B.A.</option>
	      <option>PhD</option>
	      <option>M.D.</option>
	      <option>Ed.D</option>
	      <option>J.D.</option>
	    </select>
	  </div>
	</div>
	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="ed_description3">Description</label>
	  <div class="controls">
	    <textarea rows="4" cols="50" id="ed_description3" name="ed_description3" class="input-large"></textarea>
	    
	  </div>
	</div>
</div>
<div class="expand add_education"><a>Add Education</a></div>
<!-- Experience -->
<div class="group experience one">
	<h3>Work Experience</h3>
	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="employer">Employer</label>
	  <div class="controls">
	    <input id="employer" name="employer" type="text" placeholder="Job Inc." class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="employer_location">Employer Location</label>
	  <div class="controls">
	    <input id="employer_location" name="employer_location" type="text" placeholder="Woodbridge, CT" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="title">Title</label>
	  <div class="controls">
	    <input id="title" name="title" type="text" placeholder="Chief Executive Officer" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="start_date">Start Date</label>
	  <div class="controls">
	    <input id="start_date" name="start_date" type="text" placeholder="2008" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="end_date">End Date</label>
	  <div class="controls">
	    <input id="end_date" name="end_date" type="text" placeholder="2011" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="work_description">Description</label>
	  <div class="controls">
	    <textarea rows="4" cols="50" id="work_description" name="work_description" class="input-large"></textarea>
	    
	  </div>
	</div>
</div>
<!-- Experience 2-->
<div class="group experience two">
	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="employer2">Employer</label>
	  <div class="controls">
	    <input id="employer2" name="employer2" type="text" placeholder="Job Inc." class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="employer_location">Employer Location</label>
	  <div class="controls">
	    <input id="employer_location2" name="employer_location2" type="text" placeholder="Woodbridge, CT" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="title2">Title</label>
	  <div class="controls">
	    <input id="title2" name="title2" type="text" placeholder="Chief Executive Officer" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="start_date2">Start Date</label>
	  <div class="controls">
	    <input id="start_date2" name="start_date2" type="text" placeholder="2008" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="end_date2">End Date</label>
	  <div class="controls">
	    <input id="end_date2" name="end_date2" type="text" placeholder="2011" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="work_description2">Description</label>
	  <div class="controls">
	    <textarea rows="4" cols="50" id="work_description2" name="work_description2" class="input-large"></textarea>
	    
	  </div>
	</div>
</div>
<!-- Experience 3-->
<div class="group experience three">
	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="employer3">Employer</label>
	  <div class="controls">
	    <input id="employer3" name="employer3" type="text" placeholder="Job Inc." class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="employer_location">Employer Location</label>
	  <div class="controls">
	    <input id="employer_location3" name="employer_location3" type="text" placeholder="Woodbridge, CT" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="title3">Title</label>
	  <div class="controls">
	    <input id="title3" name="title3" type="text" placeholder="Chief Executive Officer" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="start_date2">Start Date</label>
	  <div class="controls">
	    <input id="start_date3" name="start_date3" type="text" placeholder="2008" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="end_date2">End Date</label>
	  <div class="controls">
	    <input id="end_date3" name="end_date3" type="text" placeholder="2011" class="input-large">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="control-group">
	  <label class="control-label" for="work_description3">Description</label>
	  <div class="controls">
	    <textarea rows="4" cols="50" id="work_description3" name="work_description3" class="input-large"></textarea>
	    
	  </div>
	</div>
</div>
<div class="expand add_experience"><a>Add Work Experience</a></div>
<div class="group">
	<!-- Textarea -->
	<h3><label for="awards">Awards</label> </h2>            
	<textarea id="awards" name="awards" style="width:100%" rows="10"></textarea>

	<!-- Textarea -->
	<h3><label for="interests">Interests</label> </h2>            
	<textarea id="interests" name="interests" style="width:100%" rows="10"></textarea>


	<!-- Resume Template -->
	<div class="control-group">
	  <h3>Select Resume Template</h3>
	  <label class="control-label" for="degree">Style</label>
	  <div class="controls">
	    <select id="template-select" name="template-select" class="input-small">
	    	<option value="pdf">Classic</option>
	    	<option value="executive">Executive</option>
	    	<option value="creative">Creative</option>
	    	<option value="modern">Modern</option>
	    	<option value="tech">Tech</option>
	    </select>
	  </div>
	</div>
</div>
<input type="submit" value="submit">
</form>

</div>


