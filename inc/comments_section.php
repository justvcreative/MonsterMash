<section id="display_comments">
        <h2>Comments</h2>
        <div id="comment-box">
			<?php
				$sql = 'SELECT name, comment FROM comments ORDER BY id DESC';
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll();
				foreach ( $rows as $comment) {
					$name = $comment['name'];
					$comment = $comment['comment'];
					echo "<h5>".$name."</h5></li>";
					echo "<p>".$comment."</p><hr>";
				}
				$db = null;
			?>   
        </div>
</section>