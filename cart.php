<?php
$page_title = 'Cart';
$pgDesc = 'Shopping cart page';
$keyWords = 'Keywords here';

include ('header.php');
?>

<!-- Main Body -->
<main>
    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col"><h4><b>Shopping Cart Example</b></h4></div>
                        <div class="col align-self-center text-right text-muted">3 items</div>
                    </div>
                </div>    
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="/pictures/Moon.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Moon</div>
                            <div class="row">8x10</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">&dollar; 85.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="/pictures/Below.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Below</div>
                            <div class="row">12x12</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">&dollar; 175.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="/pictures/Rainier_590x.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Rainier</div>
                            <div class="row">6x8</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">&dollar; 65.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
            </div>
            <div class="col-md-4 summary">
                <div><h5><b>Summary</b></h5></div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">ITEMS 3</div>
                    <div class="col text-right">&dollar; 325.00</div>
                </div>
                <form>
                    <p>SHIPPING</p>
                    <select><option class="text-muted">FedEx-Delivery- &dollar;35.00</option></select>
                    <p>GIVE CODE</p>
                    <input id="code" placeholder="Enter your code">
                </form>
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right">&dollar; 360.00</div>
                </div>
                <button class="btn btn-dark">CHECKOUT</button>
            </div>
        </div>
        
    </div>
  </main>

<!-- End of Main Body -->

<?php
include('footer.php');
?>