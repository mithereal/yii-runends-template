<?PHP 
return CMap::mergeArray(
    require(dirname(__FILE__). '/env/' . ENVIRONMENT .'/main.php'),
    array(
        'components'=>array(
		's3' => array(
	    	'class' => 'ext.s3.ES3',
	    	'aKey'=>getenv('AWS_ACCESS_KEY'), 
	  		'sKey'=>getenv('AWS_SECRET'),
	  	),
	),
	'params'=>require(dirname(__FILE__).'/params.php'),
    )
);

?>
