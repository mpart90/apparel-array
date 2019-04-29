<!Doctype>
<html lang="en">
    <head>
<meta charset="utf-10">
<title>Home</title>
<style>
header {
    background: #e3e3e3;
    padding: 3em;
    text-align: center;
}
</style>
    </head>
    <body>
        <header>
            <h1>
                <?= "Welcome, " . htmlspecialchars($_GET['name']);?>
            </h1>
        </header>
<ul>
    <?php foreach ($person as $feature => $data) : ?>
       <li>
           <Strong><?= ucwords($feature); ?>: </Strong> <?= $data; ?>
        </li>
<?php endforeach; ?>
</ul>
    </body>
</html>