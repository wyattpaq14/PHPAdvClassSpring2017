<!-- put your HTML here -->

<div class="col-lg-6">
    <form action="#" method="post" class="form-horizontal">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Full Name" name="fullname" aria-describedby="basic-addon1">
        </div>

        <div class="input-group">
            <input type="text" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1">
        </div>

        <div class="input-group">
            <input type="text" class="form-control" placeholder="Address" name="addressline1" aria-describedby="basic-addon1">
        </div>

        <div class="input-group">
            <input type="text" class="form-control" placeholder="City" name="city" aria-describedby="basic-addon1">
        </div>



        <select name="state" class="form-control" id="select" class="form-control" id="select" >
            <?php foreach ($states as $key => $value): ?> 
                <option value="<?php echo $key; ?>" <?php if ($state == $key): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
            <?php endforeach; ?>
        </select>

        <div class="input-group">
            <input type="text" class="form-control" placeholder="Zip" name="zip" aria-describedby="basic-addon1">
        </div>

        <div class="input-group">
            <input type="text" class="form-control" placeholder="Birthday" name="birthday" aria-describedby="basic-addon1">
        </div>


        <button type="submit" value="Submit" class="btn">Submit</button>


    </form>
</div>

