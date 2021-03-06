<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title> Web Sitem </title>
         
         <!-- Bootstrap CSS -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body class="arka-plan2">
        <nav class="navbar arka-plan1 navbar-light navbar-expand-md fixed-top padding ">
            <div class="container-fluid">
                <a href class="navbar-brand"><img src="Fotoğraflar/logo.png" style="width:60px;" ><b class="font">  İrem Değerli  </b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-ac">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu-ac">
                    <ul class="navbar-nav ms-auto mb-2">
                        <li class="nav-item">
                         <a class="nav-link" href="Anasayfa.html">ANASAYFA</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="cv.html">CV</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="Şehrim.html">ŞEHRİM</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="İlgi.html">İLGİ ALANLARI</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="Miras.html">MİRASIMIZ</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="İletişim.html">İLETİŞİM</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="Login.html">LOGİN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <br><br><br><br>
              <div class="container-fluid arka-plan2 padding">
               <br><br>
               <h3>
            <?php
            if(isset($_POST['email']) && isset($_POST['sifre'])) 
            { 
                    $email = $_POST['email'];
                    $sifre = $_POST['sifre'];
 
                    if(empty($email) || empty($sifre)) 
                    {
                        echo 'Lütfen boş bırakmayın';
                    } 
                    else 
                    {
                        if($email == 'b211210038@ogr.sakarya.edu.tr' && $sifre == '4321') 
                        {
                        session_start();
                        $_SESSION['email'] = 'b211210038@ogr.sakarya.edu.tr';
                        $_SESSION['sifre'] = '4321';
                        echo 'Giriş yaptınız! Hoşgeldin B211210038';
                        } 
                        else 
                        {
                          echo 'Yanlış kullanıcı adı ya da şifre';
                        }
                    }

            } 
            else
            {
                echo 'Lütfen formu kullanın';
            }
            ?>
            </h3>
            </div>
          </main>

        <footer class="arka-plan1 text-center text-black padding">
          İREM DEĞERLİ © SAKARYA ÜNİVERSİTESİ 
        </footer>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>