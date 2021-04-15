@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <div><a href="/admin">>>>>back</a></div>
            <div class="card">
                <div class="card-header">{{ __('Appointments') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Session::has('success'))
                                    <div class=" alert alert-success form-group" role="alert">
                                       {{Session::get('success')}} 
                                    </div>

                                    @endif


                    @if($appointments->count() > 0)
                            <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-sm">
                                            <thead>
                                                <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone No</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Message</th>

                                                </tr>
                                            </thead>

                                            @foreach($appointments as $appointment)
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">{{ $appointment->id}}</th>
                                                    <td>{{ $appointment->name}}</td>
                                                    <td>{{ $appointment->email}}</td>
                                                    <td>{{ $appointment->phone}}</td>
                                                    <td>{{ $appointment->date}}</td>
                                                    <td><a href="/appointments/{{$appointment->id}}" class="btn btn-primary">View Message</a></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            @endforeach
                                        </table>

                            </div>
                    @endif

                        
                            
                            

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
