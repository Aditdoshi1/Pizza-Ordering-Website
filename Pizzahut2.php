<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>PIZZA HUT</title>
		<link rel = "stylesheet" href = "style.css">
		<link rel = " stylesheet" href = "products.css">
		<link href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
		<script src = "https://code.jquery.com/jquery-3.2.1.js"></script>
		<script type = "text/javascript">	
		$(document).ready(function(){
			$('.search-icon').click(function(){
				$('.search').slideToggle()
			})
			$('.close').click(function(){
				$('.search').slideToggle()
			}) 
		})
		</script>
		<link rel = "stylesheet" href = "style.css">
		<link rel = " stylesheet" href = "products.css">
		<link href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
		<script src = "https://code.jquery.com/jquery-3.2.1.js"></script>
		<script type = "text/javascript">	
$(document).ready(function() {
  $('#main-nav li a').click(function(e) {
  	
  	var targetHref = $(this).attr('href');
	  
	$('html, body').animate({
		scrollTop: $(targetHref).offset().top
	}, 1000);
    
    e.preventDefault();
  });
});
		</script>
	</head>
	<body>
	<?php
		$user=$_Post['user'];
	?>
		<div id  = "modal-wrapper" class = "modal">

		<form class = modal-content animate">

			<div class = "imgcontainer">
				<span onclick = "document.getElementById('modal-wrapper').style.display = 'none'" class = "close1">&times;</span>
				<img src = "pv1.jpg" alt = "Avatar" class = "avatar">
				<h2 style = "text-align:center">Peppy Paneer</h2>
			</div>
			<div class = "container">
				<h3><center>Ingridients: Onion, Crisp Capsicum, Red Paprika.</center></p><h3>
				<h3><center>Crust: Hand Tossed.</center></h3><br>
				<h3><center>Price: 340Rs.</center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
		</form>
	
	</div>

	<div id  = "modal-wrapper1" class = "modal1">

		<form class = modal-content1 animate">

			<div class = "imgcontainer1">
				<span onclick = "document.getElementById('modal-wrapper1').style.display = 'none'" class = "close1">&times;</span>
				<img src = "pv2.jpg" alt = "Avatar" class = "avatar1">
				<h2 style = "text-align:center">FarmHouse</h2>
			</div>
			<div class = "container">
				<h3><center>Ingridients: Onion, Crisp Capsicum, Mushrooms.</center></p><h3>
				<h3><center>Crust: Hand Tossed.</center></h3><br>
				<h3><center>Price: 350Rs.</center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
		</form>
	
	</div>

	<div id  = "modal-wrapper2" class = "modal2">

		<form class = modal-content2 animate">

			<div class = "imgcontainer2">
				<span onclick = "document.getElementById('modal-wrapper2').style.display = 'none'" class = "close1">&times;</span>
				<img src = "pv3.jpg" alt = "Avatar" class = "avatar2">
				<h2 style = "text-align:center">5 Peppers</h2>
			</div>
			<div class = "container2">
				<h3><center>Ingridients:Capsicum Yellow and Red, Red Paprika, Jalapeno </center></p><h3>
				<h3><center>Crust: Hand Tossed.</center></h3><br>
				<h3><center>Price: 400Rs.</center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
		</form>
	
	</div>

	<div id  = "modal-wrapper3" class = "modal3">

		<form class = modal-content3 animate">

			<div class = "imgcontainer2">
				<span onclick = "document.getElementById('modal-wrapper3').style.display = 'none'" class = "close1">&times;</span>
				<img src = "pv4.jpg" alt = "Avatar" class = "avatar3">
				<h2 style = "text-align:center">Dulex Veggie</h2>
			</div>
			<div class = "container3">
				<h3><center>Ingridients: Onion, Crisp Capsicum, Corn, Paneer.</center></p><h3>
				<h3><center>Crust: Hand Tossed.</center></h3><br>
				<h3><center>Price: 300Rs.</center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
			
		</form>
	
	</div>

	<div id  = "modal-wrapper4" class = "modal4">

		<form class = modal-content4 animate">

			<div class = "imgcontainer4">
				<span onclick = "document.getElementById('modal-wrapper4').style.display = 'none'" class = "close1">&times;</span>
				<img src = "pv5.jpg" alt = "Avatar" class = "avatar4">
				<h2 style = "text-align:center">Country Special</h2>
			</div>
			<div class = "container4">
				<h3><center>Ingridients:Black olives, Onion, Tomato, Jalapeno.</center></p><h3>
				<h3><center>Crust: Hand Tossed.</center></h3><br>
				<h3><center>Price: 430Rs.</center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
			
		</form>
	
	</div>

	<div id  = "modal-wrapper5" class = "modal5">

		<form class = modal-content5 animate">

			<div class = "imgcontainer5">
				<span onclick = "document.getElementById('modal-wrapper5').style.display = 'none'" class = "close1">&times;</span>
				<img src = "pnv1.jpg" alt = "Avatar" class = "avatar5">
				<h2 style = "text-align:center">Barbeque Chicken</h2>
			</div>
			<div class = "container5">
				<h3><center>Ingridients:Onion, Barbeque Chicken, Corn.</center></p><h3>
				<h3><center>Crust: Hand Tossed.</center></h3><br>
				<h3><center>Price: 350Rs.</center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
			
		</form>
	
	</div>

	<div id  = "modal-wrapper6" class = "modal6">

		<form class = modal-content6 animate">

			<div class = "imgcontainer6">
				<span onclick = "document.getElementById('modal-wrapper6').style.display = 'none'" class = "close1">&times;</span>
				<img src = "pnv2.jpg" alt = "Avatar" class = "avatar6">
				<h2 style = "text-align:center">Chicken Fiesta</h2>
			</div>
			<div class = "container6">
				<h3><center>Ingridients:Chunky Chicken, Spicy Chicken.</center></p><h3>
				<h3><center>Crust: Hand Tossed.</center></h3><br>
				<h3><center>Price: 300Rs.</center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
			
		</form>
	
	</div>

	<div id  = "modal-wrapper7" class = "modal7">

		<form class = modal-content7 animate">

			<div class = "imgcontainer7">
				<span onclick = "document.getElementById('modal-wrapper7').style.display = 'none'" class = "close1">&times;</span>
				<img src = "pnv3.jpg" alt = "Avatar" class = "avatar7">
				<h2 style = "text-align:center">Hot-n-Spicy Chicken</h2>
			</div>
			<div class = "container7">
				<h3><center>Ingridients:Hot-n-Spicy Barbeque Chicken, Olives.</center></p><h3>
				<h3><center>Crust: Hand Tossed.</center></h3><br>
				<h3><center>Price: 400Rs.</center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
			
		</form>
	
	</div>

	<div id  = "modal-wrapper8" class = "modal8">

		<form class = modal-content8 animate">

			<div class = "imgcontainer8">
				<span onclick = "document.getElementById('modal-wrapper8').style.display = 'none'" class = "close1">&times;</span>
				<img src = "pnv4.jpg" alt = "Avatar" class = "avatar8">
				<h2 style = "text-align:center">Chicken Dominator</h2>
			</div>
			<div class = "container8">
				<h3><center>Ingridients:Grill Chicken, Barbeque Chicken, Exotic Chicken</center></p><h3>
				<h3><center>Crust: Hand Tossed.</center></h3><br>
				<h3><center>Price: 500Rs.</center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
			
		</form>
	
	</div>

	<div id  = "modal-wrapper9" class = "modal9">

		<form class = modal-content9 animate">

			<div class = "imgcontainer9">
				<span onclick = "document.getElementById('modal-wrapper9').style.display = 'none'" class = "close1">&times;</span>
				<<img src = "pnv5.jpg" alt = "Avatar" class = "avatar9">
				<h2 style = "text-align:center">Chicken Mexicana</h2>
			</div>
			<div class = "container9">
				<h3><center>Ingridients:Onion, Hot-n- Spicy Chicken, Red Paprika.</center></p><h3>
				<h3><center>Crust: Hand Tossed.</center></h3><br>
				<h3><center>Price: 350Rs.</center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
			
		</form>
	
	</div>

	<div id  = "modal-wrapper10" class = "modal10">

		<form class = modal-content10 animate">

			<div class = "imgcontainer10">
				<span onclick = "document.getElementById('modal-wrapper10').style.display = 'none'" class = "close1">&times;</span>
				<img src = "bbk.jpg" alt = "Avatar" class = "avatar10">
				<h2 style = "text-align:center">Coco Cola</h2>
			</div>
			<div class = "container10">
				<h3><center>Price:50Rs.<center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
		</form>
	
	</div>

	<div id  = "modal-wrapper11" class = "modal11">

		<form class = modal-content11 animate">

			<div class = "imgcontainer11">
				<span onclick = "document.getElementById('modal-wrapper11').style.display = 'none'" class = "close1">&times;</span>
				<img src = "b5.jpg" alt = "Avatar" class = "avatar11">
				<h2 style = "text-align:center">ThumbsUp</h2>
			</div>
			<div class = "container11">
				<h3><center>Price:50Rs.<c/enter></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
			
		</form>
	
	</div>

	<div id  = "modal-wrapper12" class = "modal12">

		<form class = modal-content12 animate">

			<div class = "imgcontainer12">
				<span onclick = "document.getElementById('modal-wrapper12').style.display = 'none'" class = "close1">&times;</span>
				<img src = "b3.jpg" alt = "Avatar" class = "avatar12">
				<h2 style = "text-align:center">Fanta</h2>
			</div>
			<div class = "container12">
				<h3><center>Price:50Rs.</center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
			
		</form>
	
	</div>

	<div id  = "modal-wrapper13" class = "modal13">

		<form class = modal-content13 animate">

			<div class = "imgcontainer13">
				<span onclick = "document.getElementById('modal-wrapper13').style.display = 'none'" class = "close1">&times;</span>
				<img src = "b4.jpg" alt = "Avatar" class = "avatar13">
				<h2 style = "text-align:center">7-Up</h2>
			</div>
			<div class = "container13">
				<h3><center>Price:50Rs.</center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
			
		</form>
	
	</div>

	<div id  = "modal-wrapper14" class = "modal14">

		<form class = modal-content14 animate">

			<div class = "imgcontainer14">
				<span onclick = "document.getElementById('modal-wrapper14').style.display = 'none'" class = "close1">&times;</span>
				<img src = "b2.jpg" alt = "Avatar" class = "avatar14">
				<h2 style = "text-align:center">Sprite</h2>
			</div>
			<div class = "container14">
				<h3><center>Price:50Rs.</center></h3><br>
				<button type = "submit">Add to Cart</button>
			</div>
			
			
		</form>

