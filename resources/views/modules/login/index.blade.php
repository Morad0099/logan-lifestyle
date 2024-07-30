<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logan Lifestyle Admin Login</title>
    <link rel="stylesheet" href="{{ asset('css/admin-login.css') }}">
</head>
<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    padding: 20px;
    box-sizing: border-box;
}

.login-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 100%;
    max-width: 400px;
}

.login-form h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.btn-login {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.btn-login:hover {
    background-color: #218838;
}

.error-messages {
    margin-top: 20px;
    color: #d9534f;
}

/* Media Queries for Responsiveness */
@media screen and (max-width: 600px) {
    .login-form {
        padding: 15px;
    }

    .login-form h2 {
        font-size: 20px;
    }

    .form-group input {
        padding: 8px;
    }

    .btn-login {
        padding: 8px;
        font-size: 14px;
    }
}

@media screen and (max-width: 400px) {
    .login-form {
        padding: 10px;
    }

    .login-form h2 {
        font-size: 18px;
    }

    .form-group label {
        font-size: 14px;
    }

    .form-group input {
        padding: 6px;
    }

    .btn-login {
        padding: 6px;
        font-size: 12px;
    }
}

</style>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>Admin Login</h2>
            <form method="POST" action="/admin/Login">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <button type="submit" class="btn-login">Login</button>
            </form>
            @if ($errors->any())
                <div class="error-messages">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</body>
</html>
