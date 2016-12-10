<?php
$slct = htmlspecialchars($_GET['slct']);
$locs = array("", "ann", "aus", "bal", "bos", "buf", "cle", "col", "de", "las", "md", "mem", "ms", "msy", "nyc","nva", "ocnj", "phl","pdx", "roc", "san", "syr", "dca");
if (in_array($slct, $locs) && $slct != "") {
	$json_file = file_get_contents('./cty/'.$slct.'.json');
	$jfo = json_decode($json_file);
	$city = $jfo->result->city;
	$posts = $jfo->result->posts;	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>John F Croston III Ate Here <?php if ($city != "") { echo " in ".$city;} ?></title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0" /> 
	<link rel="stylesheet" href="css/basic.css" />
</head>
<body>
<div id="wrap">
	<div id="hdr" role="banner">
		<h1><a href="/10kapart/index.php">jfciii Ate Here</a></h1>
	</div>
	<div id="cntnt" role="main" tabindex="0">
		<?php		
		 if (!in_array($slct, $locs) && $slct != "") {
			echo "<p class='error-msg'>Please select a city, state, or location.</p>";
		}	?>
		<form name="RequestForm" method="get" action="index.php" role="form">
			<label for="slct" class="scrn-rdr">Choose a location</label>
			<select id="slct" name="slct">
				<option value="xxx">Select a location</option>
				<option value="ann">Annapolis, MD</option>
				<option value="aus">Austin, TX</option>
				<option value="bal">Baltimore, MD</option>
				<option value="bos">Boston, MA</option>
				<option value="buf">Buffalo, NY</option>
				<option value="cle">Cleveland, PA</option>
				<option value="col">Columbus, OH</option>
				<option value="de">Delaware</option>
				<option value="las">Las Vegas, NV</option>
				<option value="md">Maryland</option>
				<option value="mem">Memphis, TN</option>
				<option value="ms">Mississippi</option>
				<option value="msy">New Orleans, LA</option>
				<option value="nyc">New York, NY</option>
				<option value="nva">Northern Virginia</option>
				<option value="ocnj">Ocean City, NJ</option>
				<option value="phl">Philadelphia, PA</option>
				<option value="pdx">Portland, OR</option>
				<option value="roc">Rochester, NY</option>
				<option value="san">San Deigo, CA</option>
				<option value="syr">Syracuse, NY</option>
				<option value="dca">Washington, DC</option>
			</select>
			<input class="submit" type="submit" value="Submit">
		</form>
	<?php if (!in_array($slct, $locs) || $slct == "") { ?>
		<h2>Welcome</h2>
		<p>Here are places <a href="http://jfciii.com">John F Croston III</a> recommends to eat at when in any of these cities, states, or suburban locations which are part of my <a href="https://a-k-apart.com/">10K Apart</a> entry.</p>
		<p>In the near future, I plan on creating an application that people can keep use track the places they want to eat when the travel.</p>
	<?php } else { ?>
			<h2><?php echo $city; ?></h2>
			<p>All the restaurants listed are ones I have eaten at and recommend you get to when in these places.</p>
    <?php foreach ($posts as $post) { ?>
		<div class="vcard">
		<?php if ($post->url != "") { ;?>
			<h3 class="fn"><a href="<?php echo $post->url; ?>" class="url"><?php echo $post->name; ?></a></h3>
			<?php } else { ?>
			<h3 class="fn"><?php echo $post->name; ?></h3>
	    <?php } ?>
		<p><?php if ($post->note != "") { echo $post->note;} ?></p>
			<p><strong>Address - </strong><span class="adr"><span class="street-address"><?php echo $post->add1; ?> <?php if ($post->add2 != "") { echo $post->add2.",";} ?></span> <span class="locality"><?php echo $post->cty; ?></span>, <span class="region"><?php echo $post->stt; ?></span> <span class="postal-code"><?php echo $post->zpcd; ?></span></span></p>
			<?php if ($post->phn != "") { echo "<p><strong>Phone - </strong>".$post->phn."</p>";} ?>
		</div>
		<hr>
    <?php	}	?>
		<p><a href="#cntnt">Return to Top of Page</a></p>
	<?php	}	?>
		<p>For more restaurants for a given location and a few more cities make sure to check out <a href="http://jfciii.com/atehere/">John F Croston III Ate Here</a>.</p>
	</div>
	<div id="ftr" role="contentinfo">
		<p>&copy; 2016 - Created by <a href="http://jfciii.com">jfciii.com</a> / <a href="https://twitter.com">@jfc3</a></p>
		<p><a href="mailto:10kapart@jfciii.com?subject=Question from 10K Apart Entry">Questions?</a> <a href="https://github.com/jfc3/10kapart">GitHub</a></p>
	</div>
</div>
</body>
</html>