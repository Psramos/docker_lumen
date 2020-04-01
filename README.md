## Lumen skeleton
If you need to bring up a fast skeleton of a lumen/laravel project
for any new project, you can just use this skeleton as a reference.

### Components
This project will include:
- **lumen_core**: A container running php, nginx and lumen framework.
- **lumen_db**: In case you need a mysql database, it's also included here.


### Requirements
- **Docker**: You need to have docker in your computer.
- **Composer**: You need composer for handling the packages.

### Environment variables set up
You can just do:
```
cp .env.example .env
``` 

### Container set up
You can bring the containers just running:
```
docker-compose up
```

To ensure that everything is fine, run:
```
docker ps | grep lumen
```

Both containers should be there.

#### Loading data in mysql
If you want to run your **.sql** files, every time the container
is built, you just need to put your files under the directory:

__docker/mysql/__

Every time the database container is created, it will execute everything
under that folder.

#### Accessing containers
To access the php container:
```
docker exec -ti lumen_core ash
```

To access the mysql container:
```
docker exec -ti lumen_db bash
```

You can check MYSQL database with:
```
mysql -u root -ppasswd -D core
```

### Testing the framework
Check the following url http://localhost:8080/.

