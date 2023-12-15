<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php
	  $current_user = wp_get_current_user();
	  if ( is_user_logged_in() && $current_user) {
		  $user_profile = array(
			  'avatar' => get_avatar_url($current_user->ID),
			  'display_name' => $current_user->display_name,
			  'bio' => get_user_meta($current_user->ID, 'description', true),
			  // Add more profile fields as needed
		  );
  
		  // Output the HTML
		  echo '<div class="user-profile-block">';
		  echo '<img src="' . esc_url($user_profile['avatar']) . '" alt="User Avatar" />';
		  echo '<h3>' . esc_html($user_profile['display_name']) . '</h3>';
		  echo '<p>' . esc_html($user_profile['bio']) . '</p>';
		  // Add more HTML for additional profile fields
		  echo '</div>';
	  }
	?>
</p>
