@extends('layouts/main')
@section('contenido')
  <div class="container cuerpo">

      <img src="images/faq.jpg" class="col-12 my-3" alt="">

        <div class="preguntasfrec">

          <section class="comocomprar">

          <!-- Preguntas de COMO COMPRAR -->
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header m-0 bg-dark" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-question-circle"> </i>
                      ¿Que necesito para poder empezar a comprar en <strong><i>The Gourmet Market?</i></strong>
                    </button>
                  </h2>
                </div>
                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                          Para poder empezar a comprar en <strong>The Gourmet Market</strong> se necesita estar registrado y contar con alguno de los medios de pago disponibles en la plataforma.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header m-0 bg-dark" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fas fa-question-circle"></i>
                            ¿Qué beneficios tengo al registrarme en <strong><i>The Gourmet Market?</i></strong>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                          Al registrarte podés acceder a tus productos favoritos, historial de pedidos, y lo más importante, formarás parte de nuestra comunidad, recibiendo promociones exclusivas.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header m-0 bg-dark" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fas fa-question-circle"></i>
                            ¿Puedo hacer compras sin la necesidad de registrarme?
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                          Un mínimo registro, que se realiza por única vez, es imprescindible para que podamos procesar y enviar tu pedido.
                        </div>
                      </div>
                    </div>
                  </div>
          </section>

          <br>

          <section class="pago">

            <!-- Preguntas de PAGO -->
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header m-0 bg-dark" id="headingFour">
                  <h2 class="mb-0">
                    <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-wallet"></i>
                      ¿Es seguro comprar en <strong><i>The Gourmet Market</i></strong>?
                    </button>
                  </h2>
                </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                          Tomamos todas las normas de seguridad para que los datos y la información proporcionados por nuestros clientes sean absolutamente confidenciales.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header m-0 bg-dark" id="headingFive">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <i class="fas fa-wallet"></i>
                            ¿Puedo comprar los productos en un local?
                          </button>
                        </h2>
                      </div>
                      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                          Actualmente no poseemos ningún local de venta al público en forma directa. Nuestra opción de compra vía web requiere un mínimo de organización previa, pero cuenta con el beneficio de ahorrar tiempo al momento de realizar el pedido, sumado a la comodidad de recibirlo en el momento y lugar que elijas.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header m-0 bg-dark" id="headingSix">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <i class="fas fa-wallet"></i>
                            ¿Cuales son los medios de pago?
                          </button>
                        </h2>
                      </div>
                      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                          <p>Trabajamos con Mercado Pago, aceptando tarjetas de crédito, débito, RapiPago, Pago Fácil.</p>
                          <p>También aceptamos transferencias bancarias.
                          Pedidos en CABA y GBA pueden abonar con efectivo al recibir el pedido o retirarlo en punto de entrega.</p>
                        </div>
                      </div>
                    </div>
                  </div>

          </section>
          <section class="delivery">
            <br>
            <!-- Preguntas de DELIVERY -->
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header m-0 bg-dark" id="headingSeven">
                  <h2 class="mb-0">
                    <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                      <i class="fas fa-truck-loading"></i>
                      ¿En qué zonas entregan?

                    </button>
                  </h2>
                </div>
                      <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                          <p>Realizamos envíos a todo el país.</p>
                          <p>En CABA y GBA entregamos productos refrigerados y secos, al interior enviamos productos secos.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header m-0 bg-dark" id="headingEight">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            <i class="fas fa-truck-loading"></i>
                            ¿Cuanto tardo en recibir mi pedido?
                          </button>
                        </h2>
                      </div>
                      <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                        <div class="card-body">
                          <p>En CABA y GBA, recibirás tu pedido dentro de las 48hs de realizado.</p>
                          <p>Nos contactaremos con vos para coordinar el día y horario. Podrás elegir mañana (9 a 13hs) o tarde (14 a 18hs).</p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header m-0 bg-dark" id="headingNine">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            <i class="fas fa-truck-loading"></i>
                            ¿Que costo tiene el envio a domicilio?
                          </button>
                        </h2>
                      </div>
                      <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                        <div class="card-body">
                          El costo de envío dependerá de la zona para la cual se haya hecho el mismo y la cantidad de productos. Nos pondremos en contacto con vos cuando hayas confirmado la compra.
                        </div>
                      </div>
                    </div>
                  </div>

          </section>

          <br>

          <section class="devolucion">

            <!-- Preguntas de DEVOLUCION -->
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header m-0 bg-dark" id="headingTen">
                  <h2 class="mb-0">
                    <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                      <i class="fas fa-exchange-alt"></i>
                      ¿Puedo hacer cambio o devoluciones?
                    </button>
                  </h2>
                </div>
                      <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                        <div class="card-body">
                          <p> Al tratarse de alimentos, no aceptamos devoluciones ni cambios.</p>
                          <p>En caso que recibas un producto que no se corresponda con tu pedido, te pedimos que por favor te comuniques con nosotros dentro de las 48 horas de recibida la compra, a fin de que podamos solucionar el inconveniente a la brevedad.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header m-0 bg-dark" id="headingEleven">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            <i class="fas fa-exchange-alt"></i>
                            ¿Puedo cancelar mi pedido?
                          </button>
                        </h2>
                      </div>
                      <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                        <div class="card-body">
                          Podés cancelar tu pedido hasta 48 horas antes del día de entrega.
                        </div>
                      </div>
                    </div>
                  </div>

          </section>

        </div>

      </div>

@endsection
