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
                margin-top:10%;
                padding-bottom:60px;
                border: 1px solid #c3c3c3;
                text-align: center;
                box-shadow: 10px 10px 5px #9aa19b;

            }
            input{
                border: 1px solid;
                height:30px;
                width: 40%;
                border-radius: 5px;
                text-align: left;
            }
            button{
                background: #0ee32a;
                color:#fff;
                border:none;
                height:30px;
                width:20%;
                border-radius:5px;
                box-shadow: 2px 2px 5px #9aa19b;
            }
            a{
                color:#fff;
                text-decoration:none;
            }
            button:hover{
                background: #0a02ad;
                transition: 0.5s;
            }

        </style>
    </head>

    <body>
        <div>
        <?php
    include('db.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "<h1>Record deleted successfully</h1><br/><br/>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
?>
        <button><a href='View_user.php'>View</a></button> 
        </div>

    </body>
</html>