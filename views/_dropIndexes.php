<?php
/* @var $table string the name table */
/* @var $indexes array the foreign keys */
if(is_array($indexes)):
    foreach ($indexes as $key => $index): ?>
            $this->dropIndex('<?= $key ?>', $this->tableName);
    <?php endforeach; ?>
<?php endif;
