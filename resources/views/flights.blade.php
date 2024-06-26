<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights Available</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.min.css') }}">

</head>
<body>
    
<div class="container-fluid"></div>
<nav class="navbar navbar-expand-md navbar-light nav-background nav-bg justify-content-end">

<button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>    
<div class=" container-fluid justify-content-end default-color ">
        <ul class="navbar-nav pt-2">
            <li class="nav-item px-2
            pt-2 text-black"> <img src="{{ asset('/images/call_24dp_FILL0_wght400_GRAD0_opsz24.svg') }}" alt="">Call Center
</li>
            <li class="nav-item px-2 pt-2"><img src="{{ asset('/images/search_24dp_FILL0_wght400_GRAD0_opsz24.svg') }}" alt=""></li>
            <li class="nav-item px-2 pt-2"><img src="{{ asset('/images/language_24dp_FILL0_wght400_GRAD0_opsz24.svg') }}" alt=""></li>
            <li class="nav-item px-2 pt-2"><a href="{{route('login')}}" class="login default-color" ><img src="{{ asset('/images/group_24dp_FILL0_wght400_GRAD0_opsz24.svg') }}" alt=" " class="px-2">Loyalty Log in</a></li>
        </ul>
    </div>
    
   </nav>
   </div>
   <div class="container-fluid mt-3">
   <nav class="navbar navbar-expand-md navbar-light nav-background nav-bg justify-content-end">


  
            <a class="navbar-brand px-5" href=""><img src="{{ asset('/images/logo.svg') }}" height="50px"  alt="logo"> <a>
            
            <div class="collapse navbar-collapse justify-content-center  " id="navbarNav">
              <ul class="navbar-nav ">
                <li class="nav-item link">
                  <a class="nav-link  default-color" href=""> <img src="/images/sports_bar_24dp_FILL0_wght400_GRAD0_opsz24.svg"   alt="cheers">TO TEN YEARS</a>
                </li>
                <li class="nav-item link">
                  <a class="nav-link default-color" href="">JM REWARDS</a>
                </li>
                <li class="nav-item link">
                  <a class="nav-link text-black" href="">TRAVEL INFO</a>
                </li>
                
               
              </ul>
            
            </div>
            
          </nav>

          </div>





          <div class="container-fluid mt-3">
          <img src="{{ asset('/images\gomadrcv2.jpg') }}" style="width:100%">
          </div>


          <!--Available flights!-->

          <div class="container mt-3 text-center justify-content-center">
            <h2 class="default-color text-center">Available Flights</h2>
         
            @if($flights->isEmpty())
        <p class="text-center">No flights available for the specified criteria.</p>
    @else
    <div class="container text-center justify-content-center mb-5">
    <div class="row">

      <div class="col">
    <table class="text-center border">
            <thead class="border">
                <tr>
                    <th class="px-5 border">From</th>
                    <th class="px-5 border">To</th>
                    <th class="px-5 border">Date</th>
                </tr>
            </thead>
            <tbody class="border">
                @foreach($flights as $flight)
                    <tr>
                        <td class="px-5">{{ $flight->from }}</td>
                        <td class="px-5">{{ $flight->to }}</td>
                        <td class="px-5">{{ $flight->date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <div class="col float-left pt-3">
        <a href="{{route('login')}}" class="links btn btn-primary text-white">Next</a>
        </div>
        
    
        </div>     @endif
        
    </div>
        
        </div>
</body>
</html>