
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table.center {
                margin-left: auto; 
                margin-right: auto;

            }

            table{
                width: 40%;
                align-content:center;

            }
            td:hover{
                background-color: blue;
            }
        </style>     
          
   </head>
    <body>
    <center> <h1>admin login </h1></center>
    <center>    <form method="post" action="verify.php">
            <table border ="2" class="center" cellpadding="25" cellspacing="20">
                
                <tr><td colspan="3" align="center">username : <input type="text" name="username" size="40" required/></td></tr>
                <tr><td colspan="3" align="center">password : <input type="text" name="password" size="40" required/></td></tr>
                <tr><td colspan="3" align="center"><input type="submit" value="login" name="submit" required/></td></tr>
               



            </table></center>
   

</form>
</body>
</html>
