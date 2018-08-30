<?php
include('header.php');
?>
<div class="scroll">
<?php
$locations = [
	[
		'code' => 2307,
		'name' => 'Gate Alpha',
		'info' => 'This location',
	],
	[
		'code' => 2311,
		'name' => 'Gate Beta',
		'info' => '',
	],
	[
		'code' => 2317,
		'name' => 'Gate Gamma',
		'info' => '',
	],
	[
		'code' => 2323,
		'name' => 'Gate Delta',
		'info' => '',
	],
	[
		'code' => 2313,
		'name' => 'Gate Epsilon',
		'info' => '',
	],
	[
		'code' => 2710,
		'name' => 'Syrinx Settlement',
		'info' => 'These people must find somewhere else to live or they will soon die.',
	],
	[
		'code' => 1153,
		'name' => 'Gate Room',
		'info' => 'Off limits',
		'lock' => true,
	],
	[
		'code' => 1119,
		'name' => 'Medical Laboratory',
		'info' => 'Contains the vaccine for the disease contracted by the crew.',
	],
	[
		'code' => 1125,
		'name' => 'Primary Stasis Chamber',
		'info' => 'Systems reduced to minimum capacity. Requires repair.',
		'lock' => true,
	],
	[
		'code' => 1121,
		'name' => 'Secondary Stasis Chamber',
		'info' => 'Systems reduced to minimum capacity. Requires repair.',
		'lock' => true,
	],
	[
		'code' => 1377,
		'name' => 'Power Relay',
		'info' => 'Controls power for the stasis chambers. Currently damaged. Requires repair.',
	],
	[
		'code' => 1341,
		'name' => 'Communications Laboratory',
		'info' => 'This area has previously been ransacked.',
	],
];
locations($locations);
?>
<?php
include('footer.php');