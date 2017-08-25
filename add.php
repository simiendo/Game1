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
        <h2>Adauga o intrebare</h2>
        <form method="post" action="add.php">
            <p>
                <label>Intrebarea numarul</label>
                <input type="number" name="question_number" />
            </p>
            <p>
                <label>Intrebarea </label>
                <input type="text" name="question_text" />
            </p>
            <p>
                <label>Varianta numarul 1</label>
                <input type="text" name="choice1" />
            </p>
            <p>
                <label>Varianta numarul2 </label>
                <input type="text" name="choice2" />
            </p>
            <p>
                <label>Varianta numarul 3</label>
                <input type="text" name="choice3" />
            </p>
            <p>
                <label>Varianta numarul 4</label>
                <input type="text" name="choice4" />
            </p>
            <p>
                <label>Varianta numarul 5</label>
                <input type="text" name="choice5" />
            </p>
            <p>
                <label>Varianta corecta</label>
                <input type="number" name="correct_choice" />
            </p>
            <p>
                <input type="button" name="submit" value="Submit" />
            </p>
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