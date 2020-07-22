<?php

$red = 255;
$green = 0;
$blue = 86;
$colors = array($red,$green,$blue);
$all_colors = array();

while ($colors[2] > 0)
{
	$colors[2]--;
	$all_colors[] = $colors;
}

while ($colors[1] < 255)
{
	$colors[1]++;
	$all_colors[] = $colors;
}

while ($colors[0] > 0)
{
	$colors[0]--;
	$all_colors[] = $colors;
}

while ($colors[2] < 255)
{
	$colors[2]++;
	$all_colors[] = $colors;
}

while ($colors[1] > 0)
{
	$colors[1]--;
	$all_colors[] = $colors;
}

while ($colors[0] < 136)
{
	$colors[0]++;
	$all_colors[] = $colors;
}

$count = count($all_colors);

$im = imagecreate(600,300);
imagecolorallocate ($im, 255, 255, 255);
imagesetthickness($im, 2);

$rows = 100;
$sw = intdiv($count, $rows);
for ($i=0;$i<$rows;$i++)
{
$red = $all_colors[$i*$sw][0];
$green = $all_colors[$i*$sw][1];
$blue = $all_colors[$i*$sw][2];
$im_color = imagecolorallocate ($im, $red, $green, $blue);
imagearc ($im, 300, 300, 500-$i*2, 500-$i*2, 200, 340,$im_color);
}

?>
<!DOCTYPE html>
<html lang="eng">
	<head>
		<title>RGBA Rainbow</title>
		<meta charset="UTF-8">
		<style>
        div
            {
            width: 90px;
            height: auto;
            padding: 5px;
            float: left;
            }
        </style>
	</head>
	<body>
		<h1>RGBA Rainbow</h1>
		<?php
		echo "<br>All colors: $count <br>";
		foreach ($all_colors as $farbe)
		{
		$rgb = "rgb($farbe[0],$farbe[1],$farbe[2])";
		echo "<div style='background-color:$rgb'>$rgb</div>
		";
		}
		?>
	</body>
</html>