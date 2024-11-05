<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrustMeet - Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f5f7fa;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            width: 100%;
            max-width: 1200px;
        }

        .form-container {
            background: #ffffff;
            border-radius: 10px;
            padding: 40px;
            width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo h1 {
            font-size: 32px;
            font-weight: 700;
            color: #0099cc;
        }

        .logo span {
            color: #333333;
        }

        h2 {
            margin: 20px 0;
            color: #333333;
            font-size: 24px;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            font-size: 14px;
            color: #333333;
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #cccccc;
        }

        .input-group input:focus {
            outline: none;
            border-color: #0099cc;
        }

        .register-btn {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #ffffff;
            background-color: #0099cc;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .register-btn:hover {
            background-color: #007b9a;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="logo">
                <h1>Trust<span>Meet</span></h1>
            </div>
            <h2>Register</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" placeholder="trustmeet" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="TrustMeet@gmail.com" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********" required>
                </div>
                <div class="input-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="********" required>
                </div>
                <button type="submit" class="register-btn">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
