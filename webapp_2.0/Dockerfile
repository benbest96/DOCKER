# Use the official image
FROM nginx:latest

# Copy the custom HTML file to the default nginx directory
COPY index.html /usr/share/nginx/html/index.html

# Port exposed
EXPOSE 80

# Start Nginx
CMD ["nginx", "-g", "daemon off;"]