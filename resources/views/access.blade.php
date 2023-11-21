<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Trial Activation</title>
    <style>
        body {
            margin-top: 50px;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .logo {
            max-width: 100%;
            height: auto;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
        .contact {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img class="logo" src="{{ asset('template/img/systall-grapfix.png') }}" width="200" alt="Company Logo">
        <h1>Activate Your Free Trial</h1>
        <p>Enter the password and passkey to activate your free trial.</p>
        <form action="{{ route('trialRenew') }}" method="post">
            @csrf
            <label for="passkey">Passkey:</label>
            <input type="password" id="passkey" name="passkey" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Activate Trial">
        </form>
        <p>If you need assistance, please contact <a class="contact" href="https://www.facebook.com/profile.php?id=61550487001454">SystallGrapFix</a>.</p>
    </div>
</body>
</html>
