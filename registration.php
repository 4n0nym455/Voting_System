<html>
    <head>
        <title> voting system registration account</title>
    </head>
    <body>
    <h1 class="text-info text-center p-3">Voting system</h1>
    <div>
        <h2>Register Account</h2>
        <div>
            <form action="./register.php" method="POST" enctype="multipart/form-data">
                <div>
                    <input type="text"
                    name="username" placeholder="enter your username"
                    require="required">
                </div>
                <div>
                    <input type="text"
                    name="mobile" placeholder="enter your number"
                    require="required" name="mobile" maxLength="10" minLength="10">
                </div>
                <div>
                    <input type="text"
                    name="registration" placeholder="enter your registration number"
                    require="required" name="registration" maxLength="15">
                </div>
                <div>
                    <input type="password"
                    name="password" placeholder="enter your password"
                    require="required" name="password" >
                </div>
                <div>
                    <input type="password"
                    name="cpassword" placeholder="confirm password"
                    require="required" name="cpassword">
                </div>
                <div>
                    <input type="file"
                    name="photo" 
                    require="required">
                </div>
                <div>
                    <select name="std">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                    <button type="submit">Register</button>
                </div>
                <p>Already have an account?<a href="/voting.php">Login here</a></p>
</form>
</div>
</div>
</body>
</html>
