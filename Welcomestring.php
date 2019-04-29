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
    <li>
        <strong>Age: </strong> <?= $person['age']; ?>
    </li>
    <li>
        <strong>Hair color: </strong> <?= $person['hair']; ?>
    </li>
    <li>
        <strong>Job title: </strong> <?= $person['career']; ?>
    </li>
    <li>
        <strong>Are they here: </strong> <?= $person['present'] ? 'present' : 'not present'; ?>
    </li>
</ul>
    </body>
</html>