<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Produk</title>
    <style>
        body {
            background-image: url('{{ asset('foto/images/background.png') }}');
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
            height: 100vh; /* Set the height of the background */
            margin: 0; /* Remove default margin */
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background-color: #FF8CB6;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #FF8CB6;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 500px;
            text-align: left;
        }

        .login-container h2 {
            color: #ffffff;
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
            color: #ffffff    ;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #c72d65    ;
            border-radius: 4px;
        }

        .form-group button {
            background-color: #c72d65   ;
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
    <form action={{url("tampildataproduk/updateproduk/$produk->ProdukID")}} method="POST" enctype="multipart/form-data">

    @method('POST')
    @CSRF
<div class="login-container">
    <h2>Update Produk</h2>
    <form class="login-form">
        <div class="form-group">
            <label for="NamaProduk">Nama Produk:</label>
            <input type="text" name="NamaProduk" required>{{ $produk->NamaProduk}}>
            @error('NamaProduk')
                <div>{{$message}}</div>
                @enderror
        </div>
        <div class="form-group">
          <label for="Harga">Harga Produk:</label>
          <input type="text" name="Harga" required>{{ $produk->Harga}}>
          @error('Harga')
          <div>{{$message}}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="Stok">Stok:</label>
        <input type="text" name="Stok" required>{{ $produk->Stok}}>
        @error('Stok')
                <div>{{$message}}</div>
                @enderror
    </div>
        <div class="form-group">
            <button type="submit" href={{url("/tampildataproduk/$produk->ProdukID")}}>Update</button>
        </div>
    </form>
</div>

</body>
</html>