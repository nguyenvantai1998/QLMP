<?php
    include("select.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfume</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- swiper -->
    <link rel="stylesheet" href="./assets/css/swiper.min.css">
    <!-- page -->
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>

    <!-- header -->
    <header id="header">
        <div class="hd-content">
            <div class="hd-about-content">
                <div class="top-quote">
                    <div class="text-quote">
                        <p>HỆ THỐNG PHÂN PHỐI NƯỚC HOA & MỸ PHẨM CHÍNH HÃNG HÀNG ĐẦU VIỆT NAM</p>
                        <p>VỚI 50 CỬA HÀNG TRÊN TOÀN QUỐC</p>
                    </div>
                    <div class="phone-quote">
                        <a href="#">
                            <div class="icon">
                                <div>
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                            </div>
                            <div class="phone">
                                <div class="hours">
                                    Đặt hàng: (8h30 - 21h30)
                                </div>
                                <div class="telephone">
                                    0907.364.216 <span>(CSKH)</span>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="icon">
                                <div>
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                            </div>
                            <div class="phone">
                                <div class="hours">
                                    Đặt hàng: (8h30 - 21h30)
                                </div>
                                <div class="telephone">
                                    0907.364.216 <span>(CSKH)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="top-navbar">
                    <div class="menu-bar">
                        <div class="logo">
                            <img src="./assets/img/logo.png" alt="logo">
                        </div>
                        <div class="search-trademark">
                            <div class="search-bar">
                                <input type="text" placeholder="Tìm nước hoa hoặc nhãn hiệu...">
                                <button><a href="#"><i class="fas fa-search"></i></a></button>
                            </div>
                        </div>
                        <div class="option-trademark">
                            <select class="selectpicker">
                                <option value="" disabled="" selected>Chọn Nhãn hiệu</option>
                                <option value="adidas">Adidas</option>
                                <option value="agent-provocateur">Agent Provocateur</option>
                                <option value="aigner-parfums">Aigner Parfums</option>
                                <option value="alaia">Alaia</option>
                                <option value="alexander-mqueen">Alexander Mqueen</option>
                                <option value="alexandrej">Alexandre.J</option>
                                <option value="anna-sui">Anna Sui</option>
                                <option value="armand-basi">Armand Basi</option>
                                <option value="azzaro">Azzaro</option>
                                <option value="balenciaga">Balenciaga</option>
                                <option value="balmain">Balmain</option>
                                <option value="bebe">Bebe</option>
                                <option value="bentley">Bentley</option>
                                <option value="bond-no-9">Bond No 9</option>
                                <option value="bottega-veneta">Bottega Veneta</option>
                                <option value="britney-spears">Britney Spears</option>
                                <option value="brut">Brut</option>
                                <option value="burberry">Burberry</option>
                                <option value="bvlgari">Bvlgari</option>
                                <option value="cacharel">Cacharel</option>
                                <option value="calvin-klein">Calvin Klein</option>
                                <option value="carolina-herrera">Carolina Herrera</option>
                                <option value="cartier">Cartier</option>
                                <option value="cartoon-network">Cartoon Network</option>
                                <option value="chloe">Chloe</option>
                                <option value="chopard">Chopard</option>
                                <option value="dior">Christian Dior</option>
                                <option value="clinique">Clinique</option>
                                <option value="coach">Coach</option>
                                <option value="creed">Creed</option>
                                <option value="david-victoria-beckham">David &amp; Victoria Beckham</option>
                                <option value="davidoff">Davidoff</option>
                                <option value="diesel">Diesel</option>
                                <option value="dkny">DKNY</option>
                                <option value="dolce-gabbana">Dolce &amp; Gabbana</option>
                                <option value="dsquared">DSQUARED²</option>
                                <option value="dunhill">Dunhill</option>
                                <option value="elie-saab">Elie Saab</option>
                                <option value="elizabeth-arden">Elizabeth Arden</option>
                                <option value="elizabeth-taylor">Elizabeth Taylor</option>
                                <option value="eon-productions">Eon Productions</option>
                                <option value="ermenegildo-zegna">Ermenegildo Zegna</option>
                                <option value="escada">Escada</option>
                                <option value="estee-lauder">Estee Lauder</option>
                                <option value="eternal-love-parfums">Eternal Love Parfums</option>
                                <option value="ferrari">Ferrari</option>
                                <option value="giorgio-armani">Giorgio Armani</option>
                                <option value="givenchy">Givenchy</option>
                                <option value="gres">Gres</option>
                                <option value="gucci">Gucci</option>
                                <option value="guerlain">Guerlain</option>
                                <option value="guess">Guess</option>
                                <option value="guy-laroche">Guy Laroche</option>
                                <option value="harajuku-lovers">Harajuku Lovers</option>
                                <option value="hermes">Hermes</option>
                                <option value="hugo-boss">Hugo Boss</option>
                                <option value="issey-miyake">Issey Miyake</option>
                                <option value="j-del-pozo">J Del Pozo</option>
                                <option value="jaguar">Jaguar</option>
                                <option value="jean-charles-brosseau">Jean Charles Brosseau</option>
                                <option value="jean-paul-gaultier">Jean Paul Gaultier</option>
                                <option value="jennifer-lopez">Jennifer Lopez</option>
                                <option value="jessica-simpson">Jessica Simpson</option>
                                <option value="jimmy-choo">Jimmy Choo</option>
                                <option value="john-richmond">John Richmond</option>
                                <option value="john-varvatos">John Varvatos</option>
                                <option value="joop">Joop</option>
                                <option value="juicy-couture">Juicy Couture</option>
                                <option value="kenzo">Kenzo</option>
                                <option value="kilian">Kilian</option>
                                <option value="la-prairie">La Prairie</option>
                                <option value="lacoste">Lacoste</option>
                                <option value="lancome">Lancôme</option>
                                <option value="lange">Langé</option>
                                <option value="lanvin">Lanvin</option>
                                <option value="lolita-lempicka">Lolita Lempicka</option>
                                <option value="lomani">Lomani</option>
                                <option value="louis-vuitton">Louis Vuitton</option>
                                <option value="moi">M.O.I</option>
                                <option value="mancera">Mancera</option>
                                <option value="marc-jacobs">Marc Jacobs</option>
                                <option value="mariah-carey">Mariah Carey</option>
                                <option value="mercedes-benz">Mercedes Benz</option>
                                <option value="michael-kors">Michael Kors</option>
                                <option value="minus417">Minus 417</option>
                                <option value="miss-vietnam">Miss Saigon</option>
                                <option value="missoni">Missoni</option>
                                <option value="miu-miu">Miu Miu</option>
                                <option value="mont-blanc">Mont Blanc</option>
                                <option value="moschino">Moschino</option>
                                <option value="narciso-rodriguez">Narciso Rodriguez</option>
                                <option value="nautica">Nautica</option>
                                <option value="nina-ricci">Nina Ricci</option>
                                <option value="notes-of-mekong">Notes of Mekong</option>
                                <option value="nuoc-hoa-xe-hoi">Nuoc Hoa Xe Hoi</option>
                                <option value="paco-rabanne">Paco Rabanne</option>
                                <option value="parfums-christine-darvin">Parfums Christine Darvin</option>
                                <option value="royal-essence">Parfums De Marly</option>
                                <option value="parfums-lively">Parfums Lively</option>
                                <option value="parfums-marline">Parfums Marline</option>
                                <option value="paris-hilton">Paris Hilton</option>
                                <option value="perris-monte-carlo">Perris Monte Carlo</option>
                                <option value="playboy">Playboy</option>
                                <option value="porsche-design">Porsche Design</option>
                                <option value="prada">Prada</option>
                                <option value="ralph-lauren">Ralph Lauren</option>
                                <option value="rasasi">Rasasi</option>
                                <option value="reem-acra">Reem Acra</option>
                                <option value="roberto-cavalli">Roberto Cavalli</option>
                                <option value="roberto-verino">Roberto Verino</option>
                                <option value="salvatore-ferragamo">Salvatore Ferragamo</option>
                                <option value="sarah-jessica-parker">Sarah Jessica Parker</option>
                                <option value="sean-john">Sean John</option>
                                <option value="shiseido">Shiseido</option>
                                <option value="sisley">Sisley</option>
                                <option value="suddenly">Suddenly</option>
                                <option value="swarovski">Swarovski</option>
                                <option value="swiss-army">Swiss Army</option>
                                <option value="thierry-mugler">Thierry Mugler</option>
                                <option value="tom-ford">Tom Ford</option>
                                <option value="tommy-hilfiger">Tommy Hilfiger</option>
                                <option value="tory-burch">Tory Burch</option>
                                <option value="tous">Tous</option>
                                <option value="true-religion">True Religion</option>
                                <option value="trussardi">Trussardi</option>
                                <option value="valentino">Valentino</option>
                                <option value="van-cleef-and-arpels">Van Cleef and Arpels</option>
                                <option value="vera-wang">Vera Wang</option>
                                <option value="versace">Versace</option>
                                <option value="victoria-s-secret">Victoria's Secret</option>
                                <option value="viktor-rolf">Viktor &amp; Rolf</option>
                                <option value="yves-saint-laurent">Yves Saint Laurent</option>
                                <option value="zadig-voltaire">Zadig &amp; Voltaire</option>
                            </select>
                        </div>
                        <div class="login">
                            <div class="items">
                                <div>
                                    <a href="#" data-toggle="modal" data-target="#loginModal">Đăng nhập</a>
                                </div>
                                <div>
                                    <a href="#">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar">
                        <div class="logo">
                            <img src="/assets/img/logo.png" alt="logo">
                        </div>
                        <div class="menu-responsive">
                            <div class="btn-menu">
                                <i class="fas fa-bars"></i>
                            </div>
                            <ul class="categories-menu-mobile-hide">
                                <li>
                                    <i class="fas fa-times close-nav-mobile"></i>
                                </li>
                                <li>
                                    <div class="search-trademark">
                                        <div class="search-bar">
                                            <input type="text" placeholder="Tìm nước hoa hoặc nhãn hiệu...">
                                            <button><a href="#"><i class="fas fa-search"></i></a></button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="expandable">
                                        <span>Cho Nữ</span>
                                    </a>

                                </li>
                                <li>
                                    <a href="#" class="expandable">
                                        <span>Cho Nam</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="expandable"><span>Unisex</span></a>
                                </li>
                                <li><a href="google.com"><span>Mỹ phẩm</span></a></li>
                                <li><a href="#"><span>Mỹ phẩm Langé</span></a></li>
                                <li><a href="#"><span>Mỹ phẩm M.O.I</span></a></li>
                                <li><a href="#"><span>Mỹ Phẩm Lancôme</span></a></li>
                                <li><a href="#"><span>SP Khuyến Mãi</span></a></li>
                                <li><a href="#"><span>SP Mới</span></a></li>
                                <li><a href="#"><span>SP Bán chạy</span></a></li>
                            </ul>
                        </div>
                        <nav>
                            <ul class="menulevel1">
                                <li class="menuMobile">
                                    <div class="menu">
                                        <i class="fas fa-bars"></i> <span>danh mục</span> <i
                                            class="fas fa-caret-down"></i>


                                        <ul class="categories-menu">
                                            <li class="menu-mobile-show">
                                                <a href="#"><span>DANH MỤC</span></a>
                                                <i class="fas fa-times close"></i>
                                            </li>
                                            <li class="menu-mobile-show">
                                                <div class="search-trademark">
                                                    <div class="search-bar">
                                                        <input type="text" placeholder="Tìm nước hoa hoặc nhãn hiệu...">
                                                        <button><a href="#"><i class="fas fa-search"></i></a></button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="expandable">
                                                    <span>Cho Nữ</span>
                                                </a>

                                            </li>
                                            <li>
                                                <a href="#" class="expandable">
                                                    <span>Cho Nam</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="expandable"><span>Unisex</span></a>
                                            </li>
                                            <li><a href="google.com"><span>Mỹ phẩm</span></a></li>
                                            <li><a href="#"><span>Mỹ phẩm Langé</span></a></li>
                                            <li><a href="#"><span>Mỹ phẩm M.O.I</span></a></li>
                                            <li><a href="#"><span>Mỹ Phẩm Lancôme</span></a></li>
                                            <li class="menu-mobile-show"><a href="#"><span>SP Khuyến Mãi</span></a></li>
                                            <li class="menu-mobile-show"><a href="#"><span>SP Mới</span></a></li>
                                            <li class="menu-mobile-show"><a href="#"><span>SP Bán chạy</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">SP KHUYẾN MÃI</a>
                                </li>
                                <li>
                                    <a href="#">SP MỚI</a>
                                </li>
                                <li>
                                    <a href="#">SP BÁN CHẠY</a>
                                </li>
                                <li>
                                    <a href="#">TƯ VẤN</a>
                                </li>
                                <li>
                                    <a href="#">BLOG</a>
                                </li>
                                <li>
                                    <a href="video.php">VIDEO</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="phone">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="icon">
                                            <div>
                                                <i class="fas fa-phone-volume"></i>
                                            </div>
                                        </div>
                                        <div class="phone">
                                            <div class="hours">
                                                Đặt hàng: (8h30 - 21h30)
                                            </div>
                                            <div class="telephone">
                                                1800 6047
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon">
                                            <div>
                                                <i class="fas fa-phone-volume"></i>
                                            </div>
                                        </div>
                                        <div class="phone">
                                            <div class="hours">
                                                Đặt hàng: (8h30 - 21h30)
                                            </div>
                                            <div class="telephone">
                                                1800 6047
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- Modal Login Form -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login Now</h2>
		    <form class="login-form">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" placeholder="">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="">
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember Me</small>
    </label>
    <button type="submit" class="btn btn-login float-right">Submit</button>
  </div>
  
</form>
<div class="copy-text">Created with <i class="fa fa-heart"></i> by Grafreez</div>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
  </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>