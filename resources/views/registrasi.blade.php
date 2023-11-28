<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <style>
        body {
            background-image: url('{{ asset('foto/registrasi.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Set the height of the background */
            margin: 0; /* Remove default margin */
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #666;
        }

        input {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button.cancel {
            background-color: #e74c3c;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <form id="registrationForm">
    <form action= "registrasi" method="post">
    @method("POST")
        @csrf
        <h2>Form Registrasi</h2>
        
        <label for="id">ID:</label>
        <input type="text" id="id" required>
        
        <label for="name">Nama:</label>
        <input type="text" id="name" required>

        <label for="username">Username:</label>
        <input type="text" id="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" required>

        <button type="button" onclick="register()">Daftar</button>
<button type="button" class="cancel" onclick="cancel()">Batal</button>
    </form>

    <script>
        function register() {
            // Implementasikan logika registrasi di sini
            alert("Registrasi berhasil!");
        }

        function cancel() {
            // Implementasikan logika pembatalan di sini
            alert("Pendaftaran dibatalkan.");
        }
    </script>

</body>
</html>