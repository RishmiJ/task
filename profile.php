<?php  include_once('./components/header.php') ?> 

<?php 

$user_id = $_SESSION['User_Id'];
$query = "SELECT * FROM user WHERE User_id=$user_id  ";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
    $name = $row['User_name'];
    $password = $row['Password'];
    $email = $row['email'];
    $telephone = $row['telephone'];
}
?>

<form action="./db/update_profile.php" method="post">
                <div class="container my-5">
                    <div class="card mx-5">
                        <div class="card-header"> <h1>Profile</h1> </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" required name="name" value="<?php echo $name ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" required name="email" value="<?php echo $email ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Telephone</label>
                                        <input type="text" class="form-control" required name="telephone" value="<?php echo $telephone ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="text" class="form-control" required name="password" value="<?php echo $password ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-warning mx-auto">Update</button>
                        </div>
                    </div>
                </div>
            </form>
