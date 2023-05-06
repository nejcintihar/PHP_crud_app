# PHP CRUD APPLICATION

![image](https://user-images.githubusercontent.com/63637814/236648691-aba9e497-deb9-483a-938c-21bb163fe9ee.png)

To run this application you will need to install XAMPP.

After installing XAMPP, launch it and you will need to start Apache and MySQL.

![image](https://user-images.githubusercontent.com/63637814/236637022-752b3c50-e643-489a-94d9-a2ad685264f3.png)

After that open your preffered browser and go to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).

Once you open localhost/phpmyadmin, go to SQL tab and create the database.

```
CREATE DATABASE test
```

After the database is created, open SQL tab again and create the table.

```
CREATE TABLE test.users (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(100),
    email varchar(100),
    mobile varchar(100),
    password varchar(255),
    PRIMARY KEY (id)
)
```

After creating your database and your table it should look something like this.

![image](https://user-images.githubusercontent.com/63637814/236637303-0c6703ac-83dc-4578-b7b6-37d563971df6.png)

Nice! Your database is set up, now clone this repository inside htdocs where your xampp installation folder is on your computer,
and go to [http://localhost/project/display.php](http://localhost/project/display.php).

Thats it! The application is running and can perform all CRUD operations.
