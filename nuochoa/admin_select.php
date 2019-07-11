
<?php

$table = query_select("select maloai, tenloai,mota from loaisp");
$count = $table->rowCount();
if ($count > 0) {
    foreach ($table as $row) {
        echo $row['maloai'] . "\t".$row['tenloai']."\t".$row['mota']."<br>";
    }
}


function query_select($sql)
{
    $table = array();
    try {
        include 'connect.php';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $table = $stmt;
        $conn = null;
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
    return $table;
}
?>