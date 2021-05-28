<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papyrustest</title>
    <link rel="stylesheet" href="/style/accueil.css">
    <link rel="stylesheet" href="/style/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
    <body>
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
                          <div class="flex-md-right m-1 c">
                              <a href="{{ route('connexion') }}"><button type="button" class="btn bg-light">connection</button></a>
                          </div>
                          <div class="flex-md-right c">
                            <a href="{{ route('inscrire') }}"><button type="button" class="btn bg-light">inscription</button></a>
                        </div>
                    </div>
                  </nav>
                  <div class="text-center mt-2 cherche">
                    <form class="d-flex w-25 m-auto">
                        <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                        <button class="btn btn-outline-primary bg-primary" type="submit">Recherche</button>
                      </form>
                </div>
                <div class="container">
                  <div class="slide">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="images/appointment.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption 
                           d-md-block">
                            <h5 class="text-purple">Prendre un Rendez-vous</h5>
                            <p class="text-purple">Attention si vous avez déjà réservé un rendez-vous qui est en attente, alors vous ne pouvez plus reserver.</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="images/fuset.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5 >Un fuset</h5>
                            <p >Stephen hawking, un physicien chévronné a demontré que les trous noirs emettetent un rayonnement connu sous le nom de rayonnement hawking ! De ce fait ils doivent donc s'evaporer .</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="images/notes.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5 >Les notes</h5>
                            <p >Ces valeurs ne sont valables que si l'administrationa fini d'enregistrer les notes de tous les élèves de cette classe. Un message vous sera envoyé a la fin. Si vous l'avez déjà reçu, alors ces valeurs sont exactes</p>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Preécédante</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Suivante</span>
                      </a>
                    </div>
                  </div>
                </div>
                
            </div>
           
           
        </div>
        <section class="sect1">
          <div class="container">
           <div class="row dis">
             <div class="col-md-4 col1 ">
               <div class="card pt-2 shadow" style="width: 20rem;">
                 <img src="images/appointment.png" style="width: 18rem; margin-top: 10px;" class="card-img-top m-auto" alt="...">
                 <div class="card-body text-center tes">
                   <h5 class="card-title">Prendre un Rendez-vous</h5>
                   <p class="card-text text-center" style="font-size: 13px;">Attention si vous avez déjà réservé un rendez-vous qui est en attente, alors vous ne pouvez plus reserver.</p>
                   <a href="#" target="_blank" class="btn btn-primary">Rendez-vous</a>
                 </div>
               </div>
             </div>
             <div class="col-md-4 col1 ">
               <div class="card la pt-2 shadow" style="width: 20rem;">
                 <img  src="images/fuset.png"style="width: 18rem;" class="card-img-top m-auto" alt="...">
                 <div class="card-body text-center tes">
                   <h5 class="card-title">Un fuset</h5>
                   <p class="card-text text-center" style="font-size: 13px;">Stephen hawking, un physicien chévronné a demontré que les trous noirs emettetent un rayonnement.</p>
                   <a href="#" target="_blank" class="btn btn-primary">Un fuset</a>
                 </div>
               </div>
             </div>
             <div class="col-md-4 col1 ">
               <div class="card  lui pt-2 shadow" style="width: 20rem;">
                 <img src="images/notes.png" style="width: 18rem;" class="card-img-top m-auto" alt="...">
                 <div class="card-body text-center tes">
                   <h5 class="card-title">Les notes</h5>
                   <p class="card-text text-center" style="font-size: 13px;">Ces valeurs sont valables que si l'administration fini d'enregistrer les notes de tous les élèves de cette classe.</p>
                   <a href="#" target="_blank" class="btn btn-primary">Les notes</a>
                 </div>
               </div>
             </div>
           </div>
          </div>
       </section>

       <section>
         <div class="container">
           <h4 class="text-bold text-center">Nos meilleurs élèves</h4>
           <div class="container">
            <div class="slide">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/appointment.png" class="d-block w-75" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <div class="shadow p-3 bg-white rounded box-text" style="height:auto; width:150;">
                        
                      <h5 class="text-dark">Prendre un Rendez-vous</h5>
                      <p class="text-dark">Attention si vous avez déjà réservé un rendez-vous qui est en attente, alors vous ne pouvez plus reserver.</p>!
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/fuset.png" class="d-block w-75" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <div class="shadow p-3 bg-white rounded box-text" style="height:auto; width:150; ">
                        
                      <h5 class="text-dark" >Un fuset</h5>
                      <p class="text-dark" >Stephen hawking, un physicien chévronné a demontré que les trous noirs emettetent un rayonnement connu sous le nom de rayonnement hawking ! De ce fait ils doivent donc s'evaporer .</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/notes.png" class="d-block w-75" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <div class="shadow p-3 bg-white rounded box-text" style="height:auto; width:150;">
                        
                      <h5 class="text-dark" >Les notes</h5>
                      <p class="text-dark" >Ces valeurs ne sont valables que si l'administrationa fini d'enregistrer les notes de tous les élèves de cette classe. Un message vous sera envoyé a la fin. Si vous l'avez déjà reçu, alors ces valeurs sont exactes</p>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden text-dark"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden ">e</span>
                </a>
              </div>
            </div>
          </div>
         </div>
       </section>

       <footer class="container-fluid bg-dark">
         <div class="container p-2">
           <div class="row text-center">
             <div class="col-md-3">
               <h4 class="text-white text-bold">Compagni</h4>
               <ul>
                 <li><a href="">Biblio</a></li>
                 <li><a href="">Biblio</a></li>
                 <li><a href="">Biblio</a></li>
                 <li><a href="">Biblio</a></li>
               </ul>
             </div>

             <div class="col-md-3">
              <h4 class="text-white text-bold">A revoir</h4>
              <ul>
                <li><a href="">Biblio</a></li>
                <li><a href="">Biblio</a></li>
                <li><a href="">Biblio</a></li>
                <li><a href="">Biblio</a></li>
              </ul>
            </div>

            <div class="col-md-3">
              <h4 class="text-white text-bold">A revoir</h4>
              <ul>
                <li><a href="">Biblio</a></li>
                <li><a href="">Biblio</a></li>
                <li><a href="">Biblio</a></li>
                <li><a href="">Biblio</a></li>
              </ul>
            </div>

            <div class="col-md-3">
              <h4 class="text-white text-bold">Réseau</h4>
              <div class="social-link">
                <a href=""><i class=" bi bi-facebook m-2" style="font-size:30px;"></i></a>
                <a href=""><i class=" bi bi-twitter m-2" style="font-size:30px;"></i></a>
                <a href=""><i class=" bi bi-whatsapp m-2" style="font-size:30px;"></i></a>
              </div>
            </div>
           </div>
         </div>
       </footer>


       <script src="/style/accueil.js"></script>
        <script src="/style/jquery-3.5.1.min.js"></script>
        <script src="/style/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </body>
</html>