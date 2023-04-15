<?php
echo "<style>
input[type='text'] {
    
    border-radius: 15px;
    background-repeat: no-repeat;
    background-size: 25px 25px;
    background-position: 10px;
    background-image: url(search.svg);
    background-color: #f7f8fa;
    height: 35px;
    width: 155px;
    font-size: 16px;
    padding-left: 45px;
}
</style>
<center>  
<h3>The Best Tender would be based on prices and previous reviews of a Tenderee.... to continue confirm tender name and press Submit button<h3><br>
<form action='sort.php' method='post'>
<tr>
    <input type='text' name='tenname'/><br><br>
    <a href='sort.php'>
    <input type='submit' value='submit'/></a>
</tr>
</form></center>";
?>