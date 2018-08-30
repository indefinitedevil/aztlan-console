<?php
include('header.php');
?>
<div class="scroll scan">
</div>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var scan = jQuery('.scan');
var iterations = 0;
function addLine() {
	if (iterations++ > 100) {
		return;
	}
	var numWords = getRandomInt(3) + getRandomInt(3) + getRandomInt(2) + 2;
	addWord(numWords);
}
function addWord(num) {
	if (num-- == 0) {
		scan.append('.');
		scan.append('<br>');
		setTimeout(addLine, 400);
		return;
	}
	numLetters = getRandomInt(3) + getRandomInt(3) + 3;
	var word = ' ';
	for (var j = 0; j < numLetters; j++) {
		word += possible.charAt(getRandomInt(possible.length));
	}
	scan.append(word);
	scan[0].scrollTop = scan[0].scrollHeight;
	setTimeout(() => addWord(num), 50);
}
function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}
addLine();
</script>
<?php
include('footer.php');
