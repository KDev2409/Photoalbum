# Photoalbum


## Description

This project leverages AWS services to create a website capable of displaying a comprehensive list of photos stored in an S3 bucket, accompanied by their corresponding metadata stored in a database. You can find the complete source code in this repository, including the lambda function responsible for automatically generating thumbnails for user-uploaded pictures on the website.

## Getting Started


### Steps for Setting Up and Integrating AWS Cloud Services:

1. Establish a robust Virtual Private Cloud (VPC) incorporating subnets, routing tables, and security groups to ensure secure network isolation.
   
2. Manage ingress and egress traffic to and from your VPC effectively by configuring an Internet Gateway for controlled access.
   
3. Adapt the provided PHP code to develop a dynamic website capable of managing metadata for photos uploaded to Amazon S3, storing them in a MySQL database facilitated by Amazon RDS. The website's functionality should include seamless search and display options based on metadata criteria.
   
4. Deploy and rigorously test your PHP-based web application on an Apache web server hosted within an EC2 virtual machine instance, ensuring optimal performance and reliability.
   
5. Enhance the security posture of your infrastructure by implementing an additional layer of protection. Apply a Network Access Control List (NACL) to the public-facing subnet housing your web server, fortifying it against unauthorized access attempts.

###Useful commands

Once the AWS environment is fully configured:

 1. Upload the "photalbum" code to the Apache server hosted on the EC2 instance to make it accessible.
 2. Locate the lambda function for creating thumbnails in the lambda deployment folder and integrate the code as needed within your lambda function for efficient thumbnail generation.
 3. In the user manual, you'll find a comprehensive guide detailing the setup procedures for AWS services, supplemented with helpful images for reference. By leveraging the user manual and its visual aids, you can confidently navigate through the setup procedures for AWS services, ensuring a smooth and successful deployment of this photlalbum infrastructure.


## Authors

Devaesh Kaggdas
kdevaesh@gmail.com




