<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
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

        header {
            background-color: #FF7FA9;
            color: white;
            text-align: center;
            margin-left: 200px;
            padding: 1rem;
        }

        table {
            width: 80%;
            margin: 2rem auto;
            text-align: center;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin-right: 100px;
            padding: 500px;
            width: 900px;
        }

        th, td {
            padding: 1rem;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #FFAFCA;
            text-align: center;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
            text-align: center;
        }

        .actions {
            padding: 1rem;
            text-align: center;
            margin-top: 1rem;
        }

        .delete, .update {
            padding: 0.5rem 1rem;
            margin: 0.2rem;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            color: white;
            transition: background-color 0.3s;
        }

        .delete {
            background-color: #FF8BBE; 
        }

        .delete:hover {
            background-color: #CB2E72; 
        }

        .update {
            background-color: #FFE899; 
        }

        .update:hover {
            background-color: #D7B53C; 
        }
    </style>
</head>
<body>

<header>
    <h1>Data Produk</h1>
</header>

<table>
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach ($produk as $produk)
    <tbody>
        <tr>
            <td>{{$produk->NamaProduk}}</td>
            <td>{{$produk->Harga}}</td>
            <td>{{$produk->Stok}}</td>
            <td class="actions">
                <a type="button" class="delete" href={{url("/dataproduk/deleteproduk/$produk->ProdukID")}}  onclick = "return confirm('Anda Yakin Ingin Menghapusnya?');">Hapus</button>
                <a type="button" class="update" href={{url("/dataproduk/updateproduk/$produk->ProdukID")}}>Update</button>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
</body>
</html>
@include('layouts.navbar')
