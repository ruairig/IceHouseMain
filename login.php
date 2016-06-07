<body>
<div class="container">
    <div class="row">

        <div id="Author" class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div id="AuthorPic" class="col-md-3">
                    <img
                        src="https://upload.wikimedia.org/wikipedia/commons/9/93/Evan_Roth_head_shot.jpg"
                        class="img-rounded" alt="Mountain View" style="width:250px; height:260px;">
                </div>
                <?php
                if(isset($_SESSION['id']) && $id == $_SESSION['id']) { ?>

                <h2><?php echo $first_name . " " . $last_name; ?></h2>

                <p>Date of Birth: <?php echo $dob; ?></p>

                <p>Country: <?php echo $country; ?></p>

                <p>Adventures: <?php echo $adventure_no; ?> </p>

                <p>Memeber Since: 01/10/15 </p>

                <p><?php echo $description; ?></p>

                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit Info</button>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->

                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Info</h4>
                            </div>
                            <form action="edit_user.php" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="usr">First Name:</label>
                                        <input type="text" class="form-control" name="firstName" value="<?php echo $first_name;?>">

                                        <label for="usr">Second Name:</label>
                                        <input type="text" class="form-control" name="secondName" value="<?php echo $last_name;?>">

                                        <label for="usr">Description:</label>
                                        <textarea class="form-control" name="description"  rows="5" cols="80"><?php echo $description; ?></textarea>

                                        <label for="usr">Date Of Birth:</label>
                                        <input type="text" class="form-control" name="dob" value="<?php echo $dob;?>">

                                        <label for="usr">Country:</label>
                                        <input type="text" class="form-control" name="country" value="<?php echo $country;?>">

                                        <input type="hidden" class="form-control" name="userID" value="<?php echo $_SESSION['id'];?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-default" >Submit</button>

                                </div>
                        </div>
                        </form>
                    </div>
                </div>

<?php }