import json
import boto3 

s3_client = boto3.client('s3')


def lambda_handler(event, context):
    
    bucket_name = 'bucket-name'
    file_name = 'file-name'
  
    s3_response = s3_client.get_object(Bucket=bucket_name , Key=file_name)
    print("s3_response : " , s3_response)
    file_data = s3_response["Body"].read().decode('ASCII')
    my_words = file_data.split()
    
    for word in range(len(my_words)):
        if(my_words[word] == "password") or (my_words[word] == "Pass") or (my_words[word] == "pass"):
            my_words[word + 2] = "_____"
            print(my_words)
            
        my_new_list = ' '.join(my_words)    

    s3_client.put_object(Body=my_new_list,Bucket='destination-bucket',Key= 'newFile')
    return str(my_words)
