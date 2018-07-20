<?php echo $header; ?><?php echo $column_left; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="pull-right">
                <button type="submit" id="button-save" form="form-setting" data-toggle="tooltip" title="<?php echo $button_save; ?>"  class="btn btn-primary">
                    <i class="fa fa-save"></i>
                </button>
                <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
            <h1><?php echo $heading_title; ?></h1>
            <ul class="breadcrumb">
                <?php foreach ($breadcrumbs as $breadcrumb) { ?>
                <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
                <?php } ?>
            </ul>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="com-md-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-image" data-toggle="tab"><?php echo $tab_image; ?></a></li>
                    <li><a href="#tab-general" data-toggle="tab"><?php echo $tab_general; ?></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-image">
                        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-setting" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-logo"><?php echo $entry_logo; ?></label>
                                <div class="col-sm-10"><a href="" id="thumb-logo" data-toggle="image" class="img-thumbnail">
                                        <img src="<?php echo $logo; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>" /></a>
                                    <input type="hidden" name="config_logo" value="<?php echo $config_logo; ?>" id="input-logo" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-icon"><span data-toggle="tooltip" title="<?php echo $help_icon; ?>"><?php echo $entry_icon; ?></span></label>
                                <div class="col-sm-10"><a href="" id="thumb-icon" data-toggle="image" class="img-thumbnail"><img src="<?php echo $icon; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>" /></a>
                                    <input type="hidden" name="config_icon" value="<?php echo $config_icon; ?>" id="input-icon" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12" for="text_near_logo">Текст рядом с логотипом</label>
                                <div class="col-sm-10">
                                    <input type="text" name="text_near_logo" class="form-control" id="text_near_logo" placeholder="Текст рядом с логотипом" value="<?php echo $text_near_logo?>">
                                </div>
                            </div>
                            <div class="form-group"></div>
                        </form>
                </div>
                <div class="tab-pane" id="tab-general">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, esse labore! Alias aliquam culpa cupiditate explicabo fugit incidunt ipsum labore laborum minima nihil nulla obcaecati porro quasi quod, repellat tempore?
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $footer;?>