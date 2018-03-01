@extends('layouts.template')

@section('content')
  <div class="row align-content-center">
    <div class="col-12 align-items-center">
      <div class="wrap_porque">
        <div class="row">
          <div class="col-12">
            <div class="titulo_porque align-self-center w-100">
              <h1>¿Por qué <span>Cali?</span></h1>
            </div>
            
          </div>
          <div class="col-12 m-t-10">
            <div class="texto_porque align-self-center">
              <p>El Colegio Cali se enfoca en el aprendizaje del
              individuo, que por sí mismo descubre e incorpora 
              el conocimiento para generar experiencias.</p>
            </div>
            
          </div>
          <div class="col-12  m-t-10">
            <div class="btn_ver_mas align-self-center">
              <a href="{{ url('/') }}">VER MÁS</a>
            </div>  
          </div>

        </div> 
        <img class='relativo_centrado' src="{{ asset('img/fondo_porque.png') }}" alt="">  
      </div>
    </div>
  </div>
  <div class="row justify-content-center m-t-270n">
    <div class="col-12">
      <div class="centro_800">
        <div class="row justify-content-center">
          @foreach ($niveles as $nivel)
            <div class="col-12 col-md-4">
              <div class="niveles_educativos">
                <div class="row align-items-center justify-content-center">
                  <div class="col-6 col-sm-4 col-md-12">
                    <a href="{{ url('nivel-educativo/'.$nivel->id) }}">
                      <img class='imagen_niveles' src="{{ asset($nivel->imagen) }}" alt="">
                    </a>
                    
                  </div>
                  <div class="col-6 col-sm-4 col-md-12">
                    <a href="{{ url('nivel-educativo/'.$nivel->id) }}">
                      <p>
                        {{$nivel->titulo}}
                      </p>
                    </a>
                  </div>
                </div>
              </div>
              
            </div>

          @endforeach
          <div class="col-12 col-md-4">
            <div class="niveles_educativos">
              <div class="row align-items-center justify-content-center">
                <div class="col-6 col-sm-4 col-md-12">
                  <a href="#">
                    <img class='imagen_niveles' src="{{ asset('img/estimulacion.png') }}" alt="">
                  </a>
                  
                </div>
                <div class="col-6 col-sm-4 col-md-12">
                  <a href="#">
                    <p>
                      <span>ESTIMULACIÓN</span>
                    </p>
                    <p>
                      TEMPRANA
                    </p>
                  </a>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-12 col-md-4">
            <div class="niveles_educativos">
              <div class="row align-items-center justify-content-center">
                <div class="col-6 col-sm-4 col-md-12 order-2 order-md-1">
                  <a href="#">
                    <img src="{{ asset('img/maternal.png') }}" alt="">
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-12 order-1 order-md-2">
                  <a href="#">
                    <p>
                      MATERNAL
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="niveles_educativos">
              <div class="row align-items-center justify-content-center">
                <div class="col-6 col-sm-4 col-md-12">
                  <a href="#">
                    <img class='imagen_niveles' src="{{ asset('img/kinder.png') }}" alt="">
                  </a>
                  
                </div>
                <div class="col-6 col-sm-4 col-md-12">
                  <a href="#">
                    <p>
                      KINDER
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="w-100"></div>
          <div class="col-12 col-md-4">
            <div class="niveles_educativos">
              <div class="row align-items-center justify-content-center">
                <div class="col-6 col-sm-4 col-md-12 order-2 order-md-1">
                  <a href="#">
                    <img src="{{ asset('img/primaria.png') }}" alt="">
                  </a>
                </div>
                <div class="col-6 col-sm-4 col-md-12 order-1 order-md-2">
                  <a href="#">
                    <p>
                      PRIMARIA
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="niveles_educativos">
              <div class="row align-items-center justify-content-center">
                <div class="col-6 col-sm-4  col-md-12">
                  <a href="#">
                    <img class='imagen_niveles' src="{{ asset('img/secundaria.png') }}" alt="">
                  </a>
                </div>
                <div class="col-6 col-sm-4  col-md-12">
                  <a href="#">
                    <p>
                      SECUNDARIA
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row m-t-50">
    <div class="col-12">
      <div class="video_testimonial">
        <video class='w-100' id='video_1' controls poster="{{ asset('img/poster_testi_1.jpg') }}">
          <source src='{{asset('video/dummy_testimonial_1_1.mp4') }}' type="video/mp4">
        </video>
      </div>
      <div class="pleca_testimonial">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et dapibus dui. </p>
      </div>
    </div>
  </div>
  <div class="row back_naranja p-t-100 p-b-100">
    <div class="col-12 col-sm-6">
      <div class="wrap_titulo_3">
        <a href="{{ url('contacto') }}">
          <div class="titulo_3">
            <p>AGENDA</p>
            <p>TU VISITA</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-12 col-sm-6 align-middle">
      <div class="texto_opcion">
        <p class='w-100'> <span>Somos</span> </p>
        <p class='w-100'>la mejor</p>
        <p class='w-100'>opción educativa</p>
        <p class='w-100'> <span>para tus hijos.</span> </p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      
    </div>
  </div>
  <div class="row">
    <div class="col-12 ">
      <div class="alineado_centro m-t-20 m-b-20">
          Contamos con instalaciones adecuadas para el logro de sus fines formativos. 
      </div>
      <div class="centro_800">
        <div class="row beneficio_cali justify-content-center">
          <div class="col-10 col-md-6  m-t-5">
            <div>
              <img class='ico_cali' src="{{ asset('img/ico_cali.svg') }}" alt="">
              <p>Amplios salones.</p>
            </div>
          </div>
          <div class="col-10 col-md-6  m-t-5">
            <div class="">
              <img class='ico_cali' src="{{ asset('img/ico_cali.svg') }}" alt="">
              <p>Pizarrones Interactivos.</p>
            </div>

          </div>
          <div class="col-10 col-md-6  m-t-5">
            <div class="">
              <img class='ico_cali' src="{{ asset('img/ico_cali.svg') }}" alt="">
              <p>Biblioteca.</p>
            </div>

          </div>
          <div class="col-10 col-md-6  m-t-5">
            <div class="">
              <img class='ico_cali' src="{{ asset('img/ico_cali.svg') }}" alt="">
              <p>Canchas Deportivas.</p>
            </div>

          </div>
        </div>
        
      </div>
      <div class="pleca_final">
        <img src="{{ asset('img/pleca_final.svg') }}" alt="">
      </div>
    </div>
  </div>
@endsection
