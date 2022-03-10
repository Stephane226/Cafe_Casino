<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/fontawesome/css/all.css" >

    <link rel="stylesheet" href="./styles/styles.css">
    <title>Document</title>
</head>
<body>
    
<?php include("./header.php")  ?>
<?php include("./body_content.php")  ?>


















<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    
	jQuery(document).ready(function($){
		$('.question').on('click', function(){
			if($(this).hasClass('active')){
				$('.question').removeClass('active');
				$('.arrow').removeClass('arrow-active');
				$('.answer').slideUp();
			}
			else{
				$('.question').removeClass('active');
				$('.arrow').removeClass('arrow-active');
				$('.answer').slideUp();
				$(this).addClass('active');
				$(this).children('.arrow').addClass('arrow-active');
				$(this).children('.answer').slideToggle('slow');
			}
		});
	});

 </script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>