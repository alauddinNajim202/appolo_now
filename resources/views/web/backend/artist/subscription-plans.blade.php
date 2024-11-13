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
                <!-- pricing section  -->
                <section class="bi-artist--dashboard--subscription--pricing--section">
                    <h3 class="dashboard-page--title">Subscriptions</h3>
                    <div class="bi-artist--dashboard--subscription--plans--container">
                        <h1 class="pricing--title">Pricing</h1>
                        <p class="pricing--subtitle">
                            Link your streaming platform and begin earning rewards for
                            discovering new content.
                        </p>
                        <div class="bi-subscription--plans">
                            <!-- basic -->
                            <div class="common--price--card" data-aos="flip-left">
                                <div class="common--price--card--inner--wrapper">
                                    <div class="pricing--card--top">
                                        <h3 class="pricing-card--title">Basic Plan</h3>
                                        <h1 class="pricing-card--price">
                                            $5 <sup>/Month</sup>
                                        </h1>
                                    </div>
                                    <div class="pricing--card--middle">
                                        <div class="package--feature">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_2111_2617)">
                                                    <path
                                                        d="M12 0.213135C5.38346 0.213135 0 5.59659 0 12.2131C0 18.8297 5.38346 24.2131 12 24.2131C18.6165 24.2131 24 18.8297 24 12.2131C24 5.59659 18.6165 0.213135 12 0.213135ZM18.7068 9.05524L11.0376 16.6643C10.5865 17.1154 9.86466 17.1455 9.38346 16.6943L5.32331 12.9951C4.84211 12.544 4.81203 11.7921 5.23308 11.3109C5.68421 10.8297 6.43609 10.7996 6.91729 11.2507L10.1353 14.1981L16.9925 7.34095C17.4737 6.85975 18.2256 6.85975 18.7068 7.34095C19.188 7.82216 19.188 8.57404 18.7068 9.05524Z"
                                                        fill="#0246D5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2111_2617">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0 0.213135)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>Add 1 free song to ApolloNow</span>
                                        </div>
                                        <div class="package--feature">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_2111_2617)">
                                                    <path
                                                        d="M12 0.213135C5.38346 0.213135 0 5.59659 0 12.2131C0 18.8297 5.38346 24.2131 12 24.2131C18.6165 24.2131 24 18.8297 24 12.2131C24 5.59659 18.6165 0.213135 12 0.213135ZM18.7068 9.05524L11.0376 16.6643C10.5865 17.1154 9.86466 17.1455 9.38346 16.6943L5.32331 12.9951C4.84211 12.544 4.81203 11.7921 5.23308 11.3109C5.68421 10.8297 6.43609 10.7996 6.91729 11.2507L10.1353 14.1981L16.9925 7.34095C17.4737 6.85975 18.2256 6.85975 18.7068 7.34095C19.188 7.82216 19.188 8.57404 18.7068 9.05524Z"
                                                        fill="#0246D5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2111_2617">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0 0.213135)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>Artist Dashboard</span>
                                        </div>
                                        <div class="package--feature">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_2111_2617)">
                                                    <path
                                                        d="M12 0.213135C5.38346 0.213135 0 5.59659 0 12.2131C0 18.8297 5.38346 24.2131 12 24.2131C18.6165 24.2131 24 18.8297 24 12.2131C24 5.59659 18.6165 0.213135 12 0.213135ZM18.7068 9.05524L11.0376 16.6643C10.5865 17.1154 9.86466 17.1455 9.38346 16.6943L5.32331 12.9951C4.84211 12.544 4.81203 11.7921 5.23308 11.3109C5.68421 10.8297 6.43609 10.7996 6.91729 11.2507L10.1353 14.1981L16.9925 7.34095C17.4737 6.85975 18.2256 6.85975 18.7068 7.34095C19.188 7.82216 19.188 8.57404 18.7068 9.05524Z"
                                                        fill="#0246D5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2111_2617">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0 0.213135)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>Unique Artist Engagement</span>
                                        </div>
                                        <div class="package--feature">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_2111_2617)">
                                                    <path
                                                        d="M12 0.213135C5.38346 0.213135 0 5.59659 0 12.2131C0 18.8297 5.38346 24.2131 12 24.2131C18.6165 24.2131 24 18.8297 24 12.2131C24 5.59659 18.6165 0.213135 12 0.213135ZM18.7068 9.05524L11.0376 16.6643C10.5865 17.1154 9.86466 17.1455 9.38346 16.6943L5.32331 12.9951C4.84211 12.544 4.81203 11.7921 5.23308 11.3109C5.68421 10.8297 6.43609 10.7996 6.91729 11.2507L10.1353 14.1981L16.9925 7.34095C17.4737 6.85975 18.2256 6.85975 18.7068 7.34095C19.188 7.82216 19.188 8.57404 18.7068 9.05524Z"
                                                        fill="#0246D5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2111_2617">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0 0.213135)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>Earn rewards like a listener</span>
                                        </div>
                                        <div class="package--feature">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_2111_2617)">
                                                    <path
                                                        d="M12 0.213135C5.38346 0.213135 0 5.59659 0 12.2131C0 18.8297 5.38346 24.2131 12 24.2131C18.6165 24.2131 24 18.8297 24 12.2131C24 5.59659 18.6165 0.213135 12 0.213135ZM18.7068 9.05524L11.0376 16.6643C10.5865 17.1154 9.86466 17.1455 9.38346 16.6943L5.32331 12.9951C4.84211 12.544 4.81203 11.7921 5.23308 11.3109C5.68421 10.8297 6.43609 10.7996 6.91729 11.2507L10.1353 14.1981L16.9925 7.34095C17.4737 6.85975 18.2256 6.85975 18.7068 7.34095C19.188 7.82216 19.188 8.57404 18.7068 9.05524Z"
                                                        fill="#0246D5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2111_2617">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0 0.213135)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>Profile actively promoted.</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('artist.subscription_plans.checkout') }}" class="pricing--plan--btn">
                                        <span>Subscribe Now</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 25 25" fill="none">
                                            <path d="M9.5 18.2131L15.5 12.2131L9.5 6.21313" stroke="white"
                                                stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <!-- premium -->
                            <div class="common--price--card" data-aos="flip-left">
                                <div class="common--price--card--inner--wrapper">
                                    <div class="pricing--card--top">
                                        <h3 class="pricing-card--title">Premium Plan</h3>
                                        <h1 class="pricing-card--price">
                                            $12 <sup>/Month</sup>
                                        </h1>
                                    </div>
                                    <div class="pricing--card--middle">
                                        <div class="package--feature">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_2111_2617)">
                                                    <path
                                                        d="M12 0.213135C5.38346 0.213135 0 5.59659 0 12.2131C0 18.8297 5.38346 24.2131 12 24.2131C18.6165 24.2131 24 18.8297 24 12.2131C24 5.59659 18.6165 0.213135 12 0.213135ZM18.7068 9.05524L11.0376 16.6643C10.5865 17.1154 9.86466 17.1455 9.38346 16.6943L5.32331 12.9951C4.84211 12.544 4.81203 11.7921 5.23308 11.3109C5.68421 10.8297 6.43609 10.7996 6.91729 11.2507L10.1353 14.1981L16.9925 7.34095C17.4737 6.85975 18.2256 6.85975 18.7068 7.34095C19.188 7.82216 19.188 8.57404 18.7068 9.05524Z"
                                                        fill="#0246D5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2111_2617">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0 0.213135)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>Add 1 free song to ApolloNow</span>
                                        </div>
                                        <div class="package--feature">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_2111_2617)">
                                                    <path
                                                        d="M12 0.213135C5.38346 0.213135 0 5.59659 0 12.2131C0 18.8297 5.38346 24.2131 12 24.2131C18.6165 24.2131 24 18.8297 24 12.2131C24 5.59659 18.6165 0.213135 12 0.213135ZM18.7068 9.05524L11.0376 16.6643C10.5865 17.1154 9.86466 17.1455 9.38346 16.6943L5.32331 12.9951C4.84211 12.544 4.81203 11.7921 5.23308 11.3109C5.68421 10.8297 6.43609 10.7996 6.91729 11.2507L10.1353 14.1981L16.9925 7.34095C17.4737 6.85975 18.2256 6.85975 18.7068 7.34095C19.188 7.82216 19.188 8.57404 18.7068 9.05524Z"
                                                        fill="#0246D5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2111_2617">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0 0.213135)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>Artist Dashboard</span>
                                        </div>
                                        <div class="package--feature">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_2111_2617)">
                                                    <path
                                                        d="M12 0.213135C5.38346 0.213135 0 5.59659 0 12.2131C0 18.8297 5.38346 24.2131 12 24.2131C18.6165 24.2131 24 18.8297 24 12.2131C24 5.59659 18.6165 0.213135 12 0.213135ZM18.7068 9.05524L11.0376 16.6643C10.5865 17.1154 9.86466 17.1455 9.38346 16.6943L5.32331 12.9951C4.84211 12.544 4.81203 11.7921 5.23308 11.3109C5.68421 10.8297 6.43609 10.7996 6.91729 11.2507L10.1353 14.1981L16.9925 7.34095C17.4737 6.85975 18.2256 6.85975 18.7068 7.34095C19.188 7.82216 19.188 8.57404 18.7068 9.05524Z"
                                                        fill="#0246D5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2111_2617">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0 0.213135)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>Unique Artist Engagement</span>
                                        </div>
                                        <div class="package--feature">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_2111_2617)">
                                                    <path
                                                        d="M12 0.213135C5.38346 0.213135 0 5.59659 0 12.2131C0 18.8297 5.38346 24.2131 12 24.2131C18.6165 24.2131 24 18.8297 24 12.2131C24 5.59659 18.6165 0.213135 12 0.213135ZM18.7068 9.05524L11.0376 16.6643C10.5865 17.1154 9.86466 17.1455 9.38346 16.6943L5.32331 12.9951C4.84211 12.544 4.81203 11.7921 5.23308 11.3109C5.68421 10.8297 6.43609 10.7996 6.91729 11.2507L10.1353 14.1981L16.9925 7.34095C17.4737 6.85975 18.2256 6.85975 18.7068 7.34095C19.188 7.82216 19.188 8.57404 18.7068 9.05524Z"
                                                        fill="#0246D5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2111_2617">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0 0.213135)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>Earn rewards like a listener</span>
                                        </div>
                                        <div class="package--feature">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_2111_2617)">
                                                    <path
                                                        d="M12 0.213135C5.38346 0.213135 0 5.59659 0 12.2131C0 18.8297 5.38346 24.2131 12 24.2131C18.6165 24.2131 24 18.8297 24 12.2131C24 5.59659 18.6165 0.213135 12 0.213135ZM18.7068 9.05524L11.0376 16.6643C10.5865 17.1154 9.86466 17.1455 9.38346 16.6943L5.32331 12.9951C4.84211 12.544 4.81203 11.7921 5.23308 11.3109C5.68421 10.8297 6.43609 10.7996 6.91729 11.2507L10.1353 14.1981L16.9925 7.34095C17.4737 6.85975 18.2256 6.85975 18.7068 7.34095C19.188 7.82216 19.188 8.57404 18.7068 9.05524Z"
                                                        fill="#0246D5" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2111_2617">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0 0.213135)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>Profile and 5 Songs are actively promoted
                                                throughout site.</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('artist.subscription_plans.checkout') }}" class="pricing--plan--btn">
                                        <span>Subscribe Now</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 25 25" fill="none">
                                            <path d="M9.5 18.2131L15.5 12.2131L9.5 6.21313" stroke="white"
                                                stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- artist and listener subcription plan wrapper ends-->
        </div>

        <!-- dashboard pages area starts -->
    </div>
@endsection
