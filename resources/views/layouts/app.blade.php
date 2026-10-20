<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eco - 251011701164</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            margin: 0;
            background-color: #FFFFFF !important;
            position: relative;
            min-height: 100vh;
        }
        /* LOGO BALIK LAGI - GUE TERANGIN */
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-image: url('/images/my-logo.jpg');
            background-repeat: repeat;
            background-size: 180px 180px;
            opacity: 0.25;
            z-index: -1;
        }
        .navbar-eco { background: #1B4332 !important; position: relative; z-index: 2; }
        .title-eco { color: #1B4332 !important; font-weight: 800; }
        .card-eco { 
            background: #FEFAE0 !important; 
            border-radius: 18px !important; 
            border: 2px solid #fff !important;
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
            position: relative; z-index: 2;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-eco navbar-dark mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('eco-products.index') }}">🌱 Eco - 251011701164</a>
  </div>
</nav>
<div class="container pb-5">
    <h2 class="mb-4 title-eco">🌱 Eco Products</h2>
    @yield('content')
</div>
</body>
</html>