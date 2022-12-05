
 <html>
    <head> <title>area del cuadrado</title> </head>
    <body>
    <form action="Cuadrado.php" method="post">
    <table border="0">
    
    <tr>
    <td> Lado1</td>
    <td><input type="text"name="lado1"></td>
    </tr>
    <tr>
       <td> Lado2</td>
    <td><input type="text"name="lado2"></td>
    </tr>
    
    <tr>
    <td><input type = "submit" value ="calcular"></td>
    <td><input type ="reset" value="nuevo"</td>
    </tr>
    </table>
    </form>
    </html>
        <?php
        $lado1=$_POST["lado1"];
        $lado2=$_POST["lado2"];
        $area=$lado1 * $lado2;
        echo "<h1><b>Área del cuadrado=".$area."<h1></b>";
        ?>
    </body>
</html>

