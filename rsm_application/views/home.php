<h1>Resume App</h1>
<?php if($this->ion_auth->logged_in()) : ?>
<p>Welcome, <?php echo $firstname; ?> | <a href="/auth/logout/">Logout</a></p>
<?php else : ?>
<a href="/auth/login/">Login</a> | <a href="/auth/register/">Register</a>
<?php endif; ?>