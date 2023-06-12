@include('header')

<form action="/cart" method="POST">
    <section class="mainContainer">
        <div class="cardContainer">
            <div class="productCard">
                <div class="cardImgContainer">
                    <img src=''>
                </div>
                <h3> </h3>
                <p> Prix : </p>
                <p>Poids : g</p>
                <p>Price after % discount :</p>
                <label for="numberOrdered[]">Quantité :</label>
                <input type="hidden" name="product[]" value="">
                <input type="number" class="numberInput" value="" min="0" max="99"
                    name="numberOrdered[]">
                <button class="addToCart">Ajoutez au panier</button>
            </div>
        </div>
        <div class="containerFlexCentered">

        </div>
    </section>
</form>

@include('footer')
