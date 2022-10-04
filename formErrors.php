

<?php if (count($errors) > 0): ?>
<div class="msg error">
    <?php foreach ($errors as $err): ?>
    <li><?php echo $err; ?></li>
    <?php endforeach; ?>
</div>
<?php endif; ?>