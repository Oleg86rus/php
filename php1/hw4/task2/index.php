<?php
define("ROOT" , $_SERVER['DOCUMENT_ROOT']);
define("IMG_BIG" , ROOT . "/gallery_img/big/");
define("IMG_SMALL" , ROOT . "/gallery_img/small/");
//var_dump(ROOT, IMG_BIG, IMG_SMALL);
//die();

if (isset($_POST['load'])) {
    $path_big = IMG_BIG . $_FILES["image"]["name"];
    $path_small = IMG_SMALL . $_FILES["image"]["name"];
   // echo "<pre>";
   // var_dump($_POST, $path_big, $path_small);
   // echo "</pre>";
   // die();

   if (move_uploaded_file($_FILES["image"]["tmp_name"], $path_big)) {
       header("Location: /");
   } else {
       echo "Ошибка<br>";
       die();
   }
}
function getGallery($path) {
    return array_splice(scandir($path), 2);
}


$images = getGallery(IMG_SMALL);
//var_dump($images);
//die();


?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Моя галерея</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="./scripts/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="./scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="./scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="./scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript">
	$(document).ready(function(){
		$("a.photo").fancybox({
			transitionIn: 'elastic',
			transitionOut: 'elastic',
			speedIn: 500,
			speedOut: 500,
			hideOnOverlayClick: false,
			titlePosition: 'over'
		});	}); </script>

</head>

<body>
<div id="main">
<div class="post_title"><h2>Моя галерея</h2></div>
	<div class="gallery">
<?php foreach ($images as $filename): ?>
<a rel="gallery" class="photo" href="/gallery_img/big/<?=$filename?>"><img src="/gallery_img/small/<?=$filename?>" width="150" height="100" /></a>
<?php endforeach; ?>
</div>
    Загрузить изображение:
    <form method="post" enctype="multipert/form-data">
        <input type="file" name="image">
        <input type="submit" value="Загрузить" name="load">
    </form>
</div>

</body>
</html>