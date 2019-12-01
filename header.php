<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">    
    <title>Hackthon - AASP</title>

    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css">
    <link rel="stylesheet" href="style.css">

  </head>
  <body>

    <nav class="navbar navbar-light fixed-top bg-light flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0 p-0" href="/">
        <img src="img/logo.png" class="img-fluid" >
      </a>      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" id="list-home-list" href="index.php" >
                  <span data-feather="home"></span>
                  Home <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="list-user-list" href="perfil.php" >
                  <span data-feather="user"></span>
                  Perfil
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" id="list-contracts-list" href="contratos.php" >
                  <span data-feather="file-text"></span>
                  Contratos
                </a>
              </li>
            </ul>
          </div>
          
        </nav>
       