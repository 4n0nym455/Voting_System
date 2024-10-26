<?php
include 'functions.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();
$msg = '';
if (!empty($_POST)) {
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $desc = isset($_POST['desc']) ? $_POST['desc'] : '';
    $stmt = $pdo->prepare('INSERT INTO polls (title, description) VALUES (?, ?)');
    $stmt->execute([ $title, $desc ]);
    $poll_id = $pdo->lastInsertId();
    $answers = isset($_POST['answers']) ? explode(PHP_EOL, $_POST['answers']) : '';
    foreach ($answers as $answer) {
        if (empty($answer)) continue;
        $stmt = $pdo->prepare('INSERT INTO poll_answers (poll_id, title, votes) VALUES (?, ?, 0)');
        $stmt->execute([ $poll_id, $answer ]);
    }
   
    $msg = 'Created Successfully!';
}
?>
<?=template_header('Create Poll')?>

<div class="content update">

    <h2>Create Poll</h2>

    <form action="create.php" method="post">

        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Title">

        <label for="desc">Description</label>
        <input type="text" name="desc" id="desc" placeholder="Description">

        <label for="answers">Answer Options (per line)</label>
        <textarea name="answers" id="answers" placeholder="Option 1<?=PHP_EOL?>Option 2<?=PHP_EOL?>Option 3"></textarea>

        <button type="submit">Create</button>

    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>



