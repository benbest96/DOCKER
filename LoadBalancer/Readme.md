Deployment Demo - Deploying with a Load Balancer
This project sets up a simple application architecture featuring a load balancer that distributes incoming requests between two application servers. The load balancer runs HAProxy, which is configured to proxy traffic to two Apache servers.

A deployment playbook is also included to demonstrate how to achieve zero-downtime deployments when updating application servers behind HAProxy.

Infrastructure Overview
The architecture consists of the following components:

lua
Copy
Edit
                 ------------------------
                | HAProxy (192.168.56.2) |
                 ------------------------
                           |
            _______________________________
           |                               |
 -----------------------         -----------------------
| Apache (192.168.56.3) |       | Apache (192.168.56.4) |
 -----------------------         -----------------------
Setting Up the Virtual Machines
To build the environment, follow these steps:

Install VirtualBox (if not already installed).
Install Vagrant.
(Mac/Linux only) Install Ansible.
Run:
sh
Copy
Edit
ansible-galaxy install -r requirements.yml
This will download the required Ansible roles.
Run:
sh
Copy
Edit
vagrant up
This will create and configure the virtual machines.
Once Vagrant has finished provisioning the VMs using Ansible, open a browser and visit:

🔗 http://192.168.56.2/

You should see the default Ubuntu Apache 2 "installation complete" page, served from one of the backend web servers through HAProxy.

Performing a Zero-Downtime Deployment
A sample deployment playbook is included:
📂 playbooks/deploy.yml

To execute the deployment, run:

sh
Copy
Edit
$ ansible-playbook -i inventory playbooks/deploy.yml
This playbook runs serially across all web servers. For each server, it:

Temporarily removes it from the load balancer.
Runs the deployment process (in this example, it simply prints a debug message).
Waits until port 80 is available.
Adds the server back to the load balancer.