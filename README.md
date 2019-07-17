Hello this is an extension which allow rate any review as helpful or no and storage it on the database and user cookies to prevent malicious clicks

Please put this call in the /Magento_Review/templates/product/view/list.phtml loop <?php foreach ($_items as $_review): ?>

**<?php echo $this->getLayout()->createBlock("Bugless\Review\Block\Like")->setData('key', $_review->getReviewId())->setTemplate("Bugless_Review::like.phtml")->toHtml(); ?>**

Add style from scss where you need

That's all

<a href="https://ibb.co/gWv8mg9"><img src="https://i.ibb.co/8xzwN8s/reviews.png" alt="reviews" border="0"></a>
