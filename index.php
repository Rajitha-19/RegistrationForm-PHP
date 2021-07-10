<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<h1>Register Here</h1>
	<form action="script.php" method="POST" >
            <div class="formclass">
                <input class="firstname" id="name" type="text" name="name" required placeholder="UserName"><br>
				<input class="password" name="pwd" type="password" required placeholder="Password">  
                <input  type="email" id="email" name="email" required placeholder="Email"><br>
                <input type="text" id="phno" name="PhoneNumber" required placeholder="Phone Number"><br>
            </div>
            
            <button class="button" type="submit" name="submit" value="submit">Submit</button>
            <button class="button" type="reset"  value="reset">Reset</button>
    </form>
</body>
</html>
