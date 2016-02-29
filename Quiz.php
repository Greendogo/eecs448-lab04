   <?php
    $a1 = "John and Mary";
    $a2 = "in the 19th century, when it became a symbol of the abolition of slavery";
    $a3 = "Buttermilk";
    $a4 = "a four-story Georgian-style home in Missouri";
    $a5 = "compact disk player";

    $q1 = $_POST['q1'];
    echo "Question 1: In the year 1900 in the U.S. what were the most popular first names given to boy and girl babies?<br>";
    echo "You answered: " . $q1 . "<br>";
    echo "Correct answer: " . $a1 . "<br><br>";
    $q2 = $_POST['q2'];
    echo "Question 2: When did the Liberty Bell get its name?<br>";
    echo "You answered: " . $q2 . "<br>";
    echo "Correct answer: " . $a2 . "<br><br>";
    $q3 = $_POST['q3'];
    echo "Question 3: In the Roy Rogers -Dale Evans Museum, you will find Roy and Dales stuffed horses. Roy's horse was named Trigger, which was Dales horse?<br>";
    echo "You answered: " . $q3 . "<br>";
    echo "Correct answer: " . $a3 . "<br><br>";
    $q4 = $_POST['q4'];
    echo "Question 4: The Daniel Boon museum at the home where he died can best be described how?<br>";
    echo "You answered: " . $q4 . "<br>";
    echo "Correct answer: " . $a4 . "<br><br>";
    $q5 = $_POST['q5'];
    echo "Question 5: Which of the following items was owned by the fewest U.S. homes in 1990?<br>";
    echo "You answered: " . $q5 . "<br>";
    echo "Correct answer: " . $a5 . "<br><br>";

    $correct = 0;
    if($q1 == $a1)
    $correct++;
    if($q2 == $a2)
    $correct++;
    if($q3 == $a3)
    $correct++;
    if($q4 == $a4)
    $correct++;
    if($q5 == $a5)
    $correct++;

    echo "Answered correctly: " . $correct . "<br>";
    echo "Percent correct: " . 100 * $correct/5 . "% <br>";
    ?>
