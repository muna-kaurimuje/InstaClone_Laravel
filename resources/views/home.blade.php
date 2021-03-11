@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row offset-md-2">
        <div class="col-3 p-5">
            <img src="/svg/pp.jpg"  class="rounded-circle img-fluid">
        </div>
        <div class="col-9 pt-5">
          <div><h1>{{ $user->username }}</h1></div>
          <div class="d-flex">
            <div class="pr-3"><strong>153</strong> posts</div>
            <div class="pr-3"><strong>23k</strong> followers</div>
            <div class="pr-3"><strong>212</strong> following</div>
          </div>
          <div class="pt-4 font-weight-bold">github.com/muna.kaurimuje</div>
          <div>Software Developer at @official.nust.na</div>
          <div>Final Year Cyber Security at @official.nust.na</div>
        </div>
    </div>

    <div class="row offset-md-2 pt-5">
        <div class="col-4">
            <img src="https://th.bing.com/th/id/OIP.3PBEaun088lPqfuB4pd0DgHaHa?pid=ImgDet&rs=1" class="img-fluid">
    </div>
    <div class="col-4">
        <img src="https://th.bing.com/th/id/OIP.3PBEaun088lPqfuB4pd0DgHaHa?pid=ImgDet&rs=1" class="img-fluid">
</div>
<div class="col-4">
    <img src="https://th.bing.com/th/id/OIP.3PBEaun088lPqfuB4pd0DgHaHa?pid=ImgDet&rs=1" class="img-fluid">
</div>
</div>
@endsection
