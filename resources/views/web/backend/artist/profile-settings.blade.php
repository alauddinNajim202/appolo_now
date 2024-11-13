@extends('web.backend.app')


@section('backend_content')
    <div class="dashboard-contents--wrapper">
        <!-- dashboard common top starts -->
        <div class="dashboard-header">
            <!-- title -->
            <div class="dashboard-header--left">
                <h3 class="dashboard-page--title">Artist Dashboard</h3>
            </div>


            @include('web.backend.partials.header')


        </div>
        <!-- dashboard common top starts -->

        <!-- dashboard pages area starts -->
        <div class="dynamic--pages--area">
            <!-- profile settings page starts -->
            <div class="bi-profile--settings--page--wrapper">
                <h1 class="bi-dashboard--common--page--heading">
                    Personal Details
                </h1>
                <div class="bi-profile--settings--page--content">
                    <!-- top -->
                    <div class="bi-profile--settings--user--info--box">
                        <div class="bi-profile--settings--user--info--box--left">

                            @if ($user_details->avatar)
                                <div class="bi--user--avatar--preview">
                                    <img src="{{ asset($user_details->avatar) }}" alt="" />
                                </div>
                            @else
                                <div class="bi--user--avatar--preview">
                                    <img src="../assets/images/artist-5.png" alt="" />
                                </div>
                            @endif



                            <div class="bi--user--info--side--settings--page">
                                <h2 class="bi--settings--user--name">
                                    {{ auth()->user() ? auth()->user()->first_name : '' }}
                                    {{ auth()->user() ? auth()->user()->last_name : '' }}
                                </h2>
                                <p class="bi--settings--user--email">
                                    {{ auth()->user() ? auth()->user()->email : '' }}
                                </p>
                                <p class="bi--settings--user--role">
                                    {{ auth()->user() ? auth()->user()->role : '' }}
                                </p>
                            </div>
                        </div>
                        <div class="bi-profile--settings--user--info--box--right">
                            <input hidden type="file" name="upload--avatar" id="upload--avatar" />
                            <label for="upload--avatar" class="bi--upload--image--btn">
                                Upload Image
                            </label>

                            <button id="remove-image-btn" class="bi--upload--image--remove--btn">Remove Image</button>

                        </div>
                    </div>
                    <!-- form section -->
                    <form action="" class="bi-profile--settings--form">
                        <!-- input fields -->
                        <div class="bi-profile--setting--fields--wrapper">
                            <!-- inner--wrapper 1 -->
                            <div class="bi-profile--setting--fields--inner--wrapper">
                                <!-- fname -->
                                <div class="bi-profile--setting--fields--inner--inputs--wrapper">
                                    <label class="bi-common--input--label" for="f_name">First Name</label>
                                    <input class="bi-common--input" type="text"
                                        value="{{ $user_details ? $user_details->first_name : '' }}" name="f_name"
                                        id="f_name" placeholder="John">
                                    <!-- <p class="error-message">This field is required*</p> -->
                                </div>
                                <!-- lname -->
                                <div class="bi-profile--setting--fields--inner--inputs--wrapper">
                                    <label class="bi-common--input--label" for="f_name">Last Name</label>
                                    <input class="bi-common--input" type="text"
                                        value="{{ $user_details ? $user_details->last_name : '' }}" name="l_name"
                                        id="l_name" placeholder="Doe">
                                    <!-- <p class="error-message">This field is required*</p> -->
                                </div>
                                <!-- phone number -->
                                <div class="bi-profile--setting--fields--inner--inputs--wrapper">
                                    <label class="bi-common--input--label" for="phone_number">Phone Number</label>
                                    <input class="bi-common--input" type="tel"
                                        value="{{ $user_details ? $user_details->phone_number : '' }}" name="phone_number"
                                        id="phone_number" placeholder="+088 1789864">
                                    <!-- <p class="error-message">This field is required*</p> -->
                                </div>

                            </div>
                            <!-- inner--wrapper 2 -->
                            <div class="bi-profile--setting--fields--inner--wrapper">
                                <!-- email -->
                                <div class="bi-profile--setting--fields--inner--inputs--wrapper">
                                    <label class="bi-common--input--label" for="email">Email Address</label>
                                    <input class="bi-common--input" type="email"
                                        value="{{ $user_details ? $user_details->email : '' }}" name="email"
                                        id="email" placeholder="John@gmail.com">
                                    <!-- <p class="error-message">This field is required*</p> -->
                                </div>
                                <!-- lname -->
                                <div class="bi-profile--setting--fields--inner--inputs--wrapper">
                                    <label class="bi-common--input--label" for="dob">Date of birth</label>
                                    <input class="bi-common--input  " type="date"
                                        value="{{ $user_details ? $user_details->date_of_birth : '' }}" name="dob"
                                        id="dob" placeholder="08/20/2024">
                                    <!-- <p class="error-message">This field is required*</p> -->
                                </div>
                                <!-- phone number -->
                                <div class="bi-profile--setting--fields--inner--inputs--wrapper">
                                    <label class="bi-common--input--label" for="emergency_phone_number">Emergency
                                        Contact</label>
                                    <input class="bi-common--input" type="tel"
                                        value="{{ $user_details ? $user_details->emergency_number : '' }}"
                                        name="emergency_phone_number" id="emergency_phone_number"
                                        placeholder="+088 1789864">
                                    <!-- <p class="error-message">This field is required*</p> -->
                                </div>

                            </div>
                            <!-- inner--wrapper 3 -->
                            <div class="bi-profile--setting--fields--inner--wrapper">
                                <!-- address -->
                                <div class="bi-profile--setting--fields--inner--inputs--wrapper">
                                    <label class="bi-common--input--label" for="address">Address</label>
                                    <input class="bi-common--input" type="text"
                                        value="{{ $user_details ? $user_details->address : '' }}" name="address"
                                        id="address" placeholder="Enter Address">
                                    <!-- <p class="error-message">This field is required*</p> -->
                                </div>
                            </div>
                            <!-- inner--wrapper 4 -->
                            <div class="bi-profile--setting--fields--inner--wrapper">
                                <!-- email -->
                                <div class="bi-profile--setting--fields--inner--inputs--wrapper">
                                    <label class="bi-common--input--label" for="city">City</label>
                                    <input class="bi-common--input" type="text"
                                        value="{{ $user_details ? $user_details->city : '' }}" name="city"
                                        id="city" placeholder="Enter city">
                                    <!-- <p class="error-message">This field is required*</p> -->
                                </div>
                                <!-- lname -->
                                <div class="bi-profile--setting--fields--inner--inputs--wrapper">
                                    <label class="bi-common--input--label" for="state">State</label>
                                    <input class="bi-common--input" type="text"
                                        value="{{ $user_details ? $user_details->state : '' }}" name="state"
                                        id="state" placeholder="Enter State">
                                    <!-- <p class="error-message">This field is required*</p> -->
                                </div>
                                <!-- phone number -->
                                <div class="bi-profile--setting--fields--inner--inputs--wrapper">
                                    <label class="bi-common--input--label" for="zip_code">Zip Code</label>
                                    <input class="bi-common--input" type="number"
                                        value="{{ $user_details ? $user_details->zip_code : '' }}" name="zip_code"
                                        id="zip_code" placeholder="1789864">
                                    <!-- <p class="error-message">This field is required*</p> -->
                                </div>
                            </div>

                        </div>
                        <!-- separator -->
                        <hr>
                        <!-- btns -->
                        <div class="bi-profile--setting--btns">
                            <button class="bi-common--cancel--btn" type="reset">Cancel</button>
                            <button class="bi-common--save--btn" type="submit">Update</button>
                        </div>

                    </form>

                </div>
            </div>
            <!-- profile settings page ends -->
        </div>
        <!-- dashboard pages area starts -->
    </div>
