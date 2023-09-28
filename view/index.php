<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistic - SMK YADIKA KALIJATI</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cb85863efa.js" crossorigin="anonymous"></script>


</head>
<body class="sb-nav-fixed">
    <section class="navbar">
        <?php include 'navbar.php'; ?>
    </section>
    <section class="sideNavbar">
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include 'sidebar.php' ?>
            </div>
            <div id="layoutSidenav_content">
                <?php include 'dashboard.php' ?>
                <?php include 'footer.php' ?>
            </div>
        </div>
    </section>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>

</body>
</html>