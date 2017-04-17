<?php if (isset($errors) && is_array($errors)) : ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <br /><p class="alert bg-danger"><?php echo $error; ?></p>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>