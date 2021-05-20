<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" href="/vendor/frontend/assets/img/apple-icon.png">
    <link rel="icon" href="/vendor/frontend/assets/img/favicon.png">
    <title>
        ERC İşitme Cihazları Merkezi - İzmit - Kocaeli
    </title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/vendor/frontend/assets/css/material-kit.css?v=2.0.1">
    <link href="/vendor/frontend/assets/assets-for-demo/demo.css" rel="stylesheet" />
    <link href="/vendor/frontend/assets/assets-for-demo/vertical-nav.css" rel="stylesheet" />
</head>

<body class="contact-us ">

@include('partials.nav')

<div id="contactUsMap" class="big-map"></div>
<div class="main main-raised">
    <div class="contact-content">
        <div class="container">
            <h3 class="title">Bize Ulaşın</h3>
            <div class="row">
                <div class="col-md-6">
                    <p class="description">Ürünlerimizle ilgili her konuda ve Randevu Talebi için bize ulaşabilirsiniz.
                        <br>
                        <br>
                    </p>
                    <form role="form" id="contact-form" method="post">
                        <div class="form-group">
                            <label for="name" class="bmd-label-floating">İsminiz</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmails" class="bmd-label-floating">Email adresiniz</label>
                            <input type="email" class="form-control" id="exampleInputEmails">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="bmd-label-floating">Phone</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="form-group label-floating">
                            <label class="form-control-label bmd-label-floating" for="message"> Mesajınız</label>
                            <textarea class="form-control" rows="6" id="message"></textarea>
                        </div>
                        <div class="submit text-center">
                            <input type="submit" class="btn btn-primary btn-raised btn-round" value="Gönder">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 ml-auto">
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">pin_drop</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Plus Şube</h4>
                            <p> Cedit Mahallesi Bostanlar Sokak No:10
                                <br> Kat:1 D:2 (Kocaeli Devlet Hastanesi çaprazı)
                                <br> İzmit/KOCAELI
                            </p>
                        </div>

                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">phone</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Telefon</h4>
                            <p> (0262) 323 13 24
                                <br> +90 (535) 047 07 06

                            </p>
                        </div>
                    </div>
                    <!--
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">business_center</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Legal Information</h4>
                            <p> Creative Tim Ltd.
                                <br> VAT &#xB7; EN2341241
                                <br> IBAN &#xB7; EN8732ENGB2300099123
                                <br> Bank &#xB7; Great Britain Bank
                            </p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')
<!--   Core JS Files   -->
<script src="/vendor/frontend/assets/js/core/jquery.min.js"></script>
<script src="/vendor/frontend/assets/js/core/popper.min.js"></script>
<script src="/vendor/frontend/assets/js/bootstrap-material-design.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpq4oTE9-rag114JHqO7H5x7eAmcLqOs4"></script>
<script src="/vendor/frontend/assets/js/plugins/moment.min.js"></script>
<script src="/vendor/frontend/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="/vendor/frontend/assets/js/plugins/nouislider.min.js"></script>
<script src="/vendor/frontend/assets/js/plugins/bootstrap-selectpicker.js"></script>
<script src="/vendor/frontend/assets/js/plugins/bootstrap-tagsinput.js"></script>
<script src="/vendor/frontend/assets/js/plugins/jasny-bootstrap.min.js"></script>
<script src="/vendor/frontend/assets/js/plugins/jquery.flexisel.js"></script>
<script src="/vendor/frontend/assets/assets-for-demo/js/modernizr.js"></script>
<script src="/vendor/frontend/assets/assets-for-demo/js/vertical-nav.js"></script>
<script src="/vendor/frontend/assets/js/material-kit.js?v=2.0.1"></script>
<script src="/vendor/frontend/assets/assets-for-demo/js/material-kit-demo.js"></script>
<script>
    $().ready(function() {
        var myLatlng = new google.maps.LatLng(40.766178, 29.937746);
        var mapOptions = {
            zoom: 15,
            center: myLatlng,
            styles:
                [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}],
            scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
        };
        var map = new google.maps.Map(document.getElementById("contactUsMap"), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            title:"Hello World!"
        });
        marker.setMap(map);
    });
</script>
</body>

</html>
