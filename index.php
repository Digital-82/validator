<?php
include('validation_cards.php');
?>


<html>
<head>
    <title>валидатор</title>
</head>
<body>
<form method="post">
    <input type="text" name="cardNumber" autofocus>
    <button type="submit">Validate</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cardNumber'])) {
    $cardValidation = new CardValidation();
    $result = $cardValidation->validate($_POST['cardNumber']);
}
?>
<p class="result"><?php echo $result[0]; ?>, эмитент: <span><?php echo $result[1]; ?></span></p>
<ul>
    <li>4750657776370372 - валидная, VISA</li>
    <li>4750 6577 7637 0372 - валидная, VISA</li>
    <li>4023 9019 5678 9014 - валидная, VISA ????</li>
    <li>5569191777864116 - валидная, MasterCard</li>
    <li>725163728819929 - невалидная</li>
    <li>2202205308519153 - мир</li>
    <li></li>

</ul>
</body>
</html>