<?php
$localhost="127.0.0.1";
$username="root";
$password="";
$dbname="todo_db";

$conn= new mysqli($localhost,$username,$password,$dbname);
// if($conn ->connect_error){
//     die("connection failed:" .$conn ->connect_error);
// }else{
//     echo "sucessfully connected";
// }

$sql= $conn-> query('select * from todos');
$sql3=$conn ->query('select * from users');
?>
<html>
<body>
    <table border="1">
        
            <?php
            while($result=$sql->fetch_assoc()){
                echo "<tr>";
            foreach($result as $r){
                echo "<td>".$r."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <table border="1">
        <?php
        while($res=$sql3 -> fetch_assoc()){
            echo "<tr>";
            foreach($res as $r){
                echo "<td>".$r. "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>