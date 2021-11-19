<!doctype html>
<html lang="ca">
<head>
    <title>Gestor d'incidències</title>
    <link href="assets/global.css" rel="stylesheet"/>
</head>
<body>
<header>
    <h1>Gestor d'incidències</h1>
    <nav>
        <ul>
            <li>
                <a href="index.php">Inici</a>
            </li>

            <li>
                <a href="login.php">Inici de sessió</a>
            </li>
            <li>
                <a href="logout.php">Tanca la sessió</a>
            </li>
            <li>
                <a href="tickets-list.php">Incidències</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <h2>Tiquet tancat</h2>
        <?php if ($result == 1) : ?>
            <p>El tiquet s'ha tancat amb exit</p>
        <?php else : ?>
            <p>El tiquet no s'ha pogut tancar</p>
        <?php endif; ?>
</main>
</body>

</html>