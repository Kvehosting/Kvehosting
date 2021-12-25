<?php 
//echo("<a href=admin.php>ACP</a><br>"); 

if(isset($_GET['act'])) 
{ 
$do=$_GET['act']; 
switch($do) 
{ 
 case 'form': show_form();break; 
 case 'sm' : submited();break; 
 default : show_form; break; 
} 

} 
else 
{ 
show_form(); 
} 

function show_form() 
{ 
?>
<html>
	<head>
<!--	<link type="text/css" rel="stylesheet" href="dic_style.css"> -->
<META http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<title>English-Karenni dictionary</title>
	<meta name="keywords" content=" pehbakaw, PEHBAKAW, Pehbakaw,Karenni, karenni, kareni, Kareni, Karenee, karenee, Karenni, karenni scriptures, kayah, kayahphu, kayah li, kayahli, karenni refugees, kayah refugees,  Karenni song lyrics, karenni song, red karen song, red karen, lyrics, karenni music, mp3, music mp3, Karenni dictionary, karenni picture dictionary, kayah dictionary" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="fonts.css"/>
	</head>
	<body>
	<!--google ad-->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7876117436837357",
          enable_page_level_ads: true
     });
</script> <!-- google ads end here -->

<!--		<nav>
     <!--<input type="text"  placeholder="search here" />
           <ul>
               <li><a href="index.html">Home</a></li>
			   <li><a href="dictionary.php">Dictionary</a></li>
               <li><a href="AboutUs.html">About</a></li>
               <li><a href="ContactUs.html">Contact</a></li>
			   
           </ul>
        </nav> -->
		
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">Pehbakaw</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li ><a href="index.html">Home</a></li>
				<li class="active"><a href="dictionary.php">Dictionary</a></li>
				<li><a href="contact_us.php">Contact</a></li>
				<li><a href="AboutUs.html">About</a></li>
			</ul>
		</div>
	</div>
</nav>

 <!-- <a class="btn btn-success" href=admin.php>Add new words</a> --> <!--add new words-->
<br>
<br>
<form name=frm method=POST action="dictionary.php?act=sm"> 
<h3 class="eng_kar">English-Karenni</h3> 
<div class="input-group">  <!-- START SEARCHING FORM -->
<span class="input-group-addon"><i class="glyphicons">Words</i></span>
<input class="input-lg" style="width:50%;" id="textarea" placeholder="ꤗꤛꤢꤕꤢꤨ꤭ ꤙꤤꤛꤢꤩ꤭" type=text name="word" > 
<input class="btn btn-lg btn-default" type=submit name="sbm" value="search"> <!-- class="button" for css -->
</div><!-- END SEARCHING FORM -->

<div>
	<div class="well" style="margin-top:15px;">
		<div class="jumbotron text-center">
			<p ><h1>English-Karenni</h1> <h1><small>online dictionary</small></h1></p>
			<!-- Facebook like and share btn-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=435382159879624";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="https://www.pehbakaw.com/dictionary.php" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
<!-- End Facebook like and share btn-->
		</div>
	</div>
</div>
</form> 
<footer>
	<a class="btn btn-warning" href="animals.html">Picture Dictionary</a> <!--class="pic_dic" for css-->
	<a class="btn btn-warning" href="mother.html">Song lyrics</a>	<!--class="pic_dic" for css-->
