
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<?php
include ('../functions.php');
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the polls and poll answers
$stmt = $pdo->query('SELECT p.*, GROUP_CONCAT(pa.title ORDER BY pa.id) AS answers FROM polls p LEFT JOIN poll_answers pa ON pa.poll_id = p.id GROUP BY p.id');
$polls = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?=template_header('Polls')?>

<div class="content home">

    <h2>Polls</h2>

    <p>Welcome to Meru University home page! You can view the list of polls below.</p>

    <a href="../create.php" class="create-poll">Create Poll</a>

    <table>
        <thead>
            <tr>
                <td>#</td>
                <td>Title</td>
                <td>Answer Options</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($polls as $poll): ?>
            <tr>
                <td><?=$poll['id']?></td>
                <td><?=htmlspecialchars($poll['title'], ENT_QUOTES)?></td>
                <td>
                    <?php foreach (explode(',', $poll['answers']) as $answer): ?>
                    <span class="poll-answer"><?=htmlspecialchars($answer, ENT_QUOTES)?></span>
                    <?php endforeach; ?>
                </td>
                <td class="actions">
                    <a href="../vote.php?id=<?=$poll['id']?>" class="view" title="View Poll"><svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" /></svg></a>
                    <a href="../delete.php?id=<?=$poll['id']?>" class="trash" title="Delete Poll"><svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" /></svg></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>

<?=template_footer()?>