<?php
require "_header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mediathéque</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
			

				<span class="topbar-child1">
					Bienvenue Chez Mediathéque
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						 <?PHP echo $_SESSION['mail']; ?>
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>€</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="views/session.php" class="logo">
					<img src="tuto/logo.jpg" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="tuto/product1.php">Livres</a>
							</li>
									
								

							<li>
								<a href="produithomme.php">CD</a>
							</li>

								<a href="produitfemme.php">Films</a>
							</li>

							<li>
								<a href="tuto/cart.php">Panier</a>
							</li>

							<li>
								<a href="materiel.php">Musique</a>
							</li>
						</ul>
					</nav>
				</div>


				<!-- Header Icon -->
				<div class="header-icons">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>


					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
					
			<span class="header-icons-noti"><?=$panier->count();?></span>

						<!-- Header cart noti -->
							<?php
						$ids = array_keys($_SESSION['panier']);
if(empty($ids)){
	$products=array();
}else{
$products = $DB->query("SELECT * FROM products WHERE id IN (".implode(',',$ids).')');}?>

            <div class="header-cart header-dropdown">
            	  <strong>Liste de Commande :</strong><br>

<?php foreach ($products as $product): ?>

            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
              <ul class="header-cart-wrapitem">

                <li class="header-cart-item">

         
                  <div class="header-cart-item-img">
                    <img src="<?=$product->id;?>.jpg" alt="IMG">
                  </div>


                  <div class="header-cart-item-txt">
                    <a href="product-detail.html?id=<?= $product->id; ?>" class="header-cart-item-name">
                     <?=$product->name;?>
                    </a>

                    <span class="header-cart-item-info">
                      <?= $_SESSION['panier'][$product->id]; ?> x <?= number_format($product->price,2,',',' ');?>  €
                    </span>
                        
                  </div>
                </li>


               

                
              </ul>
                 <?php endforeach?>

              <div class="header-cart-total">
                Total: <?= number_format($panier->total(),2,',',' '); ?> €
              </div>

              <div class="header-cart-buttons">
                <div class="header-cart-wrapbtn">
                  <!-- Button -->
                  <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                    View Cart
                  </a>
                </div>

                <div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="wishlist.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Wishlist
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
					</li>


					<li class="item-menu-mobile">
						<a href="index.html">Home</a>
						<ul class="sub-menu">
							<li><a href="index.html">Homepage V1</a></li>
							<li><a href="home-02.html">Homepage V2</a></li>
							<li><a href="home-03.html">Homepage V3</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.php">Features</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image:  url(images/7ab5903b9a75c7a7ae57dec4d83b8eb9.png);">
		<h2 class="l-text2 t-center">
			Femme
		</h2>
		<p class="m-text13 t-center">
		 Collection 2019
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						
					

				

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="rechercher un film...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					 <form method="GET" action="rechercherProduit.php">
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								
							</div>
						</div>
                         </form>
					</div>
  
					<!-- Product -->
					
  <?PHP
include "../Backend/core/produitC.php";
$Produit1P=new ProduitP();
$listeProduit=$Produit1P->produitfemme();

?>                  
							<div class="row">

								
							<!-- Block2 -->


	                       
	                       	<?PHP
foreach($listeProduit as $row){
	?>    
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
		<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative"  >
                                      <?= "<img src='../Backend/image/".$row["photodeproduit"]."' height='350 px'   >";    ?>    
									   <div class="block2-overlay trans-0-4">
                    <a href="addwishlist.php?id=<?= $row['Referenceproduit'];?>"class="addPanier block2-btn-addwishlist hov-pointer trans-0-4">
                      <i class="addPanier icon-wishlist icon_heart_alt" href="addwishlist.php?id=<?= $row['Referenceproduit'];?>" aria-hidden="true"></i>
                      <i class="addPanier icon-wishlist icon_heart dis-none" 
                      href="addwishlist.php?id=<?= $row['Referenceproduit'];?>"aria-hidden="true"></i>
                    </a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a   class="addPanier flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name "addPaniers"  href="addpanier.php?id=<?= $row['Referenceproduit'];?>" >Add to Cart</a>
										</div>
									</div>
								</div>
								</div>

								<div class="block2-txt p-t-20">
										<input type="hidden" name="Referenceproduit" value="<?PHP echo $row['Referenceproduit'];  ?>">
									<a href="product-detail2.php?ref=<?= $row['Referenceproduit']; ?>" class="block2-name dis-block s-text3 p-b-5">
									<?PHP echo $row['Nomproduit'] ; ?>
									</a>
									
   
										<?php $listepromotion=$Produit1P->modifierPrixs($row['Referenceproduit']);?>
                             	<?PHP
                             	$i=$row['prix'];
                             	$reference=$row['Referenceproduit'];
                             	if($listepromotion->rowCount()==0){
                             		echo '<span class="block2-price m-text6 p-r-5">
									<prix>'.$i.'</prix>€
									</span>';	
                             	}
foreach($listepromotion as $row){
	?>   
	<?php
echo '<del class="block2-price m-text6 p-r-5 block2-labelsale">
									<prix>'.$i.'</prix>€
									</del>';
									?>
	<span class="block2-newprice m-text8 p-r-5">

										<?PHP echo $row['prix']-($row['solde']/100)*$row['prix']; ?> DT

									</span>
									
    	<?PHP
}
?>
	</div>
							
								
								</div>

	
							<?PHP
}
?>
                         
						   </div>

					<!-- Pagination -->
				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Adresse
				</h4>

				<div>
					<p class="s-text7 w-size27">
						34 rue victor Basch, Massy, 91300
					</p>

					<p class="s-text7 w-size27">
						0625212845
					</p>


								</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Nos oeuvres
						</a>
					</li>

					<li class="p-b-9">
						<a href="https://www.facebook.com/Mediathéque/" class="s-text7">
							Contactez nous
						</a>
					</li>


				</ul>

			</div>
			<picture>
					<source media="(min-width: 100px)" srcset="tuto/logo.jpg">
  <img src="tuto/logo.jpg" alt="Flowers" style="width:390px;">
			</picture>
		</div>

	


			<div class="t-center s-text8 p-t-20">
			 L'équipe Mediathéque <i class="fa fa-heart-o" aria-hidden="true"></i> 
			</div>
		</div>
	</footer>





	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">

		$(function(){
			$("[name='search-product']").keyup(function(){
				$(".block2").each(function(){
					var chaine=$("[name='search-product']").val();
					chaine=chaine.toLowerCase();
					var n1=$(this).parent().find('.block2-name').text();
					n1=n1.toLowerCase();
					t=n1.indexOf(chaine);
					if(t==-1){
						$(this).parent().hide();
					}
					else{
						$(this).parent().show();
					}
					
				})
			})

		})
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 0, 500 ],
	        connect: true,
	        range: {
	            'min': 0,
	            'max': 500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>

</body>
</html>