</div>

<script>
	var modal = document.getElementById('modal-wrapper');
	window.onclick = function(event) {
		if(event.target == modal){
			modal.style.display = "none";
		}
	}
</script>	

<script>
	var modal1 = document.getElementById('modal-wrapper1');
	window.onclick = function(event) {
		if(event.target == modal1){
			modal1.style.display = "none";
		}
	}
</script>

<script>
	var modal2 = document.getElementById('modal-wrapper2');
	window.onclick = function(event) {
		if(event.target == modal2){
			modal2.style.display = "none";
		}
	}
</script>

<script>
	var modal3 = document.getElementById('modal-wrapper3');
	window.onclick = function(event) {
		if(event.target == modal3){
			modal3.style.display = "none";
		}
	}
</script>

<script>
	var modal4 = document.getElementById('modal-wrapper4');
	window.onclick = function(event) {
		if(event.target == modal4){
			modal4.style.display = "none";
		}
	}
</script>

<script>
	var modal5 = document.getElementById('modal-wrapper5');
	window.onclick = function(event) {
		if(event.target == modal5){
			modal5.style.display = "none";
		}
	}
</script>

<script>
	var modal6 = document.getElementById('modal-wrapper6');
	window.onclick = function(event) {
		if(event.target == modal6){
			modal6.style.display = "none";
		}
	}
