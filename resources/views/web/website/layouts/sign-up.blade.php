<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apollo Now || Sign Up</title>

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
                <h1 class="bi-auth--page--title">Sign up to Start Listening</h1>
                <div class="bi-select--role">
                    <span>Select Role</span>
                    <hr>
                </div>


                <form class="bi-common--auth--form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Role Selection -->
                    <div class="bi-role--select--field">
                        <div class="bi-role--select--group">
                            <input type="radio" name="role" value="artist" id="artist"
                                {{ old('role') == 'artist' ? 'checked' : '' }}>
                            <label for="artist">I'm an Artist</label>
                        </div>
                        <div class="bi-role--select--group">
                            <input type="radio" name="role" value="listener" id="listener"
                                {{ old('role') == 'listener' ? 'checked' : '' }}>
                            <label for="listener">I'm a Listener</label>
                        </div>

                        <!-- Role Validation Error Message -->
                        @error('role')
                            <p class="error-msg--auth--page">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Name Field -->
                    <div class="bi-auth--page--common--field--wrapper">
                        <label for="name" class="bi-auth--page--common--label">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" autofocus
                            autocomplete="name" class="bi-auth--page--common--input @error('name') is-invalid @enderror"
                            oninput="hideErrorMessage('name-error')">

                        @error('name')
                            <p id="name-error" class="error-msg--auth--page"> {{ $message }} </p>
                        @enderror
                    </div>

                    <!-- Email Field -->
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

                    <!-- Password Field -->
                    <div class="bi-auth--page--common--field--wrapper">
                        <label for="password" class="bi-auth--page--common--label">Password</label>
                        <input type="password" name="password" autocomplete="new-password" id="password"
                            class="bi-auth--page--common--input" @error('password') is-invalid @enderror  oninput="hideErrorMessage('password-error')">
                        <span class="show-password--btn">
                            <i class="fa-regular fa-eye-slash"></i>
                        </span>

                        @error('password')
                            <p id="password-error" class="error-msg--auth--page"> {{ $message }} </p>
                        @enderror
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="bi-auth--page--common--field--wrapper">
                        <label for="confirm-password" class="bi-auth--page--common--label">Confirm Password</label>
                        <input type="password" name="password_confirmation" autocomplete="new-password"
                            id="confirm-password"
                            class="bi-auth--page--common--input @error('password_confirmation') is-invalid @enderror" oninput="hideErrorMessage('password_confirmation-error')">
                        <span class="show-password--btn">
                            <i class="fa-regular fa-eye-slash"></i>
                        </span>

                        @error('password_confirmation')
                            <p id="password_confirmation-error" class="error-msg--auth--page"> {{ $message }} </p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="bi-auth--page--common--btn">Sign up</button>
                    <p class="bi-auth--page--bottom--text">Already have an account? <a
                            href="{{ route('login') }}">Log in here</a></p>
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
        function hideErrorMessage(errorId) {
            const errorMessage = document.getElementById(errorId);
            if (errorMessage) {
                errorMessage.style.display = 'none';
            }
        }
    </script>
</body>

</html>
