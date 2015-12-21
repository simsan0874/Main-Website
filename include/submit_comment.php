<?php

	if ($_POST["submit"]=="Comment") {

		if (!$_POST['email']) {
			$commenterror.="<br />Please enter your email address";
		}

		if (!$_POST['comment']) {
			$commenterror.="<br />Please enter a comment";
		}

		if ($_POST['email'] != "" AND ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$commenterror.="<br />Please enter a valid email address";
		}

		if ($commenterror) {
			$commentresult='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$commenterror.'</div>';
		} else {

			if (mail("comments@andrewmsims0874.com", "Comment from website!", "Email: ".$_POST['email']."\nComment: ".$_POST['comment'])) {
				$commentresult='<div class="alert alert-success"><strong>Thank you!</strong> I appreciate the feedback.</div>';
			} else {
				$commentresult='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
			}
			
		}

	}

?>