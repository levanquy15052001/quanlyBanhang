@extends('layout.master')

@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Order</h6>
        </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content">
        
        <div class="table-responsive">
            <!-- Shop Products Table -->
            <table class="shop_table beta-shopping-cart-table" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-name">Product</th>
                        <th class="product-quantity">Price</th>
                        <th class="product-quantity">Qty.</th>
                        <th class="product-subtotal">Total</th>
                        <th class="product-remove">Remove</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr class="cart_item">
                        <td class="product-name">
                            <div class="media">
                                <img class="pull-left" src="assets/dest/images/shoping1.jpg" alt="">
                                <div class="media-body">
                                    <p class="font-large table-title">Men’s Belt</p>
                                    <p class="table-option">Color: Red</p>
                                    <p class="table-option">Size: M</p>
                                    <a class="table-edit" href="#">Edit</a>
                                </div>
                            </div>
                        </td>
                        <td class="product-subtotal">
                            <span class="amount">$235.00</span>
                        </td>
                        <td class="product-quantity">
                          <input type="number" name="qty">
                        </td>

                        <td class="product-subtotal">
                            <span class="amount">$235.00</span>
                        </td>

                        <td class="product-remove">
                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td colspan="3" class="product-status">
                            Total
                        </td>
                        <td class="product-subtotal">
                            <span class="amount">$235.00</span>
                        </td>
                        <td ><a href="" class="btn btn-primary"> Checkout</a></td>
                    </tr> 
                </tbody>
            </table>
            <!-- End of Shop Table Products -->
        </div>

        <!-- End of Cart Collaterals -->
        <div class="clearfix"></div>

    </div> <!-- #content -->
</div> <!-- .container -->
@endsection