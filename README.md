# **CEFAEMPRESA-ERP**

<p align="center">
  <img src="./documentation/imgs/logo-cefaempresa.png" alt="Logo" width="60%" style="border-radius: 20%;"/>
</p>

CEFAEMPRESA-ERP es un ERP  "Enterprise Resource Planning" o Planificación de Recursos Empresariales, que fue creado con el fin de apoyar a SENA Empresa que se encunetra en el centro de formación agroindustrial.

--

# **Metodologias de trabajo**



--

# **Tecnologias utilizadas**


1) Diagrama de requerimientos tecnológicos

```
flowchart TD
    subgraph Lenguajes
        PHP["PHP 8.4^"]
        Node["Node.js 22.10.0^"]
    end

    subgraph Gestores["Gestores de paquetes"]
        Composer["Composer 2.4.1^"]
        NPM["NPM 10.9.3^"]
    end

    subgraph BD["Bases de datos"]
        MySQL["MySQL (recomendado)"]
        SQLite["SQLite (rápido, BD pequeña)"]
    end

    Apache["Servidor web: Apache 2.4.54"]

    PHP --> Composer
    Node --> NPM
    Composer --> Laravel["Laravel 12"]
    NPM --> Laravel
    BD --> Laravel
    Apache --> Laravel
```
2) Diagrama de arquitectura de herramientas usadas

graph TD
    Laravel["Laravel 12 (Monolito Escalable)"]

    Filament["Filament v4<br/>Panel administrativo"]
    Modules["Laravel Modules v12<br/>Arquitectura modular"]
    FilamentModules["Filament Modules v5<br/>Filament en módulos"]
    Shield["Filament Shield v4<br/>Roles y permisos"]

    Laravel --> Filament
    Laravel --> Modules
    Modules --> FilamentModules
    Filament --> Shield


--


# **Requerimientos para desplegar el proyectp**


Si quieres instalar el proyecto y ponerlo en funcionamiento en tu computador, vas a necesitas un gestor de servicios que te proporcionen las sigunetes tecnologias, normalmente estos gestores vienen con tecnologias algo viejas, por lo que te recomiendo actualizarla a las verciones que ves en esta documentación.


### **Lenguajes**

- PHP 8.4^

- node 22.10.0^

### **Gestores de paquetes**

- npm 10.9.3^

- composer 2.4.1^


### **base de datos**

- mysql -> recomendado

- sqlite -> rapido, para base de datos pequeñas 


### **Servidor web**

apache httpd 2.4.54




# **Instalación y despliegue del proyecto**




--

