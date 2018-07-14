<?php if (count($errors) > 0):?>
        <ul class="list-group">
            <?php foreach ($errors as $error): ?>
                <li class="list-group-item"><?php echo $error; ?>></li>
            <?php endforeach ?>
        </ul>
<?php endif ?>
