
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
        <br/>
        <!--username:<input type="text" name="user" requried/>
        -->      <input type="file" name="image" />
            <br/><br/>
            <input type="submit" name="sumit" value="Upload" />
        </form>
        <?php
            if(isset($_POST['sumit']))
            {
               //$name=$_POST['user'];
                if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
                {
                    echo "Please select an image.";
                }
                else
                {
                    $image= addslashes($_FILES['image']['tmp_name']);
                    $name= addslashes($_FILES['image']['name']);
                    $image= file_get_contents($image);
                    $image= base64_encode($image);
                    saveimage($image);
                }
            }
            displayimage();
            function saveimage($image)
            {
                $con=mysql_connect("localhost","root","");
                mysql_select_db("student",$con);
                $name='STAFFIT1';
                $qry="insert into images (sid,img) values ('$name','$image')";
                $result=mysql_query($qry,$con);
                if($result)
                {
                    echo "<br/>Image uploaded.";
                }
                else
                {
                    echo "<br/>Image not uploaded.";
                }
            }
            function displayimage()
            {
                $con=mysql_connect("localhost","root","");
                mysql_select_db("student",$con);
                $qry="select * from images";
                $result=mysql_query($qry,$con);
                while($row = mysql_fetch_array($result))
                {
                    echo $row[0];
                    echo '<img height="100" width="100" src="data:image;base64,'.$row[1].' "> ';
                    echo '<br />';
                }
                mysql_close($con);
            }
        ?>
    </body>
</html>
