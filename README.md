Hello this is an extension which allow rate any review as helpful or no and storage it on the database and user cookies to prevent malicious clicks

Please put this call in the /Magento_Review/templates/product/view/list.phtml

**<?php echo $this->getLayout()->createBlock("Bugless\Review\Block\Like")->setData('key', $_review->getReviewId())->setTemplate("Bugless_Review::like.phtml")->toHtml(); ?>**

Add style form scss

That's all