<html>
    <body>
        <form method="post" enctype="multipart/form-data">
        <br/>
            <input type="file" name="image" />
            <br/><br/>
            <input type="submit" name="submit" value="Upload" />
        </form>
        <?php
            if(isset($_POST['submit']))
            {
                if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
              {
                    echo "Please select an image.";
                }
                else
                {
                  $image= addslashes($_FILES['image']['tmp_name']);
                  //$name= addslashes($_FILES['image']['name']);
                    $image= file_get_contents($image);
                    $image= base64_encode($image);
                    saveimage($image);
                }
            }
            displayimage();
            function saveimage($image)
            {
                $con=mysql_connect("localhost","root","");
                mysql_select_db("sms",$con);
                $qry="insert into images (image) values ($image')";
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
                mysql_select_db("sms",$con);
                $qry="select * from images";
                $result=mysql_query($qry,$con);
                //$row = mysql_fetch_array($result) ;

                    echo '<img height="300" width="300" src="data:image;base64,'.$result[1].' "> ';

                mysql_close($con);
            }
        ?>
    </body>
</html>
