@extends('layout.index')

@section('inicio')

<div class="site-blocks-cover overlay" style="background-image:  url(images/1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">¡Bienvenido a Unindex, el buscador de universidades! <span class="typed-words"></span></h1>
                <p data-aos="fade-up" data-aos-delay="100"><b> Empieza a buscar universidades licenciadas por SUNEDU en Lima Metropolitana</b></p>
              </div>
            </div>

            <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
              
              <form action="{{route('uni','buscar')}}" method="post">
                {{csrf_field()}}
                <div class="row align-items-center">
                  <div class="col-lg-12 col-xl-10 no-sm-border border-right">
                    <div class="select-wrap">
                        <select class="form-control" name="universidades" id="universidades">
                          <option value="" >-- Seleccionar universidad --</option>
                          @foreach($nombres as $nombre)
                             <option value="{{ $nombre -> nombre }}"><a href="{{route('uni',$nombre->nombre)}}">{{ $nombre -> nombre }}</a></option>
                          @endforeach
                        </select>
                      <span class="icon icon-room"></span></span>
                    </div>   
                  </div>
              
                  <div class="col-lg-13 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn btn-primary" value="Buscar">
                  </div>
                </div>
                  
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>  


    
    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Universidades</h2>
            <p class="color-black-opacity-5">Visualiza las universidades licenciadas por  SUNEDU </p>
          </div>
        </div>

        <div class="row">

          @foreach($universidades_mos as $mos)
          <div class="col-md-6 mb-4 mb-lg-4 col-lg-4" >
            <div class="listing-item" >
              <div class="listing-image">
               <img src="{{$mos -> imagen}}" alt="Image" class="img-fluid" >
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category">Universidad</a>
                <h2 class="mb-1"><a href="{{route('uni',$mos->nombre)}}">{{$mos -> nombre}}</a></h2>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>
    </div>

           <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
        <a href="{{route('universidad')}}">
        <button type="button" class="btn btn-primary btn-lg">Ver más</button>
      </a>
          </div>
        </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="images/3.jpeg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-3">¿Por qué estudiar en una universidad licenciada?</h2>
            <p>Estudiar en una universidad licenciada brinda confianza, credibilidad y garantía a los estudiantes y les asegura que la institución cuenta con las mejores condiciones académicas, de infraestructura y de proyección laboral, para beneficio de los futuros profesionales</p>

            <ul class="ul-check list-unstyled success">
              <li>La SUNEDU sienta las bases para mejorar la empleabilidad de los jóvenes, señaló Lorena Masías, Superintendente de la institución.</li>
              <li>El licenciamiento permite que el estudiante egresado se convierta en una opción elegible para las empresas privadas e instituciones públicas que solicitan personal.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    



    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Noticias</h2>
            <p class="color-black-opacity-5">Entérate de las ultimas noticias sobre las universidades licensiadas</p>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/4.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">UPC</a></h2>
              <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">El Comercio</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/5.jpeg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">PUCP</a></h2>
              <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">Peru 21</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    @if(Session::has('user_name'))
        <div class="site-section bg-light">
          <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
              <h2 class="font-weight-light text-primary">¿Cómo podemos mejorar tu experiencia?</h2>
              <p class="color-black-opacity-5">Realiza tu sugerencia para mejorar nuestro sistema web</p>
            </div>
          </div>
          <div class="container ">
            <div class="row justify-content-center mb-5">
              <div class="col-md-8 mb-5 "  data-aos="fade">
  
                <form action="{{route('sugerencia')}}" method="post" class="p-4 bg-white">
                  {{csrf_field()}}
                  <div class="row form-group">
                    <div class="col-md-12"> 
                      <textarea name="mensaje" id="message" cols="30" rows="7" class="form-control" placeholder="Escribe aquí tu sugerencia.."></textarea>
                    </div>
                  </div>
  
                  <div class="row form-group">
                    <div class="col-md-12">
                      <input type="submit" value="Enviar" class="btn btn-primary py-2 px-4 text-white">
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      @else
      

      <div class="py-5 bg-primary">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-2 text-white">Realiza sugerencias y visualiza el ranking de las universidades de Lima.</h2>
            <p class="mb-4 lead text-white-opacity-05">Puedes acceder como invitado o registrarte con tu correo electrónico</p>
            <p class="mb-0"><a href="{{route('login')}}" class="btn btn-outline-white text-white btn-md font-weight-bold">Acceder</a></p>
          </div>
        </div>
      </div>
    </div>
    @endif
  </div>


@endsection
