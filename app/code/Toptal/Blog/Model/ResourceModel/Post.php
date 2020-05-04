<?php

namespace Toptal\Blog\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    /**
     * Post Abstract Resource Constructor
     * @return void
     */
    // All of the ResourceModel operations(CRUD) are handled by the AbstractDb parent class.
    protected function _construct()
    {
        $this->_init('toptal_blog_post', 'post_id');
    }
}