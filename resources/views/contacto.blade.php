@extends('layouts.app')

@section('content')

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Aqui puedes solicitar tu DPI</h1>
                            <h2>¡Una forma mas facil!</h2>
                            <span class="subheading">page 2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h1>Porfavor llena los siguientes datos.</h1>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <div class="form-floating">
                                    <input class="form-control" id="cedula" type="text" placeholder="Enter your cedula.." data-sb-validations="required" />
                                    <label for="cedula">Cedula</label>
                                    <div class="invalid-feedback" data-sb-feedback="cedula:required">Cedula es requerida.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="fecha_nac" type="text" placeholder="Enter your fecha..." data-sb-validations="required" />
                                    <label for="fecha_nac">Fecha de Nacimiento</label>
                                    <div class="invalid-feedback" data-sb-feedback="fecha_nac:required">Fecha Nacimiento requerida.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="nombre" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="nombre">Nombre</label>
                                    <div class="invalid-feedback" data-sb-feedback="nombre:required">A name is required.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="apellido" type="text" placeholder="Enter your apellido..." data-sb-validations="required" />
                                    <label for="apellido">Apellido</label>
                                    <div class="invalid-feedback" data-sb-feedback="apellido:required">A apellido is requerid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="direccion" type="text" placeholder="Enter your direction..." data-sb-validations="required" />
                                    <label for="direccion">Direccion</label>
                                    <div class="invalid-feedback" data-sb-feedback="direccion:required">A direction is requerid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="num_tel" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                                    <label for="num_tel">Numero de telefono</label>
                                    <div class="invalid-feedback" data-sb-feedback="num_tel:required">A phone number is required.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="departamento" type="text" placeholder="Enter your departament..." data-sb-validations="required" />
                                    <label for="departamento">Departamento</label>
                                    <div class="invalid-feedback" data-sb-feedback="departamento:required">A departament is required.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="municipio" type="text" placeholder="Enter your phone municipio..." data-sb-validations="required" />
                                    <label for="municipio">Municipio</label>
                                    <div class="invalid-feedback" data-sb-feedback="municipio:required">A municipio is required.</div>
                                </div>
                                
                                <div class="form-floating">
  
                                    <p>
                                    <form class="form-control" id="imagen" type="text" name="subida-imagenes" type="POST" enctype="multipart/formdata" >
                                        <label for="imagen">HOLA</label>
                                        <input type="file" name="imagen" />
                                    </form>
                                </p>
                                </div>

                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required" />
                                    <label for="email">Correo</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">A email is required.</div>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase disabled" id="submitButton" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection