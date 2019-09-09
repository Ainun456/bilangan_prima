<!DOCTYPE HTML>
<html>
<head>
<title>BILANGAN PRIMA DENGAN PHP</title>
 
<style>
#form_prima{
    background-color:blue;
    width:500px;
   align:left;
}
body{
    padding:0px;
    margin:0px;
}
</style>
 
</head>
 
<body>
    <form id="form_prima" action="proses.php" method="POST">
        <table>
            <tr>
                <td colspan="3" align="center">
                    <h1>Deret Bilangan Prima</h1>
                </td>
            </tr>
 
            <tr>            
                <td>Bilangan Akhir</td>
                <td>:</td>
                <td><input name="bilangan" type="text" placeholder="Bilangan Akhir"></td>
		<td colspan="3" align="right">
                    <input type="submit" value="HASIL">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
