<html>
    <head>
        <title>Update User page</title>
        <link rel="stylesheet" href="../css/main.css" />
    </head>
    <body>
        <section class="container">
            <h2>Update the User Information page</h2>
            <table class="adduser">
                <tr>
                    <td width="15%">Firt Name :</td>
                    <td><input type="text" name="fname" /></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lname" /> </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" /> </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"/> </td>
                </tr>
                <tr>
                    <td>Is Admin:</td>
                    <td><input type="radio" value="Yes" name="isadmin"> YES <input type="radio" value="No" name="isadmin"> NO</td>
                </tr>
                <tr>
                    <td><input type="submit" name="Update" value="Update"></td>
                </tr>
            </table>
        </section>
    </body>
</html>