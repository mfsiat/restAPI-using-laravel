# Laravel Rest API

> Simple laravel app to test the rest-api functionality

### Notes
- Always create the controllers with **Pascal Case**. 
- To have all the *CRUD* options for controllers add **--resource** tag after the make:controller command. 
- The MVC life cycle on laravel goes like this :
  > First Controller(with resource) >> Then Model >> Views 
- After creating the controller create **Model** with model name and the **-m** tag which represents the migration file. 
- Then configure the database. 
- If the database tables needed to be changed than we can modify the migration file. Migration file will be created with the model name, like if we create the model name **Item** then the migration file will be created with create_items_table. We can add tuples on that files as we need. 
- As for the ORM some keywords needs to be added on the AppServiceProvider. Please check on them. 
- Then just migrate to create the database table. 
  > php artisan migrate
- For the **View** part we can configure route as we like on the web.php. 
- As our ItemsController or any other controller we create as our need, the Controllers that with --resource tag or those which ones gives us the CRUD options we always should add them on the web.php file as **resource route**. This helps us to use their resource capabilities. 