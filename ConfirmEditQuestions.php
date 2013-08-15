<?php

$wgExtensionCredits[$type][] = array(
        'path' => __FILE__,
        'name' => "Rational Wiki pattern Confirm Edit questions",
        'description' => "Adds a series of questions to ConfirmEdit for preventing spam.",
        'version' => 1.1,
        'author' => "Inquisitor Ehrenstein",
        'url' => "http://www.mediawiki.org/wiki/User:Inquisitor_Ehrenstein",
);

// Add you name (commented out) below if you have contributed to this.
// You can also add attribution in a comment after the line
// where you added a question.
// Contributors:

require_once( "$IP/extensions/ConfirmEdit/QuestyCaptcha.php");
$wgCaptchaClass = 'QuestyCaptcha';
$arr = array (
	"What are the capital letters in the logo? (capitalize answer)" => "RW",
	"What part of the body is in the logo? (lowecase)" => "brain",
	"What color are the brackets in the logo? (lowecase)" => "black",
	"What is the first word in the logo? (lowercase)" => "rational"
);
foreach ( $arr as $key => $value ) {
        $wgCaptchaQuestions[] = array( 'question' => $key, 'answer' => $value );
}
