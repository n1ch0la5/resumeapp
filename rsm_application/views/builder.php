<h1>Resume Builder</h1>
<div class="col col1">
	<form>
		<h4>Contact Information</h4>
		<input id ="first_name" name="first_name" type="text" placeholder="First Name" />
		<input id="last_name" name="last_name" type="text" placeholder="Last Name" />
		<input id="phone_number" name="phone_number" type="text" placeholder="Phone Number"/>
		<input id="email" name="email" type="text" placeholder="Email Address" />
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
		<h4>Personal Statement</h4>
		<textarea id="statement" name="statement"></textarea>
		<h4>Education</h4>
		<input id="school_name" name="school_name" type="text" placeholder="School Name" />
		<input id="school_location" name="school_location" type="text" placeholder="School Location" />
		<select id="degree" name="degree">
			<option></option>
			<option value="">GED</option>
			<option value="">High School Diploma</option>
			<option value="">A.A.</option>
			<option value="">A.S.</option>
			<option value="">B.A.</option>
			<option value="">B.S.</option>
			<option value="">M.A.</option>
			<option value="">M.S.</option>
			<option value="">Ph.D.</option>
			<option value="">D.D.S.</option>
			<option value="">D.M.D</option>
			<option value="">M.D.</option>
			<option value="">D.O.</option>
			<option value="">J.D.</option>
		</select>
		<input id="concentration" name="concentration" type="text" placeholder="Area of Study or Specialty" />
		<h4>Work Experience</h4>
		<input id="company_name" name="company_name" type="text" placeholder="Company Name" />
		<input id="title" name="title" type="text" placeholder="Title" />
		<input id="current" name="current" value="yes" type="radio" /> This is my current position
		<input id="start_date" name="start_date" type="text" placeholder="Start Date" />
		<input id="end_date" name="end_date" type="text" placeholder="End Date" />
		<textarea id="position_description" name="position_description"></textarea>
		<input type="submit" value="save">
	</form>
</div>
<div class="col col2 resume-preview">
</div>