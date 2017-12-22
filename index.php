<!DOCTYPE html>
<html>
<head>
    <title>KALORI HESAPLAMA</title>
    <style type="text/css">
        *{
            font-family: arial;
            color: #666;
        }
    </style>
</head>
<body>

    <center>
        <h2>KALORI HESAPLAMA</h2>
        <form action="functions.php" method="post">

            Cinsiyeti Seçin:<br />
            <select name="cinsiyet" style="padding: 5px; width: 265px; border-radius: 3px; border: 1px solid #ddd;"><br />
                <option value="Male">Erkek</option>
                <option value="Female">Kadin</option>
            </select><br /><br />

            <input name="Yas" type="text" placeholder="Yaşınızı Girin" style="padding: 5px; width: 250px; border-radius: 3px; border: 1px solid #ddd;" /><br /><br />
            <input name="Kilo" type="text" placeholder="Kilonuzu Girin" style="padding: 5px; width: 250px; border-radius: 3px; border: 1px solid #ddd;" /><br /><br />
            <input name="Boy" type="text" placeholder="Boyunuzu Girin" style="padding: 5px; width: 250px; border-radius: 3px; border: 1px solid #ddd;" /><br /><br />
            <input type="Submit" value="HESAPLA" style="padding: 10px 5px; width: 265px; border-radius: 3px; border: 1px dashed #ddd; background-color: white;" />


            

        </form>

    </center>

</body>
</html>