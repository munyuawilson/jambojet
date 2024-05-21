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
            <li class="nav-item px-2 pt-2"><a href="" class="login default-color" ><img src="{{ asset('/images/group_24dp_FILL0_wght400_GRAD0_opsz24.svg') }}" alt=" " class="px-2">Loyalty Log in</a></li>
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





    <div class="container shadow-lg mt-5 rounded border text-center ">
        <h3 class="mt-3">Login</h3>
        <form action="{{route('/login-form')}}"  method="post">
{{ method_field('POST') }}
    @csrf
        <div class="form-group mt-3">
            <label for="Email"> Email
    
            </label> <br>
            <input type="email" name="email" required>
        </div>
        <div class="form-group mt-3 mb-3">
            <label for="">Password</label> <br>
            <input type="password" name="password" required>
        </div>
        <div class="form-group mt-2 mb-5">
            <input type="submit" class="btn btn-primary" value="Log in">
        </div>
        
        </form>

    </div>
          </body>
</html>
