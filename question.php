<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<header>
    <div class="container">
        <h1>Quiz</h1>
    </div>
</header>
<main>
    <div class="container">
        <div class="current">Intrebarea 1 din 5</div>
        <p class="question">
            Ce inseamna "I am" ?
        </p>
        <form method="post" action="process.php">
            <ul class="choices">
                <li><input name="choice" type="radio" value="1" /> Eu sunt</li>
                <li><input name="choice" type="radio" value="1" /> Eu am</li>
                <li><input name="choice" type="radio" value="1" /> Eu vreau</li>
                <li><input name="choice" type="radio" value="1" /> Eu casc</li>
            </ul>
            <input type="submit" value="Submit" />
        </form>
    </div>
</main>
<footer>
    <div class="container">
        Copyright &copy; 2017, Quiz Game
    </div>
</footer>
</body>
</html>