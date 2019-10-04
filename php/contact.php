<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/7099e40d98.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Faster+One|Open+Sans:300i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/contact.css">
  <title>Contact</title>
</head>
<body>
  <?php include_once("nav.php");?>

    <div class="container p-5">
      <div class=" row justify-content-md-center">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.1866261820182!2d-58.44586488461672!3d-34.54882986210328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb436efe09303%3A0xfb39818e7624ac76!2sDigital%20House!5e0!3m2!1ses!2sar!4v1569724090211!5m2!1ses!2sar" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <div class="dart-headingstyle-one dart-mb-20">
              <h2 class="dart-heading">Contactate con nosotros</h2>
              <form class="row" action="send_email.php" id="contact" name="contact" method="post" >
                <div class="form-group col-12 ">
                  <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Tu nombre" required >
                </div>
                <div class="form-group col-12 ">
                  <input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder="Tu mail" required >
                </div>
                <div class="form-group col-12 ">
                <input type="text" class="form-control" name="cel" id="cel" placeholder="Celular" title="">
                </div>
                <div class="form-group col-12">
                  <textarea class="form-control" name="InputMessage" id="InputMessage" rows="4" placeholder="Dejanos un mensaje" required  ></textarea>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                  <button name="submit" type="submit" class="btn btn-secondary">Enviar</button>
                </div>
              </form>

            <hr>
            
            <div class="row icono">
              <div class="col-md-12 col-sm-12">
                <p class=""><i class="fa fa-map-marker"></i>Av. Monroe 860, C1428 BKD, Buenos Aires</p>
              </div>
              <div class="col-md-12 col-sm-12">
                <p class=""><i class="fa fa-phone"></i> <a href="">11-4455-6677</a></p>
              </div>
              <div class="col-md-12 col-sm-12">
                <p class=""><i class="fa fa-envelope"></i>info@cipres.com.ar</p>
              </div>
            </div>
          </div>
        </div>                
      </div>            
    </div>
  
  <?php include_once("footer.php");?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>
