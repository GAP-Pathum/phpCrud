<!DOCTYPE html>
<html>
    <head>
        <title>View users</title>
        <style>
            body{
                background: #f0f0f0;
            }
            div{
                background:#fff;
                width: 50%;
                margin-left: auto;
                margin-right: auto;
                margin-top:5%;
                padding-bottom:60px;
                border: 1px solid #c3c3c3;
                text-align: center;
                box-shadow: 10px 10px 5px #9aa19b;

            }
            h1{
                text-align:center;
            }
            table, th, td{
                border: 1px solid;
                border-collapse: collapse;
                padding:10px;
                margin-left: auto;
                margin-right: auto;
            }
            button{
                background:#0ee32a;
                color:#fff;
                border:none;
                height:30px;
                border-radius:5px;
                box-shadow: 2px 2px 5px #9aa19b;
            }
            .delbutton{
                background:rgb(227, 14, 14);
                color:#fff;
                border:none;
                height:30px;
                border-radius:5px;
                box-shadow: 2px 2px 5px #9aa19b;
            }
            
            .delbutton:hover{
                background: #0a02ad;
                transition: 0.5s;
            }
            button:hover{
                background: #0a02ad;
                transition: 0.5s;
            }

            a{
                text-decoration: none;
                color:#fff;
            }
            
        </style>
    </head>



<div>
    <?php 

    include('db.php');
    
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        echo "<h1>All user details</h1>";
    }
    ?>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th> 
                    <th>Action</th>
                </tr>
                
              <?php  while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>
                    <button><a href='edit_user.php?id={$row['id']}'>Edit</a></button> 
                    <button class=delbutton ><a href='delete_user.php?id={$row['id']}'>Delete</a></button>
                </td>
            </tr>";
    }  ?>
            </table>
            <button style="margin-top: 20px;"><a href='add_user.php'>Add User</a></button> 
    </div>

</body>
</html>
