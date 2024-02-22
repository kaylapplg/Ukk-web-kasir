
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penjualan</title>
    <style>
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
        h1 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            color: #ffffff; 
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            border: 1px solid #e7c291;
            padding: 12px;
            text-align: center;
        }
        table th {
            background-color: #ffe7c8; 
            color: #ffffff; 
            font-weight: bold;
            text-transform: uppercase;
        }
        tr {
            background-color: #f5f5f5;
            text-align: center;
        }

        label {
            margin-bottom: 8px;
            display: block;
            color: #ffffff;
        }
        .btn-back {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #ffe7c8; 
            color: #fff; 
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-back:hover {
            background-color: #ffc77e;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Penjualan</h1>

        <div>
            <h2>Tabel Penjualan</h2>
            <table>
                <thead>
                    <tr>
                        <th scope="col" class="table-secondary">Tanggal</th>
                        <th scope="col" class="table-secondary">Pelanggan</th>
                        <th scope="col" class="table-secondary">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penjualan as $penjualan)
                    <tr>
                        <td>{{$penjualan->TanggalPenjualan}}</td>
                        <td>{{$penjualan->PelangganID}}</td>
                        <td>{{$penjualan->TotalHarga}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            <h2>Tabel Detail Penjualan</h2>
            <table>
                <thead>
                    <tr>
                        <th scope="col" class="table-primary">Nama Produk</th>
                        <th scope="col" class="table-primary">Harga</th>
                        <th scope="col" class="table-primary">Qty</th>
                        <th scope="col" class="table-primary">Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($detailpenjualan as $detailpenjualan)
                        <tr>
                            <td>{{$detailpenjualan->NamaProduk}}</td>
                            <td>{{$detailpenjualan->Harga}}</td>
                            <td>{{$detailpenjualan->JumlahProduk}}</td>
                            <td>{{$detailpenjualan->Subtotal}}</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ url('/datapenjualan') }}" class="btn-back">Kembali</a>
    </div>
</body>
</html>