@endsection



@push('scripts')
    <script>
        // update profile
        $(document).ready(function() {
            $('.bi-profile--settings--form').on('submit', function(e) {
                e.preventDefault();

                // Gather form data
                var formData = {
                    _token: '{{ csrf_token() }}', // Laravel CSRF token
                    first_name: $('#f_name').val(),
                    last_name: $('#l_name').val(),
                    phone_number: $('#phone_number').val(),
                    email: $('#email').val(),
                    date_of_birth: $('#dob').val(),
                    emergency_number: $('#emergency_phone_number').val(),
                    address: $('#address').val(),
                    city: $('#city').val(),
                    state: $('#state').val(),
                    zip_code: $('#zip_code').val()
                };

                // AJAX request
                $.ajax({
                    url: '{{ route('artist.profile_setting.store') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Display success Toastr message

                        toastr.success(response.message || 'Profile updated successfully');

                    },
                    error: function(response) {
                        // Display error Toastr message
                        toastr.error(response.responseJSON.message ||
                            'An error occurred while updating profile');
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {

            // update profile image
            $('#upload--avatar').on('change', function() {
                let formData = new FormData();
                formData.append('avatar', this.files[0]);

                $.ajax({
                    url: '{{ route('artist.profile.upload_image') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // CSRF token
                    },
                    success: function(response) {
                        // Display success Toastr message
                        toastr.success(response.message ||
                            'Profile image updated successfully');


                        $('.bi--user--avatar--preview img').attr('src', response.image_path);
                    },
                    error: function(response) {
                        // Display error Toastr message
                        toastr.error(response.responseJSON.message ||
                            'An error occurred while updating profile');
                    }
                });
            });


            // remove profile image
            $('#remove-image-btn').on('click', function() {
                $.ajax({
                    url: '{{ route('artist.profile.remove_image') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}' // CSRF token
                    },
                    success: function(response) {
                        toastr.success(response.message ||
                            'Profile image remove successfully');

                        // Optionally, reset the image preview
                        $('.bi--user--avatar--preview img').attr('src',
                            '../assets/images/artist-5.png'
                        );
                    },
                    error: function(response) {
                        toastr.error(response.responseJSON.message ||
                        'An error occurred while removing profile');
                    }
                });
            });


        });
    </script>
@endpush
