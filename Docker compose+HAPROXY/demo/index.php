<!doctype html>
<html>
  <head>
    <title>..:: INSPIRE DEV - DEMO PAGE::..</title>
  </head>
  <body>
    <center>
    <img src="logo.png" width="180">
    <H1><font color="blue">Bienvenue chez InspireDev</font></H1>
    <p align="center">Ceci est un demo Webpage dans un <strong>Docker Container!</strong> </p>
    <p>Server hostname:<strong>
        <?php
            $hostname = getenv('HOST_NAME');
            echo $hostname;
        ?>
      </strong>
    </p>
    <hr>
    <img src="docker-logo.png" width="180"> <img src="Haproxy-logo.png" width="180"> <img src="logo_docker_compose.png" width="180">
  </center>
  </body>
</html>