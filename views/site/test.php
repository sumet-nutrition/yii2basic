<?php

echo 'แสดง view';
echo '<hr>';
echo 'แสดงตัวเลข จากฟอร์ม Controller = '.$cat;

?>
<hr>
<h1><?php echo $title;?></h1>
<hr>
<h1>แสดงข้อมูล Array จากฟอร์ม Controller</h1>
<?php
    print_r($ar);
    
echo '<hr>';
foreach ($person as $item) {
    echo $item['fname'].' / '.$item['lname'].' / '.$item['email'].'<br>';
}
?>