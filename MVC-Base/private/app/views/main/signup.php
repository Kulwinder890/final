<html>
    <style>
        html{
            background-color:gray;
   
}
form{
    text-align: center
}
h1{
    text-align: center
}
</style>


<h1>Signup</h1>
        <form>
            <section>
                <h2>Enter info</h2>
                <div class=control>
                  <label for="name">Enter username</label>
                	<input type="text" name="name" id="name" required pattern="[A-Za-z]+">
                    </div>
                    <br>
                <div class=control>
                  <label for="pass">Password (8 characters minimum):</label>
                  <input type="password" id="pass" name="password" minlength="8" required>

                </div>
                <br>
                <input type ="button" value="submit"/>
                </form>