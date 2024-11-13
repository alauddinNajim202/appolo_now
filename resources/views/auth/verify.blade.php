<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apollo Now || Verify OTP</title>

    <!-- favicon -->



    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/images/favicon_io/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="512x512" href="./assets/images/favicon_io/android-chrome-512x512.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon_io/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon_io/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon_io/favicon-16x16.png" />
    <link rel="manifest" href="./assets/images/favicon_io/site.webmanifest" />
    <link rel="icon" href="./assets/images/favicon_io/favicon.ico" type="image/x-icon" />
    <!-- All Plugins CSS -->
    <link rel="stylesheet" href="./assets/css/plugins/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/plugins/aos.css" />
    <link rel="stylesheet" href="./assets/css/plugins/nice-select.min.css" />
    <link rel="stylesheet" href="./assets/css/plugins/owl.carousel.min.css" />
    <link rel="stylesheet" href="./assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="./assets/css/custom/auth.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/css/helper.css" />
</head>

<body>
    <!-- heading part start -->
    <header></header>
    <!-- heading part end -->

    <!-- main part start -->
    <main>
        <div class="auth-pages--wrapper">
            <div class="auth-carasoul--side">
                <div class="swiper auth-page--swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url(./assets/images/slide-image-1.png)">
                            <h2 class="auth-page--carasoul--title">
                                Original & Independent Content
                            </h2>
                        </div>
                        <div class="swiper-slide" style="background-image: url(./assets/images/slide-image-2.png)">
                            <h2 class="auth-page--carasoul--title">
                                Connect your favorite platform
                            </h2>
                        </div>
                        <div class="swiper-slide" style="background-image: url(./assets/images/slide-image-3.png)">
                            <h2 class="auth-page--carasoul--title">
                                Invest in your favorite song or artist
                            </h2>
                        </div>
                        <div class="swiper-slide" style="background-image: url(./assets/images/slide-image-4.png)">
                            <h2 class="auth-page--carasoul--title">
                                Original & Independent Content
                            </h2>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="auth-form--side">
                <a class="bi-auth--page--back--btn" href="{{route('forgot_password.form_show')}}">
                    <i class="fa-solid fa-angle-left fa-xl"></i>
                    <span>Back</span>
                </a>
                <h1 class="bi-auth--page--title mb-1">Enter OTP</h1>
                <p class="bi-forget--password--subtitle text-danger">
                    We have share a code of your registered email address

                </p>
                <form class="bi-common--auth--form" method="POST" action="{{ route('verify-otp.verify') }}">
                    @csrf
                    <div class="bi-auth--page--otp--wrapper">
                        <input type="hidden" name="email" value="{{ session('email') }}">
                        <input type="text" class="bi-common--otp--field" name="otp[]" maxlength="1"
                            placeholder=" " required />
                        <input type="text" class="bi-common--otp--field" name="otp[]" maxlength="1"
                            placeholder=" " required />
                        <input type="text" class="bi-common--otp--field" name="otp[]" maxlength="1"
                            placeholder=" " required />
                        <input type="text" class="bi-common--otp--field" name="otp[]" maxlength="1"
                            placeholder=" " required />
                        <input type="text" class="bi-common--otp--field" name="otp[]" maxlength="1"
                            placeholder=" " required />
                        <input type="text" class="bi-common--otp--field" name="otp[]" maxlength="1"
                            placeholder=" " required />
                    </div>

                    <!-- Display OTP error message -->
                    @if ($errors->has('otp'))
                        <div class="error-message" style="color: red; margin-top: 10px;">
                            {{ $errors->first('otp') }}
                        </div>
                    @endif

                    <button type="submit" class="bi-auth--page--common--btn">Verify</button>
                </form>

            </div>
        </div>
    </main>
    <!-- main part end -->

    <!-- footer part start -->
    <footer></footer>
    <!-- footer part end -->

    <!-- <script src="assets/js/plugins.js"></script> -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>
    <script src="assets/js/main.js"></script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const otpFields = document.querySelectorAll('.bi-common--otp--field');

            otpFields.forEach((field, index) => {
                field.addEventListener('input', (e) => {
                    if (field.value.length === 1) {
                        if (index < otpFields.length - 1) {
                            otpFields[index + 1].focus();
                        }
                    }
                });

                field.addEventListener('keydown', (e) => {
                    if (e.key === 'Backspace' && !field.value && index > 0) {
                        otpFields[index - 1].focus();
                    }
                });
            });
        });
    </script>

</body>

</html>
