<div class="container">
        <h1 class="text text-center text-primary">Quiz OOP</h1>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-body bg-dark text-light">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" required name="name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="name">Gender:</label>
                            <select name="gender" class="form-control">
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="province">Province:</label>
                            <input type="text" required name="province" class="form-control" placeholder="Enter your province name">
                        </div>
                        <div class="form-group">
                            <label for="province">Email:</label>
                            <input type="email" required name="email" class="form-control" placeholder="yourname@example.com">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary float-right" type="submit" name="btn-submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="col-4">
            <?php include "information.php" ?>
        </div>
        <div class="col-2"></div>
    </div>
</div>