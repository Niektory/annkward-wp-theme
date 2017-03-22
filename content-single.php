<?php the_content(); ?>

<a id="next-post-link" href="<?php
	$next_post = get_next_post();
	if (!empty($next_post)):
		the_permalink($next_post->ID);
	endif;
?>">&lt;</a>
<a id="prev-post-link" href="<?php
	$prev_post = get_previous_post();
	if (!empty($prev_post)):
		the_permalink($prev_post->ID);
	endif;
?>">&gt;</a>
