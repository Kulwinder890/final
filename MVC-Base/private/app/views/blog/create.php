<h1> CREATE POST</h1>
<form method="POST" action ="/blog/create">
<input type ="hidden" name="csrf" value ="">
<label for = "title"> TITLE </label>
<input type ="text" name="title" id="title">
<br>
<br>
<label for = "Blogger"> Blogger </label>
<input type ="text" name="blogger" id="blogger">
<br>
<label for = "content"> Content </label>
<textarea name="content" id="content"></textarea>
<input type = "submit">
</form>