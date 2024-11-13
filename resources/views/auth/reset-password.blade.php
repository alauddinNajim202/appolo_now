<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apollo Now || Reset Password</title>

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
    <!-- password updated success modal starts -->
    <div class="modal fade bi-reset--password--succsess--modal" id="reset-password--succsess--modal" tabindex="-1"
        aria-labelledby="reset-password--succsess--modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="success--icon">🎉</h2>
                    <h3 class="bi-reset--success--modal--title">Password Update
                        Successfully</h3>
                    <p class="bi-reset--success--modal--subtitle mb-2">Your password has been update successfully</p>
                    <a class="bi-auth--page--common--btn" href="{{ route('login') }}">Back to login</a>
                </div>

            </div>
        </div>
    </div>
    <!-- password updated success modal ends -->

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
                <a class="bi-auth--page--back--btn" href="verify.html">
                    <i class="fa-solid fa-angle-left fa-xl"></i>
                    <span>Back</span>
                </a>
                <h1 class="bi-auth--page--title">Reset Password</h1>
                <p class="bi-forget--password--subtitle">
                    Reset your new password
                </p>

                <form id="password-reset-form" class="bi-common--auth--form">
                    @csrf

                    @php
                        $user = App\Models\User::find(request('user'));
                        // dd($user);
                    @endphp


                    <input type="hidden" name="email" value="{{ $user ? $user->email : '' }}">
                    <!-- New password -->
                    <!-- Password Field -->
                    <div class="bi-auth--page--common--field--wrapper">
                        <label for="password" class="bi-auth--page--common--label">Password</label>
                        <input type="password" name="password" autocomplete="new-password" id="password"
                            class="bi-auth--page--common--input @error('password') is-invalid @enderror">
                        <span class="show-password--btn">
                            <i class="fa-regular fa-eye-slash"></i>
                        </span>

                        <span id="password-error" class="text-danger"></span>
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="bi-auth--page--common--field--wrapper">
                        <label for="confirm-password" class="bi-auth--page--common--label">Confirm Password</label>
                        <input type="password" name="password_confirmation" autocomplete="new-password"
                            id="confirm-password"
                            class="bi-auth--page--common--input @error('password_confirmation') is-invalid @enderror">
                        <span class="show-password--btn">
                            <i class="fa-regular fa-eye-slash"></i>
                        </span>

                        <span id="password_confirmation-error" class="text-danger"></span>
                    </div>
                    <button type="button" id="confirm-button" class="bi-auth--page--common--btn">
                        Confirm
                    </button>
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

    <script>
        $(document).ready(function() {
            $('#confirm-button').on('click', function(e) {
                e.preventDefault();

                $('#password-error').text('');
                $('#password_confirmation-error').text('');

                // Get form data
                const formData = {
                    _token: '{{ csrf_token() }}',
                    email: $('input[name="email"]').val(),
                    password: $('input[name="password"]').val(),
                    password_confirmation: $('input[name="password_confirmation"]').val()
                };

                // Send AJAX request
                $.ajax({
                    url: "{{ route('reset_password.reset') }}",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            // Show the success modal
                            $('#reset-password--succsess--modal').modal('show');
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            // Handle validation errors
                            let errors = xhr.responseJSON.errors;


                            if (errors.password) {
                                $('#password-error').text(errors.password[0]);
                            }

                            if (errors.password_confirmation) {
                                $('#password_confirmation-error').text(errors
                                    .password_confirmation[0]);
                            }
                        }
                    }

                });
            });
        });
    </script>


</body>

</html>
