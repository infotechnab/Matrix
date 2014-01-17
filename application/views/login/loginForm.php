<!DOCTYPE html>
<html>
    <head>
        <title>
           
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <meta charset="utf-8">
        <meta name="keywords" content="l"/>
        <meta name="description" content=""/>
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
                            <img id="name" src="<?php echo base_url()."/content/images/bnw.png"; ?>", alt "logo"/>
                                <p id="sucessmsg">
                                     </p>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                            <input type="text" size="35" id="username" name="username" placeholder="User Name" required/>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                            <input type="password" size="35" id="passowrd" name="password" placeholder="Password" required/>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                            <input type="submit" id="submitMe" value="Login">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <input type="checkbox" value=""/>Stay Logged In
                        </td>
                        <td>
                            <a href="#">Forgot Password</a>
                        </td>
                        </tr>
                    </tbody>
                    </form>
                </table>
                </div>
            </div>
            <div class="right">
                <iframe class="frame" src="http://salyani.org/sources/iframeContent/bnwIframe.php" frameborder="0" scrolling="no">Something text here</iframe>
            </div>
        </div>
        <div class="clear"></div>
    </body>
</html>