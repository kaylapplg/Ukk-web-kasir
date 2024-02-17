
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('bs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFF0DD;
            background-image: url('{{ asset('foto/images/background.png') }}');
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
            height: 100vh; /* Set the height of the background */
            margin: 0; /* Remove default margin */
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #FF8CB6;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        tr {
            background-color: #f5f5f5;
            text-align: center;
        }

        h1, h4 {
            color: #ffffff;
        }

        label {
            margin-bottom: 8px;
            display: block;
            color: #ffffff;
        }

        table {
            text-decoration-color: #fff
        }

        select, input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ffe7c8;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-checkout {
            background-color: #ffe7c8;
            color: #000000;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-checkout:hover {
            background-color: #ecb772; 
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ffdeb3;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #ffe7c8;
            color: #000000;
        }

        .total {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
        .form-group button {
            background-color: #c72d65   ;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        @if(Session::has("info"))

           {{Session("info")}}

        @endif
        <h4>Data Produk</h4>
        <form action="{{ url('/penjualan') }}" method="post">
            @method('POST')
            @csrf

            <label for="produk">Nama Produk</label>
            <select id="produk" name="produk">
                <option selected disabled>Select Product</option>
                @foreach($produk as $product)
                <option value="{{ $product->ProdukID }}">{{ $product->NamaProduk }}</option>
                @endforeach
            </select>

            <label for="qty">Jumlah Produk</label>
            <input type="number" id="qty" name="qty" min="1" max="1000">

            <label for="pelanggan">Nama Pelanggan</label>
            <select id="pelanggan" name="pelanggan">
                <option selected disabled>Select Customer</option>
                @foreach($pelanggan as $pelanggan)
                <option value="{{ $pelanggan->PelangganID }}">{{ $pelanggan->NamaPelanggan }}</option>
                @endforeach
            </select>
            
            <input type="hidden" name="idPenjualan" value="{{ $idPenjualan }}">
            <input type="submit" value="Add" class="btn btn-outline-secondary btn-checkout">

        </form>

        <table>
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php $TotalHarga = 0;?>
                @foreach($detailpenjualan as $detailpenjualan)
                <tr>
                    <td>{{ $detailpenjualan->NamaProduk }}</td>
                    <td>{{ $detailpenjualan->Harga }}</td>
                    <td>{{ $detailpenjualan->JumlahProduk }}</td>
                    <td>{{ $detailpenjualan->Subtotal }}</td>
                    <?php $TotalHarga = $TotalHarga=$detailpenjualan->Subtotal ?>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="total">
            Total Harga: {{ number_format($TotalHarga, 0, ',', ',') }}
        </div>
        <div class="row">
            <div class="col-md-2">
                <form action="{{ url('/checkout') }}" method="POST">
                    @method("POST")
                    @csrf
        
                    <input type="hidden" name="idPenjualan" value="{{ $idPenjualan }}">
                    <input type="hidden" name="totalHarga" value="{{ $TotalHarga }}">
                    <button class="btn btn-outline-primary btn-checkout" type="submit" name="submit" value="checkout">Check Out</button>
                </form>
            </div>
            <div class="col-md-1">
                <a type="button" class="btn btn-outline-primary btn-checkout" href="{{ url("/home") }}">Kembali home</a>
            </div>
        </div>
    </div>
</body>
</html>
