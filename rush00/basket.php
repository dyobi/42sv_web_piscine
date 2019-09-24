<?php
    include("format.php");
    function searchForItem($key) {
        $items = unserialize(file_get_contents("./csv/db"));
		for ($i = 0; $i < count($items); $i++)
            if ($items[$i][1] === $key)
                return ($items[$i]);
	}
    function checkCookiesForItems() {
        $list_items = [];
        foreach ($_COOKIE as $key => $value)
            if ($value != 0 && $key !== "PHPSESSIONID")
				$list_items[] = searchForItem($key);
        return ($list_items);
    }
    function totalPrice() {
        $sum = 0;
        foreach (checkCookiesForItems() as $products)
			if ($products)
				$sum += ($products[2] * $_COOKIE[$products[1]]);
        return ($sum);
    }
    if (isset($_POST["qty"]) && isset($_POST["qty"]) != "" && ($_COOKIE[$_POST["submit"]] - (int)$_POST["qty"] >= 0))
		setcookie($_POST["submit"], $_COOKIE[$_POST["submit"]] - (int)$_POST["qty"], time() + 84600, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basket</title>
    <style>
        img {
            float : left;
            width : 200px;
            height : 200px;
        }

        .item {
            display : inline-block;
            background-color : rgba(28, 31, 36, 0.9);
        }

        .item-description {
            float : right;
        }

        h2 {
            color : dodgerblue;
        }
    </style>
</head>
<body>
    <?php foreach (checkCookiesForItems() as $products) : ?>
    <?php if ($products) : ?>
        <form action="basket.php" method="post">
            <div class="item">
                <img src=<?php echo $products[3]; ?> id=<?php echo $products[1]; ?>>
                <div class="item-description">
                    <h2><?php echo $products[1]; ?></h2>
                    <h2>Current Amt : <?php echo $_COOKIE[$products[1]]; ?></h2>
                    <h2>Remove</h2><input type="text" name="qty" id=<?php echo $products[1]; ?>>
                    <input type="submit" name="submit" value=<?php echo $products[1]; ?>>
                </div>
            </div>
        </form>
    <?php endif; ?>
    <?php endforeach; ?>
    <br >
    <h2> Total Price : <?php echo totalPrice(); ?></h2>
</body>
</html>
