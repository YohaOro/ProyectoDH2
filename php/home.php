<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/7099e40d98.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Faster+One|Open+Sans:300i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    <title>Home</title>
</head>
<body>
    <?php include_once("nav.php");?>
    

    <main class="container-fluid p-0">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/bici-celes-cut.jpg" class="mx-auto d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/bici-garage-cut.jpg" class="mx-auto d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/bici-whibla-cut.jpg" class="mx-auto d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/bici-white-cut.jpg" class="mx-auto d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>  
    </main>   
    <br>     
    <div class="container">
        <div class="d-flex justify-content-center pl-10 pr-5">
            <input class="form-control mr-sm-2" type="search" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Buscar</button>
        </div>
    </div> 
    <section class="text-center my-5">
        <h2 class=" text-center my-5">Destacados del Mes</h2>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-4 pt-5 ">
                <div class="card ">
                    <div class="view view-cascade overlay ">
                        <img src="../img/product-img-10.jpg" class="card-img-top " alt="sample photo">
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <a href="../html/productos.html" class="y_titulo"><h5>Asiento Classic</h5></a>
                        
                        <h4 class="card-title"><strong><a class="y_comprar" href="carrito.php">Comprar</a></strong></h4>
                        
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                        <div class="card-footer px-1">
                            <span class="float-left font-weight-bold"><strong>$5345</strong></span>
                            <span class="float-right">
                                <a data-toggle="tooltip" data-placement="top" title="Ver Más">
                                    <i class="fas fa-eye grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="A Favoritos">
                                    <i class="fas fa-heart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Al carrito">
                                    <i class="fas fa-shopping-cart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Compartir">
                                    <i class="fas fa-share-alt grey-text ml-3"></i>
                                </a>
                                
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-4 pt-5">
                <div class="card">
                    <div class="view view-cascade overlay ">
                        <img src="../img/product-img-04.jpg" class="card-img-top" alt="sample photo">
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <a href="../html/productos.html" class="y_titulo"><h5>Vintage White</h5></a>
                        
                        <h4 class="card-title"><strong><a class="y_comprar" href="carrito.php">Comprar</a></strong></h4>
                        
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                        <div class="card-footer px-1">
                            <span class="float-left font-weight-bold"><strong>$24990</strong></span>
                            
                            <span class="float-right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Ver Más">
                                    <i class="fas fa-eye grey-text ml-3"></i>
                                </a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="A Favoritos">
                                    <i class="fas fa-heart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Al carrito">
                                    <i class="fas fa-shopping-cart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fas fa-share-alt grey-text ml-3"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-4 pt-5">
                <div class="card">
                    <div class="view view-cascade overlay">
                        <img src="../img/product-img-03.jpg" class="card-img-top" alt="sample photo">
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <a href="../html/productos.html" class="y_titulo"><h5>Todo Terreno</h5></a>
                        
                        <h4 class="card-title"><strong><a class="y_comprar" href="carrito.php">Comprar</a></strong></h4>
                        
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                        <div class="card-footer px-1">
                            <span class="float-left font-weight-bold"><strong>$28990</strong></span>
                            
                            <span class="float-right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Ver Más">
                                    <i class="fas fa-eye grey-text ml-3"></i>
                                </a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="A Favoritos">
                                    <i class="fas fa-heart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Al carrito">
                                    <i class="fas fa-shopping-cart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fas fa-share-alt grey-text ml-3"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-4 pt-5">
                <div class="card">
                    <div class="view view-cascade overlay">
                        <img src="../img/product-img-20.jpg" class="card-img-top" alt="sample photo">
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <a href="../html/productos.html" class="y_titulo"><h5>Asiento Black</h5></a>
                        
                        <h4 class="card-title"><strong><a class="y_comprar" href="carrito.php">Comprar</a></strong></h4>
                        
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                        <div class="card-footer px-1">
                            <span class="float-left font-weight-bold"><strong>$2532</strong></span>
                            
                            <span class="float-right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Ver Más">
                                    <i class="fas fa-eye grey-text ml-3"></i>
                                </a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="A Favoritos">
                                    <i class="fas fa-heart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Al carrito">
                                    <i class="fas fa-shopping-cart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fas fa-share-alt grey-text ml-3"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-4 pt-5">
                <div class="card">
                    <div class="view view-cascade overlay">
                        <img src="../img/product-img-19.jpg" class="card-img-top" alt="sample photo">
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <a href="../html/productos.html" class="y_titulo"><h5>Fuego</h5></a>
                        
                        <h4 class="card-title"> <strong><a class="y_comprar" href="carrito.php">Comprar</a></strong></h4>
                        
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                        <div class="card-footer px-1">
                            <span class="float-left font-weight-bold"><strong>$27890</strong></span>
                            <span class="float-right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Ver Más">
                                    <i class="fas fa-eye grey-text ml-3"></i>
                                </a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="A Favoritos">
                                    <i class="fas fa-heart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Al carrito">
                                    <i class="fas fa-shopping-cart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fas fa-share-alt grey-text ml-3"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-3 col-md-6 col-ms-6 mb-lg-0 mb-4 pt-5">
                <div class="card ">
                    <div class="view view-cascade overlay">
                        <img src="../img/product-img-12.jpg" class="card-img-top" alt="sample photo">
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <a href="../html/productos.html" class="y_titulo"><h5>Manubrio</h5></a>
                        <h4 class="card-title"><strong><a class="y_comprar" href="carrito.php">Comprar</a></strong> </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                        <div class="card-footer px-1">
                            <span class="float-left font-weight-bold"><strong>$10870</strong> </span>
                            <span class="float-right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Ver Más">
                                    <i class="fas fa-eye grey-text ml-3"></i>
                                </a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="A Favoritos">
                                    <i class="fas fa-heart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Al carrito">
                                    <i class="fas fa-shopping-cart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fas fa-share-alt grey-text ml-3"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-3 col-md-6 col-ms-6 mb-lg-0 mb-4 pt-5">
                <div class="card card-cascade wider card-ecommerce">
                    <div class="view view-cascade overlay">
                        <img src="../img/product-img-07.jpg" class="card-img-top " alt="sample photo">
                    </div>
                    <div class="card-body card-body-cascade text-center ">
                        <a href="../html/productos.html" class="y_titulo"><h5>Canasto Madera</h5></a>
                        <h4 class="card-title"><strong> <a class="y_comprar" href="carrito.php">Comprar</a></strong></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                        <div class="card-footer px-1">
                            <span class="float-left font-weight-bold"><strong>$7365</strong></span>
                            <span class="float-right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Ver Más">
                                    <i class="fas fa-eye grey-text ml-3"></i>
                                </a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="A Favoritos">
                                    <i class="fas fa-heart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Al carrito">
                                    <i class="fas fa-shopping-cart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fas fa-share-alt grey-text ml-3"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-3 col-md-6 col-ms-6 mb-lg-0 mb-4 pt-5">
                <div class="card card-cascade wider card-ecommerce">
                    <div class="view view-cascade overlay">
                        <img src="../img/product-img-21.jpg" class="card-img-top" alt="sample photo">
                    </div>
                    <div class="card-body card-body-cascade text-center">
                        <a href="../html/productos.html" class="y_titulo"><h5>Vintage Black</h5></a>
                        <h4 class="card-title"><strong><a class="y_comprar" href="carrito.php">Comprar</a></strong>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                        <div class="card-footer px-1">
                            <span class="float-left font-weight-bold"><strong>$24990</strong></span>
                            <span class="float-right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Ver Más">
                                    <i class="fas fa-eye grey-text ml-3"></i>
                                </a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="A Favoritos">
                                    <i class="fas fa-heart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Al carrito">
                                    <i class="fas fa-shopping-cart grey-text ml-3"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Share">
                                    <i class="fas fa-share-alt grey-text ml-3"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div> 
        </div>    
    </section>
    <?php include_once("footer.php");?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>