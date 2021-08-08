<?php
include 'functions.php';
$pdo = connect_db();
$msg = '';
?>
<?php

if ( isset($_GET['id']) ) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare('DELETE FROM contacts WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $msg = 'You have deleted the contact!';
}
?>
<?php
crud_header('Delete')
?>

<div class="content delete">
    <?php if ($msg): ?>
    <p><?=$msg?></p>
     <?php endif; ?>
</div>

<?php
crud_footer()
?>