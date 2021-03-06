<!-- File: src/Template/Articles/view.ctp -->
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div id="wrapper">

    <?php echo $this->element('admin/sidebar'); ?>

    <div id="page-wrapper" class="gray-bg">
       <?php echo $this->element('admin/top_header'); ?>    
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Pages</h2>
                <ol class="breadcrumb">
                    
                    <li>
                        <a>Manage Pages</a>
                    </li>
                    <li class="active">
                        <strong>Pages List</strong>
                    </li>
                </ol>
            </div>

        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title ">
                            <h5>Page Detail</h5>
                            <span>
                                <?= $this->Html->link(__('Back'), ['action' => 'index'],['data-toggle' =>'tooltip','data-placement' => 'bottom', 'title' =>'Back','class' => 'btn btn-success btn-xs pull-right']) ?>   
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->slug],['data-toggle' =>'tooltip','data-placement' => 'bottom', 'title' =>'Edit','class' => 'btn btn-success btn-xs pull-right back-btn']) ?>   
                            </span>
                        </div>
                        
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <h2><?= h($article->title) ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php

                                       if($article['published'] == 1){
                                            $status = 'Active';
                                        }elseif($article['published'] == 2){
                                            $status = 'Inactive';
                                        }
                                    ?>
                                    <dl class="dl-horizontal">
                                        <dt><?= __('Status') ?>:</dt> <dd><span class="label label-primary"><?= h($status) ?></span></dd>
                                    </dl>

                                    <dl class="dl-horizontal">
                                        <dt><?= __('Description') ?>:</dt> <dd><?= h($article->body) ?></dd>
  
                                    </dl>
                                </div>
                                <div class="col-lg-6">
                                    <dl class="dl-horizontal">
                                        <dt><?= __('Created') ?>:</dt> <dd><?= h($article->created) ?></dd>
                                    </dl>

                                    <dl class="dl-horizontal">
                                        <dt><?= __('Modified') ?>:</dt> <dd><?= h($article->modified) ?></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
        <?php echo $this->element('inner_footer'); ?>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>