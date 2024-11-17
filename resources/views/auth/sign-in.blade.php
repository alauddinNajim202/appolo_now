<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apollo Now || Sign In</title>

    <!-- favicon -->

    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/images/favicon_io/android-chrome-192x192.png') }}" />
    <link rel="icon" type="image/png" sizes="512x512"
        href="{{ asset('assets/images/favicon_io/android-chrome-512x512.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon_io/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/images/favicon_io/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/images/favicon_io/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicon_io/site.webmanifest') }}" />
    <link rel="icon" href="{{ asset('assets/images/favicon_io/favicon.ico') }}" type="image/x-icon" />







    <!-- All Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel.min.css') }}" />


    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }} " />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom/auth.css') }} " />

    <link rel="stylesheet" href=" {{ asset('assets/css/style.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" href=" {{ asset('assets/css/helper.css') }} " />

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
                        <div class="swiper-slide" style="background-image: url(./assets/images/slide-image-1.png);">
                            <h2 class="auth-page--carasoul--title">
                                Original & Independent Content
                            </h2>
                        </div>
                        <div class="swiper-slide" style="background-image: url(./assets/images/slide-image-2.png);">
                            <h2 class="auth-page--carasoul--title">
                                Connect your favorite platform
                            </h2>
                        </div>
                        <div class="swiper-slide" style="background-image: url(./assets/images/slide-image-3.png);">
                            <h2 class="auth-page--carasoul--title">
                                Invest in your favorite song or artist
                            </h2>
                        </div>
                        <div class="swiper-slide" style="background-image: url(./assets/images/slide-image-4.png);">
                            <h2 class="auth-page--carasoul--title">
                                Original & Independent Content
                            </h2>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="auth-form--side">
                <a href="index.html" class="bi-auth--page--logo">
                    <img src="./assets/images/auth-page-logo.svg" alt="" srcset="">
                </a>
                <h1 class="bi-auth--page--title">Log in to Apollo Now</h1>
                <div class="bi-select--role">
                    <span>Select Role</span>
                    <hr>
                </div>


                <form class="bi-common--auth--form" method="POST" action="{{ route('login') }}">
                    @csrf


                    <div class="bi-role--select--field">
                        <div class="bi-role--select--group">
                            <input type="radio" name="role" value="artist" id="artist">
                            <label for="artist">Im a Artist</label>
                        </div>

                        <div class="bi-role--select--group">
                            <input type="radio" name="role" value="listener" id="listener">
                            <label for="listener">Im a Listener</label>
                        </div>

                        <div class="bi-role--select--group">
                            <input type="radio" name="role" value="admin" id="listener">
                            <label for="listener">Im Admin</label>
                        </div>

                        <!-- Role Validation Error Message -->
                        @error('role')
                            <p class="error-msg--auth--page">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="bi-auth--page--common--field--wrapper">
                        <label for="email" class="bi-auth--page--common--label">Email Address</label>



                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            placeholder="john@example.com" autocomplete="username"
                            class="bi-auth--page--common--input @error('email') is-invalid @enderror"
                            oninput="hideErrorMessage('email-error')">

                        @error('email')
                            <p id="email-error" class="error-msg--auth--page"> {{ $message }} </p>
                        @enderror
                    </div>



                    <!-- password -->
                    <div class="bi-auth--page--common--field--wrapper">
                        <label for="password" class="bi-auth--page--common--label">Password</label>


                        <input type="password" name="password" autocomplete="current-password" id="password"
                            class="bi-auth--page--common--input" @error('password') is-invalid @enderror
                            oninput="hideErrorMessage('password-error')">
                        <span class="show-password--btn">
                            <i class="fa-regular fa-eye-slash"></i>
                        </span>

                        @error('password')
                            <p id="password-error" class="error-msg--auth--page"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="bi-auth--page--terms--wrapper">
                        <div class="bi-auth--page--terms--inner--wrapper">
                            <input type="checkbox" name="remember" id="remember_me">
                            <label for="terms">Remember me</label>
                        </div>


                        @if (Route::has('forgot_password.form_show'))
                            <a href="{{ route('forgot_password.form_show') }}">Forget Password?</a>
                        @endif
                    </div>
                    <button type="submit" class="bi-auth--page--common--btn">Login</button>
                    <p class="bi-auth--page--bottom--text">Dose not have an account? <a
                            href="{{ route('register') }}">Sign up</a></p>
                    <div class="bi-auth--page--login--with">
                        <a href="#" class="bi-auth--page--login--with--btn">
                            <i class="fa-brands fa-apple fa-xl " style="color: #000000;"></i>
                            <span>Apple</span>
                        </a>
                        <a href="{{ route('auth.google') }}" class="bi-auth--page--login--with--btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                viewBox="0 0 25 25" fill="none">
                                <path
                                    d="M22.5555 10.1503H21.75V10.1088H12.75V14.1088H18.4015C17.577 16.4373 15.3615 18.1088 12.75 18.1088C9.4365 18.1088 6.75 15.4223 6.75 12.1088C6.75 8.79526 9.4365 6.10876 12.75 6.10876C14.2795 6.10876 15.671 6.68576 16.7305 7.62826L19.559 4.79976C17.773 3.13526 15.384 2.10876 12.75 2.10876C7.2275 2.10876 2.75 6.58626 2.75 12.1088C2.75 17.6313 7.2275 22.1088 12.75 22.1088C18.2725 22.1088 22.75 17.6313 22.75 12.1088C22.75 11.4383 22.681 10.7838 22.5555 10.1503Z"
                                    fill="#FFC107" />
                                <path
                                    d="M3.90332 7.45426L7.18882 9.86376C8.07782 7.66276 10.2308 6.10876 12.7503 6.10876C14.2798 6.10876 15.6713 6.68576 16.7308 7.62826L19.5593 4.79976C17.7733 3.13526 15.3843 2.10876 12.7503 2.10876C8.90932 2.10876 5.57832 4.27726 3.90332 7.45426Z"
                                    fill="#FF3D00" />
                                <path
                                    d="M12.7502 22.1087C15.3332 22.1087 17.6802 21.1202 19.4547 19.5127L16.3597 16.8937C15.3221 17.6833 14.0539 18.1101 12.7502 18.1087C10.1492 18.1087 7.94066 16.4502 7.10866 14.1357L3.84766 16.6482C5.50266 19.8867 8.86366 22.1087 12.7502 22.1087Z"
                                    fill="#4CAF50" />
                                <path
                                    d="M22.5555 10.1503H21.75V10.1088H12.75V14.1088H18.4015C18.0071 15.217 17.2967 16.1854 16.358 16.8943L16.3595 16.8933L19.4545 19.5123C19.2355 19.7113 22.75 17.1088 22.75 12.1088C22.75 11.4383 22.681 10.7838 22.5555 10.1503Z"
                                    fill="#024CDA" />
                            </svg>
                            <span>Google</span>
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </main>
    <!-- main part end -->

    <!-- footer part start -->
    <footer></footer>
    <!-- footer part end -->






    <!-- <script src="assets/js/plugins.js"></script> -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }} "></script>
    <script src=" {{ asset('assets/js/plugins.js') }} "></script>
    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>
    <script src=" {{ asset('assets/js/main.js') }}"></script>
    <script>
        function hideErrorMessage(errorId) {
            const errorMessage = document.getElementById(errorId);
            if (errorMessage) {
                errorMessage.style.display = 'none';
            }
        }
    </script>
</body>

</html>
