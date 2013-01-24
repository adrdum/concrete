<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
?>
<div class="row">
    <div class="span4">
        <?php
            $a = new Area('Colonne 1');
            $a->display($c);
        ?>
    </div>
    <div class="span4">
        <?php
            $a = new Area('Colonne 2');
            $a->display($c);
        ?>
    </div>
    <div class="span4">
        <?php
            $a = new Area('Colonne 3');
            $a->display($c);
        ?>
    </div>
</div>
<div class="row">
    <div class="span12">
        <?php
            $a = new Area('Bas');
            $a->display($c);
        ?>
    </div>
</div>
<?php
$this->inc('elements/footer.php');
?>
