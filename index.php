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

     <!--AnaSayfa başlangıç-->
    <section class="anasayfa" id="home">
      <div class="content">

     

      <h3>SCİENCEBASE</h3>
      <p>Evrensel Bilginin Küresel Merkezi </p>
      <a href="#" class="btn">Destek Ol</a>
    </div>
    </section>



     <!--AnaSayfa bitiş-->
     
     <!--İçerik başlangıç-->
   
    <section id="icerik">
  
  <div class="slot">
      <h1>MUSE<span class="muse">ION</span></h1>

    <div class="box-container">

      <div class="kart">
        <img src="images/makale.jpg" alt="" class="resim">
        <h5 class="baslik">GÜNCEL MAKALELER</h5>
        
      </div>
      <div class="kart">
        <img src="images/report.jpg" alt="" class="resim">
        <h5 class="baslik">Yazılı Röportajlar</h5>
        
      </div>
      <div class="kart">
        <img src="images/article.jpg" alt="" class="resim">
        <h5 class="baslik">Blog Köşesi</h5>
        
      </div>
   
    </div>

  </div>
  
    </section>

     <!--İçerik bitiş-->
     <!--Ürünler scienceshop başlangıç-->
     <section class="shop" id="product">
    <h1 class="heading"><span class="dkn">Science </span>Shop</h1>
     <div class="box-container">

       <div class="box">
         
        <div class="box-head">
      <span class="title">Dünya Küresi</span>
      <a href="#" class="name">Antik, 33cm, Işıksız</a>
        </div>  
        <div class="image"> <img src="images/kure.jpg" alt="" class="resimbir"></div>
        <div class="box-bottom">
          <div class="info">
            <b class="price">1.500₺</b><br>
            <span class="amount">Dünyanın siyasi durumunu eskitme harita tekniği ile geçmişi ve bugünü bir arada sunan “Antik Küre” </span><br>
          </div>
          <div class="shop-btn">
            <a href="#">
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
   
      </div>  
  
      <div class="box">
         
        <div class="box-head">
      <span class="title">ScienceBase Dergi</span>
      <a href="#" class="name">ScienceBase Dergi (12 Sayı)</a>
        </div>  
        <div class="image"> <img src="images/dergi.jpg" alt="" class="resimbir"></div>
        <div class="box-bottom">
          <div class="info">
            <b class="price">50₺</b><br>
            <span class="amount">Dünya'daki bilimsel devrimleri "ScienceBase Dergi" ile anlık olarak takip edebilirsiniz </span><br>
          </div>
          <div class="shop-btn">
            <a href="#">
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
   
      </div>  




      <div class="box">
         
        <div class="box-head">
      <span class="title">Kupa Bardak</span>
      <a href="#" class="name">Porselen, mavi, ScienceBase logo</a>
        </div>  
        <div class="image"> <img src="images/bardak.jpg" alt="" class="resimbir"></div>
        <div class="box-bottom">
          <div class="info">
            <b class="price">80₺</b><br>
            <span class="amount">ScienceBase logo tasarım "Kupa Bardak" </span><br>
          </div>
          <div class="shop-btn">
            <a href="#">
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
   
      </div>  





      <div class="box">
         
        <div class="box-head">
      <span class="title">Kitap Ayracı</span>
      <a href="#" class="name">Gece mavisi, 2x8 inç</a>
        </div>  
        <div class="image"> <img src="images/ayrac1.JPG" alt="" class="resimiki"></div>
        <div class="box-bottom">
          <div class="info">
            <b class="price">50₺</b> <br>
            <span class="amount">ScienceBase Logo tasarımlı kitap ayracı </span><br>
          </div>
          <div class="shop-btn">
            <a href="#">
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
   
      </div>  






      </div>
     </section>



     <!--Ürünler scienceshop bitiş-->


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

     <!--Günün Bloğu Başlangıç-->

     <section class="blog" id="blog"><h1 class="heading"><span class="dkn">Güncel </span>Bloglar</h1>
      <div class="box-container">

        <div class="box">
       <img src="images/alinti.png" alt="quote" >
        <p> <span class="yazi">  <a href="#">LEZZET DÜNYANIZI ZENGİNLEŞTİREBİLECEK BAZI DÜNYA MUTFAKLARI </a></span><br>


          Yemek insanlığın var oluşunda bu yana insanlık için en temel ve en önemli ihtiyaç olmuştur. 
          Bu yüzden farklı kültürler farklı bakış açıları ile yemeğe verdikleri bu önemi farklı biçimlerde ürünlerine yansıtmıştır. 
          Ve dünya mutfağı kültürü geçmişten bu yana gelen bu biçimlendirmeler ile şekillenerek günümüz hallerini ortaya çıkarmışlardır.
           Son zamanlarda benim de yakinen takip ettiğim dünya mutfağını sizlerin de gözleri önüne sermek istedim. Eğer farklı tatlar ve farklı lezzetleri 
           denemeyi seviyorsanız bu blog gayet ilginizi çekecektir. 
          Öncelikle Dünya mutfağının ne demek olduğunu ve ne tür tatlar barındırdığını irdelemek gerekir.

          </p>
        <img src="images/avatarlarh.jpg" alt="avatar" class="userbir foto">
        <h3>Hacer ÇALIŞKAN</h3>
        <div class="kurucu"> YAZAR</div>
        </div>
       




        <div class="box">
          <img src="images/alinti.png" alt="quote" >
           <p> <span class="yazi"> <a href="#" > CODE REVİEW NEDİR? </a></span><br>
            Herhangi bir proje oluştururken bunu en iyi şekilde ve en az hatayla oluşturmak isteriz. bunu yaparken birçok yöntem kullanırız.
            bu yöntemler arasında belki de en önemlisi diyebileceğimiz Code Review (Kod İnceleme), yazmış olduğumuz kodların gözden geçirilerek hatalı 
            yazılan veya hata payı olan kodların belirlenmesi ve bunların yeniden değerlendirilip düzenlenmesi aşamaları üzerine kurulu bir 
            çalışma sistemidir. eğer belirlenen kodlar üzerinde düzeltmeler yapılıyorsa bu işleme de "Pair Programming" denir.
            yazılmış olan kodların en iyi şekilde olabilmesi için her projede yapılması gereken bir değerlendirme işlemidir. fakat, 
            bu işin püf noktalarından biri aynı projenin Code Review'ını birden fazla kişinin yapmasıdır. bu şekilde birçok kişinin inceleyerek değerlendirdiği
            bir projedeki hata oranını düşürme ihtimalimiz çok yüksektir.
   
             </p>
           <img src="images/avatarlary.jpg" alt="avatar" class="user foto">
           <h3>Yusuf DALBUDAK</h3>
           <div class="kurucu"> YAZAR</div>
           </div>






      </div>


     </section>

     <!--Günün Bloğu Bitiş-->

