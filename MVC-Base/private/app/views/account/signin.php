<form method="POST" action ="/account/signin">
<h1> USER SIGN IN</h1>
<input type ="hidden" name="csrf" value ="<?php echo($csrf)?>">
<label for = "username"> EMAIL </label>
<input type ="text" name="username" required autocomplete="username">
<br>
<br>
<label for = "password"> PASSWORD </label>
<input type ="password" name="password" required>
<br>
<br>
<input type ="submit" value ="sign in">
</form>