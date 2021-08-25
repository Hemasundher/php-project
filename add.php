<html>
    <head>
        <style>
            table{
                margin-left: 25%;
                margin-top:  25%;
            }
            
            
            
        </style>
    </head>
    <body>
        
        <form method="post" action="store.php">
            <table border="1" cellspacing="10" cellpadding="10">
                <tr><td>quote</td>
                    <td><input type="text" name="quote" class="text"/></td></tr>
                <tr><td>image link</td>
                    <td><input type="text" name="imagelink"/></td></tr>
                <tr><td>by</td>
                    <td><input type="text" name="by"/></td></tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="insert" value="add"/></td></tr>
                
            </table>
        </form>
        <?php
     /*   $con = new mysqli("localhost", "root", "", "tables");
        $a = "select * from quotes;";
        $b = $con->query($a);
       
        $i = 0;

        while ($row = $b->fetch_assoc()) {
            $i++;
           echo $row['quote']."<br>";
        }
        echo $i;
      
      */
        ?>
    </body>
</html>