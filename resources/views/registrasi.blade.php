<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initihbbval-scale=1.0">
    <title>Registrasi</title>
    <style>
        body {
            background-image: url('{{ asset('foto/registrasi.png') }}');
            background-size: cover;
            background-position: bottom;
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
            background-color: #FFF0DD;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 0px rgba(0, 0, 0, 0.1);
            width: 500px;
            margin-top: 90px;
        }

        h2 {
            text-align: center;
            color: #FF8CB6;
        }

        label {
            display: block;
            margin: 1px 0 1px;
            color: #FF8CB6;
        }

        input {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #FF8CB6;
            border-radius: 4px;
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

        button.daftar {
            background-color: #ff5c97;
        }

        button.daftar:hover {
            background-color: #ee387b;
        }
        button.batal {
            background-color: #d8165d;
        }

        button.batal:hover {
            background-color: #af0744;
        }
    </style>
</head>
<body>

    <form action= "registrasi" method="post">
    @method("POST")
    @csrf
        <h2>Form Registrasi</h2>
        <label for="name">Nama:</label>
        <input type="text" name="nama" required>

        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <br><button type="submit" class="daftar">Daftar</button></br>
    </form>
</body>
</html>