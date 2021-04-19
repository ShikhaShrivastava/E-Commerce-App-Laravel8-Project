<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}} -->
    <!-- @include('sweet::alert') -->

</body>
<style>
/* body{
    background:#f4f4f5;
} */
.custom-login{
    height:500px;
    padding:100px;
}
.brand-text{
   font-size: 25px;
   color:white;
   font-family:Apple Chancery,cursive;
   margin-bottom:20px;
}
.pricing-text{
    color:red;
    font-size:20px;
}
.badgess{
    background-color:red;
}
.orderss{
    background-color:green;
}
img.slider-img{
    height:400px !important;
}
.custom-product{
 height:800px;
}
.card-product-list,
 .card-product-grid {
     margin-bottom: 0
 }

 .card {
     position: relative;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-orient: vertical;
     -webkit-box-direction: normal;
     -ms-flex-direction: column;
     flex-direction: column;
     min-width: 0;
     margin:5px;
     padding:10px;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid rgba(0, 0, 0, 0.1);
     border-radius: 0.10rem;
     margin-top: 10px
 }
 .bottom-wrap
 {
     padding:5px;
 }
 .price-wrap{
    padding:5px;
  
 }
 .price-old{
     color:red;
 }
.slider-txt{
    color:#7E7E7E;
}
.slider-txt-desc{
    color:grey;
}
.trending-img{
    height:100px;
}
.trending-item
{
    float:left;
    width:20%;
}
.trending-wrapper{
    margin-top:30px;
}
.detail-img{
    height:200px;
}
.search-box{
    width :500px !important;
}
.has-search .form-control-feedback {
    right: initial;
    left: 0;
    color: #ccc;
}

.has-search .form-control {
    padding-right: 12px;
    padding-left: 34px;
}
.cart-list-space{
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom :20px;
}
.cart-size{
    font-size:25px;
}
.payment-method{
    color:darkblue;
    font-size:20px;

}
.login-form{
    border: 1px solid #ccc;
}
.header-size{
}
.continue-payment{
    width:180px;
    color:black;
}

/* footer */
@media (min-width: 1200px) {
    .container {
        width: 1248px !important
    }
}

body {
    overflow-x: hidden
}

.middleTop {
    margin-top:100px;
    padding: 72px 0;
    max-width: 1600px;
    min-width: 1024px;
    background-color: #000000db
}

.middle-heading {
    font-family: "font-bold";
    font-size: 14px;
    color: #fff;
    margin-left: 38px;
    padding-bottom: 15px;
    text-transform: uppercase
}

.middle-content {
    font-size: 12px;
    color: #777 !important;
    list-style-type: none;
    max-width: 210px
}

.middleContent-footer .middleTop div {
    box-sizing: border-box
}

.middleBottom {
    background-color: #000;
    text-align: center;
    border-top: 1px solid #e2e2e2;
    border-bottom: 1px solid #e2e2e2;
    padding: 12px 0
}

.middleBottomFooter {
    text-transform: uppercase;
    font-size: 14px;
    color: #344c55;
    text-align: left;
    background-color: #000
}

.underLineOnHover {
    color: #fff
}

.bottomfooter {
    background-color: #000
}

.copyright {
    color: #fff
}

.address {
    color: #fff
}

/* search */


.text-gray {
    color: #aaa
}



</style>
</html>