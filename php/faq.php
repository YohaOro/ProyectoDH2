<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/7099e40d98.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Faster+One|Open+Sans:300i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/faq.css">
    <title>Faq</title>
</head>
<body>
    <?php include_once("nav.php");?>

    <section>
        <div class="container p-3">
            <h1 class="text-center m-5">Preguntas Frecuentes</h1>
            <div class="row">
                <div class="col-lg-4">
                    <div class=" list-group nav-pills" id="faq-tabs" role="tablist" >
                        <a href="#tab1" class="nav-link y-nav-link active" data-toggle="pill" role="tab">Productos</a>
                        <a href="#tab2" class="nav-link y-nav-link" data-toggle="pill" role="tab">Envios</a>
                        <a href="#tab3" class="nav-link y-nav-link" data-toggle="pill" role="tab">Formas de pago</a>
                        <a href="#tab4" class="nav-link y-nav-link" data-toggle="pill" role="tab">Mi Cuenta</a>
                        <a href="#tab5" class="nav-link y-nav-link" data-toggle="pill" role="tab">Garantia</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content " id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card">
                                    <div class="card-header " id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1">¿Puedo ser medido para determinar la talla correcta de cuadro para mí?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>Si. Medimos tu altura, así como la distancia de la entrepierna hasta el suelo. De esta manera somos capaces de calcular y determinar que talla de cuadro es la mejor para vos, dependiendo del modelo seleccionado.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2">¿Es posible tener mi bicicleta con un equipamiento diferente?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>Si. Ciprés ofrece la opción de montan la bicicleta a la carta. Normalmente nuestras bicicletas vienen con un montaje determinado. Sin embargo, siempre podemos revisar la configuración y tratar de complacer las necesidades de nuestros clientes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3">¿Puedo probar las biciletas en la tienda?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-3" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>Si. Disponemos de un espacio detrás de la tienda donde podrás probarla tranquilamente.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4">¿Cuándo sé si mi bicilceta ya está preparada?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>Cuando esta lista te llamaremos para comunicártelo y puedas venir a buscarla o acordar formas de envio.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2" role="tabpanel">
                            <div class="accordion" id="accordion-tab-2">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-2-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-1">¿Puedo pedir que el producto llegue a mi domicilio?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-2-content-1" data-parent="#accordion-tab-2">
                                        <div class="card-body">
                                            <p>Claro!! Trabajamos con: " Mercado Envios".<br>Tambien realizamos envios por encomienda (Via Cargo, Buspack, MD Cargas) para pago en destino (el cliente abonara el envio al recibir el producto). </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-2-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-2">¿Dónde puedo consultar el estado de mi pedido?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-2-content-2" data-parent="#accordion-tab-2">
                                        <div class="card-body">
                                            <p>Una vez que despachemos tu pedido te enviaremos un número de seguimiento directamente a tu mail para que puedas rastrear el estado de tu compra en todo momento.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-2-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-3">¿Cuáles son los plazos de entrega?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-2-content-3" data-parent="#accordion-tab-2">
                                        <div class="card-body">
                                            <p>En el  momento en el cual haces el pedido, Ciprés efectúa el despacho en un máximo de 48 hrs., si haces el pedido después de las 2 de la tarde el despacho quedara agendado para el día siguiente, después de esto el plazo de entrega dependerá exclusivamente de la empresa que está a cargo del envio.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-2-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-4">¿Qué debo hacer si me llega un producto que no pedí?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-2-content-4" data-parent="#accordion-tab-2">
                                        <div class="card-body">
                                            <p>Tenés que comunicarte con nosotros a info@cipres.com.ar o llamanos al 4455-6677 cuanto antes para recoger el pedido y enviarte el correspondiente.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3" role="tabpanel">
                            <div class="accordion" id="accordion-tab-3">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-3-heading-1">
                                        <h5><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-1">¿Cómo puedo financiar mis productos?</button></h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-3-content-1" data-parent="#accordion-tab-3">
                                        <div class="card-body">
                                            <p>Con el objetivo de adecuarnos a las necesidades de cada cliente, tenemos diferentes planes de financiación.<br>Las condiciones de cada financiación varían dependiendo de las formas de pago.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-3-heading-2">
                                        <h5><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-2">¿Hay descuentos especiales en la tienda?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-3-content-2" data-parent="#accordion-tab-3">
                                        <div class="card-body">
                                            <p>Si!!!. Dependiendo el día de la semana contás con descuentos tanto sea con tarjeta de crédito o efectivo.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-3-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-3">¿Puedo pagar con código QR en la tienda?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-3-content-3" data-parent="#accordion-tab-3">
                                        <div class="card-body">
                                            <p>Por supuesto!!!. Utilzamos la plataforma de Mercado Pago para facilitar tu compra.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab4" role="tabpanel">
                            <div class="accordion" id="accordion-tab-4">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-4-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-1">¿Qué debo hacer si no me llega el mail de confirmación de registro?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-4-content-1" data-parent="#accordion-tab-4">
                                        <div class="card-body">
                                            <p>Es muy probable que tu mail de confirmacion esté en "spam", de no ser así te pedimos que vuelvas a registrarte nuevamente.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-4-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-2" >¿Debo registrarme para usar el sitio?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-4-content-2" data-parent="#accordion-tab-4">
                                        <div class="card-body">
                                            <p>Es necesario que estés registrado en el sitio para realizar alguna compra. No olvides que si estas registrado todas las semanas recibirás descuentos para tus proximas compras ;)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-4-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-3">¿Qué puedo hacer si rechaza mi usuario y/o contraseña?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-4-content-3" data-parent="#accordion-tab-4">
                                        <div class="card-body">
                                            <p>Revisá que los datos con los que intentás ingresar sean los mismos con los que te registraste. Leé bien la información que te aparezca al intentar ingresar (puede que estés colocando datos incorrectos o que aún no hayas validado tu casilla de correo, en ese caso, se te brindará la posibilidad de volver a enviar el mail de validación).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab5" role="tabpanel">
                            <div class="accordion" id="accordion-tab-5">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-5-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-5-content-1">¿Cuál es el plazo para realizar un cambio?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-5-content-1" data-parent="#accordion-tab-5">
                                        <div class="card-body">
                                            <p>Puedes solicitar un cambio hasta 15 días luego de realizada la compra.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-5-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-5-content-2">¿Qué debo hacer si el producto no llega en buen estado?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-5-content-2" data-parent="#accordion-tab-5">
                                        <div class="card-body">
                                            <p>Ponte en contacto con nosotros a info@cipres.com.ar o llamanos al 4455-6677 y te enviamos uno nuevo. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-5-heading-3">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-5-content-3">¿Las devoluciones y los cambios son gratuitos?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-5-content-3" data-parent="#accordion-tab-5">
                                        <div class="card-body">
                                            <p>Si, siempre y cuando este en su caja y sin daño alguno.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-5-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-5-content-4">¿Qué hago cuando descubro una fisura o algún problema en mi bicicleta?</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-5-content-4" data-parent="#accordion-tab-5">
                                        <div class="card-body">
                                            <p>Vení a la tienda con la bicicleta y te tramitamos la garantía en caso de seguir sujeto al periodo de la misma, siempre y cuando no sea por una caída o mal uso. Si tu garantia está vigente pero no podes ir a la tienda comunicate con nosotros para coordinar el retiro de bici.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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