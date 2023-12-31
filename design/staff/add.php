<form method="post" action="fun/staff/insert.php">
    <div class="form-group">
      <label for="exampleInputEmail1">name</label>
      <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">salary</label>
      <input type="text" name="salary" value="" class="form-control" id="exampleInputEmail1">
    </div>
  <br>
    <div class="form-group">
      <label for="exampleFormControlSelect1">occupation</label>
      <select id="exampleFormControlSelect1" class="form-control" name="occ">
        <option value="1">manager</option>
        <option value="2">eceptionist</option>
        <option value="3">accountant</option>
        <option value="4">maintenance enginner</option>
        <option value="5">waiters</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>