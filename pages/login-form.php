<?php require "includes/header.php" ?>
<main>
    <form action="/login-handler" class="account-form" method="post">
        <h2>Log in</h2>
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="succes-message"><?= $_SESSION['success'] ?></div>
        <?php } ?>
        <label for="email">Uw e-mail</label>
        <input type="email" name="email" id="email" placeholder="johndoe@gmail.com" value="<?= isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : '' ?>" required autofocus>
        <label for="password">Uw wachtwoord</label>
        <input type="password" name="password" id="password" placeholder="Uw wachtwoord" required>
        <input type="submit" value="Log in" class="button-primary">
    </form>

<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Zoek gebruiker
    $PDO = "SELECT id, gebruikersnaam, wachtwoord FROM accounts WHERE gebruikersnaam = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Controleer wachtwoord
    if ($user && password_verify($password, $user['wachtwoord'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['gebruikersnaam'];
        header("location: dashboard.php"); // Doorsturen na inloggen
    } else {
        echo "Gebruikersnaam of wachtwoord onjuist.";
    }
}
?>
<form method="post">
    <input type="text" name="username" placeholder="Gebruikersnaam" required>
    <input type="password" name="password" placeholder="Wachtwoord" required>
    <button type="submit">Inloggen</button>
</form>
</main>
<?php require "includes/footer.php" ?>
