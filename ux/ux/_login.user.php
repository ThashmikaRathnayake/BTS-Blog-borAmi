
<div class="modal fade" id="mdlLogin" tabindex="-1" aria-labelledby="mdlLoginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="mdlLoginLabel">Register new user</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/app/engine/_login.php" method="post">
      <div class="modal-body">
        <div class="mb-3">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  
                  <div class="mb-3">
                    <label for="pass1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pass1" name="pass1">
                  </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Sign In"> 
      </div>
      </form>
    </div>
  </div>
</div>

