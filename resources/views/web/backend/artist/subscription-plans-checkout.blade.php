@extends('web.backend.app')


@section('backend_content')
    <div class="dashboard-contents--wrapper">
        <!-- dashboard common top starts -->
        <div class="dashboard-header">
            <!-- title -->
            <div class="dashboard-header--left">
                <h3 class="dashboard-page--title">Subscription Plans
                </h3>
            </div>


            @include('web.backend.partials.header')


        </div>
        <!-- dashboard common top starts -->

        <!-- dashboard pages area starts -->
        <div class="dynamic--pages--area">
            <!-- artist and listener subcription plan wrapper starts -->
            <div class="bi-artists--subscription--plan--page--wrapper">
                <!-- pricing checkout section  -->
                <section class="bi-artist--dashboard--pricing--checkout--section">
                    <h1 class="bi-dashboard--common--page--heading">
                        <a href="{{ route('artist.subscription_plans.index') }}" class="me-1 text-black">
                            <i class="fa-solid fa-arrow-left"></i></a>
                        <span>Checkout</span>
                    </h1>
                    <!-- pricing plan card info and checkout form -->
                    <div class="bi-pricing--plan--checkout--form--container">
                        <!-- plan info  -->
                        <div class="bi-artist--plan--info">
                            <h3 class="bi--artist--chosen--plan--name">Basic Plan</h3>
                            <p class="bi-artist--chosen--plan--price">
                                $5 <sup>/Month</sup>
                            </p>
                        </div>
                        <!-- payment method -->
                        <div class="bi-artist--plan--payment--methods--container">
                            <h5 class="bi-artist--plan--payment--methods--heading">
                                Select Payment Method
                            </h5>
                            <div class="bi-artist--plan--payment--methods--lists">
                                <!-- one  -->
                                <div class="bi-artist--plan--payment--row">
                                    <input checked type="radio" name="payment" id="visa" hidden />
                                    <label for="visa" class="bi-artist--plan--checkout--label">
                                        <!-- icon -->
                                        <span class="bi-payment--card--logo">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                viewBox="0 0 32 32" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.2612 21.1559H13.8723L15.5045 10.8511H12.8931L11.2612 21.1559ZM6.57518 17.9388L9.06452 10.8511H11.8747L7.72046 21.1561H4.99987L2.73132 12.2034C1.25848 11.2946 0 11.0256 0 11.0256L0.000270457 11.0246C0.0267351 11.0303 1.99082 11.4564 3.87524 13.0238C5.66033 14.5081 6.26165 16.3521 6.28042 16.4106L6.28089 16.4131L6.28062 16.4126L6.57518 17.9388ZM32 21.1559H29.6024L29.2966 19.6252H25.9772L25.4329 21.1559H22.7109L26.6052 11.6188C26.6052 11.6188 26.8413 10.8508 27.8106 10.8508H29.9096L32 21.1559ZM28.1011 13.6544L26.7292 17.5107H28.873L28.1011 13.6544ZM23.2877 11.1163L22.9151 13.3292C21.7977 12.6966 19.2547 12.5469 19.2545 13.7121C19.2545 14.1749 19.8298 14.4933 20.5233 14.877C21.5751 15.4588 22.8985 16.191 22.8985 17.8057C22.8985 20.3857 20.2103 21.3337 18.4284 21.3337C16.6471 21.3337 15.4812 20.7518 15.4812 20.7518L15.8693 18.438C16.9384 19.3198 20.1779 19.5704 20.1779 18.172C20.1779 17.5844 19.5402 17.2379 18.8007 16.8361C17.7804 16.2816 16.5663 15.6219 16.5663 14.0784C16.5663 11.2489 19.6435 10.667 20.9392 10.667C22.1379 10.667 23.2877 11.1163 23.2877 11.1163Z"
                                                    fill="#2566AF" />
                                                <path
                                                    d="M6.29275 16.2683L5.41249 11.7495C5.41249 11.7495 5.30605 10.8447 4.17151 10.8447H0.048381L0 11.0149C0 11.0149 1.98174 11.4256 3.88257 12.9644C5.70008 14.4352 6.29275 16.2683 6.29275 16.2683Z"
                                                    fill="#E6A540" />
                                            </svg>
                                        </span>
                                        <!-- card no -->
                                        <span>4855 **** **** ****</span>
                                        <!-- expire date -->
                                        <span>04/24</span>
                                        <!-- owner name -->
                                        <span>Vako Shvili</span>
                                        <!-- checkmark -->
                                        <span class="bi-payment--checked--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                                    fill="#23BD33" stroke="#23BD33" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.125 9.75L10.625 15L7.875 12.375" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </label>
                                </div>
                                <!-- two -->
                                <div class="bi-artist--plan--payment--row">
                                    <input type="radio" name="payment" id="master" hidden />
                                    <label for="master" class="bi-artist--plan--checkout--label">
                                        <!-- icon -->
                                        <span class="bi-payment--card--logo">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                viewBox="0 0 32 32" fill="none">
                                                <path d="M20.3312 23.7851H11.6797V8.24512H20.3314L20.3312 23.7851Z"
                                                    fill="#FF5F00" />
                                                <path
                                                    d="M12.2267 16.0129C12.2267 12.8607 13.7034 10.0526 16.003 8.24297C14.2623 6.87115 12.1094 6.12662 9.89274 6.12989C4.43223 6.12989 0.00585938 10.5546 0.00585938 16.0129C0.00585938 21.4713 4.43223 25.896 9.89274 25.896C12.1095 25.8993 14.2625 25.1548 16.0032 23.7829C13.7038 21.9736 12.2267 19.1654 12.2267 16.0129Z"
                                                    fill="#EB001B" />
                                                <path
                                                    d="M32.001 16.0129C32.001 21.4713 27.5747 25.896 22.1142 25.896C19.8972 25.8992 17.744 25.1547 16.0029 23.7829C18.3031 21.9733 19.7799 19.1654 19.7799 16.0129C19.7799 12.8605 18.3031 10.0526 16.0029 8.24297C17.7439 6.87119 19.8971 6.12668 22.114 6.12989C27.5745 6.12989 32.0009 10.5546 32.0009 16.0129"
                                                    fill="#F79E1B" />
                                            </svg>
                                        </span>
                                        <!-- card no -->
                                        <span>2855 **** **** ****</span>
                                        <!-- expire date -->
                                        <span>04/24</span>
                                        <!-- owner name -->
                                        <span>Vako Shvili</span>
                                        <!-- checkmark -->
                                        <span class="bi-payment--checked--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                                    fill="#23BD33" stroke="#23BD33" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.125 9.75L10.625 15L7.875 12.375" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </label>
                                </div>
                                <!-- three -->
                                <div class="bi-add--new--card--info--btn">
                                    <span class="add--icon">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                    <span>Add new card</span>
                                </div>
                            </div>

                            <!-- add new card -->

                            <form action="" class="bi-add--new--card--form">
                                <div class="bi-artist--add--new--card--input--wrapper">
                                    <label class="bi-common--input--label" for="">Name</label>
                                    <input class="bi-common--input" type="text" placeholder="Name on card">
                                </div>
                                <div class="bi-artist--add--new--card--input--wrapper">
                                    <label class="bi-common--input--label" for="">Card Number</label>
                                    <input class="bi-common--input" type="text" placeholder="268626556">
                                </div>

                                <div class="bi-artist--add--new--card--input--outer--wrapper">
                                    <div class="bi-artist--add--new--card--input--wrapper">
                                        <label class="bi-common--input--label" for="">MM / YY</label>
                                        <input class="bi-common--input" type="date" placeholder="MM / YY">
                                    </div>
                                    <div class="bi-artist--add--new--card--input--wrapper">
                                        <label class="bi-common--input--label" for="">CVC</label>
                                        <input class="bi-common--input" type="text" placeholder="CVC">
                                    </div>
                                </div>
                                <button type="submit" class="bi-common--save--btn">
                                    Save
                                </button>
                            </form>

                        </div>
                    </div>
                </section>
            </div>
            <!-- artist and listener subcription plan wrapper ends-->
        </div>

        <!-- dashboard pages area starts -->
    </div>
@endsection
