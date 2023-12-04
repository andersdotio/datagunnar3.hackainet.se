<?php

require_once('flagga.php');

function show_page()
{?><!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- $Revision: 1, commited by: datagunnar -->
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="index.php" method="post">
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html><?php

}

if (isset($_POST['password'])) {
	// Jämför bara en del så vi inte behöver avslöja lösenordet!
	if (substr(md5($_POST['password']), 0, 6) == 'dab00b') {
		print "Grattis! Du hittade flaggan: $flagga";
		exit;
	}
}

show_page();
