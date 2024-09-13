<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<style>
		.wp-block-group {
			width: 1000px;
			max-width: 100% max-height: 100px;
			border: 1px black solid;
			background: linear-gradient(#990511, #440000);
		}

		.wp-block-navigation-item__content:hover {
			border: 1px red solid;
			color: yellow;
			background: #ee9911;
		}

		body {
			background: linear-gradient(#aa1511, #440110);
		}

		.content-area {
			background: linear-gradient(#992511, #bb1155);
			font-size: 1.4em;
			color: yellow;
			width: 300px;
			max-width: 600px;
			height: 250px;
			max-height: 500px;
			margin: 10px;
			padding: 2px 5px 3px;
			border: solid 1px black;
			box-shadow: 5px 10px #881111;
			text-align: inline;
		}

	</style>
</head>

<body>
	<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = sanitize_text_field($_POST["name"]);
    $email = sanitize_email($_POST["email"]);
    $message = sanitize_textarea_field($_POST["message"]);

    // Perform validation and data sanitization

    // Email versturen
    $to = "your-email@example.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
    $headers = array('Content-Type: text/html; charset=UTF-8');

    if (wp_mail($to, $subject, $body, $headers)) {
        // Email versturen is gelukt
        $success_message = "Thank you for your message! We will get back to you soon.";
    } else {
        // Email versturen is  niet gelukt
        $error_message = "Oops! Something went wrong. Please try again later.";
    }
}

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>

				<div class="entry-content">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>

					<?php if (isset($success_message)) : ?>
					<div class="success-message"><?php echo $success_message; ?></div>
					<?php endif; ?>

					<?php if (isset($error_message)) : ?>
					<div class="error-message"><?php echo $error_message; ?></div>
					<?php endif; ?>

					<form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
						<p>
							<label for="name">Name:</label>
							<br>
							<input type="text" name="name" id="name" required>
						</p>
						<p>
							<label for="email">Email:</label>
							<br>
							<input type="email" name="email" id="email" required>
						</p>
						<p>
							<label for="message">Message:</label>
							<br>
							<textarea name="message" id="message" rows="5" required></textarea>
						</p>
						<p>
							<input type="submit" value="Submit">
						</p>
					</form>

					<?php endwhile; endif; ?>
				</div>
			</article>
		</main>
	</div>

	<?php get_footer();?>


</body>

</html>
