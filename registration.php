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
        <div class="card-header">REGISTRATION</div>
        <div class="card-body">
            <form name="testregform" id="testregform">
                <div class="form-group">
                    <label for="testName">Name</label>
                    <input type="text" class="form-control" name="testName" id="testName" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="testEmail">Email address</label>
                    <input type="email" class="form-control" name="testEmail" id="testEmail" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="testBirth">Birth date</label>
                    <input type="date" class="form-control" name="testbirth" id="testbirth" placeholder="Enter your birth date"
                        min="1900-01-01" max="2017-12-31"> 
                </div>
                <div class="form-group">
                    <label for="testPassword">Password</label>
                    <input type="password" class="form-control" name="testPassword" id="testPassword" aria-describedby="passwordHelp" placeholder="Password"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        required>
                    <small id="passwordHelp" class="form-text">Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</small>
                </div>
                <div class="form-group">
                    <label for="testPasswordAgain">Password again</label>
                    <input type="password" class="form-control" name="testPasswordAgain" id="testPasswordAgain" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include_once("footer.php"); ?>