<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Product Management System</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f1e5;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .login-card {
            background: white;
            padding: 40px;
            border-radius: 16px;

            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.10);
        }

        .logo {
            width: 65px;
            height: 65px;

            margin: 0 auto 20px;

            background: #2563a6;
            color: white;

            border-radius: 50%;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 28px;
            font-weight: bold;
        }

        h1 {
            text-align: center;
            color: #174a7c;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #777;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;

            color: #174a7c;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 13px 14px;

            border: 1px solid #d6dce2;
            border-radius: 8px;

            font-size: 15px;
            outline: none;
        }

        input:focus {
            border-color: #2563a6;
            box-shadow: 0 0 0 3px rgba(37, 99, 166, 0.12);
        }

        .login-btn {
            width: 100%;

            padding: 13px;

            background: #2563a6;
            color: white;

            border: none;
            border-radius: 8px;

            font-size: 16px;
            font-weight: bold;

            cursor: pointer;
        }

        .login-btn:hover {
            background: #174a7c;
        }

        .error {
            background: #fdecec;
            color: #c0392b;

            padding: 12px;
            border-radius: 8px;

            margin-bottom: 20px;

            text-align: center;
            font-size: 14px;
        }

        .footer {
            text-align: center;
            margin-top: 25px;

            color: #888;
            font-size: 13px;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="login-card">

            <div class="logo">
                PM
            </div>

            <h1>Welcome Back</h1>

            <p class="subtitle">
                Product Management System
            </p>

            <?php if (isset($error)): ?>

                <div class="error">
                    <?= $error; ?>
                </div>

            <?php endif; ?>

            <form method="POST" action="/login">

                <div class="form-group">

                    <label for="username">
                        Username
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Enter your username"
                        required
                    >

                </div>

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    >

                </div>

                <button type="submit" class="login-btn">
                    Login
                </button>

            </form>

            <div class="footer">
                Product Management System
            </div>

        </div>

    </div>

</body>
</html>