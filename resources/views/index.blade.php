<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/2817974b50.js" crossorigin="anonymous"></script>
  <title>Fireroll-inicio</title>
</head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<body>
  @include('header')
  <!-- Body -->
  <main>
    <div class="container">
      <div class="row inicio d-flex">
        <div class="col-md-6 col-12  descripcion d-flex align-items-center text-center columnaTextoinicio">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro rerum minima a eius, facere reiciendis, distinctio explicabo excepturi, dolores vel iste totam. Soluta obcaecati ipsam incidunt, dolor reiciendis voluptatibus temporibus.</p>
        </div>
        <div class="col-md-6 col-12 imgInicio d-flex align-items-center">
          <img src="{{asset('img/dados.jpg')}}" class="img-fluid dados">
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row text-center mb-0 mb-lg-5 ">
        <!-- Card 1 -->
        <div class="col-12 col-md-6 col-xl-3 d-flex align-items-stretch overflow-auto ">
          <div class="card border bordecarta shadow mb-5  w-100 margenizq">
            <div class="card-body py-5 px-xxl-5 text-center ">
              <div class="mb-3">
                <span><i class="fas fa-dice-d20 dado"></i></span>
              </div>
              <h3 class="h4">¿Por que usar nuestra página?</h3>
              <p class="m-0">Gracias a nuestra página, puedes encontrar una campaña perfecta para tí en poco tiempo</p>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-12 col-md-6 col-xl-3 d-flex align-items-stretch overflow-auto">
          <div class="card border bordecarta shadow mb-5  w-100">
            <div class="card-body py-5 px-xxl-5 text-center">
              <div class="mb-3">
                <span><i class="fas fa-dice-d20 dado"></i></span>
              </div>
              <h3 class="h4">Conoce gente nueva</h3>
              <p class="m-0">Puedes conocer a mucha gente con la que compartir buenos ratos</p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-12 col-md-6 col-xl-3 d-flex align-items-stretch overflow-auto">
          <div class="card border bordecarta shadow mb-5  w-100">
            <div class="card-body py-5 px-xxl-5 text-center ">
              <div class="mb-3">
                <span><i class="fas fa-dice-d20 dado"></i></span>
              </div>
              <h3 class="h4">Búsquedas personalizadas</h3>
              <p class="m-0">¡Gracias a nuestra página, podrás conocer gente para jugar a campañas que se adapten justo a tus necesidades!</p>
            </div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="col-12 col-md-6 col-xl-3 d-flex align-items-stretch">
          <div class="card border bordecarta shadow mb-5  w-100 margender">
            <div class="card-body py-5 px-xxl-5 text-center">
              <div class="mb-3">
                <span><i class="fas fa-dice-d20 dado"></i></span>
              </div>
              <h3 class="h4">Personalízate a tu gusto</h3>
              <p class="m-0">Personaliza tu perfil como tu quieras para tener una buena presentación ante la gente</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Swiper -->
    <div class="container-fluid text-">
      <div class="row fondoTest d-flex text-center">
        <div class="col-md-12 my-5">
          <div class="swiper-container d-flex justify-content-center">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonios">
                  <div class="autor d-flex flex-column">
                    <img src="{{asset('img/Loquero.jpg')}}" class="rounded-circle b-shadow-a img-fluid personitas mx-auto">
                    <span class="autor">El Loquero</span>
                  </div>
                  <div class="contenidoAutor">
                    <p class="testimonio">La pagina esta mu bien en verda ta wapa wapa to chula chula</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonios">
                  <div class="autor d-flex flex-column">
                    <img src="{{asset('img/Santo.jpg')}}" class="rounded-circle b-shadow-a img-fluid personitas mx-auto">
                    <span class="autor">El Demente</span>
                  </div>
                  <div class="contenidoAutor">
                    <p class="testimonio">Lorem ipsum dolor sit amet consectetur adipisicing elit. At ratione sint nesciunt dolorem recusandae numquam quo quos debitis temporibus fugiat odit, officia expedita, fugit nobis tempore dicta blanditiis error. In.</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonios">
                  <div class="autor d-flex flex-column">
                    <img src="{{asset('img/Mago.png')}}" class="rounded-circle b-shadow-a img-fluid personitas mx-auto">
                    <span class="autor">Mago supremo</span>
                  </div>
                  <div class="contenidoAutor">
                    <p class="testimonio">Esta pagina me ha permitido poder juntarme con gente nueva y poder por fin tener un grupo de personas con las que jugar de manera frecuente a rol</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonios">
                  <div class="autor d-flex flex-column">
                    <img src="{{asset('img/Mecanico.png ')}}" class="rounded-circle b-shadow-a img-fluid personitas mx-auto">
                    <span class="autor">El maestro técnico</span>
                  </div>
                  <div class="contenidoAutor">
                    <p class="testimonio">Esta bien esta bien Javier.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Juegos y sistemas -->
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="titulo text-center mb-5">
            <h3>Unete a jugadores para disfrutar de tus sistemas favoritos</h3>
          </div>
        </div>
      </div>
      <div class="row logos align-items-center  justify-content-around ">
        <div class="logoContainer px-2 px-lg-3 border-bottom text-center">
        <div class="row d-flex justify-content-center">
        <a href="#"   class="mx-3 col-12 col-md-2"><img src="{{asset('img/dd.png')}}" class="img-fluid logo"></a>
          <a href="#" class="mx-3 col-12 col-md-2"><img src="{{asset('img/Pathfinder.png')}}" class="img-fluid logo"></a>
          <a href="#" class="mx-3 col-12 col-md-2"><img src="{{asset('img/chinu.png')}}" class="img-fluid logo"></a>
          <a href="#" class="mx-3 col-12 col-md-2"><img src="{{asset('img/BurnBryte.png')}}" class="img-fluid logo"></a>
        </div>
          
        </div>
        <div class="logoContainer px-2 px-lg-3 text-center">
        <div class="row d-flex justify-content-center">
          <a href="#" class="mx-4 col-12 col-md-2"><img src="{{asset('img/FATE-Core.png')}}" class="img logo"></a>
          <a href="#" class="mx-4 col-12 col-md-2 mt-sm-0 mt-5"><img src="{{asset('img/Okinawaa.png')}}" class="img logo align-content-middle"></a>
          <!-- Damn -->
          <a href="#" class="mx-4 col-12 col-md-2"><img src="{{asset('img/Forehead.png')}}" class="img logo"></a></div>
        </div>
      </div>
    </div>
  </main>
 @include('footer')
</body>
<!-- Imports de los scripts y funcion del Swiper -->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
</html>