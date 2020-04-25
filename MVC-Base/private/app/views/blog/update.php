<h1> UPDATE POST</h1>
<form method="POST" action ="/blog/update/<?php echo($slug)?>">
<input type ="hidden" name="csrf" value ="">
<label for = "title"> TITLE </label>
<input type ="text" name="title" id="title" value="<?php echo($title)?>">
<br>
<br>
<label for = "Blogger"> Blogger </label>
<input type ="text" name="blogger" id="blogger" value="<?php echo($blogger)?>">
<br>
<label for = "content"> Content </label>
<textarea name="content" id="content"><?php echo($content)?></textarea>
 <br>
 <input type ="submit" value="Update"/>
</form>