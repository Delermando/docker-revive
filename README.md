[![Docker Pulls](https://img.shields.io/docker/pulls/delermando/docker-revive.svg?maxAge=2592000)]() [![Docker Layers](https://images.microbadger.com/badges/image/delermando/docker-revive.svg)](http://microbadger.com/images/delermando/locust-load-test:1.0 "Get your own image badge on microbadger.com") [![Docker Version](https://images.microbadger.com/badges/version/delermando/docker-revive.svg)](http://microbadger.com/images/delermando/locust-load-test:1.0 "Get your own version badge on microbadger.com") 

#Docker-Revive  
###Introduction
This is a simple project to up  the Revive AdServer quickly using docker.

## Folder Structure
![Folder Structure]
(http://s4.postimg.org/ams946cbx/folder_structure.png)
- **app/** - Contains the Revive 3.2.2 source code
- **docker/** - Contains the same files based on docker-compose syntax to config how docker will execute the containers
- **mysql/** - Initially, it Is a empty folder that is mapped to the mysql container, when the mysql container is running it will write the files within this folder, so you do not lose the data when the container is removed
- **server/** - Contains a configuration file for nginx, this file is mapped to docker container to be read to nginx

## Requirements  
- **docker** (https://docs.docker.com/engine/installation/linux/debian/)  
- **docker-compose** (https://docs.docker.com/compose/install/)  

##Instalation
**1ª Step:** Clone this project and access the project folder  
`git clone git@github.com:Delermando/docker-revive.git`  
`cd docker-revive` 	

**2ª Step:** Run docker stack  
`docker-compose up -d`

**3ª Step:** Get the MySql IP from container  
`docker inspect --format '{{ .NetworkSettings.IPAddress }}' mysql`

**4ª Step:** Access 'locahost:8080' on browser. Now should appear a screen with the **Revive** terms

**5ª Step:** Accept the terms. Now should display the database connection setup

**6ª Step:** Fill de fields with de database credentials. Example:  
- **Database Name:** (You choose a name)  
- **username:** root  
- **password:** root  
- **hostname:** (It is the IP that you get on **3ª Step**)  

**7ª Step:** Enjoy
