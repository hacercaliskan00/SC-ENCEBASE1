<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatiple" content="IE=EDGE" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/9773e06d8b.js" crossorigin="anonymous"></script>  

    <title class="baslik">Hakkımızda</title>
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
            <a href="#about" class="">Hakkımızda</a>
            <a href="#Kategori" class="">Kategori</a>
            <a href="#Projeler" class="">Projeler</a>
            <a href="#product" class="">Ürünler</a>
            <a href="#blog" class="">Bloglar</a>
            <a href="#reporter" class="">Yazılı Röportajlar</a>
            <a href="#contact" class="">İletişim</a>
            
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

     


     <!--Hakkımızda başlangıç-->
     <section class="hakkimizda" id="about">
      <h1 class="heading"><span class="dkn">BİZ </span>KİMİZ?</h1>
    <div class="row"> 
   <div class="image">
  <img src="images/bizkimiz.png" alt="hakkımızda">

   </div>
   <div class="content">

    <h3>SCİENCEBASE olarak bilimsel fikirleri ve bilimsel devrimleri anlık olarak sizlere sunacağız</h3>
<p>Vizyonumuz; Dünya sınırlarında yaşanmasını gönülden arzuladığımız bilimsel aydınlanma devrimini ateşlemek ve küresel ölçekteki kitlesel aydınlanma ve bilimsel farkındalık mücadelesini daha da ileri götürmektir. Bu vizyon çerçevesinde; modern bilimi en doğru, en geniş kapsamlı ve en güvenilir biçimde halka ulaştırmak amacıyla Türkiye'nin en büyük ve Dünya'nın sayılı bilim arşivini yaratmaya çalışmaktayız...</p>
<a href="#" class="btn">Daha fazla</a>   
</div>
    </div>
    
  
  
  
  
  
  </section>

     <!--Hakkımızda bitiş-->

     

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
            <a href="#" class="">Kategori</a>
            <a href="#" class="">Projeler</a>
            <a href="#" class="">Ürünler</a>
            <a href="#" class="">Bloglar</a>
            <a href="#" class="">İletişim</a>

  </div>

  <div class="credit"><span>2022</span> Tüm Hakları Saklıdır.</div>
</section>

<!--footer bitiş-->

<script src="js/script.js"></script>

</body>
</html>
