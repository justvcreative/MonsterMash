<?php
    $title = "Monster Mash";
    include("inc/header.php");   
?>
    <?php include("inc/gallery.php"); ?>
    <section id="comment_section">
        <div class="row">
            <div class="col-sm-6">
                <h2>Write a comment</h2>
                <?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
                  echo "<div id='successful_comment' class='bg-success'><p>Thank you for your feedback!</p></div>";
                } else if (isset($_GET["status"]) && $_GET["status"] == "error") {
                    echo "<div id='bad_comment' class='bg-danger'><p>Please input your name AND comment.</p></div>";
                } ?>
                <form method="POST" action="post_comment.php">
                 <div class="form-group">
                    <input style="display: none;" type="hidden" name="id" value="Anonymous">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" type="text" name="name" placeholder="Your Name" maxlength="20">
                    <label for="comment">Comment</label>
                    <textarea id="comment" class="form-control" name="comment" rows="4" placeholder="Enter your comment" maxlength="120"></textarea>
                  </div>
                  <input class="btn-lg btn-warning" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </section>
    <?php include("inc/comments_section.php"); ?>
    <?php include("inc/footer.php");?>
</div><!-- End Content Container -->
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>