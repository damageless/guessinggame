function sendScore() {
	$.ajax({
type: "POST",
url: 'SaveScore.php',
data: { turns: count },
success: function(data) { console.log(data) }
	});
}

function getHighScore() {
	$.get("GetHighScore.php", function(data) {
		$("#currentHighScore").html(data);
	});
}

var x = Math.floor(Math.random() * 10) + 1;
var count = 0;

function checkGuess() {
	count++;
	guess = Number(document.getElementById('numberGuess').value);
	if (guess == x) {
		document.getElementById('hintText').innerHTML = "You won in " + count + " attempts!";

		sendScore();
		getHighScore();
		$('#guess_btn').hide();
		$('#again_btn').show();
	} else {
		var hint = 'Nope ' + guess +' is Too';
		if (guess < x) hint += ' Small!';
		if (guess > x) hint += ' Big!';
		document.getElementById('hintText').innerHTML = hint;
	}
}

function again(){
	location.reload();
}

$( document ).ready(function(){
getHighScore();
$("#numberGuess").keypress(function(e) {
	if(e.which == 13) {
		checkGuess();
	}
});
}
);


