php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incription</title>

    <link rel="stylesheet" href="/regforms/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/regforms/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Inscription</h2>
                        <form method="POST"  class="register-form" action="{{ route('inscription') }}" id="register-form">
                            @csrf

                            @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif

                            @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom" id="name" placeholder="Nom"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="prenom" id="name" placeholder="Prénom"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="bi bi-person"></i></label>
                                <input type="text" name="pseudo" id="name" placeholder="Pseudo"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="E-mail"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Mot de passe"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Confirmé votre mot de passe"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class=" bi bi-calendar-minus"></i></label>
                                <input type="text" name="genre" id="name" placeholder="Genre"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="bi bi-telephone"></i></label>
                                <input type="text" name="telephone" id="name" placeholder="Téléphone"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit"  id="signup" class="form-submit" value="Inscription"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="/regforms/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">je ne suis pas un membre</a>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <script src="/regforms/vendor/jquery/jquery.min.js"></script>
    <script src="/regforms/js/main.js"></script>
</body>
</html>
