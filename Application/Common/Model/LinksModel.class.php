<?php
/**
 * Created by Green Studio.
 * File: LinksModel.class.php
 * User: TianShuo
 * Date: 14-1-16
 * Time: 上午12:27
 */

namespace Common\Model;
use Think\Model\RelationModel;

/**
 * 链接模型定义
 * Class LinksModel
 * @package Home\Model
 */
class LinksModel extends RelationModel
{

    /**
     * @var bool
     */
    protected $autoCheckFields = false;

    public $_link = array(
        'Group' => array(

            'mapping_type' => self::BELONGS_TO,

            'class_name'   => 'Link_group',

            'mapping_name' => 'link_group',

            'mapping_key'  => 'link_group_id',

            'foreign_key'  => 'link_group_id',

            'parent_key'   => 'link_group_id',
        )
    );

}