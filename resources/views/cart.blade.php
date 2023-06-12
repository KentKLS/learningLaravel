@include('header')
<div class="mainContainer contentIsCentered isFullPage">
    <div class="tableContainer">
        <form action="" method="POST">
            <table>
                <tr>
                    <th>Produit</th>
                    <th>Prix Unitaire</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th></th>
                </tr>

                <tr>
                    <td></td>
                    <td> </td>
                    <td>
                        <input class="numberInput" max="99" type="number" name="numberOrdered[]" min="0"
                            value="">
                    </td>
                    <td< /td>
                        <td>
                            <input type="hidden" name="product[]" value="">

                        </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total HT</td>
                    <td> </td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>TVA</td>
                    <td> %</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total TTC</td>
                    <td></td>
                </tr>

            </table>
            <button>Mettre à jour tableau</button>


    </div>




    <div class="horizontalDiv">
        <label for="transporter">Transporteur:</label>
        <select name="transporter">
            <option value="laPoste">La Poste</option>
            <option value="chronoPost">ChronoPost</option>
        </select>
        <button>VALIDER</button>

    </div>
    <table>
        <tr>

            <td>TRANSPORT</td>
            <td></td>

        </tr>
        <tr>

            <td>Total TTC</td>
            <td></td>

        </tr>

    </table>
    </form>
    <form action="" method="POST">
        <button>Vidé le panier</button>
        <input type="hidden" name="emptyCart" value="0">

    </form>
    <form action="" method="POST">
        <button>Validé Commande</button>
        <input type="hidden" name="orderPassed" value="0">

    </form>
</div>


@include('footer')
