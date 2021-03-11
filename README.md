# CRUD Modelo Vista Controlador (MVC)

## Generando Migracion y Model para Categoria

```
php artisan make:model Categoria -m
```

## Genear el Controlador con recursos para (CategoriaController)
```
php artisan make:controller CategoriaController -r
php artisan make:controller CategoriaController --resource
```
## registrar las rutas en (routes/web.php) para Categoria

```
use App\Http\Controllers\CategoriaController;

Route::resource("/categoria", CategoriaController::class);
```

## Para verificar la lista de rutas de nuestro proyecto
```
php artisan route:list
```

## Creamos manualmente 4 vistas en la carpeta (resources/views/categoria)
```
listar.blade.php
mostrar.blade.php
editar.blade.php
crear.blade.php
```
## Ahora para Producto

```
php artisan make:model Producto -a
```

## registrar las rutas en (routes/web.php) para Producto

```
use App\Http\Controllers\ProductoController;

Route::resource("/producto", ProductoController::class);
```
## Para las migraciones de Categoria
```
            $table->string("nombre", 30);
            $table->text("descripcion")->nullable();

```

## Para las migraciones de Producto
```
            $table->string("nombre");
            $table->decimal("precio", 10, 2)->default(0);
            $table->integer("cantidad")->default(1);
            $table->text("descripcion")->nullable();
            $table->bigInteger("categoria_id")->unsigned();

            $table->foreign("categoria_id")->references("id")->on("categorias");
```
## Conexion y creacion de la  Base de datos "taller6_crud_mvc" (.env)
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=taller6_crud_mvc
DB_USERNAME=root
DB_PASSWORD=
```

## Migracion de las tablas 
```
php artisan migrate
```
## Consultas en Controladores


## Levantar el Servidor

```
php artisan serve
```

