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
                            <h4 class="info-title">İzmit Merkez</h4>
                            <p> Alemdar Cad. Beyaz Han Is Merkezi
                                <br> (4 Yol Ziraat Bank. Üstü),
                                <br> No:21 Kat:2 İzmit/KOCAELI
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">phone</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Telefon</h4>
                            <p> (262) 322 8164 - (262) 322 8166
                                <br> GSM : +90 535 047 07 05
                                <br> Faks : +90 262 322 8136
                                <br />
                                <a href="tel:+905350470705">
                                    <button class="btn btn-primary btn-round">
                                        <i class="material-icons">call</i> BİZİ ARAYIN
                                    </button>
                                </a>
                            </p>

                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">business_center</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Şirket Bilgileri</h4>
                            <p> ERC İşitme
                                <br> VAT &#xB7; EN2341241
                                <br> IBAN &#xB7; EN8732ENGB2300099123
                                <br> Bank &#xB7; Great Britain Bank
                            </p>
                        </div>
                    </div>
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
        // the body of this function is in assets/material-kit.js
        materialKitDemo.initContactUsMap();
    });
</script>
</body>

</html>
