<meta charset="UTF-8">
<meta name="viewport" content="width=1024, initial-scale=1.0">
<title>PHP Built-in Function ฟังก์ชันที่มีพร้อมใช้ใน php</title>
</head>
<body>

<h1>PHP Built-in Function ฟังก์ชันที่มีพร้อมใช้ใน php</h1>
<h2>ทดสอบการใช้ function date()</h2>

<?php
    echo "วันนี้วันที่ " . date("d/m/Y") . "<br>";
    echo "เวลาขณะนี้คือ " . date("H:i:s") . "<br>";
    echo "วันนี้เป็นวัน " . date("l");
?>
<h2>ทดสอบการใช้ function date_diff</h2>
<?php
    $date1 = date_create("2000-01-01");
    $date2 = date_create("2024-06-15");
    $diff = date_diff($date1, $date2);
    echo "จำนวนวันระหว่างวันที่ 1 มกราคม 2000 ถึง 1 มิถุนายน 2024 คือ " 
        . $diff->days . " วัน<br>";
    echo "หรือเท่ากับ " . $diff->y . " ปี, " 
                    . $diff->m . " เดือน, " 
                    . $diff->d . " วัน<br>";
?>

</body>
</html>
