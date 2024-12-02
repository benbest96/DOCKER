PHP Application with Load Balancer using Docker Compose
---------------------------------------------------------------------------------------------------
This project demonstrates how to build a high-availability PHP application environment using Docker. It utilizes a PHP base image, creates a containerized application, and manages traffic with HAProxy as the load balancer. The setup includes three application nodes to ensure redundancy and high availability.

----------------Features------------
PHP Application: Built from the official PHP Docker image.
HAProxy Load Balancer: Distributes traffic evenly across three PHP application nodes.
High Availability: Ensures fault tolerance with multiple application nodes.
Prerequisites
Docker installed on your machine
Docker Compose installed
Basic knowledge of Docker and HAProxy configuration
Steps to Build and Run the Project
1. Pull the Official PHP Image
Pull the official PHP image from Docker Hub:

--Copy code
docker pull php:8.2-apache

2. Create Your Application Files
Create a directory named php-app and add your HTML/PHP application files (e.g., index.php) inside it.

3. Prepare the HAProxy Configuration
Create an haproxy.cfg file in your project directory to configure the load balancer.

Example haproxy.cfg: