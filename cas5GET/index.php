<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Ex 1</h1>
<form method="get" action="calculate.php">
    <input type="number" name="num_1">
    <input type="number" name="num_2">
    <select name="operation">
        <option value="addition" selected>add</option>
        <option value="subtraction">subtract</option>
    </select>
    <input type="submit" value="Submit">
</form>
<h1>Ex 2/HW</h1>
<form method="get" action="product.php">
    <input type="number" name="price">
    <select name="type">
        <option value="food" selected>Food</option>
        <option value="pc_components">Pc components</option>
    </select>
    <input type="checkbox" name="add_pdv" value="PDV">
    <input type="submit" value="Submit">
</form>
</body>
</html>