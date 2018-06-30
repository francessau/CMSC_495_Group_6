<!--
Russell Lilljedahl
CMSC 495 Group 6
24 Jun 2018
Workout log home page
-->

<?php
    include 'session.php'; // cannot get to this page without being logged in
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Workout Logs</title>  

        <link  href="\Styles\Styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <h1>Workout Log</h1>
        </header>

        <section>
            <aside>
                <nav>
                    <ul>
                        <div>
                            <li><a href="./newentry.php">New Entry</a></li>
                            <li><a href="./history.php">History</a></li>
                            <li><a href="./logout.php">Logout</a></li>
                            
                            <li><a href="./createuser.php">TESTING FOR CREATE USER</a></li>
                            <li><a href="./login.php">TESTING FOR LOGIN</a></li>
                            
                        </div>
                    </ul>
                </nav>
            </aside>

            <article>
                <h2>Welcome!</h2>
                <p>
                    This is the homepage to all of your workout logs.<br>
                    You can either log a new workout or you can view your history.<br>
                    Please use the links to select what you want to do.<br>
                </p>
            </article>
        </section>

        <footer>
            <p>This is the footer of the page</p>
        </footer>
    </body>
</html>
