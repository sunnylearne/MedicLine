@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row justify-content-center">
    
        <div class="col-md-10">
        <div><a href="/admin">>>>>back</a></div>
            <div class="card">
                <div class="card-header">{{ __('Contacts') }}</div>

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


                    @if($contacts->count() > 0)
                            <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-sm">
                                            <thead>
                                                <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Message</th>
                                                <th scope="col">Time</th>

                                                </tr>
                                            </thead>

                                            @foreach($contacts as $contact)
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">{{ $contact->id}}</th>
                                                    <td>{{ $contact->name}}</td>
                                                    <td>{{ $contact->email}}</td>
                                                    <td>{{ $contact->subject}}</td>
                                                    <td><a href="/contacts/{{$contact->id}}" class="btn btn-primary">View Message</a></td>
                                                    <td>{{ $contact->created_at->diffForHumans()}}</td>
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
