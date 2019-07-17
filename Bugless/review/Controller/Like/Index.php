<?php


namespace Bugless\Review\Controller\Like;


class Index extends \Magento\Framework\App\Action\Action
{
    /*protected $_pageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        //$this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }*/

    public function execute()
    {
        try {

            $post = $this->getRequest()->getPostValue();

            $isLiked = (string)$post['like'];

            $id = intval($post['reviewID']);

            // Load data by review ID
            $like = $this->_objectManager->create('Bugless\Review\Model\Like');
            $like->load($id, 'review_id');

            // IF exist
            if ($like->getId()) {
                // increment or decrement value
                $up = intval($like->getReviewLike()) + 1;
                $down = intval($like->getReviewDislike()) + 1;

                if ($isLiked === 'true') {
                    $like->setReviewLike($up);
                } else {
                    $like->setReviewDislike($down);
                }
                $like->save();
                // Not liked yet
            } else {
                $like->setReviewId($id);

                if ($isLiked === 'true') {
                    $like->setReviewLike(1);
                    $like->setReviewDislike(0);
                } else {
                    $like->setReviewLike(0);
                    $like->setReviewDislike(1);
                }

                $like->save();
            }
        }
        catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}