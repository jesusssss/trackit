<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Track'it</title>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,800,700,600|Kalam:400,700,300);
    </style>
    {{ HTML::style('css/reset.css') }}
    {{ HTML::style('css/loginScreen.css') }}
    {{ HTML::script('js/toolbox.js') }}
</head>
<body>
<div class="wrapper">
    {{ HTML::image('img/logo.png') }}
    <form action="/login" method="post">
        <label for="username">Username</label>
        <input id="username" type="text" name="login-username"/>

        <label for="password">Password</label>
        <input id="password" type="password" name="login-password"/>

        <input type="hidden" name="action-login-doLogin"/>
        <input type="submit" value="Sign in"/>
    </form>
</div>
</body>
</html>
