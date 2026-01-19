<?php
 
 
$request_url = explode('/',$_SERVER['REQUEST_URI']);

$controllers = ['bericht', 'user', 'userhasbericht', 'berichtenbox'];
foreach($controllers as $i => $page)
{
    if($request_url[1] == $page)
    {
        include_once("../source/controllers/$page.php");
        exit;
    }
}
?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login test</title>
</head>
<body>
    <h1>Login test</h1>
    <label>Username
        <input id="username" type="text" />
    </label>
    <label>Password
        <input id="password" type="password" />
    </label>
    <button type="button" onclick="login()">Login</button>

    <section id="result" style="margin-top:16px;padding:8px;border:1px solid #ddd;min-height:24px"></section>

    <script src="./assets/js/main.js"></script>
</body>
</html>
<?php
exit;