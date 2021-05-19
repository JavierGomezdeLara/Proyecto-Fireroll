@include('header');

<div class="container" style="margin: 0 auto; margin-top: 4rem;">
    <div class="row d-flex flex-row mb-3">
        <div class="col-12 col-md-5 align-content-center justify-center text-center my-5">
            <div class="imageProductoContainer d-flex justify-content-center justify-content-sm-end">
                <img src="{{$producto->image}}" alt="a" class="img-fluid imagencarta ">
            </div>
        </div>
        <div class="col-12 col-md-6 my-5">
            <div class="container">
                <h2 class="col-12  tituloprod mb-4 itemIzq">{{$producto->name}}</h2>
                <h4 class="productTitle col-12  text-sm-left precio my-3  itemIzq">{{$producto->cost}} €</h4>
                <p class="dealer col-12  fs-5 my-3  itemIzq">Proveedor:&nbsp;&nbsp;&nbsp;&nbsp;{{$producto->dealer}}</p>
                <p class="dealer col-12 fs-5 my-3 itemIzq ">Descripcion:</p>
                <p class="productoDescription col-12 descripcion overflow-auto itemIzq fs-5 margen">"{{$producto->description}}"</p>

                <div class="col-12 text-center my-3">
                    <button class="purchase btn btn-secondary">Comprar</button>
                </div>
            </div>

        </div>
    </div>

</div>





@include('footer');
<style>
    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    @media screen and (max-width: 400px) {
        footer {
            position: relative;
        }
    }
</style>