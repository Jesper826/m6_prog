<?php
    
    include_once __DIR__ . '/../source/config.php';

    $request_url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    $page = !empty($request_url[0]) ? $request_url[0] : 'home';

    $valid_pages = ['home', 'groente', 'fruit', 'aanbiedingen'];
    
    if (!in_array($page, $valid_pages)) {
        $page = 'home';
    }

    if ($page === 'home') {
        $page_file = false; 
    } else {
        $page_file = __DIR__ . '/../source/pages/' . $page . '.php';
    }

?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De Groene Apen Kist - Boerderij zonder Tom</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="site">
    <header class="site-header">
        <?php include_once __DIR__ . '/../source/views/header.php'; ?>
    </header>
    <main>
         
        <?php 
        if ($page === 'home') {
            include_once __DIR__ . '/../source/views/over_ons.php';
            include_once __DIR__ . '/../source/views/aanbiedingen.php';
        } elseif ($page_file && file_exists($page_file)) {
            include $page_file;
        } else {
            echo '<p>Pagina niet gevonden.</p>';
        }
        ?>  
    </main>

    <footer class="site-footer">
        
        <?php include_once __DIR__ . '/../source/views/footer.php'; ?>
    </footer>
</body>
</html>