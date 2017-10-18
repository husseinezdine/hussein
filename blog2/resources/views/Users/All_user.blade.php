@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">List of Users</div>
                    @if(Auth::check())
                        <table class="table">
                            <tr>
                                <th>user name</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                </tr>
                            @endforeach
                            @endif
                        </table>
                        <div>
                            @if(Auth::guest())
                                <a href="/login" class="btn btn-info"> You need to login to see the list
                                </a>
                            @endif
                        </div>
                </div>
            </div>
        </div>








@endsection