<!--İLETİŞİM Başlangıç-->
<section class="contact" id="contact">
  <h1 class="heading"><span class="dkn">Bize </span>Ulaş</h1>
    <div class="row">
      <iframe
      class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12043.034258035326!2d28.775341999999995!3d41.00865734999999!2m
      3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa3891b5c9713%3A0xb7f9717f399
      12ffe!2zS8O8w6fDvGvDp2VrbWVjZSwgS2FuYXJ5YSwgMzQyOTAgS8O8w6fDvGvDp2VrbWVjZS_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1672885515355!5m2!1str!2str"
       width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <form action="baglanti.php" method="post">

      <h3>İletişime Geç</h3>

      <div class="inputbox">
<i class="fas fa-user"></i>
<input  name="isim" type="text" placeholder="Ad Soyad">

      </div>
      <div class="inputbox">
        <i class="fas fa-envelope"></i>
        <input name="email" type="email" placeholder="E-mail Adresiniz">
        
              </div>
              <div class="inputbox">
                <i class="fas fa-phone"></i>
                <input  name="telefon" type="number" placeholder="Telefon Numarası">
                
                      </div>
                      <input type="submit" class="btn" value="Gönder">
    </form>
    </div>

</section>

<!--İLETİŞİM Bitiş-->

<!--Yazılı Röportajlar Başlangıç-->
<section class="report" id="reporter"> <h1 class="heading"><span class="dkn">Yazılı </span>Röportajlar</h1>

<div class="box-container">

<div class="box">
  <div class="image">
<img src="images/roportbir.png" alt="röportaj">

</div>
<div class="content">

  <a href="#" class="title"> Başarının Sırrı Nedir?</a>
  <span> Yusuf DALBUDAK/ 10 Mayıs. 2022</span>
  <p>+Merhabalar Ümit Bey hoşgeldiniz.....
    -Merhaba hoşbuldum.......
  </p>
  <a href="#" class="btn"> Devamını Oku</a>
</div>
</div>
<div class="box">
  <div class="image">
<img src="images/roportiki.png" alt="röportaj">

</div>
<div class="content">

  <a href="#" class="title"> Girişimcilik Nedir?</a>
  <span> Hacer Çalışkan/ 3 Ocak. 2023</span>
  <p>+Merhabalar Emre Bey hoşgeldiniz.....
    -Merhaba hoşbuldum.......
  </p>
  <a href="#" class="btn"> Devamını Oku</a>
</div>
</div>
<div class="box">
  <div class="image">
<img src="images/asuman.jpg" alt="röportaj">

</div>
<div class="content">

  <a href="#" class="title">Yönetimde Başarı</a>
  <span> Hacer ÇALIŞKAN/ 2 Ocak. 2023</span>
  <p>+Merhabalar Asuman Hanım hoşgeldiniz.....
    -Merhaba hoşbuldum.......
  </p>
  <a href="#" class="btn"> Devamını Oku</a>
</div>
</div>

</div>

</section>

<!--Yazılı Röportajlar Bitiş-->

<!--footer başlangıç-->
<section class="footer">

  <div class="search">

    <input type="text" class="search-input" placeholder="Ara">
  <button class="btn btn-primary">Ara</button>
 
</div>
  <div class="share">

    <a href="https://www.facebook.com/profile.php?id=100088988122017"  target="_blank" class="fab fa-facebook ikonlar" >  </a>
    <a href="https://twitter.com/ScienceBase0" target="_blank"  class="fab fa-twitter ikonlar"> </a>
    <a href="https://www.instagram.com/science.base0/" target="_blank" class="fab fa-instagram ikonlar"> </a>
    <a href="#" class="fab fa-linkedin ikonlar"> </a>
    <a href="#" class="fab fa-pinterest ikonlar"> </a>
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
