<!-- Start Raising -->
<section class="start-pledging">
    <div class="container">

        <!-- Center block -->
        <div class="center col-xs-12 col-sm-12">
            
            <!-- Blokk card C -->
            <div class="blokk-card-c">

                <?php $page_invest_block = meta_get_option('page_invest_block'); ?>              
                <!-- Title -->
                <div class="title"><h3><?php echo $page_invest_block['title'];?></h3></div><!-- // Title -->

                <!-- Description -->
                <div class="description">
                    <p><?php echo nl2br($page_invest_block['description']);?></p>
                </div><!-- // Description -->

                <!-- Action -->
                <div class="action">
                    <a href="<?php echo $page_invest_block['btn_link'];?>" class="btn btn-lg btn-primary"><?php echo $page_invest_block['btn_text'];?></a>
                </div><!-- // Action -->

                <!-- Note -->
                <div class="note">
                    <p><?php echo nl2br($page_invest_block['note']);?></p>
                </div><!-- // Note -->
            </div><!-- // Blokk card C -->
        </div><!-- // Center block -->
    </div><!-- ./container -->
</section><!-- // Start Raising -->