<?php
namespace Bugless\Review\Block;
class Like extends \Magento\Framework\View\Element\Template
{
    protected $_likeCollection;

    protected $_storeManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Bugless\Review\Model\ResourceModel\Like\CollectionFactory $likeCollection
    )
    {
        $this->_storeManager = $context->getStoreManager();
        $this->_likeCollection = $likeCollection;
        parent::__construct($context);
        $this->addData(array('cache_lifetime' => null));
    }

    public function getCacheLifetime()
    {
        return null;
    }

    public function getCollection()
    {
        $collection = $this->_likeCollection->create();
        return $collection;

    }

    public function getItemByReviewId($reviewId)
    {
        $item = $this->_likeCollection->create()->addFieldToFilter('review_id', $reviewId);
        return $item;
    }

}

