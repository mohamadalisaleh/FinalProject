<?php


	require 'vendor/autoload.php';

	use Aws\S3\S3Client;
	use Aws\S3\Exception\S3Exception;


	$bucketName = '';
	$IAM_KEY = '';
	$IAM_SECRET = '';
	$REGION = 'us-east-1';


	try {


		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
				),
				'version' => 'latest',
				'region'  => $REGION
			)
		);
	} catch (Exception $e) {

		die("Error: " . $e->getMessage());
	}

	$keyName =  basename($_FILES["file"]['name']);
	$pathInS3 = 'https://s3.'.$REGION.'.amazonaws.com/' . $bucketName . '/' . $keyName;


	try {

		$file = $_FILES["file"]['tmp_name'];

		$result = $s3->putObject(
			array(
				'Bucket'=>$bucketName,
				'Key' =>  $keyName,
				'SourceFile' => $file,
				'StorageClass' => 'REDUCED_REDUNDANCY'
			)
		);
		$url = $result['ObjectURL'];
		echo 'File Uploaded Successfully !'.$url;

	} catch (S3Exception $e) {
		die('Error:' . $e->getMessage());
	} catch (Exception $e) {
		die('Error:' . $e->getMessage());
	}

?>
