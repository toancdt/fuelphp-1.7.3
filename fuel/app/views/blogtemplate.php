<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html"; charset="utf-8" />
    <?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
    <div id="content">
        <p>
            <?php 
                echo \Html::anchor('blog/index', 'Listing'), '&nbsp;',\Html::anchor('blog/add', 'Add');
            ?>
        </p>
        <?php if(isset($messages) and count($messages)>0): ?>
        <div class="messages">
            <ul>
            <?php 
                foreach($messages as $message) {
                    echo '<li>'. $message.'</li>';
                }
            ?>
            </ul>
        </div>
        <?php endif; ?>
        <?php echo $content; ?>
    </div>
</body>
</html>