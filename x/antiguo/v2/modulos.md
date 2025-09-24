# Como funcionan los modulos en el proyecto

CEFAEMPRESA trabaja con carpetas que llevan una estructura muy parecida a la de laravel normal, solo que estas carpetas se encunetran dentro de la carpeta **modules**, dentro de estas carpetas se puede craer contoladores, seeders, migraciones, configuraciones etc, todo siendo compatible entre todos los modulos.

todo esto se logra gracias a la libreria de de **[laravel modules](https://github.com/nWidart/laravel-modules)**

---

## Crear un modulo

En la carpeta rais tienes que ejecutar el siguente comando para que dentro de la carpeta modules se cree un modulo con el nombre que menciones, te recomendamos que escribas tu nombre en minuscula y solo uses mayuscula para separar 2 palabras ya que pueden ocurrir algunos desastres en cuanto a convertir las palabras con algunas tecnologias en los modulos.

```bash
php artisan module:make <nombre-modulo>
```

---

## Crear migraciones en un modulo

Las migraciones dentro de los modulos se guardan dentro de la carpeta ./modules/<nombre-modulo>/database/migrations

las migraciones siempre se escriben en plural y iniciando en minuscula ejm (tareas, facturas , usuarios)

```bash
php artisan module:make-migration <nombre-migracion>  <nombre-modulo>
```

---

## Crear models en un modulo

Las migraciones dentro de los modulos se guardan dentro de la carpeta ./modules/<nombre-modulo>/app/Models

los model siempre se escriben en singular y iniciando en mayuscula ejm (Tarea,Usuario,Factura)

```bash
php artisan module:make-model <nombre-model>  <nombre-modulo>
```

Te recomendamos que dentro de los models coloques un $table  para poder indicar el nombre de la tabla a la que apunta.

Recuerda que el nombre de la tabla es lo que se encuntra en el Schema ene ste caso la tabla se llama "tareas".

```bash
  Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->timestamps();
        });
```

en tu model debes de colocar lo siguente para indicar que apuntas a esa tabla

```bash
class Tarea extends Model
{
  
    
    protected $table = "<nombre-migracion>" <---- Esto de aqui

    ...
}

```


## Crear un model con su migracion

Existe una manera de crear un model y que de manera automatica se cree una migracion relacionada a ese model.

sin embargo de ves en cunado por la manera de escribir las cosas en español puede resultar con errores, te recomendamos escribir las cosas en ingles y aun asi usar $table en tu model para apuntar a la tabla correcta.


```bash
php artisan module:make-model <nombre-model>  <nombre-modulo> -m
```


