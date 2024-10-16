<div class='directly_add'>
    <div class="directF_header">Direct Add Friends </div>
    <form onsubmit="return false" autocomplete='false' method='post'>
    <input type="number" placeholder='Write the unique id of your friend'>
    <input type="submit" value='SEND'>
</form>
</div>
<?php
$rand = rand(100000000000,999999999999);
$count = strlen($rand);
echo $rand;
echo "</br>";
echo $count;
?>