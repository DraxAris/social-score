<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include 'parts/body/head.php';
        ?>
        <title>Score - Welcome</title>
        <link rel="stylesheet" href="parts/code/index/main.css" type="text/css">
        <script src="parts/code/index/main.js"></script>
    </head>
    <body>
        <div class="nav-imported">
            
        </div>
        <div class="container-fluid">
                <section id="cover" class="min-vh-100">
                    <div id="cover-caption">
                        <div class="container">
                            <div class="row text-white">
                                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                                    <h1 class="display-4 py-2 text-truncate">Search Scores</h1>
                                    <div class="px-2">
                                        <form action="s/" class="justify-content-center" method="get">
                                            <div class="form-group">
                                                <label class="sr-only">Name</label>
                                                <input type="text" class="form-control" placeholder="James Bond" required name="q">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-search" style="color: #ff922b"></i></button>
                                        </form>
                                        <p class="actions-click">
                                            <a href="account/create.php">Register</a>
                                            <a href="account/login.php">Login</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
        <div class="footer">
            <?php
                include 'parts/body/footer.php';
            ?>
        </div>
    </body>
</html>