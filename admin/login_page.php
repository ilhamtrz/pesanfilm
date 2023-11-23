<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link href="assets/img/pesanfilm-icon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <title>Admin - Sign in</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <header>
        <!--Navigation bar-->
        <div id="nav-placeholder">

        </div>

        <script>
            $(function() {
                $("#nav-placeholder").load("navbar_login.php");
            });
        </script>
        <!--end of Navigation bar-->
    </header>
    <form action="process/login.php" method="post" class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <?php if (isset($_GET['pesan'])) { ?>
            <p class="error"><?php
                                if ($_GET['pesan'] == "gagal") {
                                    echo "Login gagal! username dan password salah!";
                                } else if ($_GET['pesan'] == "logout") {
                                    echo "Anda telah berhasil logout";
                                } ?></p>
        <?php } ?>
        <label for="inputEmail" class="sr-only">Username</label>
        <input name="username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="LOGIN">Sign in</button>
    </form>
</body>

</html>