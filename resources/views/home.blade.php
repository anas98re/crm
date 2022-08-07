@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           {{ __('You are logged in!') }}
           <br>
           <br>
           <div class="card">

               <div class="card-body">
                   @if (session('status'))
                       <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                       </div>
                   @endif

                    <a class="btn btn-outline-primary" href="/employees" role="button">All Employee</a>
                  {{-- <a class="btn btn-outline-danger" href="{{ route('employee.trashed')}}" role="button">Resigned employees<i class="fas fa-trash"></i></a>
                   <a class="btn btn-outline-success" href="{{ route('department')}}" role="button">All departments</i></a>
                   <a class="btn btn-outline-success" href="{{ route('jop')}}" role="button">All jops</i></a>
                   <a class="btn btn-outline-success" href="{{ route('employee.workTime')}}" role="button">Shifts</i></a>
                   <a class="btn btn-outline-success" href="{{ route('absence')}}" role="button">asbanse</i></a> --}}




               </div>

           </div>
           {{-- <div class="container mt-4">

               <h2>Carousel</h2>
               <div id="myCarousel" class="carousel slide" data-ride="carousel">

                 <!-- Indicators -->
                 <ul class="carousel-indicators">
                   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                     <li data-target="#myCarousel" data-slide-to="4"></li>
                 </ul>
                   <div style=" background-image: url('../../audrey.jpg');">
<img src="images/background1.jpg"></div> --}}
                   <img src="images/lames.jpg">


                 <!-- The slideshow -->
                 {{-- <div class="carousel-inner">
                   <div class="carousel-item active">
                     <img src="images/audrey1.jpg" alt="Los Angeles" width="1200" height="450">
                   </div>
                   <div class="carousel-item">
                     <img src="images/xxx.jpg" alt="Chicago" width="1200" height="450">
                   </div>
                     <div class="carousel-item">
                         <img src="images/tttt.jpg" alt="Chicago" width="1200" height="450">
                     </div>
                   <div class="carousel-item">
                     <img src="images/lames.jpg" alt="New York" width="1200" height="450">
                   </div>
                 </div> --}}


                 {{-- <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                   <span class="carousel-control-prev-icon"></span>
                 </a>
                 <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                   <span class="carousel-control-next-icon"></span>
                 </a>
               </div>

               </div>

               <video width="320" height="240" controls>
                   <source src="video/audrey1.mp4" type="video/mp4" >
                  </video> --}}

       </div>
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</div>
@endsection
