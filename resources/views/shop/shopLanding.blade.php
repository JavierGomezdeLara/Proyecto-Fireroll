@include('header')

<!-- Sidebar -->
<div class="container-fluid mt-3">
  <div class="row  text-center ">
    @include('sidebar')
    <div class="container">
      <div class="row">
        @foreach ($productos as $articulo)
        <div class="col-12 mb-4 col-md-4 col-sm-6 my-5 my-sm-0 mb-sm-3">
          <div class="card position-relative top-50 start-50 translate-middle" style="width: 18rem;">
            <a href="{{$articulo->image}}">
              <img class="card-img-top imagencarta" src="{{$articulo->image}}" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">{{$articulo->name}}</h5>
              <p class="card-text">{{$articulo->description}}</p>
              <h4 class="card-text">{{$articulo->cost}}</h4>
              <form action="{{route('productDetail')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$articulo->id}}">
                <input type="submit" value="Comprar">
              </form>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </div>
</div>

@include('footer')

</div>

<script>
  $(document).ready(function() {
    var trigger = $('.hamburger'),
      overlay = $('.overlay'),
      isClosed = false;

    trigger.click(function() {
      hamburger_cross();
    });

    function hamburger_cross() {

      if (isClosed == true) {
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
    }

    $('[data-toggle="offcanvas"]').click(function() {
      $('#wrapper').toggleClass('toggled');
    });
  });
</script>