</script>

<script>
	var modal7 = document.getElementById('modal-wrapper7');
	window.onclick = function(event) {
		if(event.target == modal7){
			modal7.style.display = "none";
		}
	}
</script>

<script>
	var modal8 = document.getElementById('modal-wrapper8');
	window.onclick = function(event) {
		if(event.target == modal8){
			modal8.style.display = "none";
		}
	}
</script>

<script>
	var modal9 = document.getElementById('modal-wrapper9');
	window.onclick = function(event) {
		if(event.target == modal9){
			modal9.style.display = "none";
		}
	}
</script>

<script>
	var modal10 = document.getElementById('modal-wrapper10');
	window.onclick = function(event) {
		if(event.target == modal10){
			modal10.style.display = "none";
		}
	}
</script>

<script>
	var modal11= document.getElementById('modal-wrapper11');
	window.onclick = function(event) {
		if(event.target == modal11){
			modal11.style.display = "none";
		}
	}
</script>

<script>
	var modal12 = document.getElementById('modal-wrapper12');
	window.onclick = function(event) {
		if(event.target == modal12){
			modal12.style.display = "none";
		}
	}
</script>

<script>
	var modal13 = document.getElementById('modal-wrapper13');
	window.onclick = function(event) {
		if(event.target == modal13){
			modal13.style.display = "none";
		}
	}
