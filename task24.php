<!--Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами
числе. Например: цифра 5 в числе 442158755745 встречается 4 раза -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <style>
        form {
            margin: 50px;
        }
    </style>
</head>
<body>
<form action="task24(2).php" method="post">
    <label for="number">Enter number </label>
    <input type="number" name="number" id="number" placeholder="Enter your number" min="0" required> <br/> <br/>
    <label for="digit">Enter digit </label>
    <input type="number" name="digit" id="digit" placeholder="Enter digit" min="0" max="9" required> <br/> <br/>
    <input type = 'submit' value="Get result" />
</form>
</body>
</html>