<?php

// CONFIGURATION
$akismetKey     = getenv('AKISMET_KEY'); // Get your API key here: https://akismet.com/development/api/
$akismetBlogUrl = 'https://andrewensley.com'; // Set this to the full URL of this site's home page.
$to             = getenv('CONTACT_FORM_EMAIL_RECIPIENT');
$subject        = 'AndrewEnsley.com Contact Form Email';
// END CONFIGURATION

if (
	empty($_POST['name'])
	|| empty($_POST['email'])
	|| empty($_POST['message'])
) {
	// Not enough information supplied.
	exit('1');
}

$comment = array(
	'blog'                 => $akismetBlogUrl, // The front page or home URL of this site (the one making the request).
	'permalink'            => $akismetBlogUrl . '/Contact', // The permanent URL of the specific page the comment was submitted to.
	'comment_type'         => 'contact-form', // '', 'comment', 'contact-form', etc. Any value that makes sense. Can be blank.
	'comment_author'       => $_POST['name'], // The submitted name with the comment.
	'comment_author_email' => $_POST['email'], // The submitted comment author's email address.
	'comment_author_url'   => '', // The submitted comment author's URL (if applicable).
	'comment_content'      => $_POST['message'], // The comment content as submitted.
);

function checkspam($comment) {
	global $akismetKey, $akismetBlogUrl;
	if (empty($comment['blog'])) {
		$comment['blog'] = $akismetBlogUrl;
	}

	$comment['user_ip']    = $_SERVER['REMOTE_ADDR'];
	$comment['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
	$comment['referrer']   = $_SERVER['HTTP_REFERER'];
	$comment['blog_lang']  = 'en_us';
	$curl = curl_init('https://' . $akismetKey . '.rest.akismet.com/1.1/comment-check');
	curl_setopt($curl, CURLOPT_USERAGENT, 'CheckSpam/1.0 | Akismet/1.11');
	curl_setopt($curl, CURLOPT_TIMEOUT, 5);
	curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($comment));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	return (curl_exec($curl) === 'true');
}

if (checkspam($comment)) {
	// This comment was spam.
	exit('2');
}

$name    = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email   = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$headers = array(
	'From'     => $name . '<www-data@andrewensley.com>',
	'Reply-To' => $name . '<' . $email . '>',
  'X-Mailer' => 'PHP/' . phpversion(),
);

if (!mail($to, $subject, $message, $headers)) {
	// Email sending failed.
	exit('3');
}

// Success!
exit('0');
