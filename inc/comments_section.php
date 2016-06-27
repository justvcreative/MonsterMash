<section id="display_comments">
        <h2>Comments</h2>
        <div>
			<?php
				$sql = 'SELECT name, comment FROM comments';
				foreach ( $db->query($sql) as $comment) {
					$name = $comment['name'];
					$comment = $comment['comment'];
					echo "<h4><?php echo $name; ?></h4>";
					echo "<p><?php echo $comment; ?></p>";
				}
				$db = null;
			?>   
        </div>
</section>