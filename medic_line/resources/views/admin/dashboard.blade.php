@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>Welcome!!! <a href="#">{{ Auth::user()->name }}</a></div>

                    <div class="col-lg-3">
                        <div class="panel panel-success">
                            <div class="panel-heading text-center">
                                USERS
                            </div>

                            <div class="panel-body">
                                <h1 class="text-center">{{ $users_count }}</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                CONTACTS
                            </div>

                            <div class="panel-body">
                                <h1 class="text-center">{{ $contacts_count}}</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                APPOINTMENTS
                            </div>

                            <div class="panel-body">
                                <h1 class="text-center">{{ $appointments_count}}</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                TRASHED CONTACTS
                            </div>

                            <div class="panel-body">
                                <h1 class="text-center">26</h1>
                            </div>
                        </div>
                    </div>

                    
                    
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
