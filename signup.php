<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <title>Pink Panther Underground</title>
    </head>
    <body>
    <?php 

        include 'getsql.php';
        
        

     ?>
        <div id="banner">Pink Panther Unerground</div>
        <nav>
            <div id="home"><a href="index.html">Home</a></div>
            <div id="schedule"><a href="schedule.html">Schedule</a></div>
            <div id="signup"><a href="signup.html">Sign Up</a></div>
            <div id="aboutus"><a href="aboutus.html">About Us</a></div>
        </nav>
        <div>
            <form class="pure-form pure-form-stacked" method="post">
    <fieldset>
        <legend>Sign Up</legend>

        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="first-name">Band Name</label>
                <input name="name" id="first-name" class="pure-u-23-24" type="text" required>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="email">E-Mail</label>
                <input name="email" id="email" class="pure-u-23-24" type="email" required>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="phone">Contact Phone</label>
                <input name="phone" id="phone" class="pure-u-23-24" type="text" required>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="playtime">How Long can you play?</label>
                <select name="playtime" id="playtime" class="pure-input-1-2" required>
                    <option>10min</option>
                    <option>20min</option>
                    <option>30min</option>
                    <option>40min</option>
                    <option>50min</option>
                    <option>60min</option>
                </select>
            </div>
        </div>

        <label for="terms" class="pure-checkbox">
            <input id="terms" type="checkbox" required> I've read the terms and conditions
        </label>

        <button type="submit" name="submit" class="pure-button pure-button-primary">Submit</button>

        <?php
    if (isset($_POST['submit'])) {
                
    
    $insertSql = "INSERT INTO `1612982129_gru`.`Bands` (`Name`, `Email`, `Phone`, `Play_Time`)
                    VALUES (:name, :email, :phone, :play_time)";
     $q = $pdo ->prepare($insertSql);
            try {
            $q->bindValue(':name',$_POST['name']);
            $q->bindValue(':email',$_POST['email']);
            $q->bindValue(':phone',$_POST['phone']);
            $q->bindValue(':play_time',$_POST['playtime']);
            $q->execute();
            
        } catch (Exception $ex) {
            
        }
    
    }

?>


    </fieldset>
</form></div>
        <footer>Footer</footer>
    </body>
</html>