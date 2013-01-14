<?php $this->inc('elements/header.php'); ?>
<div class="row">
    <div class="span10">
        <div class="hero-unit">
            <?php
                $a = new Area('Contenu');
                $a->display($c);
            ?>
          <a class="btn btn-primary btn-large">Plus d'infos</a>
        </div>

      <div class="row">
        <div class="span5">
            <?php
                $a = new Area('Bas Gauche');
                $a->display($c);
            ?>
        </div>
        <div class="span5">
            <?php
                $a = new Area('Bas Droite');
                $a->display($c);
            ?>
        </div>
      </div>

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
<?php $this->inc('elements/footer.php'); ?>
