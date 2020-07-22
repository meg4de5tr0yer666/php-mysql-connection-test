# php-mysql-connection-test
I made this webpage to test php-mysql connection. Feel free to use it for your needs too.

In order for this script to work, you would need to create a database first.
I used the following SQL:

CREATE DATABASE db_name_here;
CREATE TABLE table_name_here
(
 id INT unsigned NOT NULL AUTO_INCREMENT,
 time_created datetime,
 message VARCHAR(500) NOT NULL,
 PRIMARY KEY (id)
);

Then replace the php code on lines 22-24 with the names of your db, table, and your MySQL password.
If you need extra information on the connection status, uncomment the lines 30,31,35,36,48.
