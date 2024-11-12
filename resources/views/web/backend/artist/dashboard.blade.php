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

        <h1>Dashboard</h1>

        <!-- dashboard pages area starts -->
    </div>
@endsection
