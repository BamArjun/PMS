   <?php
require_once 'check_session.php';
require_once 'databaseconnectio';
If(isset($_GET['success']))
{
    echo '<div style="border:1px solid green; padding: 7px; margine:4px; width: 300px;">'.$_GET['success'].'</div>'; 
}
$sql = "SELECT * FROM  stuinfo1 ";
$result= $conn->query($sql);

if($result->num_rows > 0)
    {
        //output data of each row
 ?>
 <a href="insert.php">add record</a>
 <table cellpadding="2" cellspace="5" border="2">
        <tr>
             <th>Id</th>
             <th>name</th>
             <th>address</th>
             <th>email</th>
             <th>reg_date</th>
             <th>action</th>
        </tr>    
    <?php
    $i=1;
    while($row=$result->fetch_assoc())
         {
            ?>
            <tr>
                <td> <?php echo $i; ?> </td>
                 <td><?php echo $row["name"];?> </td>
                 <td><?php echo $row["address"];?> </td>
                 <td><?php echo $row["email"];?> </td>
                 <td><?php echo $row["reg_data"];?> </td>
                 <td><a href="update.php?Id= <?php echo $row['Id']; ?>">update</a></td>
                 <td><a href="delete.php?Id= <?php echo $row['Id']; ?>">delete</a></td>
            </tr>
            <?php
           $i++; 
         } 
         echo'</table>';
    }
    else
    {
        echo"0 result";
    }
    $conn->close();
           ?>