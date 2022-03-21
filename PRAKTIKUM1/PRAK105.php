<html>
    <head>
        <title>Daftar Smartphone Samsung</title>
    </head>
    <body>
        <?php
             $samsung = array("Satu"=>"Samsung Galaxy S22", "Dua"=>"Samsung Galaxy S22+", "Tiga"=>"Samsung Galaxy A03", "Empat"=>"Samsung Galaxy Xcover 5");
        ?>
        <table border='1'>
        <th style='background-color: red; font-size: 25px; height: 70px;'>Daftar Smartphone Samsung</th>
            <tr>
                <td><?php echo $samsung['Satu']; ?></td>
            </tr>
            <tr>
                <td><?php echo $samsung['Dua']; ?></td>
            </tr>
            <tr>
                <td><?php echo $samsung['Tiga']; ?></td>
            </tr>
            <tr>
                <td><?php echo $samsung['Empat']; ?></td>
            </tr>
        </table>
    </body>
</html>