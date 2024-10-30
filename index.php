<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Application</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="submit.php" method="post">
            <input type="text" placeholder="Name">
            <input type="email" placeholder="Email">
            <textarea placeholder="Message"></textarea>
            <input type="submit" value="submit">
        </form>

        <div class="message-container">
            <div class="message">
                <?php
                session_start();
                if (isset($_SESSION['messages'])) {
                    foreach ($_SESSION['messages'] as $msg) {
                    echo "<div class='message'><strong>{$msg['name']}</strong> ({$msg['email']}): {$msg['message']}</div>";
                }
                unset($_SESSION['messages']);
            }
            ?>
            </div>
        </div>
    </div>

</body>
</html>