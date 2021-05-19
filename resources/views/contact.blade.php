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
            <h2 class="title">Send us a message</h2>
            <div class="row">
                <div class="col-md-6">
                    <p class="description">You can contact us with anything related to our Products. We&apos;ll get in touch with you as soon as possible.
                        <br>
                        <br>
                    </p>
                    <form role="form" id="contact-form" method="post">
                        <div class="form-group">
                            <label for="name" class="bmd-label-floating">Your name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmails" class="bmd-label-floating">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmails">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="bmd-label-floating">Phone</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="form-group label-floating">
                            <label class="form-control-label bmd-label-floating" for="message"> Your message</label>
                            <textarea class="form-control" rows="6" id="message"></textarea>
                        </div>
                        <div class="submit text-center">
                            <input type="submit" class="btn btn-primary btn-raised btn-round" value="Contact Us">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 ml-auto">
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">pin_drop</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Find us at the office</h4>
                            <p> Bld Mihail Kogalniceanu, nr. 8,
                                <br> 7652 Bucharest,
                                <br> Romania
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">phone</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Give us a ring</h4>
                            <p> Michael Jordan
                                <br> +40 762 321 762
                                <br> Mon - Fri, 8:00-22:00
                            </p>
                        </div>
                    </div>
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
<script src="/vendor/frontend/assets/js/bootstrap-material-design.js"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script src="/vendor/frontend/assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="/vendor/frontend/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/vendor/frontend/assets/js/plugins/nouislider.min.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="/vendor/frontend/assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<script src="/vendor/frontend/assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="/vendor/frontend/assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--	Plugin for Small Gallery in Product Page -->
<script src="/vendor/frontend/assets/js/plugins/jquery.flexisel.js"></script>
<!-- Plugins for presentation and navigation  -->
<script src=/vendor/frontend/assets/assets-for-demo/js/modernizr.js"></script>
<script src="/vendor/frontend/assets/assets-for-demo/js/vertical-nav.js"></script>
<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="/vendor/frontend/assets/js/material-kit.js?v=2.0.1"></script>
<!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
<script src="/vendor/frontend/assets/assets-for-demo/js/material-kit-demo.js"></script>
<script>
    $().ready(function() {
        // the body of this function is in assets/material-kit.js
        materialKitDemo.initContactUsMap();
    });
</script>
</body>

</html>
