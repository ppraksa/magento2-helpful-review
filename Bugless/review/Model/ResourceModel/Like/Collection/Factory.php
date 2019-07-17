<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Bugless\Review\Model\ResourceModel\Like\Collection;
/**
 * Class Factory
 * @deprecated
 */
class Factory
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    private $_objectManager;
    /**
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->_objectManager = $objectManager;
    }
    /**
     * Return newly created instance of the category collection
     *
     * @return \Magento\Catalog\Model\ResourceModel\Category\Collection
     */
    public function create()
    {
        return $this->_objectManager->create(\Bugless\Review\Model\ResourceModel\Like\Collection::class);
    }
}