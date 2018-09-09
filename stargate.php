<?php
include('header.php');
?>
<div class="scroll">
<?php
$locations = [
	[
		'code' => gate('sefuki'),
		'name' => 'Terra',
		'info' => '',
	],
	[
		'code' => gate('syrinx'),
		'name' => 'Unknown',
		'info' => '',
	],
	[
		'code' => gate('ndicte'),
		'name' => 'Unknown',
		'info' => '',
	],
	[
		'code' => gate('unkowx'),
		'name' => 'Unknown',
		'info' => '',
	],
	[
		'code' => gate('sylvis'),
		'name' => 'Sylvalis',
		'info' => '',
		'lock' => true,
	],
	[
		'code' => gate('vikngs'),
		'name' => 'Asgard',
		'info' => '',
		'lock' => true,
	],
	[
		'code' => gate2('relnts'),
		'name' => 'Melanad',
		'info' => '',
		'lock' => true,
	],
	[
		'code' => gate2('thundr'),
		'name' => 'Lorenkad',
		'info' => '',
		'lock' => 2,
	],
];
foreach ($locations as $key => $loc) {
	if ($loc['name'] != 'Lorenkad')
	$locations[$key]['lock'] = true;
}
locations($locations);
?>
<?php
include('footer.php');
