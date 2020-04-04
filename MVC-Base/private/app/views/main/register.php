<html>
    <style>
        html{
    background-color: aqua;
}
form{
    text-align: center
}
h1{
    text-align: center
}
</style>



<h1>Registartion</h1>
        <form>
            <section>
                <h2>Enter info</h2>
                <div>
                  <label for="name">First name</label>
                	<input type="text" name="name" id="name" required pattern="[A-Za-z]+">
                    </div>
                    <br>
                    <div>
                  <label for="name">Last name</label>
                	<input type="text" name="name" id="name" required pattern="[A-Za-z]+">
                    </div>
                    <br>
                <div>
                  <label for="pass">Enter Password</label>
                  <input type="password" id="pass" name="pass" minlength="8" required>

                </div>
                <br>
                <div>
                  <label for="password">confirm Password</label>
                  <input type="password" id="password" name="password" minlength="8" required>

                </div>
                <br>
                <input type ="button" value="submit"/>
                </form>    