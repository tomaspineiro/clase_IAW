<?php require_once('./inc/head.php');?>

			<img class="img-circle" src="assets/images/guy.jpg" alt="">
			<span class="title">Tomas Blog</span>
			<span class="tagline">A creative man is motivated by the desire to achieve, not by the desire to beat others.</span>
		</h1>
	</div>

<?php require_once('./inc/nav.php');?>	

<main id="main">

	<div class="container">

		<div class="row topspace">
			<div class="col-sm-8 col-sm-offset-2">
 				
				<?php
					for ($i=0; $i < 6 ; $i++) { 
						include('./inc/articleBlog.php'); 
					}
				?>
 				
			</div> 
		</div>

		<center class="">
			<ul class="pagination">
				<li class="disabled"><a href="">&laquo;</a></li>
				<li class="active"><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li><a href="">5</a></li>
				<li><a href="">6</a></li>
				<li><a href="">&raquo;</a></li>
			</ul>
		</center>
	

	</div>	<!-- /container -->

</main>

<?php require_once('./inc/footer.php');?>
