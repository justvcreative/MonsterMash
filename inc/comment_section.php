<section id="comment_section">
        <h2>Comment</h2>
        <form method="POST" action="inc/post_comment.php">
         <div class="form-group">
            <input type="hidden" name="id" value="Anonymous">
            <label for="name">Name</label>
            <input id="name" class="form-control" type="text" name="name" value="Your Name">
            <label for="comment">Comment</label>
            <textarea id="comment" class="form-control" name="comment" rows="2" cols="50">Enter A Comment</textarea>
          </div>
          <input class="btn-lg btn-warning" type="submit" value="Submit">
        </form>
</section>