<?php

require_once "config.php";
require_once "header.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Safira - cart page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->


    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

</head>

<body>


    <!--header area start-->

    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>

    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area" style="height:200px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="breadcrumb_content">
                        <h3>Cart</h3>
                        <ul>
                            <li><a href="{{url('/index')}}">home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="Checkout_section mt-70">
       <div class="container">
            <div class="row">
               <div class="col-lg-12">
                    <div class="user-actions">
                        <h3> 
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_login" aria-expanded="true">Click here to login</a>     

                        </h3>
                         <div id="checkout_login" class="collapse" data-parent="#accordion">
                            <div class="checkout_info">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>  
                                <form action="#">  
                                    <div class="form_group">
                                        <label>Username or email <span>*</span></label>
                                        <input type="text">     
                                    </div>
                                    <div class="form_group">
                                        <label>Password  <span>*</span></label>
                                        <input type="text">     
                                    </div> 
                                    <div class="form_group group_3 ">
                                        <button type="submit">Login</button>
                                        <label for="remember_box">
                                            <input id="remember_box" type="checkbox">
                                            <span> Remember me </span>
                                        </label>     
                                    </div>
                                    <a href="#">Lost your password?</a>
                                </form>          
                            </div>
                        </div>    
                    </div>
                    <div class="user-actions">
                        <h3> 
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_coupon" aria-expanded="true">Click here to enter your code</a>     

                        </h3>
                         <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                            <div class="checkout_info coupon_info">
                                <form action="#">
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </form>
                            </div>
                        </div>    
                    </div>    
               </div>
            </div>
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Billing Details</h3>
                            <div class="row">

                                <div class="col-lg-6 mb-20">
                                    <label>First Name <span>*</span></label>
                                    <input type="text">    
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>Last Name  <span>*</span></label>
                                    <input type="text"> 
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <label>Company Name</label>
                                    <input type="text">     
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <label for="country">country <span>*</span></label>
                                    <select class="select_option" name="cuntry" id="country"> 
                                        <option value="2">bangladesh</option>      
                                        <option value="3">Algeria</option> 
                                        <option value="4">Afghanistan</option>    
                                        <option value="5">Ghana</option>    
                                        <option value="6">Albania</option>    
                                        <option value="7">Bahrain</option>    
                                        <option value="8">Colombia</option>    
                                        <option value="9">Dominican Republic</option>   

                                    </select>
                                </div>

                                <div class="col-lg-12 mb-20">
                                    <label>Street address  <span>*</span></label>
                                    <input placeholder="House number and street name" type="text">     
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <input placeholder="Apartment, suite, unit etc. (optional)" type="text">     
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <label>Town / City <span>*</span></label>
                                    <input  type="text">    
                                </div> 
                                 <div class="col-lg-12 mb-20">
                                    <label>State / County <span>*</span></label>
                                    <input type="text">    
                                </div> 
                                <div class="col-lg-6 mb-20">
                                    <label>Phone<span>*</span></label>
                                    <input type="text"> 

                                </div> 
                                 <div class="col-lg-6 mb-20">
                                    <label> Email Address   <span>*</span></label>
                                      <input type="text"> 

                                </div> 
                                <div class="col-lg-12 mb-20">
                                    <input id="account" type="checkbox" data-target="createp_account" />
                                    <label for="account" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">Create an account?</label>

                                    <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                           <label> Account password   <span>*</span></label>
                                            <input placeholder="password" type="password">  
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <input id="address" type="checkbox" data-target="createp_account" />
                                    <label class="righ_0" for="address" data-toggle="collapse" data-target="#collapsetwo" aria-controls="collapseOne">Ship to a different address?</label>

                                    <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                       <div class="row">
                                            <div class="col-lg-6 mb-20">
                                                <label>First Name <span>*</span></label>
                                                <input type="text">    
                                            </div>
                                            <div class="col-lg-6 mb-20">
                                                <label>Last Name  <span>*</span></label>
                                                <input type="text"> 
                                            </div>
                                            <div class="col-lg-12 mb-20">
                                                <label>Company Name</label>
                                                <input type="text">     
                                            </div>
                                            <div class="col-lg-12 mb-20">
                                                <div class="select_form_select">
                                                    <label for="countru_name">country <span>*</span></label>
                                                    <select class="select_option" name="cuntry" id="countru_name"> 
                                                        <option value="2">bangladesh</option>      
                                                        <option value="3">Algeria</option> 
                                                        <option value="4">Afghanistan</option>    
                                                        <option value="5">Ghana</option>    
                                                        <option value="6">Albania</option>    
                                                        <option value="7">Bahrain</option>    
                                                        <option value="8">Colombia</option>    
                                                        <option value="9">Dominican Republic</option>   

                                                    </select>
                                                </div> 
                                            </div>

                                            <div class="col-lg-12 mb-20">
                                                <label>Street address  <span>*</span></label>
                                                <input placeholder="House number and street name" type="text">     
                                            </div>
                                            <div class="col-lg-12 mb-20">
                                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text">     
                                            </div>
                                            <div class="col-lg-12 mb-20">
                                                <label>Town / City <span>*</span></label>
                                                <input  type="text">    
                                            </div> 
                                             <div class="col-lg-12 mb-20">
                                                <label>State / County <span>*</span></label>
                                                <input type="text">    
                                            </div> 
                                            <div class="col-lg-6 mb-20">
                                                <label>Phone<span>*</span></label>
                                                <input type="text"> 

                                            </div> 
                                             <div class="col-lg-6">
                                                <label> Email Address   <span>*</span></label>
                                                  <input type="text"> 

                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="order-notes">
                                         <label for="order_note">Order Notes</label>
                                        <textarea id="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>    
                                </div>     	    	    	    	    	    	    
                            </div>
                        </form>    
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form action="#">    
                            <h3>Your order</h3> 
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> Handbag  fringilla <strong> × 2</strong></td>
                                            <td> $165.00</td>
                                        </tr>
                                        <tr>
                                            <td>  Handbag  justo	 <strong> × 2</strong></td>
                                            <td> $50.00</td>
                                        </tr>
                                        <tr>
                                            <td>  Handbag elit	<strong> × 2</strong></td>
                                            <td> $50.00</td>
                                        </tr>
                                        <tr>
                                            <td> Handbag Rutrum	 <strong> × 1</strong></td>
                                            <td> $50.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td>$215.00</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td><strong>$5.00</strong></td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <td><strong>$220.00</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>     
                            </div>
                            <div class="payment_method">
                               <div class="panel-default">
                                    <input id="payment" name="check_method" type="radio" data-target="createp_account" />
                                    <label for="payment" data-toggle="collapse" data-target="#method" aria-controls="method">Create an account?</label>

                                    <div id="method" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                           <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div> 
                               <div class="panel-default">
                                    <input id="payment_defult" name="check_method" type="radio" data-target="createp_account" />
                                    <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="assets/img/icon/papyel.png" alt=""></label>

                                    <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                           <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="order_button">
                                    <button  type="submit">Proceed to PayPal</button> 
                                </div>    
                            </div> 
                        </form>         
                    </div>
                </div> 
            </div> 
        </div>       
    </div>
    <!--shopping cart area end -->

    <!--footer area start-->
    <?php

require_once "footer.php";
?>
    <!--footer area end-->

    <!-- JS
============================================ -->
    <!--jquery min js-->
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <!--popper min js-->
    <script src="assets/js/popper.js"></script>
    <!--bootstrap min js-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--owl carousel min js-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--slick min js-->
    <script src="assets/js/slick.min.js"></script>
    <!--magnific popup min js-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--counterup min js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--jquery countdown min js-->
    <script src="assets/js/jquery.countdown.js"></script>
    <!--jquery ui min js-->
    <script src="assets/js/jquery.ui.js"></script>
    <!--jquery elevatezoom min js-->
    <script src="assets/js/jquery.elevatezoom.js"></script>
    <!--isotope packaged min js-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--slinky menu js-->
    <script src="assets/js/slinky.menu.js"></script>
    <!--instagramfeed menu js-->
    <script src="assets/js/jquery.instagramFeed.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>



</body>

</html>