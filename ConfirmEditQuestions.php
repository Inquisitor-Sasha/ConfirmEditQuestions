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
	"What is the Jewish name of God? (lowercase)" => "yahweh",
	"What is the Christian name of God? (lowercase)" => "god",
	"What is the Muslim name of God? (lowercase)" => "allah",
	"What is the name for false science? (lowercase)" => "pseudoscience",
	"What is the name for a belief in god(s)? (lowercase)" => "religion",
	"Who discovered the theory of reletivity? (lowercase, last name)" => "einstein",
	"Who discovered the theory of evolution? (lowercase, last name) => "darwin",
	"Who discovered theories about the movements of large objects? (lowercase)" => "newton",
	"What part of the body is in the logo? (lowercase, one word)" => "brain",
	"What is the opposite of the first word in the name of the wiki? (lowercase)" => "irrational"
);
foreach ( $arr as $key => $value ) {
        $wgCaptchaQuestions[] = array( 'question' => $key, 'answer' => $value );
}
