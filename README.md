# Homemade_Websocketer
This is a repository for a PHP websocket solution that I can use in other applications that uses jquery.
Not actually websockets... websockets in php are way too complicated.. :D.



how to use:

- create a route folder with all your routes.
- in the route folder create a get folder for your get requests
- the structure should look like this /routes/get/table_name/column_name.php
So if I want to get the number value I for table1 in my database, I would do
/routes/table1/number.php

- in your column.php file get the id by using getallheaders()['id']; and run function update_value(table,column,id);

- in the page you want use this function: create_value_websocket(table_name,column,id)
This will generate a span element and javascript code that will automatically update the value from number.php
