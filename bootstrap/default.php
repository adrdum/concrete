<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
?>
<div class="row">
    <div class="span10">
        <?php
            $a = new Area('Contenu');
            $a->display($c);
        ?>
    </div>
    <div class="span2">
        <?php
            $a = new Area('Latéral');
            $a->display($c);
        ?>
    </div>
</div>

<div class="row">
    <footer class="span12">
        <div class="pull-right">&copy; Nilsine & ULCO</div>
    </footer>
</div>
<?php
$this->inc('elements/footer.php');
?>
