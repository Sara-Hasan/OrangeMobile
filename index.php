<?php 
$phones = [
    [ 
     'name' => 'Samsung Galaxy Note 20 Ultra',
     'img_url' =>'https://th.bing.com/th/id/R.76e45b33767b25d242c8246f202cd25c?rik=M623qaA3W5kXWQ&pid=ImgRaw&r=0',
    'rate' => '5',
    'brand' => 'Samsung',
    'price' => 'JOD 759.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'INFINIX Zero 8',
     'img_url' =>'https://www.gizmochina.com/wp-content/uploads/2020/08/Infinix-Zero-8-500x500.jpg',
    'rate' => '0',
    'brand' => 'Infinix',
    'price' => 'JOD 205.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'Apple iPhone 12 Pro',
     'img_url' =>'https://www.pulsecompetitions.co.uk/wp-content/uploads/2021/02/iphone-1-1200x903.png',
    'rate' => '0',
    'brand' => 'Apple',
    'price' => 'JOD 973.00',
    'is_out_of_stock' => '1'

    ],
    [ 
     'name' => 'ITEL A48',
     'img_url' =>'https://th.bing.com/th/id/R.44fd1ca063a1626ed8dd977245e0e155?rik=LfoFmE1bDDfZkg&pid=ImgRaw&r=0',
    'rate' => '0',
    'brand' => 'iTel',
    'price' => 'JOD 66.00'
    ],
    [ 
     'name' => 'Samsung Galaxy S21 Ultra',
     'img_url' =>'https://th.bing.com/th/id/R.5ff8be63416ee88493a45361c263442e?rik=GghniWyDlD6d0A&pid=ImgRaw&r=0',
    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 799.00'
    ],
    
    [ 
     'name' => 'Galaxy A52',
     'img_url' =>'https://thegoodguys.sirv.com/products/50075029/50075029_763467.PNG?scale.height=505&scale.width=773&canvas.height=505&canvas.width=773&canvas.opacity=0&q=90',
    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 267.00'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Phone | Orange Jordan E shop</title>
    <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<style>
  .container{
    margin-top: 5%;
    margin-bottom: 5%;
  }
  .card{
    width: 24rem;
  }
  .link{
    font-size:14px;
  }
  .hr{
    border-bottom:1px solid #000;
    margin-bottom: 15px;
  }
  .price{
    color: #FF7900;
  }
  img{
    width: 150px;
    height: 300px;
  }
  .fa-shopping-cart{
    border:3px solid #000;
    margin: 10px;
    padding: 9px;
  }
  .btn{
    width: 270px
  }
  .fa-star{
    color: #FFB400;
    margin-bottom: 20px;
  }
  .gray{
    color: #999999;
  }
  @media screen and (max-width: 600px) {
  .col {
   display: flex;
   justify-content:center;
   text-align:center;
    margin-top: 5%;
    margin-bottom: 5%;
  }
  .btn{
    width: 150px
  }
  .row {
  display: grid;
  grid-template-columns: auto ;
  grid-gap: 10px;
  padding: 10px;
}
@media screen and (min-width:768px) {
  .card {
    width: 20rem;
    }
    .row {
  display: grid;
  grid-template-columns: auto auto ;
  grid-gap: 10px;
  padding: 10px;
}
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://boosted.orange.com/docs/5.1/assets/brand/orange-logo.svg" width="50" height="50" role="img" alt="Boosted" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php foreach ($phones as $array1D) { ?>
      <div class="col">
      <div class="card h-100">
      <img src="<?php echo $array1D['img_url']?>" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text"><?php echo $array1D['brand']?></p>
      <h3 class="card-title"><?php echo $array1D['name']?></h3>
      <?php 
      for($r = 0; $r <= $array1D['rate']; $r++){
        echo '<i class="fas fa-star"></i>';
      }
      for($e = 1; $e <= 5-$array1D['rate']; $e++){
        echo '<i class="fas fa-star gray"></i>';
      }
      echo '  (' . $array1D['rate'] . ')';
      ?>
      <p class ="link"> <a href=""> View Details </a> <i class="fas fa-angle-right"></i></p>
      <div class="hr"> </div>
      <h5 class="card-text price"><?php echo $array1D['price']?></h5>
      <a href="#" class="btn btn-primary">Buy Now </a>
      <i class="fas fa-shopping-cart"></i>
      </div>
    </div>
  </div>
  <?php } ?> </div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js" integrity="sha384-5thbp4uNEqKgkl5m+rMBhqR+ZCs+3iAaLIghPWAgOv0VKvzGlYKR408MMbmCjmZF" crossorigin="anonymous"></script>
</body>
</html>