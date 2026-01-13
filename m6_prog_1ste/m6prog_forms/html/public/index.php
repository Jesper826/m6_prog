<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bericht - Mailbox</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="message-card">
            <div class="message-header">
                <div class="sender-info">
                    <div class="sender-avatar">A</div>
                    <div class="sender-details">
                        <h3>Alice Johnson</h3>
                        <p>alice@example.com</p>
                    </div>
                </div>
            </div>
            <section>
                <form action="post_message.php" method="POST">
                    <input type="text" name="name" placeholder="jouw naam" >
                    <textarea name="bericht" placeholder="dit is jouw lelijke bericht..."></textarea>
                    <button type="submit">DE MUUR</button>
                </form>
            </section>
            <?php
            require_once __DIR__ . '/../source/views/bericht.php';
            ?>
        </div>
    </div>
</body>
</html>