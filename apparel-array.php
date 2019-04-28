<!Doctype>
<html>
    <head>
        <title>Types of apparel</title>
    </head>
    <body>
        <?php ?>
        <?php
        $apparel=[Gloves, Jackets, Shirts, Pants, Outerwear, Boots, Helmets];
        print_r($apparel);
        ?> <hr>
        <?php
        echo current($apparel)."<br>";
        Next($apparel);
        echo current($apparel)."<br>";
        Next($apparel);
        Next($apparel);
        echo current($apparel)."<br>";
        reset($apparel);
        end($apparel);
        echo current($apparel)."<br>";

        ?>

    </body>
</html>