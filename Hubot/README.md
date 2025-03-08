Overview
------------------------------------------------------------------------------
This Ansible playbook automates the creation of a Docker image for Hubot with Slack adapter. It pulls the base image, sets up the container, installs necessary components, commits the final image, and cleans up the temporary container.

Requirements

Ansible installed on the host machine

Docker installed and running

Internet access to pull Docker images

Variables

The playbook defines the following variables:

base_image: Base Docker image (default: node:14)

container_name: Name of the temporary container (default: hubot_slack)

image_namespace: Docker namespace for the final image (default: a4d)

image_name: Name of the final Docker image (default: hubot-slack)

Execution Flow

Pre-tasks:

Pulls the latest node:14 image.

Creates a temporary Docker container.

Adds the container to Ansible's inventory.

Roles:

Applies the hubot-slack role inside the container.

Post-tasks:

Cleans up unnecessary dependencies.

Commits the container as a new image with predefined configurations.

Removes the temporary container.

Running the Playbook

Execute the following command:

ansible-playbook playbook.yml

Output

After execution, the final Docker image will be available as:

<a4d>/hubot-slack:latest

This image can be used to run a Hubot Slack bot inside a Docker container.

Notes

Ensure that Docker is running before executing the playbook.

Modify variables as needed for customization.

The final image retains Hubot's default configuration and requires additional setup for full deployment.