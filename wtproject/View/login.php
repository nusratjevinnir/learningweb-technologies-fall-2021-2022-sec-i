<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <!--Header inclusion-->
    <?php include 'header.php' ?>

    <!--Login section start--> 
    <form id="loginForm" name="loginForm" method="post" action="../Controller/loginCheck.php">
        <table border="1" id="contact" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <table border="1" width="85%" cellpadding="15" cellspacing="0" align="center">
                        <!-- Heading Start-->
                        <tr>
                            <td height="160" align="center" valign="middle">
                                <font face="arial" size="6" color=" #000000">
                                    Log In
                                </font>
                                <hr width="70" color="#000000">
                            </td>
                        </tr>
                        <!-- Heading  End-->


                        <tr>
                            <td align="center" valign="top">
                                <table border="1" width="55%" cellpadding="20" cellspacing="0" align="center">
                                    <tr>
                                        <td>
                                            <table border="1" width="100%" cellpadding="15" cellspacing="0"
                                                align="center">
                                                <tr>
                                                    <td width="30%">
                                                        <font face="arial" size="4" color="#000000">
                                                            User Name
                                                        </font>
                                                    </td>
                                                    <td width="70%">
                                                        <input type="text" name="username" size="50">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">
                                                        <font face="arial" size="4" color="#000000">
                                                            Password
                                                        </font>
                                                    </td>
                                                    <td width="70%">
                                                        <input type="password" name="pass" size="50">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">

                                                    </td>
                                                    <td width="70%">
                                                        <font size="3" face="arial">
                                                            <input type="checkbox" name="remember" value="yes">Remember
                                                            me
                                                        </font>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">
                                                        &nbsp;
                                                    </td>
                                                    <td width="70%">
                                                        <font size="3" face="arial">Don't have an account?</font>
                                                        &nbsp;
                                                        <a href="register.php">
                                                            <font size="3" face="arial" color="#0000ff">Register</font>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">
                                                        &nbsp;
                                                    </td>
                                                    <td width="70%">
                                                        <input type="submit" name="submit" value="Login"
                                                            style="padding: 16px 20px;">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- section padding bottom -->
                        <tr>
                            <td height="60">

                            </td>
                        </tr>
                        <!-- section padding bottom End-->
                    </table>
                </td>
            </tr>
        </table>
    </form>
    <!--Contact section end-->

    <!--Footer inclusion-->
    <?php include 'footer.php' ?>
</body>

</html>