<?php 
	require "./header.php";
	require_once __DIR__ . '/vendor/autoload.php'; 

$articl = R::dispense( 'articl' );
?>
		<div class="container" style="color:#fff">
			<?php 
				$articls= R::findAll( 'articl' );
				foreach ($articls as $articlItem) {
					?>
					<div class="single">
						<img src="<?php echo $articlItem['img'] ?>" class="img-thumbnail imgs">
						<a href="/single?id=<?php echo $articlItem['id']?>" class="anons">
						<h2 class="anons"><?php echo $articlItem['anons'] ?></h2>
						</a>
						<p class="s"><?php echo $articlItem['text'] ?></p>
					</div>
					<?php
				}
			?>
		
</div>
<?php
require './footer.php';
?>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyBdPhIMX988nEo2BaweeV_FwyVDtRIhpdk",
    authDomain: "forwordpress-1c05c.firebaseapp.com",
    projectId: "forwordpress-1c05c",
    storageBucket: "forwordpress-1c05c.appspot.com",
    messagingSenderId: "277015255508",
    appId: "1:277015255508:web:f270acc88da9c71e1d1e41"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
</script>
