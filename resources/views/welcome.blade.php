@extends('layouts.template')

@section('content')
  
  <!-- Galeria Inicio -->
  <div class="galeria_landing escritorio" id='galeria_magica'>
    <div class='descubre_cali'>
      <img src="{{ asset('img/descubre_cali.png') }}" alt="">
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="3500">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3" class=""></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" data-src="{{ asset('img/fondo_1.jpg') }}" alt="First slide [800x400]" src="{{ asset('img/fondo_1.jpg') }}" data-holder-rendered="true">
            <div class="carousel-caption d-none d-md-block">

              <div class="svg_imagen svg_imagen_1 wow zoomIn">
                <svg class='iconos_inicio_1' id="foco_1" viewBox="0 0 445 413" >
                <g class="lines">
                  <path class="st0 foco" d="M158.4,143.5c-50.7,25.5-72,86.2-47.3,135.3c16,31.9,38.5,44.3,55,53.5c10.2,5.6,16.1,9.1,18.7,14.2
                    c5.8,11.5,17.4,19.3,32.5,22c3.7,6.7,13.1,22.9,13.1,22.9l0,0c2.6,4.7,10,13.1,29.1,10.3c3.3,1.9,7.1,3.1,11.3,3.6
                    c2.6,0.3,5.2-0.1,7.5-1.3l17.8-9c2.3-1.2,4.3-3,5.5-5.3c2.1-3.6,3.3-7.4,3.8-11.2c13.7-13.8,11.2-24.9,9-29.5
                    c0,0-7.4-17.2-10.6-24.2c6.9-13.7,7.6-27.7,1.8-39.2c-2.6-5.1-1.8-11.9-0.3-23.6c2.5-18.6,5.9-44.1-10.1-75.9
                    C270.5,137.2,209.1,118,158.4,143.5L158.4,143.5z M279.5,258.9c-1.8,13.4-3.5,26,2.9,38.6c2.8,5.5,0,12.5-2.4,16.9L223,343
                    c-5-0.7-12.2-2.6-15-8.1c-6.3-12.6-17.5-18.8-29.4-25.4c-14.9-8.3-31.8-17.7-44.2-42.3c-18.2-36.2-2.2-81.2,35.7-100.3
                    c37.9-19.1,83.6-5.1,101.9,31.1C284.3,222.6,281.8,241.8,279.5,258.9L279.5,258.9z M279.5,258.9"/>
                  <path class="st0 cosita_1" d="M149.6,126.1c3.2-1.6,4.5-5.5,2.9-8.7l-8.8-17.4c-1.6-3.2-5.5-4.5-8.7-2.9c-3.2,1.6-4.5,5.5-2.9,8.7l8.8,17.5
                    C142.4,126.4,146.3,127.7,149.6,126.1L149.6,126.1z M149.6,126.1" fill="none"/>
                  <path class="st0 cosita_2" d="M93.9,169.5c2,1.3,4.5,1.4,6.5,0.4c1-0.5,1.9-1.2,2.5-2.3c2-3,1.1-7-1.9-9l-65.2-42.7c-3-2-7-1.2-9,1.9
                    c-2,3-1.1,7.1,1.9,9L93.9,169.5z M93.9,169.5" fill="none"/>
                  <path class="st0 cosita_3" d="M77.2,220l-19.5-1.1c-3.6-0.2-6.7,2.5-6.9,6.2c-0.2,3.6,2.6,6.6,6.1,6.9l19.5,1.1c1.2,0.1,2.3-0.2,3.3-0.6
                    c2-1,3.4-3,3.6-5.5C83.6,223.3,80.8,220.2,77.2,220L77.2,220z M77.2,220" fill="none"/>
                  <path class="st0 cosita_4" d="M96,288c-1.6-3.2-5.5-4.5-8.7-2.9l-68.1,33.5c-3.2,1.6-4.5,5.5-2.9,8.8c1.6,3.2,5.5,4.5,8.7,2.9l68.1-33.5
                    C96.3,295.2,97.6,291.2,96,288L96,288z M96,288" fill="none"/>
                  <path class="st0 cosita_5" d="M128.5,336.5l-10.7,16.4c-2,3-1.2,7,1.9,9c2,1.3,4.5,1.4,6.5,0.4c1-0.5,1.9-1.3,2.5-2.3l10.7-16.3
                    c1.9-3,1.1-7.1-1.9-9C134.5,332.7,130.5,333.5,128.5,336.5L128.5,336.5z M128.5,336.5" fill="none"/>
                  <path class="st0 cosita_6" d="M408.8,239.3l-77.8-4.7c-3.6-0.2-6.6,2.5-6.9,6.1c-0.2,3.6,2.5,6.6,6.1,6.9l77.8,4.7c1.2,0.1,2.3-0.2,3.3-0.7
                    c2-1,3.4-3,3.6-5.4C415.2,242.6,412.5,239.6,408.8,239.3L408.8,239.3z M408.8,239.3" fill="none"/>
                  <path class="st0 cosita_7" d="M331.9,162.1l-17.4,8.8c-3.2,1.6-4.5,5.5-2.9,8.8c1.6,3.2,5.5,4.5,8.7,2.9l17.4-8.8c3.2-1.6,4.5-5.5,2.9-8.7
                    C339,161.8,335.1,160.5,331.9,162.1L331.9,162.1z M331.9,162.1" fill="none"/>
                  <path class="st0 cosita_8" d="M276.5,133.4c1-0.5,1.8-1.2,2.5-2.3l10.8-16.3c2-3,1.1-7.1-1.9-9c-3-2-7-1.1-9,1.9L268.1,124
                    c-1.9,3-1.1,7.1,1.9,9C272,134.3,274.5,134.4,276.5,133.4L276.5,133.4z M276.5,133.4" fill="none"/>
                  <path class="st0 cosita_9" d="M210.7,113.4c1.2,0.1,2.3-0.2,3.3-0.7c2-1,3.4-3,3.6-5.4l0.8-77.9c0.2-3.6-2.5-6.7-6.1-6.9
                    c-3.6-0.2-6.7,2.5-6.8,6.1l-0.8,78C204.4,110.1,207.1,113.2,210.7,113.4L210.7,113.4z M210.7,113.4" fill="none"/>
                  <path class="st0 cosita_10" d="M202.8,262.4c0.8,5.8,3.6,7.3,8.8,7.3c5.1-0.1,7.9-1.7,8.7-7.4l5.7-46.5c0.4-3.2,0.8-6.4,0.7-9.3l-0.2-23.1
                    c-0.1-10.1-5.9-15.2-15.8-15.1c-9.9,0.1-15.6,5.3-15.5,15.4l0.2,23.1c0,3,0.4,6.2,0.9,9.3L202.8,262.4z M202.8,262.4" fill="none"/>
                  <path class="st0 cosita_11" d="M211.8,282.6c-8.9,0.1-16.2,7.5-16.1,16.4c0.1,8.9,7.5,16.2,16.4,16.1c8.9-0.1,16.2-7.5,16.1-16.4
                    C228.1,289.8,220.7,282.5,211.8,282.6L211.8,282.6z M211.8,282.6" fill="none"/>
                </g>
                </svg>

              </div>

              <h1>UNA NUEVA  TENDENCIA</h1>
              <h2>MUNDIAL EN  EDUCACIÓN</h2>
            </div>
          </div>
          <div class="carousel-item" id='test'>
            <img class="d-block w-100" data-src="{{ asset('img/fondo_2.jpg') }}" alt="First slide [800x400]" src="{{ asset('img/fondo_2.jpg') }}" data-holder-rendered="true">
            <div class="carousel-caption d-none d-md-block">
              <div class="svg_imagen svg_imagen_2  wow zoomIn">
                <svg class='iconos_inicio_2' id="lupita_1" viewBox="0 0 445 413">
                <g class="lines">

                  <path class="st2" d="M161.1,14.7h16c4.6,0.7,9.3,1.3,13.9,2c18.7,2.9,36.1,9.5,52.1,19.6c13.6,8.6,25.3,19.3,35.1,32
                    c12.7,16.3,21.1,34.6,25.7,54.7c3.4,14.9,4.2,30,2.4,45.1c-2.6,22.2-10,42.9-22.6,61.5c-5.2,7.6-5.1,8,3,12.9
                    c3.6,2.2,7.6,4.2,11.8,1.4c3-2,6.2-2.4,9-0.7c4.4,2.7,8.7,5.7,12.4,9.3c6.8,6.5,13.1,13.5,19.7,20.2c23.2,23.9,46.3,47.9,69.5,71.8
                    c7,7.2,6.9,17.2-0.1,24.5c-3.7,3.8-7.4,7.6-11.4,11.1c-7.4,6.4-13,15-22.7,18.8h-7.4c-4.3-1.9-8.1-4.5-11.3-8
                    c-10-10.6-20.2-21.1-30.4-31.6c-19.4-20-38.9-40-58.2-60.2c-2.9-3-5-6.9-6.9-10.7c-1.4-2.8-1.1-5.7,0.8-8.7c1.2-1.8,1.8-4.9,1.1-6.9
                    c-1.6-4.3-4.2-8.2-6.4-12.4c-1.4,0.8-2.1,1.1-2.6,1.5c-11.6,9.1-24.4,16-38.3,20.9c-13.7,4.9-27.8,7.5-42.3,7.9
                    c-18.3,0.5-36-2.6-53.1-9.1c-14-5.3-26.8-12.7-38.3-22.2c-11.7-9.6-21.5-20.9-29.5-33.7c-11.4-18.4-18.2-38.4-20.2-59.9
                    c-2.2-23.9,1.4-46.8,11.1-68.9C51.6,77,64.6,59.9,81.6,45.9c17.3-14.2,37.1-23.7,59.2-28.2C147.5,16.4,154.3,15.7,161.1,14.7
                     M168,248c51.8,0.7,95.6-40.6,96.2-94.2c0.6-51.6-40.3-95.5-94.3-96.1c-51.7-0.6-95.2,40.6-96,93.7C73,203.4,114.4,247.4,168,248"/>
                  </g>
                </svg>
              </div>
              <h2>IDENTIFICAMOS</h2>
              <p>el problema al que</p>
              <p>nos enfrentamos.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" data-src="{{ asset('img/fondo_3.jpg') }}" alt="Third slide [800x400]" src="{{ asset('img/fondo_3.jpg') }}" data-holder-rendered="true">
            <div class="carousel-caption d-none d-md-block">
              <div class="svg_imagen svg_imagen_1 wow zoomIn">
                <svg class='iconos_inicio_3' id="microscopio_1"  viewBox="0 0 137 191" >
                <g class='lines'>
                  <path class="st3" d="M63.4,143.6H50.6c-0.1,0.2-0.1,0.3-0.2,0.5c2.1,1.2,4.1,2.4,6.2,3.5c0.5,0.3,1.1,0.5,1.7,0.7
                    c2.8,1.5,5.1,1.8,8.2-0.5c5.5-4.2,13.7-3.4,18.9,1.2c1,0.9,1.8,1.1,3.1,0.6c16.7-6.3,26.7-18.3,28.7-36.1c1.6-14-3.3-26-13.7-35.6
                    c-0.4-0.4-1.3-0.6-1.9-0.4c-6.2,1.7-10.8,0.9-15.9-3c-3,3-5.9,5.9-9.3,9.3c0.7,0.5,1.6,1,2.3,1.8c1.6,1.7,1.7,3.5,0.3,4.9
                    c-1.4,1.4-3.2,1.3-4.9-0.3c-2.4-2.3-4.7-4.7-7.1-7.2c-0.7,0.7-1.3,1.2-1.8,1.7c-5.5,5.5-11,11-16.4,16.4c-2.4,2.4-3.8,2.4-6.2,0.1
                    c-4.4-4.4-8.8-8.8-13.3-13.3c-2.2-2.2-2.2-3.7,0-5.9c5.5-5.5,11.1-11.1,16.6-16.6c0.5-0.5,1-1.1,1.7-1.8c-2.4-2.4-4.9-4.6-7.1-7.1
                    c-0.7-0.8-1.3-2.3-1.1-3.4c0.4-2.4,3.2-3.2,5.1-1.7c0.9,0.8,1.8,1.7,2.8,2.6c0.5-0.4,0.9-0.8,1.4-1.2
                    c13.8-13.8,27.6-27.6,41.4-41.4c2.2-2.2,3.8-2.3,6,0c1.1,1.1,2.1,2.3,3.3,3.6c0.7-0.7,1.3-1.2,1.8-1.7c3.8-3.8,7.7-7.7,11.5-11.5
                    c2.5-2.5,3.9-2.5,6.3-0.1c3.4,3.4,6.7,6.7,10.1,10.1c2,2,2,3.6,0,5.6c-3.7,3.8-7.5,7.5-11.3,11.2c-0.7,0.7-1.5,1.3-2.5,2.2
                    c1.5,1.4,2.7,2.6,3.9,3.7c2.1,2.1,2.1,3.6,0,5.7c-3.5,3.6-7.1,7.1-10.3,10.3c1.2,2.9,2.2,5.6,3.4,8.2c0.4,0.8,1,1.6,1.7,2.2
                    c8.8,7.3,15.4,16.2,19.3,27c4.6,12.7,5.1,25.6,1.3,38.6c-5,17-15.6,29.6-31.2,37.8c-3.6,1.9-7.5,3-11.3,4.5c-0.5,0.2-1,0.3-1.4,0.8
                    c5.4,0,10.7,0.1,16.1,0c1.9,0,3.2,0.6,4.2,2.2c2.9,4.5,5.9,8.9,8.9,13.4c0.9,1.3,1.5,2.8,0.4,3.9c-0.8,0.9-2.2,1.6-3.4,1.6
                    c-27.9,0.1-55.7,0.1-83.6,0c-1.2,0-2.6-0.8-3.4-1.7c-1-1.2-0.4-2.7,0.4-3.9c3-4.5,6.1-9,9-13.5c1-1.5,2.2-2.1,3.9-2
                    c5.4,0.1,10.8,0,16.9,0c-3.3-1.2-6-2-8.7-3.1c-11-4.5-19.8-11.7-26.7-21.2c-0.9-1.3-1.8-1.8-3.4-1.8c-7,0.1-14,0-21.1,0v-19.5h63.4
                    V143.6z M112.5,37.9c-6.7-6.7-13.2-13.3-19.9-20C79.1,31.4,65.4,45,51.9,58.4c6.9,6.9,13.4,13.4,20.1,20.1c2.6-2.6,5.2-5.4,8-8.1
                    c1-1,1.2-1.8,0.7-3.2c-1.6-4.4-1.1-8.7,1-12.8c3.8-7.1,11.7-10.2,19.4-7.9c0.8,0.3,2.2,0.3,2.7-0.2
                    C106.9,43.6,109.7,40.7,112.5,37.9 M90.5,156c0.3,2,0.7,4.1,1,6.1c16.5-4.3,34-20.2,38.1-43c4-22.2-6.7-42.4-18-51.1
                    c-1.1,1.7-2.2,3.5-3.3,5.3C136,99.5,124.9,144.9,90.5,156 M38.8,184.3h72.4c-1.6-2.4-3-4.5-4.4-6.6c-0.6-1-1.4-1.4-2.6-1.4
                    c-6.7,0.1-13.3,0-20,0.1c-1.3,0-2.6,0.3-3.7,0.7c-3.7,1.2-7.3,1.3-11,0c-0.9-0.3-1.8-0.6-2.7-0.6c-7.1-0.1-14.3,0-21.4,0
                    c-0.6,0-1.4,0.3-1.7,0.7C42,179.3,40.5,181.7,38.8,184.3 M52.1,68.9c-5.3,5.3-10.8,10.7-16,15.9c3.2,3.2,6.4,6.5,9.4,9.4
                    c5.3-5.3,10.8-10.7,16.1-15.9C58.5,75.2,55.2,71.9,52.1,68.9 M56.9,130.7H6.5v6.3h50.4V130.7z M96.1,52.3c-5.3,0-9.7,4.4-9.7,9.7
                    c0,5.3,4.4,9.8,9.6,9.8c5.4,0.1,10-4.4,9.9-9.7C105.9,56.6,101.6,52.3,96.1,52.3 M75,151.8c-5.4,0-9.9,4.4-9.8,9.8
                    c0,5.3,4.4,9.7,9.7,9.7c5.4,0,9.9-4.4,9.9-9.8C84.7,156.3,80.3,151.8,75,151.8 M59.4,155.8c-7.2-2.4-13.4-6.3-18.8-11.5
                    c-0.3-0.3-0.7-0.6-1-0.6c-2.7,0-5.3,0-8.3,0c7.4,9.1,16.3,15.2,27.1,18.6C58.7,160.1,59.1,158.1,59.4,155.8 M115.9,8.4
                    c-3.8,3.8-7.6,7.6-11.3,11.2c2.1,2.1,4.2,4.3,6.2,6.3c3.7-3.7,7.6-7.5,11.4-11.3C120.1,12.6,118,10.4,115.9,8.4"/>
                  <rect x="14.7" y="111.1" class="st0" width="32.4" height="6.3"/>
                  <path class="st3" d="M96,65.3c-1.8-0.1-3.2-1.6-3.1-3.4c0.1-1.9,1.7-3.3,3.5-3.1c1.8,0.1,3.1,1.7,3,3.5C99.3,64,97.7,65.4,96,65.3"
                    />
                  <path class="st3" d="M78.2,161.5c0,1.8-1.4,3.3-3.1,3.3c-1.9,0.1-3.4-1.4-3.4-3.3c0-1.8,1.4-3.2,3.2-3.2
                    C76.7,158.3,78.2,159.8,78.2,161.5"/>
                </g>
                </svg>
                
              </div>
              <h2>ANALIZAMOS</h2>
              <p>la información obtenida para</p>
              <p>ir en búsqueda de la solución.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" data-src="{{ asset('img/fondo_4.jpg') }}" alt="Third slide [800x400]" src="{{ asset('img/fondo_4.jpg') }}" data-holder-rendered="true">
            <div class="carousel-caption d-none d-md-block">
              <div class="svg_imagen svg_imagen_1 wow zoomIn">
                <svg class='iconos_inicio_3' id="librito"  viewBox="0 0 137 191" >
                <g class='lines'>
                  <path class="st4" d="M51.9,0h1c0.3,0.2,0.7,0.4,1.1,0.5C73.7,5,93.5,9.5,113.3,14c5.8,1.3,7,4.6,3.1,9.2
                  c-14.5,17.1-29,34.2-43.4,51.4c-1.7,2.1-3.7,2.6-6.2,1.8c-6.4-1.9-12.7-3.9-19.1-5.8c-10.2-3.1-20.3-6.2-30.5-9.2
                  c-3.4-1-6.3,0.6-6.6,4c-0.2,2.1,0.1,4.3,0.4,6.4c0.3,2.1,1.6,3.2,3.7,3.8C32.4,80.9,50,86.3,67.7,91.9c2,0.6,3.1,0.2,4.4-1.4
                  c9.9-12.4,19.9-24.7,30-37c3.2-3.9,6.7-7.5,5.9-13.2c-0.2-1.3,0.5-2.8,1-4.1c0.3-0.9,1-1.8,1.7-2.3c1.7-1.2,3.6-1.4,5.4-0.3
                  c1.9,1.1,2.8,2.7,2.5,5c-0.3,2-0.4,4.1-0.5,6.1c-0.1,2,0.3,4.1-0.3,6c-1.9,6.5-2.3,12.9,0.3,19.3c1,2.5,0.6,4.7-1.1,6.7
                  c-13.3,16.2-26.7,32.5-40,48.7c-2.1,2.6-4.6,3.2-7.7,2.1c-17.4-5.6-34.8-11.1-52.2-16.7c-3.8-1.2-7.7-2-10.8-4.9
                  C0,100-1.6,89.6,2.5,81.7c0.7-1.3,0.7-2.2,0.1-3.6c-3.8-9.7-3.8-19.2,2.9-27.8c3.8-4.8,8.2-9.2,12.3-13.8c8.5-9.5,16.9-19,25.5-28.4
                  C45.8,5.3,49,2.7,51.9,0 M12,85.3c-2.3,4.2-2.3,8.2,0.2,12c0.6,1,1.8,1.8,2.9,2.1c17.8,5.8,35.7,11.5,53.6,17.2
                  c0.7,0.2,2.1-0.1,2.6-0.7c11.8-14.2,23.6-28.6,35.3-42.9c0.4-0.5,0.9-1.3,0.8-1.9c-0.3-2-0.9-3.9-1.5-6.2c-0.5,0.6-0.9,1-1.2,1.3
                  c-9.2,11.3-18.3,22.6-27.4,33.9c-2.7,3.4-4.5,3.9-8.7,2.6C49.9,96.9,31.1,91.2,12,85.3 M77.7,33.1c2.2,0.1,3.5-0.6,5.6-3.2
                  c3.3-3.9,3.3-4-1.8-5.3c-8.8-2.2-17.6-4.1-26.3-6.5c-4.4-1.2-7.5-0.6-10.1,3.3c-1.8,2.7-1.8,3.2,1.5,4c8,2,16,3.9,23.9,5.9
                  C73,32.1,75.5,32.6,77.7,33.1"/>
                </g>
                </svg>
                
              </div>
              <p>Conocimiento</p>
              <h2>Adquirimos el</h2>
              <p>por medio de soluciones prácticas</p>
              <p>a través de diferentes disciplinas</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" data-src="{{ asset('img/fondo_5.jpg') }}" alt="Third slide [800x400]" src="{{ asset('img/fondo_5.jpg') }}" data-holder-rendered="true">
            <div class="carousel-caption d-none d-md-block">
              <div class="svg_imagen_1 wow zoomIn">
                <svg class='iconos_inicio_3' id="manitas"  viewBox="0 0 137 191" >
                <g class='lines'>
                  <path class="st6" d="M61.8,98.7l-1.7-2.2c0,0,0,0,0,0L54.7,91c-0.8-0.7-1.5-1.5-2.2-2.3L48.7,85l-2.5-2.4c-0.4-0.3-0.7-0.7-1.2-1.1
                    c0,0,0,0,0,0l-1.7-1.7c-0.8-0.8-2.2-0.9-3.1-0.1c0,0,0,0,0,0c-1,0.9-1.1,2.4-0.1,3.4c5.5,5.5,10.7,10.7,15.9,15.9
                    c2.1,2.1,3.6,4.4,3.9,7.8c-4.2-4.1-8.1-7.8-11.9-11.6c-0.4-0.3-1-1.1-1.4-1.4c-1.1-1.1-2.3-1.3-3.2-0.1c-0.4,0.5,0.1,2.2,0.7,2.8
                    c5.2,5,10.5,9.9,15.7,14.8c-1.1,1.7-1.6,2.5-2.1,3.4c0.1-0.3,0.3-0.5,0.4-0.8c-5-4.7-10.1-9.3-15.1-14c-0.6-0.5-1-1.4-1.7-1.6
                    c-0.9-0.3-2-0.2-3-0.2c0.1,1-0.2,2.4,0.3,3c3.4,3.7,6.9,7.3,10.4,10.8c1.7,1.7,3.6,3.1,5.5,4.7c-2.4,2-3.8,2-5.4,0.2
                    c-4.1-4.4-8.3-8.6-12.5-12.8c-1-1.1-2.3-2.2-3.5-0.6c-0.5,0.6,0,2.6,0.6,3.3c3.7,4.1,7.6,7.9,11.8,12.2c-3.3,0.1-5.8-0.9-7.8-2.9
                    c-8.2-8-16.3-16-24.3-24.2c-3.3-3.4-4.1-7.7-3.4-12.2C11.4,70,21.8,63,30.8,65.4c2,0.5,3.9,1.6,5.5,3c2.3,2,5,4.5,7.4,7l0.4,0.5
                    c0.2,0.2,0.5,0.5,0.7,0.7l0,0l9.6,10c0.8,0.9,2.2,0.9,3.1,0l0,0c0.8-0.8,0.9-2.2,0-3l-9.9-10.4c-2.4-2.5-5-4.9-7.1-6.9
                    c-6.7-6.6-15.4-7.9-23.7-3.5c-12.1,6.2-17,23.5-5.4,33.8c7.5,6.7,14.2,14.2,21.4,21.1c1.9,1.8,4.3,3.4,6.8,4.4
                    c7,2.7,13,1.5,18.4-2.1c6.3-6.1,6.5-12.5,6.5-12.5C64.6,104,63.5,101.2,61.8,98.7"/>
                  <path class="st6" d="M79.8,45.2L79.3,48l0,0l-0.4,7.6c0,1.1-0.1,2.1-0.2,3.2l-0.3,5.4l-0.1,3.4c0,0.5,0,1,0,1.6c0,0,0,0,0,0
                    L78,71.6c0,1.2,0.8,2.2,2,2.4c0,0,0,0,0,0c1.3,0.2,2.6-0.8,2.6-2.2c0.4-7.7,0.7-15.1,1.1-22.5c0.1-2.9,0.8-5.6,3.2-8.1
                    c-0.2,5.8-0.4,11.2-0.6,16.7c0,0.5-0.1,1.5-0.1,2c-0.1,1.5,0.6,2.6,2.1,2.5c0.6-0.1,1.6-1.5,1.6-2.4c0.3-7.2,0.3-14.4,0.5-21.6
                    c2-0.3,3-0.5,3.9-0.7c-0.3,0.1-0.6,0.1-0.9,0.2c-0.1,6.9-0.2,13.7-0.3,20.6c0,0.8-0.4,1.7-0.1,2.3c0.4,0.9,1.2,1.6,1.8,2.4
                    c0.7-0.7,1.9-1.4,2-2.2c0.5-5,0.8-10,1-15c0.1-2.4-0.1-4.7-0.2-7.2c3.1,0.4,4,1.5,3.8,3.8c-0.5,6-0.8,11.9-1.1,17.9
                    c-0.1,1.5-0.1,3.2,1.9,3c0.8-0.1,1.9-1.7,2-2.7c0.5-5.5,0.8-11,1.2-16.9c2.3,2.4,3.2,4.9,3.1,7.7c-0.5,11.4-1,22.8-1.6,34.2
                    c-0.3,4.7-3,8.2-6.8,10.7c-7.8,5.3-20,2.4-24.2-6c-0.9-1.8-1.4-4-1.5-6c-0.1-3,0-6.7,0.2-10.2l0-0.6c0-0.3,0-0.7,0.1-1h0l1-13.8
                    c0.1-1.2-0.8-2.3-2.1-2.3c0,0,0,0,0,0c-1.2-0.1-2.2,0.8-2.3,2l-1.1,14.3c-0.3,3.4-0.3,7-0.4,9.9c-0.4,9.4,4.5,16.7,13.3,20
                    c12.7,4.8,28.8-3.1,28.7-18.7c0-10,1-20,1.3-30.1c0.1-2.6-0.3-5.5-1.3-7.9c-2.7-7-7.7-10.7-13.9-12.3c-8.7-0.5-13.7,3.5-13.7,3.5
                    C81.8,39.7,80.5,42.4,79.8,45.2"/>
                  <path class="st6" d="M61.8,5l-2.6,1l0,0l-6.8,3.5c-0.9,0.5-1.9,1-2.8,1.5l-4.8,2.5l-3,1.7c-0.4,0.2-0.9,0.5-1.4,0.8c0,0,0,0,0,0
                    l-2.1,1.2c-1,0.6-1.5,1.8-1,2.9l0,0c0.5,1.2,2,1.8,3.2,1.1c6.8-3.7,13.3-7.1,19.8-10.6c2.6-1.4,5.3-2.2,8.6-1.4
                    c-5.1,2.8-9.9,5.4-14.6,8c-0.4,0.2-1.3,0.7-1.8,0.9c-1.3,0.7-2,1.8-1,3.1c0.4,0.5,2.1,0.6,2.8,0.2c6.3-3.5,12.5-7.1,18.8-10.7
                    c1.3,1.5,1.9,2.3,2.6,3L75.1,13c-5.9,3.4-11.8,6.9-17.8,10.3c-0.7,0.4-1.6,0.6-2,1.1c-0.6,0.8-0.8,1.9-1.1,2.8
                    c1,0.2,2.2,0.9,2.9,0.5c4.5-2.1,9-4.4,13.4-6.8c2.1-1.1,4-2.6,6.1-3.9c1.2,2.9,0.8,4.2-1.4,5.2c-5.4,2.6-10.6,5.5-15.9,8.2
                    c-1.3,0.7-2.8,1.6-1.6,3.1c0.5,0.6,2.4,0.8,3.3,0.3c5-2.4,9.8-5,15.1-7.7c-0.9,3.2-2.6,5.3-5,6.6C61,38.4,51,43.8,40.9,49.1
                    c-4.2,2.2-8.5,1.7-12.7-0.3c-8.6-4-12.3-16-7.3-23.9c1.1-1.7,2.7-3.3,4.4-4.4c2.6-1.6,5.7-3.5,8.8-5l0.6-0.3
                    c0.3-0.2,0.6-0.3,0.9-0.5l0,0l12.3-6.2c1.1-0.5,1.5-1.9,0.9-3l0,0c-0.6-1-1.8-1.5-2.9-0.9l-12.8,6.4c-3.1,1.6-6.1,3.4-8.7,4.7
                    c-8.3,4.4-12,12.4-10.3,21.7c2.4,13.4,17.5,23.1,30.8,15c8.6-5.2,17.7-9.4,26.5-14.3c2.3-1.3,4.5-3.1,6.2-5.2
                    c4.6-5.9,5.2-12,3.4-18.2C77,7,71,4.9,71,4.9C67.6,3.9,64.6,4.2,61.8,5"/>
                </g>
                </svg>
                
              </div>
              <h2>Compartimos</h2>
              <p>la solución para en equipo</p>
              <p>optimizar los resultados.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>
  <!-- Galeria Inicio -->

  <div class="row align-content-center">
    <div class="col-12 align-items-center">
      <div class="wrap_porque">
        <div class="row">
          <div class="col-12 wow slideInLeft">
            <div class="titulo_porque align-self-center w-100">
              <h1>¿Por qué <span>Cali?</span></h1>
            </div>
            
          </div>
          <div data-wow-delay="0.5s" class="col-12 m-t-10 wow slideInLeft">
            <div class="texto_porque align-self-center">
              <p>El Colegio Cali se enfoca en el aprendizaje del
              individuo, que por sí mismo descubre e incorpora 
              el conocimiento para generar experiencias.</p>
            </div>
            
          </div>
          <div data-wow-delay="1s" class="col-12  m-t-10 wow slideInLeft">
            <div class="btn_ver_mas align-self-center">
              <a href="{{ url('acerca-cali') }}">VER MÁS</a>
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
              <div class="niveles_educativos wow zoomIn">
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
        </div>
      </div>
    </div>
  </div>
  <div class="row m-t-50  wow bounceInUp">
    <div class="col-12">
      <div class="video_testimonial">
        <video class='w-100' id='video_1' controls poster="{{ asset('img/poster_testi_1.jpg') }}">
          <source src='{{asset('video/colegio_cali.mp4') }}' type="video/mp4">
        </video>
      </div>
      <div class="pleca_testimonial">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et dapibus dui. </p>
      </div>
    </div>
  </div>
  <div class="row back_naranja p-t-100 p-b-100">
    <div class="col-12 col-sm-6">
      <div class="wrap_titulo_3 wow slideInLeft">
        <a href="{{ url('contacto') }}">
          <div class="titulo_3">
            <p>AGENDA</p>
            <p>TU VISITA</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-12 col-sm-6 align-middle wow slideInRight">
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
            <div class='wow zoomIn'>
              <img class='ico_cali' src="{{ asset('img/ico_cali.svg') }}" alt="">
              <p>Amplios salones.</p>
            </div>
          </div>
          <div data-wow-delay="0.5s" class="col-10 col-md-6  m-t-5">
            <div class="wow zoomIn">
              <img class='ico_cali' src="{{ asset('img/ico_cali.svg') }}" alt="">
              <p>Pizarrones Interactivos.</p>
            </div>

          </div>
          <div data-wow-delay="0.8s" class="col-10 col-md-6  m-t-5">
            <div class="wow zoomIn">
              <img class='ico_cali' src="{{ asset('img/ico_cali.svg') }}" alt="">
              <p>Biblioteca.</p>
            </div>

          </div>
          <div data-wow-delay="1.2s" class="col-10 col-md-6  m-t-5">
            <div class="wow zoomIn">
              <img class='ico_cali' src="{{ asset('img/ico_cali.svg') }}" alt="">
              <p>Canchas Deportivas.</p>
            </div>

          </div>
        </div>
        
      </div>
      <div class="pleca_final wow slideInLeft">
        <img src="{{ asset('img/pleca_final.svg') }}" alt="">
      </div>
    </div>
  </div>
<script src="{{ asset('js/anime.js') }}"></script>
<<<<<<< HEAD
<script>

var cookie = document.cookie;
  if (cookie.indexOf('visited=', 0) == -1) {
      var expiration = new Date();
      expiration.setDate(expiration.getDate()+1);
      document.cookie = 'visited=1;expires=' + expiration + ';path=/';

      var element = document.getElementById('galeria_magica');
      element.style.display = 'block';
  }


let clickVideo = document.querySelector('.video_testimonial');
let videoTesti = document.getElementById('video_1');
=======
>>>>>>> 4935ca693a16ddc6da0e60ebc7b160c3aac9bd74

@endsection
@section('cargarjs')
    <!-- flot charts scripts-->
    <script src="{{ asset('/js/welcome.js') }}"></script>
@stop