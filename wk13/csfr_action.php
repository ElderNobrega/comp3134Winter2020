<?php

        session_start();

        $varSession = $_SESSION['confirmation'];

        if(isset($_POST['confirmation'])){
                $varPost = $_POST['confirmation'];
                console.log($_POST['confirmation']);
        };
        echo "<br>";

        if($varSession == $varPost){
                if(isset($_POST['username'])){
                        if($_POST['username']== 'host' && $_POST['password'] == "pass") {
                                echo "<div>Successully logged in</div><br />";
                        } elseif
                                ($_POST['username'] != 'host' && $_POST['password'] != 'pass'){
                                echo "<div>Login attempt was unsuccessful!</div>";
                        }
                }
        }
} else {
        echo "<h2>Login Page</h2><br />";
        echo "Please enter credentials to login";
        echo "<form method='post'>";
        echo "<label>Username: </label>";
        echo " <input type='text' name='username'><br />";
        echo "<label>Password</label>";
        echo " <input type='password' name='password'>";
        echo "<br />";
        echo "<input type='submit' name='submit'>";
        echo "</form>";
}
?>
