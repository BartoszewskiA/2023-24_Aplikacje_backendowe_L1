<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>
    <link rel="stylesheet" type="text/css"
          href="styl.css">
    <?php
    $wiersze = 10;
    $kolumny = 5;
    ?>
</head>

<body>
    <table>
        <thead>
            <tr>
                <?php 
                for($i=0; $i<$kolumny;$i++)
                echo "<th>Kolumna ",$i+1,"</th>";
                ?>
            </tr>
        </thead>
        <tbody>
        <?php 
        for($i=0; $i<$wiersze; $i++)
        {
            echo "<tr>";
            for($j=0; $j<$kolumny;$j++ )
            echo "<td>",($i*$kolumny)+$j+1,"</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</body>

</html>