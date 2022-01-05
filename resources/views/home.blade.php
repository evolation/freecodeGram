@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div  class="col-3 p-5">
            <img src="/svg/temp_profile.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>122</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="https://www.pilones.de">{{$user->profile->url ?? 'N/A'}}</a></div>
        </div>

    </div>

    <div class="row pt-5" >
        <div class="col-4">
            <img class="w-100" src="https://www.theknot.com/tk-media/images/8d7f9239-ddb5-47e7-8c81-eb39283c8262~rs_768.h">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://cdn.eathappyproject.com/wp-content/uploads/2021/02/The-Most-Beautiful-Flowers-in-the-World-With-Name-and-Picture.jpg">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://cdn.eathappyproject.com/wp-content/uploads/2021/08/Rose.jpg">
        </div>

    </div>

</div>
@endsection
