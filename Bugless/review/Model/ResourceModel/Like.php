<?php

namespace Bugless\Review\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Like Resource Model
 *
 * @author
 */
class Like extends AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('bugless_review', 'id');
    }
}