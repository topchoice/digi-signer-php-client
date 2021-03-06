<?php

//include DigiSigner library bootstrap file
require_once('../DigiSignerClient.php');

//import needed classed from DigiSigner namespace
use DigiSigner\DigiSignerClient;
use DigiSigner\DigiSignerException;


try {
	//you can find your API key find in the settings of your DigiSigner account
	$client = new DigiSignerClient('YOUR_DIGISIGNER_API_KEY');
	
	/*
	 * Document ID can be obtained after uploading the document with
	 * $document = $client->uploadDocument($path_to_document);
	 * $document->getId();
	 */
	$client->getDocument('YOUR_DOCUMENT_ID_STRING', 'data/output-doc.pdf');
	
} catch(DigiSignerException $e) {
	echo "Some exception happened...\n";
	print("Status code: " .$e->getHttpCode()."\n");
	print("Message: ".$e->getMessage()."\n");
	print("Errors:\n");
	print_r($e->getErrors());
}