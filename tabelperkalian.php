<!DOCTYPE html>
<html>
<body>

    <p align="center"> Tabel Perkalian </p>
    <table border="1" align="center">

        <?php for($baris=1; $baris<=5; $baris++){
            echo "<tr>";
            for($kolom=1; $kolom<=2; $kolom++){
                echo "<td>";
                    echo "$baris x $kolom = ".  ($baris*$kolom);
                        echo "</td>";
            }
            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>