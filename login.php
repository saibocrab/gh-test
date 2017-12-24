<?php include_once("header.php"); ?>

<div class="row justify-content-center my-row-login-form">
    <div class="col-10 col-sm-8 col-md-6 col-lg-4">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
  </div>
    <div class="card bg-light">
        <div class="card-header">LOGIN</div>
        <div class="card-body">
            <form name="testloginform" id="testloginform">
                <div class="form-group">
                    <label for="testEmail">Email address</label>
                    <input type="email" class="form-control" name="testEmail" id="testEmail" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="testPassword">Password</label>
                    <input type="password" class="form-control" name="testPassword" id="testPassword" placeholder="Password">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="checkbox">
                        Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include_once("footer.php"); ?>