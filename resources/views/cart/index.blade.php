@extends('layouts.app')

@section('scripts_css')

@endsection

@section('breadcrumb_title')
    Carrinho
@endsection

@section('content')
<!-- shopping-cart-area start -->
<div class="cart-main-area pb-80 gray-bg">
    <div class="container">
        <h3 class="page-title">Clique em finalizar compra para efetuar o seu pedido.</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Produto</th>
                                    <th></th>
                                    <th>Preço unitário</th>
                                    <th>Quantidade</th>
                                    <th>Subtotal</th>
                                    <th>Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/v1/img/cart/cart-3.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Interwoven Slip-on </a></td>
                                    <td class="product-price-cart"><span class="amount">$110.00</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$110.00</td>
                                    <td class="product-remove"><a href="#"><i class="ion-android-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/v1/img/cart/cart-4.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Interwoven Slip-on</a></td>
                                    <td class="product-price-cart"><span class="amount">$150.00</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$150.00</td>
                                    <td class="product-remove"><a href="#"><i class="ion-android-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/v1/img/cart/cart-5.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Interwoven Slip-on</a></td>
                                    <td class="product-price-cart"><span class="amount">$170.00</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$170.00</td>
                                    <td class="product-remove"><a href="#"><i class="ion-android-delete"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="#">Continuar comprando</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                  

                     <div class="col-lg-4">
                        <div class="discount-code-wrapper">
                            <h4 class="cart-bottom-title">Calcular Frete</h4>
                            <div class="discount-code">
                 
                                <form>
                                    <input type="text" required="" placeholder="Digite aqui o seu CEP" name="name">
                                    <button class="cart-btn-2" type="submit">Calcular</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="discount-code-wrapper">
                            <h4 class="cart-bottom-title">Cupom de Desconto</h4>
                            <div class="discount-code">
                                <form>
                                    <input type="text" required="" placeholder="Digite aqui o código do cupom" name="name">
                                    <button class="cart-btn-2" type="submit">Aplicar Desconto</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="grand-totall">
                            <span>Subtotal:   R$ 155,00</span>
                            <p>Frete: </p>
                            <p>Cupom: </p>
                            <h5>Total:   R$ 353,00</h5>
                            <a href="#">Finalizar compra</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts_js')

@endsection