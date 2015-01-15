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
      } else {
        var hint = 'Nope';
        if (guess < x) hint += ' Too Small!';
        if (guess > x) hint += ' Too Big!';
        document.getElementById('hintText').innerHTML = hint;
      }
    }
    console.log(count);