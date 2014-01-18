<h1>Resume App</h1>
<?php if($this->ion_auth->logged_in()) : ?>
<a href="/auth/logout/">Logout</a>
<?php else : ?>
<a href="/auth/login/">Login</a>
<?php endif; ?>