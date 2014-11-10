<h1>Resume Builder</h1>
<div>
	<form method="post" action="javascript:void(0)">
	  <div class="contact-info">
		<h4>Contact Information</h4>
		<input id ="first_name" name="first_name" type="text" placeholder="First Name" />
		<input id="last_name" name="last_name" type="text" placeholder="Last Name" />
		<input id="phone_number" name="phone_number" type="tel" placeholder="Phone Number" required />
		<input id="email" name="email" type="email" placeholder="Email Address" required />
		<h4>Address</h4>
		<input id="street_address" name="street_address" type="text" placeholder="Street Address" />
		<input id="city" name="city" type="text" placeholder="City" />
		<select id="state" name="state">
			<option>- Select -</option>
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
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
		<input id="zip" name="zip" type="text" placeholder="Zip Code" />
	  </div><!--/Contact Info-->
	  <h4>Personal Statement</h4>
	  <textarea id="statement" name="statement"></textarea>
	  <div class="education">
		<h4>Education</h4>
		<input id="school_name1" name="school_name1" type="text" placeholder="School Name" />
		<input id="school_location1" name="school_location1" type="text" placeholder="School Location" />
		<select id="degree1" name="degree1">
			<option></option>
			<option value="GED">GED</option>
			<option value="HS Diploma">High School Diploma</option>
			<option value="AA">A.A.</option>
			<option value="AS">A.S.</option>
			<option value="BA">B.A.</option>
			<option value="BS">B.S.</option>
			<option value="MA">M.A.</option>
			<option value="MS">M.S.</option>
			<option value="PhD">Ph.D.</option>
			<option value="DDS">D.D.S.</option>
			<option value="DMD">D.M.D</option>
			<option value="MD">M.D.</option>
			<option value="DO">D.O.</option>
			<option value="JD">J.D.</option>
		</select>
		<input id="concentration" name="concentration" type="text" placeholder="Area of Study" />
		<div class="add-ed">Add Education</div>
	  </div><!--/Education-->
	  <div class="work-experienc">
		<h4>Work Experience</h4>
		<input id="company_name1" name="company_name1" type="text" placeholder="Company Name" />
		<input id="title1" name="title1" type="text" placeholder="Title" />
		<input id="current1" name="current1" type="checkbox" /> This is my current position
		<input id="start_date1" name="start_date1" type="text" placeholder="Start Date" />
		<input id="end_date1" name="end_date1" type="text" placeholder="End Date" />
		<textarea id="position_description1" name="position_description1"></textarea>
		<div class="add-work">Add Work Experience</div>
	  </div><!--/Work Experience-->
	  <input type="submit" value="save">
	</form>
</div>


