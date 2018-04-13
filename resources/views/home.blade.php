@extends('layouts.app')

@section('content')

@if (Auth::user()->access == 'Admin') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Access</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user['id']}}</th>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>{{$user['access']}}</td>
                        <td>    
                                <form action="{{action('HomeController@destroy', $user->id)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
@else
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            User View! Yay!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
