@extends('layout.master')
@section('title', 'VHDrone - Home')
@section('menuHome', 'active')  
@section('content')

<div class="container" id="compro">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <h1 class="compro">COMPANY PROFILE STARTUP VHDRONE INDONESIA</h1>
         <a href="/about" class="btn btn-success btn-lg"> Get Started</a>
    </div>
    <div class="col-md-3"></div>
</div>
</div>

<div class="jumbotron jumbotron-fluid">
      {{-- <h1 class="display-4">Fluid jumbotron</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> --}}
      <img src="/img/drone3.jpg" alt="" style="width:100%; margin-top: -65px; " class="control">
  </div>

<div class="container-fluid text-center" style="margin-bottom: -2%; margin-top: -120px;">
    <div class="row">
        <div class="col-md-6 bg-success" >
            <div class="isi1" style="margin-bottom: 5%;">                    
                <h3 class="text text-light" style="color: white;  margin-top:5%; font-family: 'Lato', sans-serif;">About Us</h3>       
                <img src="/img/christin-hume-Hcfwew744z4-unsplash.jpg" width="80%" height="314.75px" style="margin-top: 5%; margin-bottom: 5%;" class="center">
                <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, impedit? Molestiae dicta quis sequi architecto? Libero iste quasi maxime labore ullam magni architecto, ratione dolores aut rerum doloremque sit dignissimos.</p>
                <a href="/about" type="button" class="btn btn-outline-light btn-lg">More<a>
            </div>                                                
        </div>
        <div class="col-md-6 bg-success" >
            <div class="isi1" style="margin-bottom: 5%;">
                <h3 class="text text-light" style="color: white; margin-top:5%; font-family: 'Lato', sans-serif;" >Our Product</h3>
                <img src="img/drone1.jpg" width="80%" height="314.75px" style="margin-top: 5%; margin-bottom: 5%;" class="center">                                   
                <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, impedit? Molestiae dicta quis sequi architecto? Libero iste quasi maxime labore ullam magni architecto, ratione dolores aut rerum doloremque sit dignissimos.</p>
                <a href="/product" type="button" class="btn btn-outline-light btn-lg">More</a>
            </div>
        </div>
    </div>
</div>

@endsection