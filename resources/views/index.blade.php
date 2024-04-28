<!doctype html>
<html lang="en">
    <head>
        <title>Newclot</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <script src="https://kit.fontawesome.com/5ed861d45e.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <!-- menu navegacion -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#" > <i class="fa-solid fa-scissors"></i>NewClot Taller Costura</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#prendas">Prendas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- inicio -->
        <section id="inicio" class="container-fluid p-0">
            <div class="banner-img" style="position: relative; background:url('static/images/collage2.png') center/cover no-repeat; height:400px;">
                <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.6);"></div>
                <div class="banner-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #643843; font-size: 24px; font-weight: bold;">
                    <h1>NewClot</h1>
                    <p>Diseñamos ropa a medida</p>
                    <a href="http://localhost/newclot/public/login" class="btn btn-dark">Iniciar Sesión</a>
                </div>
            </div>
        </section>

        <section id="id" class="container mt-4 text-center">
                <div class="jumbotron bg-dark text-white">
                <br/>
                    <h2>¡Bienvenido al Taller de NewClot!</h2>
                    <p>Descubre la experiencia de tener un guardarropa a tu medida</p>   
                <br/>
                </div>
        </section>

        <!-- nosotros -->
        <section id="nosotros" class="container-sm mt-5 text-center">
            <div class="jumbotron bg-ligth text-black p-5">
            <br/>
                <h2 class="display-4" style="font-weight: bold;">¡Nosotros!</h2>
                <p class="lead">Nos dedicamos a resolver uno de los mayores desafíos que enfrentan las mujeres al comprar ropa: encontrar prendas que se ajusten a sus cuerpos sin necesidad de ajustes adicionales. Nuestro enfoque se centra en confeccionar prendas a medida que se adapten perfectamente a cada tipo de cuerpo femenino, ofreciendo comodidad, estilo y confianza a cada cliente.<br> <br>Creemos en proporcionar una experiencia de compra personalizada y única, trabajando estrechamente con nuestros clientes para entender sus necesidades individuales y garantizar que cada prenda resalte su belleza natural. Nuestro objetivo es empoderar a las mujeres para que se sientan seguras y seguras en su vestimenta, permitiéndoles expresar su estilo único sin las restricciones de las tallas estándar.</p> 
            <br/>
            </div>
        </section>

        <!-- prendas -->
        <section id="prendas" class="container mt-4 text-center">
            <h2>Prendas que confeccionamos</h2>
            <p class="text">Elige el modelo o proporcionanos uno</p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card h-100">
                            <img src="static/images/blazers.jpg" class="card-img-top img-fluid" alt="blazers" style="height: 200px; object-fit: contain;">
                            <div class="card-body">
                                <h5 class="card-title">Blazers</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card h-100">
                            <img src="static/images/blusas.jpg" class="card-img-top img-fluid" alt="Blusas" style="height: 200px; object-fit: contain;">
                            <div class="card-body">
                                <h5 class="card-title">Blusas</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card h-100">
                            <img src="static/images/camisas.jpg" class="card-img-top img-fluid" alt="camisas" style="height: 200px; object-fit: contain;">
                            <div class="card-body">
                                <h5 class="card-title">Camisas</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card h-100">
                            <img src="static/images/chaquetas.jpg" class="card-img-top img-fluid" alt="chaquetas" style="height: 200px; object-fit: contain;">
                            <div class="card-body">
                                <h5 class="card-title">Chaquetas</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card h-100">
                            <img src="static/images/coctel.jpg" class="card-img-top img-fluid" alt="coctel" style="height: 200px; object-fit: contain;">
                            <div class="card-body">
                                <h5 class="card-title">Vestidos Coctel</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card h-100">
                            <img src="static/images/faldas.jpg" class="card-img-top img-fluid" alt="faldas" style="height: 200px; object-fit: contain;">
                            <div class="card-body">
                                <h5 class="card-title">Faldas</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card h-100">
                            <img src="static/images/largos.jpg" class="card-img-top img-fluid" alt="largos" style="height: 200px; object-fit: contain;">
                            <div class="card-body">
                                <h5 class="card-title">Vestidos largos</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card h-100">
                            <img src="static/images/pijamas.jpg" class="card-img-top img-fluid" alt="pijamas" style="height: 200px; object-fit: contain;">
                            <div class="card-body">
                                <h5 class="card-title">Pijamas</h5>
                            </div>
                        </div>
                    </div>
                </div>               
        </section>

        <!-- contacto -->
        <br/><br/>
        <div id="contacto" class="text-center bg-light p-4">
            <h3 class="mb-4"> Horario de atención </h3>
            <div>
                <p><strong>Lunes a viernes</strong></p>
                <p><strong>11:00 a.m a 15:00 p.m</strong></p>
            </div>
            <h3 class="mb-4"> Celular </h3>
            <div>
                <p><strong>3173656223</strong></p>
            </div>
            <h3 class="mb-4"> Dirección </h3>
            <div>
                <p><strong>Cra 68e # 39-14 Cali</strong></p>
            </div>
        </div>

        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer class="bg-dark text-light text-center py-3">
            <!-- place footer here -->
            <p> &copy; Newclot Taller de costura, todos los derechos reservados.</p>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
