<div class="modal fade" id="mdlArticle" tabindex="-1" aria-labelledby="mdlArticle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="mdlArticle">Add new article</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/app/engine/_userarticle.php" method="post">
      <div class="modal-body">
        <div class="mb-3">
            <label for="name" class="form-label">User Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="abody" class="form-label">Article</label>
            <input type="text" class="form-control" id="abody" name="abody">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Submit"> 
      </div>
      </form>
    </div>
  </div>
</div>

