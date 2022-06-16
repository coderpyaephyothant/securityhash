<?php

<input name="email" type="email" class="form-control" placeholder="Email" value="<?php  if(isset($_POST['email'])) { echo $_POST['email']; } ?>" >
// refresh page without losing form data
 ?>
