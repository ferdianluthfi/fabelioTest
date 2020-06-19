<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FabelioTestLuthfi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
     <!-- Our Custom CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    

</head>
<body style="heigh=100%;width=100%;" >
<p class="font-subtitle">Fabelio Software Engineering Test</p>
<div class="container-fluid card card-detail-produk">
    <img src="{{$sofa->image}}" class="css-class" alt="alt text">
        <div class="col-md-12 col-xs-12">
                <div class="col-md-3 col-xs-3 font-desc-bold">
                    <ul>
                        <p>Nama Produk</p>
                        <p>Harga</p>
                        <p>Dimensi</p>
                        <p>Warna</p>
                        <p>Material</p>
                    </ul>
                </div>
                <div class="col-md-9 col-xs-9 font-desc">
                    <ul>
                        <p>:   {{ $sofa->name}}<p>
                        <p>:   Rp{{ $sofa->price}}<p>
                        <p>:   {{ $sofa->dimension}}<p>
                        <p>:   {{ $sofa->colours}}<p>
                        <p>:   {{ $sofa->material}}<p>
                    </ul>
                </div>
        </div>
</div>

<footer class="footer" style="background-color:#E5C038; padding-top:4px;">
  <p class="font-desc" style="text-align:center">© Developed with passion by Luthfi Ferdian</p>
</footer>

</body>
</html>