<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <form  method="POST" class="signup-form" action="signup2.php">
            <h2>Sign Up</h2>
            <input type="text" name="u" placeholder="Username" required>
			<input type="number" name="p" placeholder="Phone number" maxlength="10" required>
			<input type="email" name="e" placeholder="Email" required>
			<input type="password" name="pass" placeholder="Password (minimum 4 digit) " minlength="4" required>
            <button type="submit">Sign Up</button>
            <p>Already have an account? <a href="loginpage.php">Login</a></p>
        </form>
    </div>
</body>
</html>

