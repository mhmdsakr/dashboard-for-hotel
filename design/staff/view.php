<?php
// session_start();
?>
<a class="btn btn-primary" href="?action=add">Add </a>
                <br>
                <br>
				<table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>salary</th>
                            <th>job</th>
                            <th>controlls</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                include "fun/conn.php";
                $select = "SELECT * FROM staff";
                $query = $conn -> query($select);
                $num = $query -> num_rows;
                // echo $num;

                foreach($query as $staff){
                ?>
                    <tr>
                            <td><?=$staff['id']?></td>
                            <td><?=$staff['name']?></td>
                            <td><?=$staff['salary']?></td>
                            <td>
                                <?php
                                if($staff['job_id'] == 1){
                                    echo "manager";
                                }elseif($staff['job_id'] == 2){
                                    echo "receptionist";
                                }elseif($staff['job_id'] == 3){
                                    echo "accountant";
                                }elseif($staff['job_id'] == 4){
                                    echo "maintenance enginner";
                                }elseif($staff['job_id'] == 5){
                                    echo "waiters";
                                }
                                ?>
                            </td>
                            <td>
                                <!-- <a class="btn btn-primary" href="?action=edit&id=<?=$staff['id']?>">Edit</a> -->
                                <!-- <a class="btn btn-danger" href="fun/delete_staff.php?id=<?=$staff['id']?>">Delete</a> -->

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?=$staff['id']?>">
                                Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="<?=$staff['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete <span class="text-danger" style="font-weight:bold"><?=$staff['name']?></span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="fun/staff/delete.php?id=<?=$staff['id']?>" class="btn btn-danger">Confirm</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                        </tr>
                <?php
                }
                $_SESSION['room']= count($staff);
                $_SESSION['num']= $num;
                // echo $_SESSION['room'];
                ?>
                    </tbody>
                </table>