</footer>
<!-- facebook comments-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="https://www.pehbakaw.com/dictionary.php" data-numposts="5"></div>
<!-- End facebook comments-->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
<? 

} 
function submited() 
{ 

require("test.php"); 
//if(isset($_POST['sbm'])) 
//{ 
 $word=$_POST['word']; 
  
 $sql="select * from words where eng like '".$word."'"; 
 //echo($sql); 
 $result=mysqli_query($conn, $sql); 
 if(@mysqli_num_rows($result)!=0) 
 { 
  while($rows=mysqli_fetch_array($result)) 
  { 
   $grammar=$rows["grammar"]; 
   $karenni=$rows["karenni"];
	$kayah=$rows["kayah"];
	$speech=$rows["speech"];
	$two=$rows["two"];
	$three=$rows["three"];
	$four=$rows["four"];
	$five=$rows["five"];
	$six=$rows["six"];
	$kayahli=$rows["kayahli"];
	$speech_1=$rows["speech_1"];
	$seven=$rows["seven"];
	$eight=$rows["eight"];
  } 
 // echo("Word <b>$word</b> in karenni is : <b>$karenni</b><br>"); 
?> v 
<html>
	<body>
	<head>
<!--	<link type="text/css" rel="stylesheet" href="dic_style.css"> -->
	<meta charset="utf-8">
	<title>English-Karenni dictionary</title>
	<meta name="keywords" content=" pehbakaw, PEHBAKAW, Pehbakaw,Karenni, karenni, kareni, Kareni, Karenee, karenee, Karenni, karenni scriptures, kayah, kayahphu, kayah li, kayahli, karenni refugees, kayah refugees,  Karenni song lyrics, karenni song, red karen song, red karen, lyrics, karenni music, mp3, music mp3, Karenni dictionary, karenni picture dictionary" />
	 <link rel="icon" href="images/flag.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="fonts.css"/>
	</head>
	
<!--		<nav>
     <!--<input type="text"  placeholder="search here" />
           <ul>
               <li><a href="index.html">Home</a></li>
			   <li><a href="dictionary.php">Dictionary</a></li>
               <li><a href="AboutUs.html">About</a></li>
               <li><a href="ContactUs.html">Contact</a></li>
			   
           </ul>
        </nav>-->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">Pehbakaw</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li ><a href="index.html">Home</a></li>
				<li class="active"><a href="dictionary.php">Dictionary</a></li>
				<li><a href="contact_us.php">Contact</a></li>
				<li><a href="AboutUs.html">About</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="body">		
<!--<p ><a class="btn btn-success" href=admin.php>Add new words</a></p> <<<=====this is for add new words=====--> <!--add new words class="acp" for css-->
<br><br>
<form  name=frm method=POST action="dictionary.php?act=sm"> 
<h3 class="eng_kar">English-Karenni</h3>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicons">Words</i></span>
<input class="input-lg" style="width: 50%;" id="textarea" placeholder="ꤗꤛꤢꤕꤢꤨ꤭ ꤙꤤꤛꤢꤩ꤭" type=text name="word"> <input class="btn btn-lg btn-default" type="submit" name="sbm"  value="search"> 
</div>
</form> 
	<p style="text-indent: 40px;"><h2 class="text-success"><?=$word?></h2></p> <!-- searching keyword -->
<div class="jumbotron" style="font-family: Conv_kantarawaddy; border-left: thick solid #686868;"> <!--start defination \\ class="definition" for css--> 

	<p style="text-indent: 15px;"><em><?=$grammar?></em><br></p>
	<p class="define" style="text-indent: 65px;"><b><?=$karenni?></b></p>
	<p class="define" style="text-indent: 65px;"><b><?=$two?></b></p>
	<p class="define" style="text-indent: 65px;"><b><?=$three?></b></p>
	<p class="define" style="text-indent: 65px;"><b><?=$four?></b></p>

	<p style="text-indent: 15px;"><em><?=$speech?></em></p>

	<p class="define" style="text-indent: 65px;"><b><?=$kayah?></b></p>
	<p class="define" style="text-indent: 65px;"><b><?=$five?></b></p>
	<p class="define" style="text-indent: 65px;"><b><?=$six?></b></p>
	<br>
	<p style="text-indent: 15px;"><em><?=$speech_1?></em></p>

	<p class="define" style="text-indent: 65px;"><b><?=$kayahli?></b></p>
	<p class="define" style="text-indent: 65px;"><b><?=$seven?></b></p>
	<p class="define" style="text-indent: 65px;"><b><?=$eight?></b></p>
</div><!--end defination form-->
<footer>
	<a class="btn btn-warning" href="animals.html">Picture Dictionary</a> <!--class="pic_dic" for css-->
	<a class="btn btn-warning" href="mother.html">Song lyrics</a>	<!--class="pic_dic" for css-->
</footer>
<!-- facebook comments-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="https://www.pehbakaw.com/dictionary.php" data-numposts="5"></div>
<!-- End facebook comments-->
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
<? 
 } 
 else 
  echo("<b>$word</b> has not yet added! or make sure your spelling.<br><br>
<a href=dictionary.php>Home</a>"); 
//} 
$conn->close();

} 
?>