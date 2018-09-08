<html>
<head>
<title>Aztlán console</title>
<link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
    jQuery(document).on('click', '.audio-control', function() {
        jQuery('audio').each(function() {
            this.pause();
            this.currentTime = 0;
        });
        jQuery('#' + jQuery(this).data('id'))[0].play();
    });
</script>
</head>
<body class="latin">
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
		'ancient' => 'Astria Porta',
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
		$loc['audio'] = '<audio id="' . $loc['audio'] . '" src="audio/' . $loc['audio'] . '.mp3" preload="auto"></audio><div class="audio-control" data-id="' . $loc['audio'] . '">&#9654;</div>';
	} else {
		$loc['audio'] = '';
	}
	if (empty($loc['lock'])) {
		$loc['lock'] = false;
	}
	?>
	<tr>
		<td class="code<?php echo $loc['lock'] ? ' locked' : ''; ?>"><?php echo $loc['code']; ?><?php echo $loc['audio']; ?></td>
		<td><?php echo $loc['name']; ?><br><small><?php echo $loc['info']; ?></small></td>
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
