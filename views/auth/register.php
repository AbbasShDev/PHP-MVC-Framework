<div class="container col-md-6 auth-container my-5">
    <h1 class="text-center">Register</h1>

    <form class="my-5" action="" method="post">

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="password-confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password-confirmation" name="password-confirmation">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>