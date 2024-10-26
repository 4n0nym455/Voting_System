<html>
    <head>
        <title> Online Voting System</title>
    </head>
    <body>
    <h1 class="text-info text-center p-3">Login</h1>
    <div>
        <h2>login here</h2>
        <form action="./votingreg/login.php" method="POST">
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
                    require="required" >
                </div>
                <div>
                    <input type="password"
                    name="password" placeholder="enter your password"
                    require="required" name="password" >
                </div>
                
            
                <div>
                    <select name="std">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                    <button type="submit">Login</button>
                </div>
                <p>Don't have an account?<a href="./votingreg/registration.php">Register here</a></p>
        </div>
        </form>
    </div>
</body>
</html>

    
        
           
           
                    
