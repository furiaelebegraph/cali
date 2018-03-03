<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Una nueva tendencia mundial en educacion. Conocimiento adquirido a traves de experiencias">
        <meta name="robots" content="index,follow">
        <meta name="keywords" content="escuela, escuela leon, escuela leon guanajuato, la mejor escuela de leon, las mejores escuelas en leon, primarias en leon, escuela, primaria en leon, secundaria en leon, la mejor escuela con nivel academico leon, estimulacion temprana">

        <title>Colegio Cali</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/general.css') }}"  rel="stylesheet">
        <!-- Fonts -->

    </head>
    <body>

      <div class="menu_mobil sombra_nav">
        <div class="alto_menu_mobil alineado_centro">
          <div class="row no-gutters mh-100 alineado_centro">
            <div class="col-12 h20">
              <div class="btn_menu_mobil">
                <a href="{{ url('/') }}">INICIO</a>
              </div>
            </div>
            <div class="col-12 h20">
              <div class="btn_menu_mobil">
                <a class='align-self-center' href="{{ url('/') }}">ACERCA DE CALI</a>
              </div>
            </div>
            <div class="col-12 h20">
              <div class="btn_menu_mobil">
                <a href="{{ url('/') }}">NIVELES EDUCATIVOS</a>
              </div>
            </div>
            <div class="col-12 h20">
              <div class="btn_menu_mobil">
                <a href="{{ url('/') }}">INSTALACIONES</a>
              </div>
            </div>
            <div class="col-12 h20">
              <div class="btn_menu_mobil">
                <a href="{{ url('/') }}">CONTACTO</a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="escondido">
        

            <div class="row">
              <div class="col-12">
                <div class="escritorio nav_mobil_cali">
                  <div class="row justify-content-between sombra_nav">
                    <div class="col-4 p-l-10">
                      <a href="{{ url('/') }}"><img class='icono_logo_20' src="{{ asset('img/logo_cali_20.png') }}" alt=""></a>
                    </div>
                    <div class="col-8 d-flex justify-content-end align-items-center  p-r-10">
                      <div>
                        <a class='btn_menu_escri' href="{{ url('/') }}">INICIO</a>
                      </div>
                      <div>
                        <a class='btn_menu_escri' href="{{ url('nosotros') }}">NOSOTROS</a>
                      </div>
                      <div  id="dropdownMenuButton">
                        <a class='btn_menu_escri' href="#">NIVELES EDUCATIVOS</a>
                          <div class="dropdown-content" >
                            @foreach ($niveles as $nivel)
                              <a href="{{ url('nivel-educativo')}}/{{$nivel->id}}">{{$nivel->titulo}}</a>
                            @endforeach
                          </div>
                      </div>
                      <div>
                        <a class='btn_menu_escri' href="{{ url('instalaciones') }}">INSTALACIONES</a>
                      </div>
                      <div>
                        <a class='btn_menu_escri' href="{{ url('contacto') }}">CONTACTO</a>
                      </div>
                      <div >
                        <a href="https://www.facebook.com/Colegio-Cali-474832642670914/">
                          <img class='icono_social' src="{{ asset('img/face_cali.svg') }}" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                  
                </div>

                <div class="mobil nav_mobil_cali sombra_nav">
                  <div class="row align-items-center">
                    <div class="col activa_menu">
                      <div id="nav-icon3">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                    </div>
                    <div class="col">
                      <a href="{{ url('/') }}"><img class='icono_logo_20' src="{{ asset('img/logo_cali_20.png') }}" alt=""></a>
                    </div>
                    <div class="col">
                      <div class="sociales_footer">
                        <a href="https://www.facebook.com/Colegio-Cali-474832642670914/">
                          <img class='icono_social' src="{{ asset('img/face_cali.svg') }}" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @yield('content')

        <footer class='m-t-70'>
            <div class="row alineado_centro">
              <div class="col-12">
                <div class="row justify-content-center">
                  <div class="col-10 col-sm-6">
                    <div class="row justify-content-center">
                      <div class="col-12">
                        <div class="logo_footer">
                          <img src=" {{ asset('img/logo_cali.svg') }} " alt="">
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-12">
                        <div class="direccion_footer">
                          <p> San Juan Bosco #444 León, Gto, México.  </p>
                          <p>C.P. 12178</p>
                          <p>T. (477) 198.06.50 y (477)198.07.70 </p>
                        </div>
                      </div>
                    </div>
                    <div class="row  justify-content-center p-t-10 p-b-10 m-t-10 linea_naranja">
                      <div class="col-12">
                        <div class="navegacion_footer">
                          <div class="row">
                            <div class="col-6 m-t-10">
                              <a href="{{ asset('path') }}">Niveles educativos</a>
                            </div>
                            <div class="col-6 m-t-10">
                              <a href="{{ asset('path') }}">Dinámica educativa</a>
                            </div>
                            <div class="col-6 m-t-10">
                              <a href="{{ asset('path') }}">Acerca de Cali</a>
                            </div>
                            <div class="col-6 m-t-10">
                              <a href="{{ asset('path') }}">Contacto</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center m-b-20 m-t-20">
                      <div class="col-12">
                        <div class="sociales_footer">
                          <a href="https://www.facebook.com/Colegio-Cali-474832642670914/">
                            <img class='icono_social' src="{{ asset('img/face_cali.svg') }}" alt="">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center alineado_centro">
              <div class="col-12">
                <div class="back_naranja p-t-20 p-b-20">
                  <div class="row">
                    <div class="col-12 col-sm-6 footer_der">
                      Colegio Cali © {{ date("Y") }}.
                    </div>
                    <div class="col-12 col-sm-6 footer_izq">
                      Todos los derechos reservados.
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </footer>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="{{ asset('js/wow.min.js') }} "></script>
        <script src="{{ asset('js/jquery.fancybox.min.js') }} "></script>
        <script src="{{ asset('js/anime.js') }}"></script>
        <script src="{{ asset('js/animaciones.js') }}"></script>
        <script src="{{ asset('js/general.js') }}"></script>
    </body>
</html>