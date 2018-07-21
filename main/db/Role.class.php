<?php
/**
 * Created by IntelliJ IDEA.
 * User: clong
 * Date: 18-6-24
 * Time: 上午6:57
 */

namespace db;

interface Role extends Base
{
    public function getAll();
    public function getAllById($roleId);

    /**
     * 角色关联权限
     * @param $roleId
     * @param $privilegeId
     * @return mixed
     */
    public function relPrivilege($roleId,$privilegeId);
}