@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div><a href="/appointments">>>>>back</a></div>
            <div class="card">
            
                <div class="card-header">
                    Sender: {{($appointment->name)}}
                
                </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container">{{($appointment->message)}}</div>
                        
                    
                    </div>
                
                    <div class="card-footer">
                            <a class="btn btn-danger float-end" href="">Delete</a>
                        </div>    
            </div>
        </div>
    </div>
</div>
@endsection
