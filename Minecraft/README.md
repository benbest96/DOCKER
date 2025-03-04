Description
----------------------------------------------------------------------
This is a Docker Compose configuration for running a Minecraft server using the itzg/minecraft-server Docker image. Here's a breakdown of what each part does:

Service Name: minecraft
Defines a service named minecraft that runs the Minecraft server.

Image: itzg/minecraft-server
Uses the prebuilt Docker image from itzg/minecraft-server, which is a popular image for easily setting up a Minecraft server.

Ports: 25565:25565
Maps port 25565 from the container to port 25565 on the host, allowing players to connect.

Environment Variables:

EULA: "TRUE"
Accepts the Minecraft End User License Agreement (EULA), which is required to run the server.
Deployment Resources:

Limits the container's memory usage to 1.5 GB (1.5G) to control resource consumption.
Volumes:

Mounts a directory from the host (~/minecraft_data) to /data inside the container.
This ensures that Minecraft world data and configurations persist across container restarts.