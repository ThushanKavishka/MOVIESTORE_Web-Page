<?php
    echo "<title>Login</title>";
    require_once("layout/header.php");
    require_once("layout/navigation.php");?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>

<style>
    #contactForm{
        color: #f2f2f2;
        margin-left: 40%;

    }
      #contactForm h2{
        color: #f2f2f2;
        font-family: times new roman;
       
    }
    #contactTable{
          color: #f2f2f2;
    }


</style>

</head>

<body id="contactBody" >
<div id="contactForm">
  <form action="" method="get" style="width:200px;height:500px;padding-top:10%">

        <fieldset>
           <legend ><h2>Contact Us</h2></legend>
           

            <table cellpadding="8" width="335" id="contactTable">
                <tr>
                    <td width="143">Show Time Inc.<br /> Ramakrishna Road, <br /> Wellawatta,<br />Sri Lanka</td>
                    
                </tr>
                <tr>
                <td><hr></td>
                </tr>
              <tr>
                    <td>info@showtime.com </td>
                    
                </tr>
                </tr>
                <tr>
                <td><hr></td>


              <tr>
                    <td>+94771501156 </td>
                </tr>

                <tr>
                    <td><hr></td>
                    <td>
                        
                    </td>
                </tr>

                <tr>
                    <td>Follow Us on </td>
                    <td>
                 
   
         <input type="image" src="img/contactUs/fb.png">
         <input type="image" src="img/contactUs/instagram.png">
        <input type="image" src="img/contactUs/linkedin.png"> 
        </td>
                <tr />

            </table>
     
        <input type="button" onclick="isOK()" value="OK" class="btn btn-primary">
            </fieldset>
    </form>

</div>
    
    

<?php
	require_once("layout/footer.php");
?>
<script>
function isOK() {
	location.href = "home.php";
	}
</script>
</body>
</html>
