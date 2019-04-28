<!Doctype>
<html>
    <head>
        <title>Types of apparel</title>
    </head>
    <body>
            <h3>Apparel</h3>
            <ul>
        <?php
        $apparel=["Gloves", "Jackets", "Shirts", "Pants", "Outerwear", "Boots", "Helmets"];
        foreach ($apparel as $value) {
            echo "<li> {$value} </li>";
        }
        
        ?>
        </ul>
    </body>
</html>