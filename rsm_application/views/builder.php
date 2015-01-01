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
	      <option>Alabama</option>
	      <option>Alaska</option>
	      <option>Arizona</option>
	      <option>Arkansas</option>
	      <option>California</option>
	      <option>Colorado</option>
	      <option>Connecticut</option>
	      <option>Delaware</option>
	      <option>Florida</option>
	      <option>Georgia</option>
	      <option>Hawaii</option>
	      <option>Idaho</option>
	      <option>Illinois</option>
	      <option>Indiana</option>
	      <option>Iowa</option>
	      <option>Kansas</option>
	      <option>Kentucky</option>
	      <option>Louisiana</option>
	      <option>Maine</option>
	      <option>Maryland</option>
	      <option>Massachusetts</option>
	      <option>Michigan</option>
	      <option>Minnesota</option>
	      <option>Mississippi</option>
	      <option>Missouri</option>
	      <option>Montana</option>
	      <option>Nebraska</option>
	      <option>Nevada</option>
	      <option>New Hampshire</option>
	      <option>New Jersey</option>
	      <option>New Mexico</option>
	      <option>New York</option>
	      <option>North Carolina</option>
	      <option>North Dakota</option>
	      <option>Ohio</option>
	      <option>Oklahoma</option>
	      <option>Oregon</option>
	      <option>Pennsylvania</option>
	      <option>Rhode Island</option>
	      <option>South Carolina</option>
	      <option>South Dakota</option>
	      <option>Tennessee</option>
	      <option>Texas</option>
	      <option>Utah</option>
	      <option>Vermont</option>
	      <option>Virginia</option>
	      <option>Washington</option>
	      <option>West Virginia</option>
	      <option>Wisconsin</option>
	      <option>Wyoming</option>
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
<div class="group education">
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
</div>

<!-- Experience -->
<div class="group">
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
	  <label class="control-label" for="Title">Title</label>
	  <div class="controls">
	    <input id="Title" name="Title" type="text" placeholder="Chief Executive Officer" class="input-large">
	    
	  </div>
	</div>

	<!-- Multiple Checkboxes -->
	<div class="control-group">
	  <label class="control-label" for="current"></label>
	  <div class="controls">
	    <label class="checkbox" for="current-0">
	      <input type="checkbox" name="current" id="current-0" value="This is my current employer">
	      This is my current employer
	    </label>
	  </div>
	</div>

	<!-- Resume Template -->
	<div class="control-group">
	  <h3>Select Resume Template</h3>
	  <label class="control-label" for="degree">Style</label>
	  <div class="controls">
	    <select id="template-select" name="template-select" class="input-small">
	    	<option value="pdf">Classic</option>
	    	<option value="executive-pdf">Executive</option>
	    	<option value="creative-pdf">Creative</option>
	    	<option value="modern-pdf">Modern</option>
	    	<option value="tech-pdf">Tech</option>
	    </select>
	  </div>
	</div>
</div>
<input type="submit" value="submit">
</form>

</div>


