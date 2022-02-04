<a class="menu__link" class="dropdown-toggle" data-toggle="dropdown"><?= $this->currency['code']; ?><b class="caret"></b></a>
<ul class="dropdown-menu agile_short_dropdown">
    <?php foreach ($this->currencies as $k => $v) : ?>
        <?php if ($k != $this->currency['code']) : ?>
            <li><a href="currency/change?curr=<?= $k; ?>"><?= $k ?></a></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>