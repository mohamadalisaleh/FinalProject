 # About
 
Encryption Application , Upload dirty security files automatically to s3 Bucket and clean security risks



# Aws Components 

- Virtual Private Cloud with public and private subnets
-	Public and Private Amazon Elastic compute cloud
- Amazon S3 Buckets
- Lambda function encrypt files 



  ## Working Amazon VPC

- Public and Private subnets with differents availability zone
-	Instance security group controls the traffic that is allowed to reach and leave the resources that it is associated with.
- Load Balancer automatically distributes incoming application traffic across multiple targets and virtual appliances in one or more availability zones.
- NAT Gateway allows EC2 instances to establish outbound connections to resources on internet.
- Internet Gateway that allows communication between your VPC and the internet.
- Configuration route tables that determine where network traffic from your subnet or gateway is directed.
- Target groups to route requests to one or more registered targets.
- HTTP listener checks for connection requests.

 ## working Amazon S3 Bucket 
 
 - S3 Buckets containers for objects To store your data that you can open it, download it, and move it.
 - IAM Role to specific permssions 
 - A bucket policy use to grant access permissions to the bucket .


## Working Amazon Lambda function

 - create serverless computing platform to encrypt data
 - connection with VPC
 
## Working with EC2

Setup Apach2e server

    sudo yum update -y
    sudo yum install -y apache2
    sudo systemctl status apache2
    
install PHP
 
    sudo yum update -y
    sudo yum install -y php
    php -version
    curl -sS https://getcomposer.org/installer | php
    php composer.phar require aws/aws-sdk-php
    
- upload web application on apache2 server
- send files to Amazaon S3 bucket automatically
