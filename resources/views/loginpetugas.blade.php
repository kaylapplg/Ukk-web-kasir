<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-image: url('{{ asset('foto/kasir.jpg') }}');
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background-color: #FF8CB6;
        }

        .login-container {
            background-color: #FFF0DD;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: left;
        }

        .login-container h2 {
            color: #FF8CB6;
            text-align: center;
        }

        .login-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #FF8CB6;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #FF8CB6;
            border-radius: 4px;
        }

        .form-group button {
            background-color: #FF8CB6;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button {
            background-color: #FF8CB6;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>
    <form action="{{ url("/home") }}" method="post">
        @method("POST")
        @CSRF
        <div class="login-container">
            <h2>Login</h2>
            <form class="login-form">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <label for="role">Role:</label>
                    <select name="role" required>
                        <option value="petugas">Admin</option>
                        <option value="admin">Petugas</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                    <p><center>Belum punya akun? <a href="registrasi">Daftar disini</a></center></p>
                </div>
            </form>
        </div>
    </form>
    <script>
        function redirectToLogin() {
            var selectedRole = document.getElementById('roleSelect').value;
            if (selectedRole === 'admin') {
                window.location.href = "{{ url("/login") }}";
            } else if (selectedRole === 'petugas') {
                window.location.href = "{{ url("/loginpetugas") }}";
            }
        }
    </script>
</body>
</html>
