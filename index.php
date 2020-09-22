<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="grid">
        <div class="item a">
                <form action="insert.php" method="post">
                        <br><input type="text" name="imie" placeholder="Imie" id="">
                        <br><input type="text" name="zarobki" placeholder="Zarobki" id="">
                        <br><input type="text" name="dzial" placeholder="Dzial" id="">
                        <br><input type="submit" value="Dodaj Pracownika">
                    </form>
        </div>
        <div class="item b">
                <?php

                $conn=new mysqli("172.16.131.125", "z_iop", "fds", "z_iop");
                $sql = "SELECT * FROM pracownicy";
                $result = mysqli_query($conn, $sql);
                
                echo("<table>");
                echo("
                <th>Imię</th>
                <th>Zarobki</th>
                <th>Dział</th>
                <th>ID</th>
                ");
                while($row=mysqli_fetch_assoc($result)){
                    echo("<tr>");
                    echo("<td>");
                    echo($row['imie']);
                    echo("</td>");
                    echo("<td>");
                    echo($row['zarobki']);
                    echo("</td>");
                    echo("<td>");
                    echo($row['dzial']);
                    echo("</td>");
                    echo("<td>");
                    echo($row['id_pracownicy']);
                    echo('
                        <form action="delete.php" method="post">
                            <input type="text" name="id_del" value="'.$row["id_pracownicy"].'" style="display: none;" id="">
                            <input type="submit" value="X">
                        </form>
                        ');
                        echo("</td>");
                        echo("</tr>");
                        };
                        echo("</table>");
                
                
                            ?>
        </div>
    </div>
    
</body>
</html>