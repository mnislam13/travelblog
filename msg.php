<?php if (isset($_SESSION['msg'])): ?>
    <div class="msg success">
      <li><?php echo $_SESSION['msg'] ?></li>
      <?php
      unset($_SESSION['msg']);
      unset($_SESSION['type']);
      ?>
    </div>
  <?php endif; ?>