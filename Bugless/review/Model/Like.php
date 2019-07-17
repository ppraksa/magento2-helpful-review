<?php

namespace Bugless\Review\Model;

use Magento\Cron\Exception;
use Magento\Framework\Model\AbstractModel;

/**
 * Like Model
 *
 * @author
 */
class Like extends AbstractModel
{
    /**
     * @var \Magento\Framework\Stdlib\DateTime
     */
    protected $_dateTime;

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Bugless\Review\Model\ResourceModel\Like::class);
    }

}
