<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'inventpartners.com' // Put you mail domain here
	, 
	'Invent Partners' // Put your site name / form name here
	, 
	'matt@inventpartners.com' // Where will the form notification be sent?
	, 
	'forms@inventpartners.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field
	
);


?>

<!-- HTML bottom code goes here -->