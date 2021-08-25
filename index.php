
<html>
    <head>

        <title></title>
        <style>
            .one{
                margin-left: 25%;  
                margin-top: 15%;
                height: 200px;
                width: 50%;
                background-color: yellow;
                text-align: center;

            }

            .three{
                margin-left: 45%;  
            }

            h1{
                font-color:blue;
            }
            
            p:hover{
                background-color: silver;
                   }
            
        </style>
    </head>
    <body bgcolor="blue">

        <?php
        /*
          $con = new mysqli('localhost', 'tables', 'Database@123', 'tables');
          if ($con -> connect_errno) {
          echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
          }
          $a="select * from quotes ;";

          $b=$con->query($a);
          if($b==true)
          echo 'done';
          $r=$b->fetch_assoc();
          echo $r['quote']."<br>".$r['by'];

         */
        ?>

        <div class="one">
            <h1>quotes</h1>

            <div class="in">
                <?php
                $con = new mysqli('localhost', 'root', '', 'tables');
               /* if ($con->connect_errno)
                    echo "failed";
                else
                    echo"done" . "<br>";
                
                */

                $x = "select * from quotes;";
                $y = $con->query($x);
                $i = 1;

                while ($row = $y->fetch_assoc())
                    $i++;
                
                $q= rand(1,$i-1);
                
                $a="select quote,givenby from quotes where number=$q;";
                $b=$con->query($a);
                if($b==true)
                {
                    while($r=$b->fetch_assoc())
                            echo "<b><p>".$r['quote']."</p></b>"."<br> <br><p class='p'>by:-</p><p> ".$r['givenby']."</p>";
                }
                
                ?>

            </div>
        </div>
        <br>
        <br>
        <br>
        <br>

        <div class="two">

        </div>

        <br>
        <br>
        <br>
        <br>

        <form action="admin.php">
            <input type="submit" name="add" value="add quotes" class="three"/>
        </form>

    </body>
</html>
