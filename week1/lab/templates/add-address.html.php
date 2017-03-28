<!-- put your HTML here -->


<form action="#" method="post">
    Full name: <input type="text" name="fullname" value="" /> <br />
    Email: <input type="text" name="email" value="" /> <br />
    Add line1: <input type="text" name="addressline1" value="" /> <br />
    City: <input type="text" name="city" value="" /> <br />
    state: <select name="state" >
        <?php foreach ($states as $key => $value): ?> 
            <option value="<?php echo $key; ?>" <?php if ($state == $key): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select><br />
    zip: <input type="text" name="zip" value="" /> <br />
    birthday: <input type="date" name="birthday" value="" /> <br />


    <button type="submit" value="Submit" class="btn">Submit</button>


</form>


