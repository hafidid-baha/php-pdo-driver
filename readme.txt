--- blue print to inderstand my exemple about the pdo tutorilas
--> crud operations
Insert new user(fname,lname,email,pass,isadmin)
Update users
delete users
select users

--html fils that we need to work
index.php ==> contain the main interace 
UpdateUser ==> to update an exisitng user informations
DeleteUser ==> to delete anexisting user

----------------------------classe and php files
config(just a file )
	- contain all the confid that we want to work like db name ...

connection 
	-to create a connection to my db 
	+getConnection() : returns a connection object to work with
MnageDb
	-function helps you to get date or insert date from or to the specified databas
	-Insert();
	-Update();
	-Delete();
	-select();
	-selectAll(); 
