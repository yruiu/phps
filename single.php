<?php 
	require "./header.php";
	$ids=$_GET['id'];
	$article  = R::findOne( 'articl', ' id = ? ', [ $ids ] );
?>
<div class="container">
<div class="issingularsingle">
			
				<img src="<?php echo $article['img'];?>" alt="" class="imgs">
				<h2 class="anons"><?php echo $article['anons'];?></h2>
				<p class="s"><?php echo $article['text'];?></p>
</div>
</div>
<?php 
require './footer.php'
?>