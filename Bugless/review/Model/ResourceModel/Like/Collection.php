<?php

namespace Bugless\Review\Model\ResourceModel\Like;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Contact Resource Model Collection
 *
 * @author
 */
class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Bugless\Review\Model\Like', 'Bugless\Review\Model\ResourceModel\Like');
    }
}