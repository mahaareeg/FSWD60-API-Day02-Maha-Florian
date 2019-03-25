
<?php

function curl_get($url) {
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);
curl_close($client);
return $response;
}

$url = 'http://feeds.bbci.co.uk/news/technology/rss.xml';
$response = curl_get($url);
$xml = simplexml_load_string($response);
$num = rand(0,20);

$url2="http://api.serri.codefactory.live/random/";
$req = curl_get($url2);
$result = json_decode($req);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Newspaper</title>
	<link rel="stylesheet" type="text/css" href="news.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>


<header>


	<h4>

	<img src="img/logo-newspaper-cf.png" /> </h4>
	
	<h5>

	<a href="https://www.codefactory.wien"> <img src="img/banner-1.png" />
	</h5>


<div class="nav">

<nav>
	<ul>

     <li> <a href="HOME.html"> HOME</a></li> 
     <li> <a href="Tech.html"> Tech</a></li>
     <li> <a href="Culture.html"> Culture</a></li>
     <li> <a href="Video.html"> Video</a></li>
     
      </ul>
      
    </nav>

</div>

</header>


<main>


	<?php echo'
		<div class="container">
			<div class="row">
				<div class="col">
				    <a href="'.$xml->channel->item[$num]->link.'"><h5 class="card-title">'.$xml->channel->item[$num]->title.'</h5></a>
				    <p class="card-text">'.$xml->channel->item[$num]->description.'</p>
				</div>
				<div class="col">
					'.$result->joke.'	
				</div>
			</div>
		</div>
	';
	?>
</main>

<footer>
	<nav>
	<ul>

     <li> <a href="HOME.html"> HOME </a> </li> 
     <li> <a href="Tech.html"> Tech</a></li>
     <li> <a href="Culture.html"> Culture</a></li>
     <li> <a href="Video.html"> Video </a></li>
     
      </ul>
      
    </nav>

	
	<h6>
	<img src="img/logo-newspaper-cf.png" /> </h6>
	
<p>
Maha-CodeFactory 2018</p> 





</footer>





	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>