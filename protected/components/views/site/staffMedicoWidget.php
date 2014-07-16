<?php
/**
 * @property StaffMedicoWidget $this
 */
?>

<div class="col-sm-4">
    <img class="img-responsive" src="<?php echo $this->image; ?>" alt="image" />
</div>
<div class="col-sm-8">
    <div class="row">
        <div class="col-sm-10">
            <h3><?php echo $this->name; ?></h3>
        </div>
        <div class="col-sm-2">
            <h3>
                <a href=""><i class="fa fa-linkedin-square"></i></a>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php echo $this->text; ?>
        </div>
    </div>
</div>