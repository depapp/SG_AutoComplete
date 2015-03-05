<?php
        include("koneksi.php");
?>
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pengarang</title>
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
        <script type="text/javascript" src="jquery-1.4.2.js"></script>
        <script type="text/javascript" src="jquery.autocomplete.js"></script>
        <script type="text/javascript">
                $(document).ready(
                        function()
                        {      
                                $("#pengarang").autocomplete("cari_pengarang.php", {width: 250});
                               
                        });
        </script>
        <script type="text/javascript">
                $(document).ready(
                        function()
                        {      
                                $("#judul").autocomplete("cari_judul.php", {width: 250});
                               
                        });
        </script>
</head>
<body>
 
<div>
<h2>Silahkan ISI </h2>
        <form method="post" action="insert_buku.php">
                Asalmu:<input type="text" name="pengarang" id="pengarang" size=35>          
                <br />
                <br />
                Tujuanmu:<input type="text" name="judul" id="judul" size=35>          
                <br />
                <input type="submit" value="OK" name="tambah_buku" />
        </form>
        </div>
</body>
</html>