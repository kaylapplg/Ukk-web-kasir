<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-transform: uppercase;
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
                        <th>Tanggal</th>
                        <th>Pelanggan</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data penjualan dari database -->
                    <tr>
                        <td>25 Februari 2024</td>
                        <td>Pelanggan ABC</td>
                        <td>Rp. 500.000</td>
                    </tr>
                    <!-- Data penjualan lainnya -->
                </tbody>
            </table>
        </div>

        <div>
            <h2>Tabel Detail Penjualan</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data detail penjualan dari database -->
                    <tr>
                        <td>Produk A</td>
                        <td>Rp. 100.000</td>
                        <td>2</td>
                        <td>Rp. 200.000</td>
                    </tr>
                    <!-- Data detail penjualan lainnya -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>