{include file="header.tpl"}
<div class="container-fluid contenedorPrincipal bg-secondary">
    <div class="text-Info bg-dark encabezado row">
        <div class="col-sm-5 col-lg-6 offset-lg-3 mt-2">
            <h1>¿QUIENES SOMOS?</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus placeat ipsa explicabo error
                sequi perferendis atque dolorum fuga, architecto praesentium ipsum assumenda rem iusto libero a nam
                aliquid unde illo!</p>
        </div>
    </div>
    <form class="">
        <div class="conteiner-form bg-secondary">
            <div class="row">
                <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 mt-5">
                    <label class="">Nombre</label>
                    <input type="text" class="form-control text-white bg-dark" id="exampleInputNombre">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
                    <label class="">Telefono</label>
                    <input type="number" class="form-control text-white bg-dark" id="exampleInputTelefono">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
                    <label class="">Email</label>
                    <input type="email" class="form-control text-white bg-dark" id="exampleInputEmail">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
                    <label class="">Mensaje</label>
                    <textarea class="form-control text-white bg-dark" id="message" name="message" rows="7"></textarea>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="offset-sm-2 col-sm-8 col-lg-6 offset-lg-3">
                        <label class="">Captcha</label>
                        <div class="container-fluid">
                            <div class="imgCaptcha row bg-dark rounded-lg  px-5 py-4 border border-white no-gutters">
                                <div class=" no-gutters col-3 mx-0 px-0">
                                    <img id="imagenCaptcha1" src="images/captcha/captcha1.jpg" alt="">
                                </div>
                                <div class="no-gutters col-3 mx-0 px-0">
                                    <img id="imagenCaptcha2" src="images/captcha/operacion1.jpg" alt="">
                                </div>
                                <div class="no-gutters col-3 mx-0 px-0">
                                    <img id="imagenCaptcha3" src="images/captcha/captcha2.jpg" alt="">
                                </div>
                                <div class="col-3 align-self-center">
                                    <div>
                                        <input class="col-12 my-2" type="number" id="resultadoCaptcha"
                                            name="Resultado Captcha" />
                                        <button type="button" id="btnActualizarCaptcha"
                                            class="btn"><i class="fas fa-sync"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="deshabilitado btn col-4 offset-4 mt-4 mb-5 "
                    id="btnContacto">Enviar</button>
            </div>
        </div>
    </form>
</div>
{include file="footer.tpl"}
