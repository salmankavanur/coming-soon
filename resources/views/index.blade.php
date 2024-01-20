<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken Theme">
    <!-- Page Title -->
    <title>XperiaCloud - The Complete Cloud Solutions</title>
    <!-- Google Fonts css-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
    <!-- Bootstrap css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- Font Awesome icon css-->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" media="screen">
    <!-- Main custom css -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    .thanks-message {
        color: white;
        font-size: 18px;
        /* Add any additional styling you want */
    }
</style>

</head>
<body>

<!-- Coming Soon Wrapper start -->
<div class="comming-soon">
    <div class="comming-soon-info">
        <div class="comming-soon-inner">
            <!-- Countdown Start -->
            <div class="countdown-timer-wrapper">
                <div class="timer" id="countdown"></div>
            </div>
            <!-- Countdown end -->

            <!-- Logo Start -->
            <div class="logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo"/>
            </div>
            <!-- Logo end -->

            <div class="site-info">
                <h2>We're launching our <span>New Website</span></h2>
                <p>We're coming soon! template to present your future website. We're <br/>working hard to give you
                    the best experience!</p>
            </div>
        </div>
    </div>

    <!-- Contact Form start -->
    <div class="contact-form">
        <div class="contact-box">
            <h2 class="title">Contact Us</h2>
            <p>Drop us an email and we will get back to you as soon as we can<p>

            <form method="post" action="{{ route('contact.submit') }}">
    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" name="name" placeholder="Your Name"/>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" name="email" placeholder="Your Email"/>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Your Message"></textarea>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="submit" class="btn-submit" value="Send Message Now"/>
                        </div>
                    </div>
                </form>

                
                @if(session('success'))
                        <div class="thanks-message">
                        {{ session('success') }}
                    </div>
                    @endif

        </div>
    </div>
    <!-- Contact Form end -->
</div>
<!-- Coming Soon Wrapper end -->

<!-- Jquery Library File -->
<script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
<!-- Timer counter js file -->
<script src="{{ asset('assets/js/countdown-timer.js') }}"></script>
<!-- SmoothScroll -->
<script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
<!-- Bootstrap js file -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Main Custom js file -->
<script src="{{ asset('assets/js/function.js') }}"></script>
<!-- Countdown Script start -->
<script>
    $(document).ready(function () {
        var myDate = new Date("{{ $countdownDate }}");
        $("#countdown").countdown(myDate, function (event) {
            $(this).html(
                event.strftime(
                    '<div class="timer-wrapper"><div class="time">%D</div><span class="text">Days</span></div><div class="timer-wrapper"><div class="time">%H</div><span class="text">Hours</span></div><div class="timer-wrapper"><div class="time">%M</div><span class="text">Minutes</span></div><div class="timer-wrapper"><div class="time">%S</div><span class="text">Seconds</span></div>'
                )
            );
        });

    });
</script>
<!-- Countdown Script end -->
</body>
</html>
