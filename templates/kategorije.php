<?php
    include 'db_connection.php';
    $conn = OpenConn();
    $sql = "SELECT * FROM `kategorija`";
    $result = $conn->query($sql);
    CloseCon($conn);
    $_SESSION["artPerPage"] = 4;
?>


<html>
    <head>

    </head>
    <body>
        
        <ul style="list-style-type: none;">
            <li><b>KATEGORIJE:</b></li>
            <?php 
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
            ?>

            <a href="prikaziKategoriju.php?catName=<?php echo $row['kategorija_ime']; ?>&page=1"> <li><button><?php echo $row['kategorija_ime']; ?> </button></li></a>  

            <?php
                    }
                }
                
            ?>
        </ul>
    </body>
</html>