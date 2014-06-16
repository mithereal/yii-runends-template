<?PHP 
$main = require(dirname(__FILE__) . '/main.php');
$env = require(dirname(__FILE__) . '/env/'. ENVIRONMENT .'/main.php');
$mergedenv=CMap::mergeArray($env,$main);
return CMap::mergeArray(
    $mergedenv,
    array(
        'components'=>array(
		's3' => array(
	    	'class' => 'ext.s3.ES3',
	    	'aKey'=>getenv('AWS_ACCESS_KEY'), 
	  		'sKey'=>getenv('AWS_SECRET'),
	  	),
	),
	
    )
);


