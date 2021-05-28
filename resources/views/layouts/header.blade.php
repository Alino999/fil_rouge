@extends('layouts.apps')

@section('content')


<div class="container-fluid">
    <div class="container mb-2">
        <div class="row">
            <div class="col-md-4 ">
                <img class="logo" src="fonts/logo-suivi.png" alt="logo">
            </div>
            <div class="col-md-8 school ">
                <h3 class="text ml-5">SCHOOL STUDENT'S MANAGEMENT</h3>
                <div class="row ml-5">
                  <div class="col-md-4"><i class=" bi bi-telephone m-2" style="font-size:29px;"></i> <br> +226 71 40 62 88</div>
                  <div class="col-md-4"><i class=" bi bi-envelope m-2" style="font-size:29px;"></i> <br> alainguigma99@gmail.com</div>
                  <div class="col-md-4"><i class=" bi bi-geo-alt m-2" style="font-size:29px;"></i> <br> Ouagadougou / bf2515</div>
                </div>
            </div>
        </div>
    </div>
    <div class=" m-auto" >
        <nav class="navbar navbar-expand-sm navbar-light bg-#1b6597" id="nav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>                  
            <div class="container ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link text-white hov" href="#">ACCUEIL</a>
                        
                      </li>
                      <li class="nav-item active deroulant">
                        <div class="deroulant">
                          <a class="nav-link text-white hov" href="#">MESAGERIE</a>
                        <ul class="sous">
                          <li><a href="">Rendez-vous</a></li>
                          <li><a href="">Calendrier</a></li>
                        </ul>
                        </div>
                      </li>
                      <li class="nav-item active deroulant ">
                        <div class="deroulant">
                          <a class="nav-link text-white hov" href="#">PARENTS</a>
                          <ul class="sous">
                            <li><a href="">Voir profil</a></li>
                            <li><a href="">Votre profil</a> </li>
                          </ul>
                        </div>
                        
                      </li>
                      <li class="nav-item active deroulant">
                       <div class="deroulant">
                        <a class="nav-link text-white hov" href="#">ELEVES</a>
                        <ul class="sous">
                          <li><a href="">Notes</a></li>
                          <li><a href="">Absence</a></li>
                          <li><a href="">Retard</a></li>
                          <li><a  href=""> Casier scolaire</a></li>
                        </ul>
                       </div>
                      </li>
                    </ul>
                  </div>
                  <div class="flex-md-right c m-1">
                      <a href="{{ route('login') }}"><button type="button" class="btn bg-light">connection</button></a>
                  </div>
                  <div class="flex-md-right c">
                    <a href="{{ route('inscription') }}"><button type="button" class="btn bg-light">inscription</button></a>
                </div>
            </div>
          </nav>
        </div>

@endsection