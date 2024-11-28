<html>

<body>
  <title>VIVEK CHAND NIRALA f84f7065</title>
  <h1>Welcome to my guessing game</h1>

  <?php
  $correctnumber = 48; // Correct number to guess
  
  // Check if the 'guess' parameter is set in the URL
  if (isset($_GET['guess'])) {
    $guess = $_GET['guess'];

    // Check if the guess is a valid number
    if (!is_numeric($guess)) {
      echo "Your guess is not a number. Please enter a valid number.";
    }
    // Check if the guess is too short (empty or less than 1 character)
    else if (strlen($guess) < 1) {
      echo "Your guess is too short. Please enter a valid guess.";
    }
    // Check if the guess is too low
    else if ($guess < $correctnumber) {
      echo "Your guess is too low. Try again!";
    }
    // Check if the guess is too high
    else if ($guess > $correctnumber) {
      echo "Your guess is too high. Try again!";
    }
    // If the guess is correct
    else if ($guess == $correctnumber) {
      echo "Congratulations - You are right!";
    }
  } else {
    echo "Missing guess parameter. Please submit your guess.";
  }
  ?>

  <form method="GET">
    <label for="guess">Enter your guess:</label>
    <input type="text" id="guess" name="guess">
    <button type="submit">Submit</button>
  </form>

</body>

</html>