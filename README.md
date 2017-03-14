# StudentHelperProject

Setup: 

Step 1: Download XAMPP (https://www.apachefriends.org/index.html)

Step 3: "Start" both the Apache webserver and MySQL server

Step 2: Copy the studentHelper folder into the htdocs folder of XAMPP

help/info on steps 1-3: https://www.youtube.com/watch?v=k9em7Ey00xQ

Step 4: After the server started, open any web browser and enter http://localhost/phpmyadmin/ . Using this interface we can manager the MySQL server from the web browser.

Step 5: select SQL tab from the panel. This will open the SQL tab where we can run the SQL queries.

Step 6: type the following query in the text area and click Go:
UPDATE mysql.user SET Password=PASSWORD('password') WHERE User='root'; FLUSH PRIVILEGES;

Step 7: Open the XAMPP file /phpmyadmin/config.inc.php in your favorite text editor.
Search for the string $cfg\['Servers'\]\[$i\]['password'] = ''; 
and change it to like this, $cfg\['Servers'\]\[$i\]['password'] = 'password'; 
Here the ‘password’ is what we set to the root user using the SQL query.

Step 8: Save the config.inc.php file and restart the XAMPP server.

Step 9: Open http://localhost/phpmyadmin/ once again

Step 10: select the Import tab from the panel. here you can select to Import the studentHelper database found in studentHelper/database and press Go.
There should now be a studentHelper database on the far left panel.
You can now add new tables and edit them by selecting the Structure tab for each one.

Step 11: The website can be found at http://localhost/studentHelper/ , the index page prompts the user to login.
Some test logins are already created:
email: lect@test.com password: password
email: stud@test.com password: password

Using the lect login will take you to the Lecturer main page and using the student login will take you to the student main page. (login.php validates if the usertype is = lect or = stud)
You can logout by clicking "logout" in the navigation.

Working:
login required to view pages
Student study group add to database

Needs to be done: 
-Student & Lecturer cw dropoff 
-Remove student from database
-Lect add room
-Student join group

Should be done:
-route finder




