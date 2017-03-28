<!-- put your HTML here -->
<div class="row">

    <form action="#" method="post" class="form-horizontal">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Full Name" name="fullname" id="fullname" value="<?php echo $fullname; ?>" aria-describedby="basic-addon1">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1" value="<?php echo $email; ?>">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Address" name="addressline1" aria-describedby="basic-addon1" value="<?php echo $addressline1; ?>">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="City" name="city" aria-describedby="basic-addon1" value="<?php echo $city; ?>">
        </div>


        <div class="form-group">
            <select name="state" class="form-control" id="select" class="form-control" id="select" >
                <?php foreach ($states as $key => $value): ?> 
                    <option value="<?php echo $key; ?>" <?php if ($state == $key): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Zip" name="zip" aria-describedby="basic-addon1" value="<?php echo $zip; ?>">
        </div>

        <div class="form-group">
            <input type="date" class="form-control" placeholder="Birthday" name="birthday" aria-describedby="basic-addon1" value="<?php echo $birthday; ?>">    
        </div>
        <br />

        <button type="submit" value="Submit" class="btn-lg">Submit</button>


    </form>
</div>

