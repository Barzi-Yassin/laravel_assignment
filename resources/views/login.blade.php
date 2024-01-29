<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .login-container h2 {
            color: #333;
        }

        .login-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #666;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .remember-me {
            margin-bottom: 20px;
            text-align: left;
        }

        .remember-me label {
            color: #666;
            margin-left: 5px;
        }

        .login-btn {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>•&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp; Login &nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;•</h2>
        <form class="login-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
            </div>
            <a href="/product" class="login-btn">Login</a>
            <!-- <button type="submit" class="login-btn" >Login</button> -->
        </form>
        
        <br><br>
        <cite> &copy;
            <small>developed by </small>Barzi Yassin
        </cite>
    </div>
</body>

</html>