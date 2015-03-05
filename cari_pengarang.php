<?php
include("koneksi.php");
 
$q = strtolower($_GET["q"]);
if (!$q) return;
 
        $query = mysql_query("select pengarang from pengarang where pengarang LIKE '%$q%'");
        while($r = mysql_fetch_array($query))
        {
                $list_pengarang = $r['pengarang'];
                echo "$list_pengarang \n";
        }
?>