<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fun/booking/insert.php" method="post">
        <div class="panel panel-default">
            <div class="panel-heading"> Room info:
            </div>
            <div class="panel-body">
                <div class="form-group col-lg-6">
                    <label>type of room</label>
                    <select class="form-control" id="room_type" name="type">
                        <?php
                        include "fun/conn.php";
                        $select = "SELECT * FROM cat_room";
                        $query = $conn -> query($select);
                        while($result = $query -> fetch_assoc()){?>

                        <option selected value="<?=$result['id'];?>"><?=$result['name'];?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group col-lg-6">
                    <label>Room_num</label>
                    <select class="form-control" id="room_no" name="num">
                    <?php
                        include "fun/conn.php";
                        $select_1 = "SELECT * FROM rooms";
                        $query_1 = $conn -> query($select_1);
                        while($result_1 = $query_1 -> fetch_assoc()){?>

                        <option selected value="<?=$result_1['id'];?>"><?php echo $result_1['room_num']?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group col-lg-6">
                    <label>Enter date</label>
                    <input type="text" name="in" class="form-control" placeholder="mm/dd/yyyy" id="check_in_date">
                </div>

                <div class="form-group col-lg-6">
                    <label>exit date</label>
                    <input type="text" name="out" class="form-control" placeholder="mm/dd/yyyy" id="check_out_date">
                </div>

            </div>


        </div>








        <div class="panel panel-default">
            <div class="panel-heading">Client info:</div>
            <div class="panel-body">
                <div class="form-group col-lg-6">
                    <label>name:</label>
                    <input class="form-control" placeholder="enter your name" id="first_name" name="name">
                </div>
                <div class="form-group col-lg-6">
                    <label>Phone number:</label>
                    <input class="form-control" placeholder="012********" id="first_name" name="number">
                </div>
                <div class="form-group col-lg-6">
                    <label>Gmail:</label>
                    <input class="form-control" placeholder="enter your email" id="first_name" name="gmail" type="email">
                </div>
                <div class="form-group col-lg-6">
                    <label>Address:</label>
                    <input class="form-control" placeholder="city" id="first_name" name="address">
                </div>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">submit</button>
        <br>
        <br>
    </form>

    
</body>
</html>