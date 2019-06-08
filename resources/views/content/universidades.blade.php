@extends('layout.index')

@section('universidades')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/7.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">Universidades</h1>
                <p class="mb-0" data-aos="fade-up" data-aos-delay="100">Universidades licenciadas por la SUNEDU</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  


    
    

    <div class="site-section">
      <div class="container">
        <div class="row">

          <div class="col-md-8">

            <div class="row">


              @foreach($universidad as $uni)
              <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{$uni -> imagen}}" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="{{action('universidadesController@getUniversidad',$uni->nombre)}}">{{$uni -> nombre}}</a></h2>
                  <div class="meta mb-4">Distrito: {{$uni->distrito}} <span class="mx-2">&bullet;</span> <span class="mx-2">&bullet;</span> <a href="#">Entrar</a></div>
                </div> 
              </div>

              @endforeach



            </div>
            <div class="col-12 text-center mt-5">
              <p class="custom-pagination">
                {{ $universidad->links() }}
              </p>
            </div>
          </div>

          <div class="col-md-3 ml-auto">
            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Buscar Universidad</h3>
              <form action="#" method="post">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Busque una universidadd licenciada...">
                </div>
              </form>
            </div>

            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Universidades Populares</h3>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="#">PUCP</a></li>
                <li class="mb-2"><a href="#">UNMSM</a></li>
                <li class="mb-2"><a href="#">UNI</a></li>
                <li class="mb-2"><a href="#">UTEC</a></li>
              </ul>
            </div>

          </div>
          
        </div>
      </div>
    </div>

@endsection