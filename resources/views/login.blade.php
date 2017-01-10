<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
{{--<style>--}}
    {{--.background-yellow{--}}
        {{--background: yellow;--}}
    {{--}--}}
{{--</style>--}}
<div class="container">
    <div class="col-md-3 col-md-offset-3" >
        <h1>Login</h1>
        <hr>
        <form method="post" action="/login">
            <div class="form-group">
                <label for="">UserName</label>
                <input type="text" name="username" class="form-control" placeholder="UserName">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button class="btn btn-danger" type="submit" id="login-btn">
                Login
            </button>
        </form>
        {{--<button class="hide-username">Hide</button>--}}
    </div>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{--<script>--}}
    {{--$(document).ready(function(){--}}
        {{--$('[name="username"]').change(changeBackground);--}}
{{--//        $('[name="password"]').change(function(){--}}
{{--//            $(this).css('background','red');--}}
{{--//            $('[name="username"]').change();--}}
{{--//        });--}}
        {{--$('.hide-username').click(function(){--}}
{{--action="" method="POST"--}}
        {{--});--}}

        {{--$('#login-btn').click(function(){--}}
            {{--$.ajax({--}}
                {{--url: '/login',--}}
                {{--method: 'POST',--}}
                {{--data: {username: 'thaodoremon', password:'123456'}--}}
            {{--});--}}
        {{--});--}}
    {{--});--}}
    {{--function changeBackground(){--}}
        {{--$(this).toggleClass('background-yellow');--}}
    {{--}--}}
{{--</script>--}}
</body>
</html>