<?php
include 'functions.php';
// Connect to DB
$pdo = connect_db();
// Prepare the SQL Query
$stmt = $pdo->prepare('SELECT * FROM contacts ');
$stmt->execute();
// Fetch the records 
$db_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
crud_header('Read')
?>

<div class="content read">
	<h2>Read Contacts</h2>
	<a href="create.php" class="create-contact">Create Contact</a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($db_data as $contact): ?>
            <tr>
                <td><?=$contact['id']?></td>
                <td><?=$contact['name']?></td>
                <td><?=$contact['email']?></td>
                <td><?=$contact['phone']?></td>
                <td class="actions">
                    <a href="update.php?id=<?=$contact['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?=$contact['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
crud_footer()
?>