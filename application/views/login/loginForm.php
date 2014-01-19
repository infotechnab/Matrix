<!DOCTYPE html>
<html>
    <head>
        <title>
           
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <meta charset="utf-8">
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        
<?php if(isset($meta))
{
     foreach ($meta as $data)
     {
         $title[] = $data->value;
     }
}
?>   
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()."contents/styles/styles.css"; ?>" />
    </head>
    <body>
        <div class="container">
            <div class="Left">
                <div id="loginform">
                <table>
                    <tbody>
                        <tr>
                        <td colspan="2">
                            <img id="name" src="<?php echo base_url()."/content/images/bnw.png"; ?>"/>
                                <p id="sucessmsg">
                                     </p>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                            <input type="text" id="username" name="username" placeholder="User Name" required/>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                            <input type="password" id="password" name="password" placeholder="Password" required/>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                            <input type="submit" id="submitMe" value="Login">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <input type="checkbox" id="check"/>Stay Logged In
                        </td>
                        <td>
                            <a href="#">Forgot Password</a>
                        </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="right">
                <iframe class="frame" src="http://salyani.org/sources/iframeContent/bnwIframe.php" frameborder="0" scrolling="no">Something text here</iframe>
            </div>
        </div>
        <div class="clear"></div>
        <div id="footer">
            Matrix 1.0 Copyright &copy 2014. All rights reserved to <a href="#">Matrix</a>
        </div>
        <script language="javascript" type="text/javascript">
         document.getElementById("username").focus();
        </script>
    </body>
</html>