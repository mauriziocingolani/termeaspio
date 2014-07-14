<?php
/**
 * @property CFormModel $model Modello della form
 * @property string $attribute Campo della form
 * @property array $data Lista dei valori
 */
?>

<ul id="<?php echo get_class($model) . '_' . $attribute . '_data'; ?>"style="display:none;">
    <?php foreach ($data as $value) : ?>
        <li><?php echo Html::encode($value); ?></li>
    <?php endforeach; ?>
</ul>