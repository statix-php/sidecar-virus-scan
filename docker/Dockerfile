FROM clamav/clamav:stable

# Update virus definitions
RUN freshclam

# Copy ClamAV configuration file
# COPY clamd.conf /etc/clamav/clamd.conf

# Install the AWS Lambda Node image
FROM public.ecr.aws/lambda/nodejs:18

# Set working directory
WORKDIR /var/task

# Copy your application code
COPY app.js package.json ./

# Install dependencies
RUN npm install --production

# Set the command to start your application
CMD [ "app.handler" ]
