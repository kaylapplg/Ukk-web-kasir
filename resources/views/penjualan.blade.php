@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            margin-left: 260px;
            padding: 20px;
            width: 900px;
            text-align: left;
        }
.buat
{ 
    font-size: 30px;
    text-decoration: none;
    color: black;
    font-family: ;
    text-align: left;
    
}
h1{
    font-size:23px;
    text-decoration: none;
    color: black;
    font-family:;
}
h4{
  font-size:23px;
    text-decoration: none;
    color: black;
    font-family:;
}
.container{
  width: 800px;
  margin-top: 40;
 
}
</style>

<body>
<div class="row g-3 align-item-center">
<div class="col-4 p-4">
    <h4>Data Produk</h4>
  <form action='{{ url("/penjualan") }}' method="post">
  @method ('POST')
  @CSRF

<input type="hidden" name="idPenjualan" value ="{{$idPenjualan}}">
            <select class="form-select" aria-label="Default select example" name="produk">
                <option selected>Enter The Product</option>
                @foreach($produk as $produk)
                <option value="{{$produk->ProdukID}}">{{$produk->NamaProduk}}</option>
                @endforeach
            </select>

  <br>
<div class="col-12 p-7">
  <h1>Jumlah Produk</h1>
 <input type="number" id="qty" name="qty" min="1" max="1000"> <br> <br>
 <input type= "submit" value="Add" class="btn btn-outline-secondary">
<br> <br>

  <select class="form-select" aria-label="Default select example" name="pelanggan">
                <option selected>Enter Pelanggan's Name</option>
                @foreach($pelanggan as $pelanggan)
                <option value="{{$pelanggan->PelangganID}}" name="pelanggan">{{$pelanggan->NamaPelanggan}}</option>
                @endforeach
            </select>
</form>
</div>


 <div class="col-12 p-7">


  <div class="col-6">
  <div class="px-9 py-5 px-md-9 text-center text-lg-start" >
  <div class="container">
  <div class="row gx-lg-10 align-items-center">
                    <div class="col-lg-14 mb-8 mb-lg-1">
                    <div class="card">
                    <div class="card-body py-5 px-md-9">

  <table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Qty</th>
      <th scope="col">Subtotal</th>
    </tr>
  </thead>

  <?php $totalHarga = 0;?>
                  @foreach($detailpejualan as $detailpejualan)
                    <tbody>
                    <tr>
                        <td>{{$detailpejualan->NamaProduk}}</td>
                        <td>{{$detailpejualan->Harga}}</td>
                        <td>{{$detailpejualan->JumlahProduk}}</td>
                        <td>{{$detailpejualan->Subtotal}}</td>
                        <?php $totalHarga = $totalHarga+$detailpejualan->Subtotal ?>
                    </tr>
                    @endforeach

       </tbody>
    </table>

  {{-- <h3>TOTAL HARGA : {{$totalHarga}}<h3> --}}
                <h1>Total Harga : {{ number_format($totalHarga,0,',',',') }}</h1>
                <br>
                <form class="d-grid gap-2 col-6 mx-auto" action='{{url("/checkout") }}' method="POST">
                    @method("POST")
                    @CSRF

 <input type="hidden" name="idPenjualan" value="{{ $idPenjualan }}">
 <input type="hidden" name="totalHarga" value="{{ $totalHarga }}">
                <button class="btn btn-outline-primary" type="submit" name="submit" value="checkout">Check Out</button>
                </form>
  </div>
</div>
</body>

@endsection
</body>
</html>
@include('layouts.navbar')