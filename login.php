
<html>
    <head>
    <script type="text/javascript">

        var getQueryString = function ( field, url ) {
            var href = url ? url : window.location.href;
            var reg = new RegExp( '[?&]' + field + '=([^&#]*)', 'i' );
            var string = reg.exec(href);
            return string ? string[1] : null;
        };
        var errorMessage = getQueryString('errorMessage'); // returns 'chicken'
        if (errorMessage != null){
            alert("invalid Username or Password");
        }
    </script>
    </head>
    <body>
        <form action="loginController.php" method="POST">
            <input name="username" type="text" />
            <input name="password" type="password" />
            <input name="submit" type="submit"  />
        </form>
    </body>
</html>