</script>

<script>
	var modal14 = document.getElementById('modal-wrapper14');
	window.onclick = function(event) {
		if(event.target == modal14){
			modal14.style.display = "none";
		}
	}
</script>

		<section>
			<div class = "full-width search">
				<div class = "search-form">
					<input type = "text" name = "" placeholder = "Type to Search">
					<div class = "close"><i class = "fa fa-times" aria-hidden = "true"
					></i></div>
				</div>
			</div>
			<div class = "full-width navbar">
				<img class = "g" src = "p2.png" width = "300" height = "50">
				<ul id = "main-nav">
					<li><a class = "active" href = "Pizzahut.html">Home</a></li>
					<li><a href = "#vp">Veg Pizza</a></li>
					<li><a href = "#nvp">Non-Veg Pizza</a></li>
					<li><a href = "#bv">Beverages</a></li>
					<li><a href = "Pizzahut.html"><?php echo "$user";					?></a></li>
					<li><a class = "search-icon"><i class = "fa fa-search" aria-hidden = "true"></i></a></li>
				</ul> 
				<div style = "clear:both"></div>
				<div class = "divider1"></div>
			</div>
			<div class = "products">
				<img class = "h" src = "big.jpeg" width = "1000">
				<div class = "divider2" ></div>
				<section0 id = "vp">
				<h1><center>
					<img class = "v" name = "veggie" src = "veg.png" width = "40"> VEG PIZZA</center></h1>
				<ul>
				<li><a class = "img"><img src = "pv1.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper').style.display='block'"><center>PeppyPanner</center></button>
				</li>
				<li><a class = "img1"><img src = "pv2.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper1').style.display='block'"><center>FarmHouse</center></button>
				</li>
				<li><a class = "img2"><img src = "pv3.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper2').style.display='block'"><center>5 Peppers</center></button>
				 </li>
				<li><a class = "img3"><img src = "pv4.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper3').style.display='block'"><center>Dulex Veggie</center></button>
				</li>
				<li> <a class = "img4"><img src = "pv5.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper4').style.display='block'"><center>Country Special</center></button>
				</li>
				</ul>
				<section1 id = "nvp">
				<div class = "divider2"></div>
				</section0>
				<h1><center><img class = "nv" name = "nveggie" src = "non.png" width = "40"> NON-VEG PIZZA</center></h1>
				<ul> 
				<li><a class = "img"><img src = "pnv1.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper5').style.display='block'"><center>Barbeque Chicken</center></button>
				</li>
				<li><a class = "img1"><img src = "pnv2.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper6').style.display='block'"><center>Chicken Fiesta</center></button>
				</li>
				<li><a class = "img2"><img src = "pnv3.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper7').style.display='block'"><center>Hot-n-Spicy Chicken</center></button>
				 </li>
				<li><a class = "img3"><img src = "pnv4.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper8').style.display='block'"><center>Chicken Dominator</center></button> 
				</li>
				<li> <a class = "img4"><img src = "pnv5.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper9').style.display='block'"><center>Chicken Mexicana</center></button>
				</li>
				</ul>
				<section2 id = "bv">
				<div class = "divider2"></div>
				</section1>
				<h1><center><img class = "be" name = "bev" src = "kk.png" width = "40"> BEVERAGES</center></h1>
				<ul>
				<li><a class = "img"><img src = "bbk.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper10').style.display='block'"><center>Coco Cola</center></button>
				</li>
				<li><a class = "img1"><img src = "b5.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper11').style.display='block'"><center>ThumbsUp</center></button>
				</li>
				<li><a class = "img2"><img src = "b3.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper12').style.display='block'"><center>Fanta</center></button>
				 </li>
				<li><a class = "img3"><img src = "b4.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper13').style.display='block'"><center>7-Up</center></button>
				</li>
				<li> <a class = "img4"><img src = "b2.jpg" width = "150"></a> 
					<button onclick = "document.getElementById('modal-wrapper14').style.display='block'"><center>Sprite</center></button>
				</li>
				</ul>
				
				<div class = "divider2"></div>
				<p>GST 5% TAX INCLUDED</p>
				<p>30 MINS GUARANTEE DELIVERY</p>
				<p>THANK YOU FOR CHOOSING US....</p>
				<div class = "divider4"></div>
				<div class = "divider5"></div>
			</div>
		</section2>
		</section>
	</body>
</html>	