<section id="display_comments">
        <h2>Comments</h2>
        <div id="comments">
			<?php
				$sql = 'SELECT name, comment FROM comments';
				foreach ( $db->query($sql) as $comment) {
					$name = $comment['name'];
					$comment = $comment['comment'];
					echo "<h5>".$name."</h5>";
					echo "<p>".$comment."</p><hr>";
				}
				$db = null;
			?>   
        </div>
</section>