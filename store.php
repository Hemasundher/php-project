<html>
    <body>
        <?php
        $a = $_POST['quote'];
        $b = $_POST['imagelink'];
        $c = $_POST['by'];

        $con = new mysqli('localhost', 'root', '', 'tables');
        $x = "select * from quotes;";
        $y = $con->query($x);
        $i = 1;

        while ($row = $y->fetch_assoc())
            $i++;

        $d = "insert into quotes values($i,'$a','$b','$c');";
        $e = $con->query($d);
       
       
        if ($e == true) {
            echo '<script type="text/JavaScript"> 
     alert("quote added ");
     </script>'
            ;
            
            header("Location: index.php");
        }
        ?>


    </body>
</html>