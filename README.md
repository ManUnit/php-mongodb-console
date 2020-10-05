# php-mongodb-console
Pre-configuration php using mongodb-sql-model without Laravel 

to support Nantaburi  MongoDB interface  https://packagist.org/packages/nantaburi/mongodb-sql-model
 - installation :
 ````
      $ git clone https://github.com/ManUnit/php-mongodb-console.git cd 
      $ cd php-mongodb-console
      $ composer update
````
- copy example  code for httpd.conf to Apache2 server 

````
DocumentRoot "D:/project02" 
<Directory "D:/project02">
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order Deny,Allow
        Allow from all
       Require all granted
</Directory>
````
