<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/assets/ninja_style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <title>Ninja Gold</title>
        <script>
            $(document).ready(function(){
                $('#text').scrollTop($('#text')[0].scrollHeight);
            });
        </script>
    </head>
    <body>
        <div class="wrapper">
            <div class="gold_count">
                <h1>Your  Gold:</h1>
                <input value="<?=$this->session->userdata('gold_count')?>"/>
            </div>
            <div class="places_container">
                <div class="farm">
                    <h1>Farm</h1>
                    <h2>(earns 10-20 golds)</h2>
                    <form action="/gold/farm" method="post">
                        <input type="submit" value="Find Gold!"/>
                    </form>
                </div>
                <div class="cave">
                    <h1>Cave</h1>
                    <h2>(earns 5-10 golds)</h2>
                    <form action="/gold/cave" method="post">
                        <input type="submit" value="Find Gold!"/>
                    </form>
                </div>
                <div class="house">
                    <h1>House</h1>
                    <h2>(earns 2-5 golds)</h2>
                    <form action="/gold/house" method="post">
                        <input type="submit" value="Find Gold!"/>
                    </form>
                </div>
                <div class="casino">
                    <h1>Casino!</h1>
                    <h2>(earns/takes 0-50 golds)</h2>
                    <form action="/gold/casino" method="post">
                        <input type="submit" value="Find Gold!"/>
                    </form>
                </div>
            </div>
            <div class="activities">
                <h3>Activities:</h3>
                <textarea id="text"><?php
                    foreach($this->session->userdata('activities') as $activity){
                        echo $activity;
                    }
                    //var_dump($this->session->userdata('activities'));
                ?></textarea>
            </div>
            <form class="kill" action="/gold/restart" method="post">
                <input type="submit" value="Resart the Game">
            </form>
        </div>
    </body>
</html>