<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/test.css" type="text/css"/>
	<title></title>
</head>
<body style="background: #080808; margin:0;">
	<div style="width:100%;height:30px;" class="up" onclick="back()">
		
	</div>
	<div style="width:100%;height: 30px;" class="up" onclick="back()">
	<img src="img/strelka2.png" style="width:15px; margin-top: 6px; float: left; margin-left: 1.5vw;  margin-right: 0.5vw;">
	<div style="text-decoration : none;color: #e0e0e0; font-size: 16px; float: left;">Back</div>
	</div>
	<div class="tol">
		<div class="to_icon" onclick="to_photo('img/images/images/catalog/Orange_Passion/img1.jpg',1)">
			<img src="./img/images/images/catalog/Orange_Passion/img1.jpg">
		</div>
		<div class="to_icon" onclick="to_photo('img/images/images/catalog/Orange_Passion/img2.jpg',2)">
			<img src="./img/images/images/catalog/Orange_Passion/img2.jpg">
		</div>
		<div class="to_icon" onclick="to_photo('img/images/images/catalog/Orange_Passion/img3.jpg',3)"> 
			<img src="./img/images/images/catalog/Orange_Passion/img3.jpg">
		</div>
		<div class="to_icon" onclick="to_photo('img/images/images/catalog/Orange_Passion/img4.jpg',4)">
			<img src="./img/images/images/catalog/Orange_Passion/img4.jpg">
		</div>
	</div>
	<div class="toc" id="toc">
		<div style="float: left;width: 1.5vw; height: 1.8vw; border-radius: 4vw; background: white; font-size:1.5vw;margin-left: 2.5vw;padding-left:0.5vw;padding-bottom: 0.1vw;padding-top: 0.1vw; margin-top: 24vw;display: none; "id="l_str" onclick="prev_step()">
			<
		</div>
		<div style="float:right; width: 1.4vw; height: 1.8vw; border-radius: 4vw; background:white; font-size:1.5vw;margin-right: 2.5vw;padding-left:0.6vw;padding-bottom: 0.1vw;padding-top: 0.1vw;  margin-top: 24vw; display: block;"id="r_str" onclick="step()">
			>
		</div>
	</div>
	<div class="tor">
		<div style="font-size: 2.5vw; font-weight: 700;color:white;">
			Name
		</div>
		<div style="font-size:1.3vw; font-weight: 100;color:#777; margin-top:0.2vh;">
			Collection
		</div>
		<div style="display: inline-block; font-size: 1.5vw; font-weight:250; color:white; margin-top: 1.5vh;">
			$600
		</div>
		<div style="display:inline-block; font-size: 1.5vw;   font-weight: 250; text-decoration: line-through; color:#757575;margin-top: 1.5vh; ">
			$900
		</div>
		<div style="font-size:1.7vw; font-weight: 200;color:#777; margin-top: 2.5vh;">
			Size
		</div>
		<div style="display:inline-block; background:white;    text-align: center; justify-content: center; align-items: center; width: 2.5vw; height: 2.2vw; border-radius:0.1vw;margin-top: 1.4vh;padding-top: 0.5vw; font-weight:100;">
			M
		</div>
		<div style="display:inline-block; background:gray;    text-align: center; justify-content: center; align-items: center; width: 2.5vw; height: 2.2vw; border-radius: 0.1vw;margin-top: 1.4vh;padding-top: 0.5vw;font-weight: 100;">
			L
		</div>
		<div style="margin-top: 3vh;">
			<button style="width:9vw; aspect-ratio:2.5/1;background: white; border:none;font-family: 'Regular'; font-size: 1.2vw;font-weight: 700; cursor: pointer;">
			Add  to cart
		</button>
		</div>
		<div style="color: white;  margin-top: 5vh;">
			<?php
$handle = @fopen("img/images/images/catalog/Black_Butterfly/text.txt", "r");
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}
?>
		</div>
	</div>
<script>
	var elem = document.getElementById("toc");
    elem.style.backgroundImage = "url('img/images/images/catalog/Orange_Passion/img1.jpg')";
	var urla = ['img/images/images/catalog/Orange_Passion/img1.jpg', 'img/images/images/catalog/Orange_Passion/img2.jpg', 'img/images/images/catalog/Orange_Passion/img3.jpg', 'img/images/images/catalog/Orange_Passion/img4.jpg']
    var i=1;
    l_str.style.display="none";
    function to_photo(url,id) {
    	if(id==1){
    		l_str.style.display="none";
    		r_str.style.display="block";
    	}
    	else if(id==4){
    		r_str.style.display="none";
    		l_str.style.display="block";
    	}
    	else{
    		l_str.style.display="block";
    		r_str.style.display="block";
    	}
    	i=id;
    	elem.style.backgroundImage = "url('"+url+"')";
    }
    function step(){
    	i+=1;
    	elem.style.backgroundImage = "url('"+urla[i-1]+"')";
    	if(i==1){
    		l_str.style.display="none";
    		r_str.style.display="block";
    	}
    	else if(i==4){
    		r_str.style.display="none";
    		l_str.style.display="block";
    	}
    	else{
    		l_str.style.display="block";
    		r_str.style.display="block";
    	}
    }
    function prev_step(){
    	i-=1;
    	elem.style.backgroundImage = "url('"+urla[i-1]+"')";
    	    	if(i==1){
    		l_str.style.display="none";
    		r_str.style.display="block";
    	}
    	else if(i==4){
    		r_str.style.display="none";
    		l_str.style.display="block";
    	}
    	else{
    		l_str.style.display="block";
    		r_str.style.display="block";
    	}
    }
    function back(){
    	location.href='Test.php';
    }

</script>
</body>
</html>