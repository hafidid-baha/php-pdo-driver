<?php
include_once "classes/ManageDb.php";
$array = array("fname"=>"hafid","lname"=>"id-baha","age"=>23,"email"=>"hafid.agh@outlook.com");
$cond = array("id"=>1,"fname"=>"hafid","lname"=>"id-baha");

$manager = new ManageDb("users",$array);
$cond = array("name"=>"hafid","id"=>1);
$col = array("dname","lname","email","age");
echo $manager->Select(null,$cond);

?>
<html>
    <head>
        <title> Crud Operation using Pdo</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <boody>
        <section class="container">
            <h2>Crud opertaions on the users table using pdo Class</h2>
            <table class="maintable" cellpadding="0" cellspacing="0">
                <caption>Insert,Update,Delete,Retrive (Users)<a href="template/NewUser.php">New User</a></caption>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Is Admin</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>hafid</td>
                        <td>id-baha</td>
                        <td>hafid.agh@outlook.com</td>
                        <td>Yes</td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </boody>
</html>