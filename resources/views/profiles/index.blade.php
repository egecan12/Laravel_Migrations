@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-3">
            <img src="/img/logo2.png" alt="" srcset="" height="130" width="130" class="mr-2" style="margin-left: 40% ;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between">
                <h1>{{ $user->username }}</h1>
                <a href="">Post a photo</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>23</strong>Followers</div>
                <div class="pr-5"><strong>23</strong>Likes</div>
                <div class="pr-5"><strong>23</strong>Following</div>
            </div>
            <div class="font-weight-bold pt-2 ">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url}}</a></div>

        </div>

        <div class="row pt-5">

            <div class="col-4"> <img src="https://images.unsplash.com/photo-1594199690958-2966700b5f50?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="w-100" alt="" srcset=""> </div>
            <div class="col-4"> <img src="https://images.unsplash.com/photo-1509718443690-d8e2fb3474b7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="w-100" alt="" srcset=""> </div>
            <div class="col-4"> <img src="https://images.unsplash.com/photo-1534972195531-d756b9bfa9f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="w-100" alt="" srcset=""> </div>
    </div>
    @endsection