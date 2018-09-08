<?php
include('header.php');
?>
<div class="scroll">
<?php
$trials1 = [
	[
		'code' => 1796,
		'name' => 'Audio Communication Relay',
		'info' => 'Repairs to the audio systems are required.',
        'audio' => 'audio-repair',
	],
	[
		'code' => 1710,
		'name' => 'Test Suite Alpha',
		'info' => 'Demonstrate your ability to reason.',
        'audio' => 'reason',
	],
	[
		'code' => 1735,
		'name' => 'Test Suite Beta',
		'info' => 'Demonstrate your ability to cooperate.',
        'audio' => 'cooperate',
	],
];
$trials2 = [
	[
		'code' => 2710,
		'name' => 'Settlement',
		'info' => 'These people must find somewhere else to live or they will soon die.',
        'audio' => 'syrinx',
	],
];
$trials3 = [
	[
		'code' => 2783,
		'name' => 'Near Settlement',
		'info' => 'One of the people is injured and requires assistance.',
        'audio' => 'rescue',
	],
	[
		'code' => 1332,
		'name' => 'Secure Vault',
		'info' => 'Components inside could be utilised in repairs.',
        'audio' => 'vault',
	],
	[
		'code' => 1732,
		'name' => 'Test Suite Delta',
		'info' => 'Demonstrate your ability to reason.',
        'audio' => 'reason',
	],
];
$trials4 = [
	[
		'code' => 1723,
		'name' => 'Test Suite Gamma',
		'info' => 'Demonstrate your capacity for compassion.',
        'audio' => 'reason',
	],
];
$trials5 = [
	[
		'code' => 1393,
		'name' => 'Propulsion',
		'info' => 'Repair the propulsion systems. [Only two of this set can be completed]',
        'audio' => 'propulsion',
	],
	[
		'code' => 1362,
		'name' => 'Life Support',
		'info' => 'Repair the life support systems. [Only two of this set can be completed]',
        'audio' => 'life-support',
	],
	[
		'code' => 1357,
		'name' => 'Weapons Power Relay',
		'info' => 'Repair the weapons power relay. [Only two of this set can be completed]',
        'audio' => 'weapons',
	],
];
$locations = [
	[
		'code' => 2307,
		'name' => 'Gate Alpha',
		'info' => '<span class="hide-on-handheld">This location</span>',
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
		'code' => 1153,
		'name' => 'Gate Room',
		'info' => 'Off limits',
		'lock' => true,
	],
	[
		'code' => 1119,
		'name' => 'Medical Laboratory',
		'info' => 'Contains the vaccine for the disease contracted by the crew.',
        'audio' => 'medical',
	],
	[
		'code' => 1761,
		'name' => 'Arboretum',
		'info' => 'Collection of flora from different worlds.',
        'audio' => 'arboretum',
	],
];
$stasis = [
	[
		'code' => 1125,
		'name' => 'Primary Stasis Chamber',
		'info' => 'Remaining occupants remain in stasis. Requires command override.',
        'audio' => 'stasis1',
		'lock' => true,
	],
];
$yaotel = [
	[
		'code' => 1703,
		'name' => 'Guest Chambers',
		'info' => 'You are invited to join Yaotel for a discussion.',
        'audio' => 'stasis1',
	],
];
	$yaotel = [];
//$locations = $stasis;
$trials1 = [];
//$trials2 = [];
$trials3 = [];
$trials4 = [];
$trials5 = [];
$locations = array_merge(
	$yaotel,
	$trials1,
	$trials2,
	$trials3,
	$trials4,
	$trials5,
	$stasis,
	$locations
);
if ($locations == $stasis) {
	$audio = 'stasis-alert';
	echo '<audio id="' . $audio . '" src="audio/' . $audio . '.mp3" preload="auto" autoplay loop></audio>';
}
locations($locations);
?>
<?php
include('footer.php');
