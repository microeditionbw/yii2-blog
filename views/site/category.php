<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
<?php 
 if(!$articles) { echo "Нечего не найдено"; }
?>
<?php foreach ($articles as $article): ?>
                  <article class="post post-list">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post-thumb">
                                <a href="<?= yii\helpers\Url::toRoute(['site/view', 'id'=>$article->id]); ?>"><img src="<?= $article->getImage();?>" alt="" class="pull-left"></a>

                                <a href="<?= yii\helpers\Url::toRoute(['site/view', 'id'=>$article->id]); ?>" class="post-thumb-overlay text-center">
                                    <div class="text-uppercase text-center">View Post</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-content">
                                <header class="entry-header text-uppercase">
                                    <h6><a href="#"> Travel</a></h6>

                                    <h1 class="entry-title"><a href="blog.html">Home is peaceful place</a></h1>
                                </header>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consadipsinesed diam nonumy eirmod tevidubore et
                                    </p>
                                </div>
                                <div class="social-share">
                                    <span class="social-share-title pull-left text-capitalize">By Rubel On February 12, 2016</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>  
<?php endforeach; ?>

<?php
echo yii\widgets\LinkPager::widget([
'pagination' => $pages,
]);
?>
            </div>
<?= $this->render('/partials/sidebar', [
             'popular' => $popular,
             'recent' => $recent,
             'categories' => $categories]); ?>
        </div>
    </div>
</div>
<!-- end main content-->