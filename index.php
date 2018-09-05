<?php
include('header.php');
?>
<div class="frame">
	<div class="menu">
		<label class="ooc"><input id="ata" type="checkbox"> ATA Gene</label>
		<ul>
<?php
$menu = [
	[
		'url' => 'security.php',
		'kreoleac' => 'Ilukax',
		'ancient' => 'Security',
	],
	[
		'url' => 'rings.php',
		'kreoleac' => 'Quanta Djendam',
		'ancient' => 'Transportation Rings',
		'latin' => 'Magic Rings',
	],
	[
		'url' => 'stargate.php',
		'kreoleac' => 'Raeshad Hadrash',
		'ancient' => 'Astria Porta',
		'latin' => 'Chappa\'ai'
	],
	[
		'url' => 'scan.php',
		'kreoleac' => 'Duplica Jikak',
		'ancient' => 'Diagnostics',
		'latin' => 'Deep look'
	],
];
?>
<?php foreach ($menu as $item) : ?>
			<li>
				<a href="<?php echo $item['url']; ?>" target="display">
					<?php translate($item); ?>
				</a>
			</li>
<?php endforeach; ?>
		</ul>
	</div>
	<iframe name="display" src="<?php echo $menu[0]['url']; ?>"></iframe>
</div>
<script type="text/javascript">
function ata_toggle(enabled) {
	if (enabled) {
		jQuery('body').addClass('ancient');
		jQuery('iframe').contents().find('body').addClass('ancient');
	} else {
		jQuery('body').removeClass('ancient');
		jQuery('iframe').contents().find('body').removeClass('ancient');
	}
}
function ata_on() {
	return jQuery('#ata')[0].checked;
}
jQuery('#ata').on('change', function() {
	ata_toggle(this.checked);
});
jQuery(document).on('keypress', function(event) {
	console.log(event);
	if ("!" == event.key) {
		console.log('scan');
		jQuery('iframe').attr('src', 'scan.php');
	}
});
jQuery('iframe').on('load', function() {
	ata_toggle(ata_on());
});
</script>
<?php
include('footer.php');
