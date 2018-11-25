<!DOCTYPE html>
<html>
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <header>
        <h1>My Guitar Shop</h1>
    </header>
    <main>
        <h1>Add Item</h1>
        <form action="" method="post">
            <input type="hidden" name="action" value="add">

            <label>Name:</label>
            <select name="productkey">
            <?php foreach($products as $key => $product) :
                $cost = number_format($product['cost'], 2);
                $name = $product['name'];
                $item = $name . ' ($' . $cost . ')';
            ?>
                <option value="<?php echo $key; ?>">
                    <?php echo $item; ?>
                </option>
            <?php endforeach; ?>
            </select><br>
			<br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Item">
        </form>
        <p><a href="show_cart.php">View Cart</a></p>    
    </main>
</body>
</html>