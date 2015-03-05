<?php
include("koneksi.php");
 
$q = strtolower($_GET["q"]);
if (!$q) return;
 
        $queryku = mysql_query("select judul from judul where judul LIKE '%$q%'");
        while($r = mysql_fetch_array($queryku))
        {
                $list_judul = $r['judul'];
                echo "$list_judul \n";
        }
?>