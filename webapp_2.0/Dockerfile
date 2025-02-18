# Use the official image
FROM nginx:latest

# Copy your html code to the default nginx directory
COPY index.html /usr/share/nginx/html/index.html

# Port exposed
EXPOSE 80

# Start Nginx
CMD ["nginx", "-g", "daemon off;"]