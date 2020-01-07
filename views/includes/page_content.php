<div class="text-center">
  <h2 class="featurette-heading">  <span class="text-muted"><?php 
                                                                    if($SettingTitle['activ'] == 1){
                                                                        echo ''.$Page['title'].'';
                                                                    }else{ 
                                                                        echo '';
                                                                    }
                                        ?></span></h2>
             </div>
             <p>
             <div class="container marketing marg">
             <div class="row">
             <div class="blog-post">
             <div  class="lead"> 
                <?php 
                                                                    if($SettingContent['activ'] == 1){
                                                                        echo ''.$Page['content'].'';
                                                                    }else{ 
                                                                        echo '';
                                                                    }
                                        ?>
                </div>
                </div>
                </div>
                </div>
            