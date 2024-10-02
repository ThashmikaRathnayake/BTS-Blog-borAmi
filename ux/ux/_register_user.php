
<div class="modal fade" id="mdlRegister" tabindex="-1" aria-labelledby="mdlRegisterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="mdlRegisterLabel">Register new user</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/app/engine/_reguser.php" method="post">
      <div class="modal-body">
        <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname">
            </div>
            <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="dob" class="form-label">Date of birth</label>
                    <input type="date" class="form-control" id="dob" name="dob">
                  </div>
                  <div class="mb-3">
                    <label for="pass1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pass1" name="pass1">
                  </div>
                  <div class="mb-3">
                    <label for="pass2" class="form-label">Verify Password</label>
                    <input type="password" class="form-control" id="pass2" name="pass2">
                  </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Complete Registration"> 
      </div>
      </form>
    </div>
  </div>
</div>

