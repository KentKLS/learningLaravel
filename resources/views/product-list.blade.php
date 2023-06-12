@include('header')

<form action="/cart" method="POST">
    @csrf

    <section class="mainContainer">
        <div class="cardContainer">
            @foreach ($products as $product)

            <div class="productCard">
                <div class="cardImgContainer">
                    <img src=''>
                </div>
                <h3> {{$product->product_name}} </h3>
                <p> Prix : {{$product->product_price}} </p>
                <p>Poids : {{$product->product_weight}}g</p>
                <p> <a href="#">Fiche Produit</a> </p>
                <label for="numberOrdered[]">Quantité :</label>
                <input type="hidden" name="product[]" value="{{$product->product_name}}">
                <input type="number" class="numberInput" value="" min="0" max="99"
                    name="numberOrdered[]">
                <button class="addToCart">Ajoutez au panier</button>
            </div>
            @endforeach
        </div>

    </section>
</form>

@include('footer')
