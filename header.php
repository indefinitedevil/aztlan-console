<html>
<head>
<title>Aztlán console</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
function translate($item) {
	if (empty($item['latin'])) {
		$item['latin'] = $item['ancient'];
	}
	?>
	<span class="kreoleac"><?php echo $item['kreoleac']; ?></span>
	<span class="ancient"><?php echo $item['ancient']; ?></span>
	<span class="latin"><?php echo $item['latin']; ?></span>
	<?php
}
function stargate() {
	translate([
		'kreoleac' => 'Raeshad Hadrash',
		'ancient' => 'Stargate',
		'latin' => 'Chappa\'ai',
	]);
}
function rings() {
	translate([
		'kreoleac' => 'Quanta Djendam',
		'ancient' => 'Transportation Rings',
		'latin' => 'Magic Rings',
	]);
}
function aztlan() {
	translate([
		'kreoleac' => 'Aztlan',
		'ancient' => 'Aztlan',
		'latin' => 'Aztlán',
	]);
}
function locations($locations) {
	?>
<table class="locations">
	<tbody>
	<?php foreach ($locations as $loc) :?>
	<?php
	if (!empty($loc['audio'])) {
		$loc['audio'] = '<audio src="' . $loc['audio'] . '" preload controls></audio>';
	} else {
		$loc['audio'] = '';
	}
	if (empty($loc['lock'])) {
		$loc['lock'] = false;
	}
	?>
	<tr>
		<td class="code<?php echo $loc['lock'] ? ' locked' : ''; ?>"><?php echo $loc['code']; ?></td>
		<td><?php echo $loc['name']; ?><br><small><?php echo $loc['info']; ?></small></td>
		<td><?php echo $loc['audio']; ?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</div>
<?php
}
function gate($gate) {
	return '<span class="gate">' . $gate . '</span>';
}
function gate2($gate) {
	return '<span class="gate2">' . $gate . '</span>';
}
?>
