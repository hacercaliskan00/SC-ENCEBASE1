<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatiple" content="IE=EDGE" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/9773e06d8b.js" crossorigin="anonymous"></script>  

    <title class="baslik">ScienceBase</title>
    <link rel="stylesheet" href="styles/styles.css " >
   

  </head>
  
  <body>
    <!--Header başlangıç-->
    <header class="header">
        <a href="#" class="logo">
         <img src="hcr.JPG" alt="logo" >

        </a>
        <nav class="navbar" >
            <a href="#home" class="active">Anasayfa</a>
            <a href="about.html" class="">Hakkımızda</a>
            <a href="#icerik" class="">Museion</a>
            <a href="product.html" class="">ScienceShop</a>
            <a href="#blog" class="">Bloglar</a>
            <a href="#reporter" class="">Yazılı Röportajlar</a>
            <a href="#contact" class="">İletişim</a>
          <a href="login.php" class="">Giriş</a>
            <a href="signup.html" class="">Kayıt</a>
            
        </nav>
        <div class="buttons">
            <button id="search-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <button id="cart-btn">
                <i class="fa-solid fa-bag-shopping"></i>
            </button>
            <button id="menu-btn">

                <i class="fas fa-bars"></i>
            </button>
            
        </div>

        <div class="search-form active">
      <input type="text" class="search-input" 
      id="search-box" placeholder="Ara" /> 
       

      <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        
       
     <div class="cart-items-container">
    <div class="cart-item">

    <i class="fas fa-times"></i>
    <img src="images/bardak.jpg" alt="product">
   <div class="content">
   <h3>Kupa Bardak</h3>
   <div class="price"> 80₺</div>

   </div>
      
    </div>
    <div class="cart-item">

      <i class="fas fa-times"></i>
      <img src="images/kure.jpg" alt="product">
     <div class="content">
     <h3>Küre Dünya</h3>
     <div class="price"> 80₺</div>
  
     </div>
        
      </div>
    <a href="#" class="btn"> Ürünleri İncele</a>
     </div>
    </header>
    <!--Header bitiş-->

     
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" placeholder="Kullanıcı Adı / E-mail">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" placeholder="Şifre">
                    </div>
                    <button class="button login__submit">
                        <span class="button__text">GİRİŞ YAP</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
                
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>








<!--footer başlangıç-->
<section class="footer">

  <div class="search">

    <input type="text" class="search-input" placeholder="Ara">
  <button class="btn btn-primary">Ara</button>
 
</div>
  <div class="share">

    <a href="#" class="fab fa-facebook"> </a>
    <a href="#" class="fab fa-twitter"> </a>
    <a href="#" class="fab fa-instagram"> </a>
    <a href="#" class="fab fa-linkedin"> </a>
    <a href="#" class="fab fa-pinterest"> </a>
  </div>
  <div class="links">
<a href="#" class="active">Anasayfa</a>
            <a href="#" class="">Hakkımızda</a>
            <a href="#" class="">Museion</a>
            <a href="#" class="">ScienceShop</a>
            <a href="#" class="">Bloglar</a>
            <a href="#" class="">İletişim</a>
            <a href="login.html" class="">Giriş</a>
            <a href="signup.html" class="">Kayıt</a>

  </div>

  <div class="credit"><span>2022</span> Tüm Hakları Saklıdır.</div>
</section>

<!--footer bitiş-->

<script src="js/script.js"></script>

</body>
</html>


