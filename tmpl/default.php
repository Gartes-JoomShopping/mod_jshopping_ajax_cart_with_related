<?php
/**
* @package Joomla
* @subpackage JoomShopping
* @author Nevigen.com
* @website http://nevigen.com/
* @email support@nevigen.com
* @copyright Copyright © Nevigen.com. All rights reserved.
* @license Proprietary. Copyrighted Commercial Software
* @license agreement http://nevigen.com/license-agreement.html
**/

defined('_JEXEC') or die;

?>
<div id="ajax_cart_with_related">
	<?php if(!($cart->count_product==0)){?>
	<a href="<?php if ($jshopConfig->shop_user_guest==1){print SEFLink('index.php?option=com_jshopping&controller=checkout&task=step2&check_login=1',1, 0, $jshopConfig->use_ssl);
}else{
print SEFLink('index.php?option=com_jshopping&controller=checkout&task=step2',1, 0, $jshopConfig->use_ssl);
} ?>" title="<?php print _JSHOP_GO_TO_CART ?>" target="_top">
	<div class="wrapper_cart_quantity_products">
		<span id="jshop_quantity_products"><?php echo formatqty($cart->count_product) ?> </span>
	</div></a><?php }else{ ?>
	<div title="<?php print _JSHOP_CART_EMPTY?>" class="wrapper_cart_quantity_products">
	</div>
	<?php }?>
</div>