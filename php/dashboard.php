<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard-style.css">
</head>

<body>
    <div class="navbar">
        <a href="chisiamo.html">Chi siamo</a>
        <a href="orari.html">Orari</a>
        <a href="contatti.html">Contatti</a>
        <a href="account.html"><img src="./images/icons8-user-24.png" alt="usericon" id="usericon"></a>
    </div>
    <div class="container">
        <?php
        session_start();

        if (isset($_SESSION['session_id'])) {
            $session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
            $session_id = htmlspecialchars($_SESSION['session_id']);
            echo "<h1>Bentornato $session_user</h1>";
        } else {
            echo "<h3>Effettua il login per accedere all'area riservata</h3>";
        } ?>
        <button class="logout"> <a href="logout.php">Logout</a></button>
        <a href=""></a>
    </div>


</body>

</html>