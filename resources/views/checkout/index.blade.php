@extends('layouts.app')

@section('scripts_css')

@endsection

@section('breadcrumb_title')
    Checkout
@endsection

@section('content')
<!-- shopping-cart-area start -->
<div class="checkout-area pb-50 gray-bg">
    <div class="container">
        <h3 class="page-title">Finalizando compra</h3>
        <div class="row">
            <div class="col-lg-9">
                <div class="checkout-wrapper">
                    <div id="faq" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>1</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-1">Checkout method</a></h5>
                            </div>
                            <div id="payment-1" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="checkout-register">
                                                <h5 class="checkout-sub-title">great an account</h5>
                                                <p>Please enter your email address to create an account</p>
                                                <form>
                                                    <label> Email Address </label>
                                                    <input type="email" name="email">
                                                    <button class="checkout-btn" type="submit">Great An Account</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="checkout-login">
                                                <h5 class="checkout-sub-title">login</h5>
                                                <form>
                                                    <div class="login-form">
                                                        <label> Email Address </label>
                                                        <input type="email" name="email">
                                                    </div>
                                                    <div class="login-form">
                                                        <label> Password </label>
                                                        <input type="email" name="email">
                                                    </div>
                                                </form>
                                                <div class="login-forget">
                                                    <button class="checkout-btn" type="submit">Login</button>
                                                    <a href="#">Forgot your password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>2</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-2">billing information</a></h5>
                            </div>
                            <div id="payment-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="billing-information-wrapper">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>First Name</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Last Name</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Company</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Email Address</label>
                                                    <input type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="billing-info">
                                                    <label>Address</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>city</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>State/Province</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Zip/Postal Code</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-select expiration-mrg">
                                                    <label>Country</label>
                                                    <select>
                                                        <option value="1">United State</option>
                                                        <option value="2">Azerbaijan</option>
                                                        <option value="3">Bahamas</option>
                                                        <option value="4">Bahrain</option>
                                                        <option value="5">Bangladesh</option>
                                                        <option value="6">Barbados</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Telephone</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Fax</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ship-wrapper">
                                            <div class="single-ship">
                                                <input type="radio" name="address" value="address" checked="">
                                                <label>Ship to this address</label>
                                            </div>
                                            <div class="single-ship">
                                                <input type="radio" name="address" value="dadress">
                                                <label>Ship to different address</label>
                                            </div>
                                        </div>
                                        <div class="billing-back-btn">
                                            <div class="billing-back">
                                                <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                                            </div>
                                            <div class="billing-btn">
                                                <button type="submit">Get a Quote</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>3</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-3">shipping information</a></h5>
                            </div>
                            <div id="payment-3" class="panel-collapse collapse ">
                                <div class="panel-body">
                                    <div class="shipping-information-wrapper">
                                        <div class="shipping-info-2">
                                            <span>HasTech</span>
                                            <span>Bonosrie</span>
                                            <span>D - Block</span>
                                            <span>Dkaka, 1201</span>
                                            <span>Bangladesh</span>
                                            <span>T: +8800 879 9876 </span>
                                        </div>
                                        <div class="edit-address">
                                            <a href="#">Edit Address</a>
                                        </div>
                                        <div class="billing-select">
                                            <select class="email s-email s-wid">
                                                <option>Select Your Address</option>
                                                <option>Add New Address</option>
                                                <option>Boot Experts</option>
                                            </select>
                                        </div>
                                        <div class="ship-wrapper">
                                            <div class="single-ship">
                                                <input type="checkbox" checked="" value="address" name="address">
                                                <label>Use Billing Address</label>
                                            </div>
                                        </div>
                                        <div class="billing-back-btn">
                                            <div class="billing-back">
                                                <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                                            </div>
                                            <div class="billing-btn">
                                                <button type="submit">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>4</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-4">Shipping method</a></h5>
                            </div>
                            <div id="payment-4" class="panel-collapse collapse ">
                                <div class="panel-body">
                                    <div class="shipping-method-wrapper">
                                        <div class="shipping-method">
                                            <p>Flat Rate</p>
                                            <p>Fixed $40.00</p>
                                        </div>
                                        <div class="billing-back-btn">
                                            <div class="billing-back">
                                                <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                                            </div>
                                            <div class="billing-btn">
                                                <button type="submit">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>5</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-5">payment information</a></h5>
                            </div>
                            <div id="payment-5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="payment-info-wrapper">
                                        <div class="ship-wrapper">
                                            <div class="single-ship">
                                                <input type="radio" checked="" value="address" name="address">
                                                <label>Check / Money order </label>
                                            </div>
                                            <div class="single-ship">
                                                <input type="radio" value="dadress" name="address">
                                                <label>Credit Card (saved) </label>
                                            </div>
                                        </div>
                                        <div class="payment-info">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>Name on Card </label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-select expiration-mrg">
                                                        <label>Credit Card Type</label>
                                                        <select>
                                                            <option>American Express</option>
                                                            <option>Visa</option>
                                                            <option>MasterCard</option>
                                                            <option>Discover</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Credit Card Number </label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="expiration-date">
                                                <label>Expiration Date </label>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-select expiration-mrg">
                                                            <select>
                                                                <option>Month</option>
                                                                <option>January</option>
                                                                <option>February</option>
                                                                <option> March</option>
                                                                <option>April</option>
                                                                <option> May</option>
                                                                <option>June</option>
                                                                <option>July</option>
                                                                <option>August</option>
                                                                <option>September</option>
                                                                <option> October</option>
                                                                <option> November</option>
                                                                <option> December</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-select">
                                                            <select>
                                                                <option>Year</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                                <option>2021</option>
                                                                <option>2022</option>
                                                                <option>2023</option>
                                                                <option>2024</option>
                                                                <option>2025</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Card Verification Number</label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="billing-back-btn">
                                            <div class="billing-back">
                                                <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                                            </div>
                                            <div class="billing-btn">
                                                <button type="submit">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>6</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-6">Order Review</a></h5>
                            </div>
                            <div id="payment-6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="order-review-wrapper">
                                        <div class="order-review">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="width-1">Product Name</th>
                                                            <th class="width-2">Price</th>
                                                            <th class="width-3">Qty</th>
                                                            <th class="width-4">Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="o-pro-dec">
                                                                    <p>Fusce aliquam</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-price">
                                                                    <p>$236.00</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-qty">
                                                                    <p>2</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-subtotal">
                                                                    <p>$236.00</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="o-pro-dec">
                                                                    <p>Primis in faucibus</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-price">
                                                                    <p>$265.00</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-qty">
                                                                    <p>3</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-subtotal">
                                                                    <p>$265.00</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="o-pro-dec">
                                                                    <p>Etiam gravida</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-price">
                                                                    <p>$363.00</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-qty">
                                                                    <p>2</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-subtotal">
                                                                    <p>$363.00</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="o-pro-dec">
                                                                    <p>Quisque in arcu</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-price">
                                                                    <p>$328.00</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-qty">
                                                                    <p>2</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-subtotal">
                                                                    <p>$328.00</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="3">Subtotal </td>
                                                            <td colspan="1">$4,001.00</td>
                                                        </tr>
                                                        <tr class="tr-f">
                                                            <td colspan="3">Shipping & Handling (Flat Rate - Fixed</td>
                                                            <td colspan="1">$45.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">Grand Total</td>
                                                            <td colspan="1">$4,722.00</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="billing-back-btn">
                                                <span>
                                                    Forgot an Item?
                                                    <a href="#"> Edit Your Cart.</a>

                                                </span>
                                                <div class="billing-btn">
                                                    <button type="submit">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="checkout-progress">
                    <h4>Checkout Progress</h4>
                    <ul>
                        <li>Billing Address</li>
                        <li>Shipping Address</li>
                        <li>Shipping Method</li>
                        <li>Payment Method</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts_js')

@endsection