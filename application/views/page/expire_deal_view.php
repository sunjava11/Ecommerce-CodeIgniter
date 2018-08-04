<?php defined('BASEPATH') OR exit('No direct script access allowed');?>



                <div class="container infinite-scroll">
				<h1 style="margin-top:20px">Expire Deals</h1>
					<?php if($activeProducts):?>
					<?php foreach($activeProducts as $product):?>
					<?php 
						$data["Product"]=$product;						;
					?>
					<div class="col-md-3 post">
					<?php $this->load->view("template/product",$data); ?>
					</div>
					<?php endforeach;?>
					<?php endif;?>
					
					
					<div class="pull-right pagination">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>
				</div>
