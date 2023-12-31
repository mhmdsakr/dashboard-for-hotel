
                <br>
                <br>
				<table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>room_num</th>
                            <th>room type</th>
                            <th>entry date</th>
                            <th>exit date</th>
                            <th>controlls</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                include "fun/conn.php";
                $select = "SELECT * FROM guest";
                $query = $conn -> query($select);
                $num2 = $query -> num_rows;
                foreach($query as $guest){
                ?>
                    <tr>
                            <td><?=$guest['id']?></td>
                            <td><?=$guest['name']?></td>
                            <td><?=$guest['room_num']?></td>
                            <td><?=$guest['room_type']?></td>
                            <td><?=$guest['entry_date']?></td>
                            <td><?=$guest['exit_date']?></td>
                            <td>
                                <!-- <a class="btn btn-danger" href="fun/delete_guest.php?id=<?=$guest['id']?>">Delete</a> -->

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?=$guest['id']?>">
                                Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="<?=$guest['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete <span class="text-danger" style="font-weight:bold"><?=$guest['name']?></span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="fun/guest/delete.php?id=<?=$guest['id']?>" class="btn btn-danger">Confirm</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                        </tr>
                <?php
                }
                $_SESSION['num2']= $num2;
                ?>
                    </tbody>
                </table>