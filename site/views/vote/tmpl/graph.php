<html>

<head>
<style type="text/css">
	
body {
	padding: 20px;
	font: 1em Georgia, serif;
}


	
p {	
	height: 20px;
	text-indent: 5px;
	text-decoration: none;
	color: #fff;
	-webkit-animation-name: results;
	-moz-animation-name: results;
 	-webkit-animation-duration: 1s;
 	-moz-animation-duration: 1s;
 	-webkit-animation-iteration-count: 1;
 	-moz-animation-iteration-count: 1;
 	-webkit-animation-timing-function: ease;
 	-moz-animation-timing-function: ease;
}

@-webkit-keyframes results {
 0% {
 	width: 0;
	opacity: 0.5;
	background-color: red;
 }
 90% {
	width: 105%;
 }
 100% {
	width: 100%;
	opacity: 1;
 }
}

@-moz-keyframes results {
 0% {
 	width: 0;
	opacity: 0.5;
	background-color: red;
 }
 90% {
	width: 105%;
 }
 100% {
	width: 100%;
	opacity: 1;
 }
}
	
</style>
</head>
<body>


<?php 


$list =  $this->listPercent;
echo '<h1>'.$this->vote->title.'</h1>';
do{
    $k = key($list);
    $c = current($list);
    
    echo '<h3>'.$k.'</h3>';
    $r = rand(0,255);
    $g = rand(0,255);
    $b = rand(0,255);
    echo '<div id=$k style="width: '.($c *5).'px; "><p class="percent" style="background-color: rgb('.$r.','.$g.','.$b.');">'.$c.'%</p></div>';
}while(next($list))


 ?>
</body>
</html>