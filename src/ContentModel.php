<?php

namespace codesaur\Contents;

use PDO;

use codesaur\DataObject\Column;
use codesaur\DataObject\MultiModel;

class ContentModel extends MultiModel
{
    function __construct(PDO $pdo, $accountForeignRef = null)
    {
        parent::__construct($pdo);
        
        $created_by = new Column('created_by', 'bigint', 20);
        $updated_by = new Column('updated_by', 'bigint', 20);
        if (!empty($accountForeignRef)) {
            if (is_array($accountForeignRef)) {
                call_user_func_array(array($created_by, 'foreignKey'), $accountForeignRef);
                call_user_func_array(array($updated_by, 'foreignKey'), $accountForeignRef);
            } else {
                $created_by->foreignKey($accountForeignRef, 'id');
                $updated_by->foreignKey($accountForeignRef, 'id');
            }
        }
        
        $this->setColumns(array(
           (new Column('id', 'bigint', 20))->auto()->primary()->unique()->notNull(),
           (new Column('keyword', 'varchar', 128))->unique(),
            new Column('type', 'int', 4, 1),
            new Column('legend', 'int', 4, 1),
            new Column('status', 'tinyint', 1, 1),
            new Column('is_active', 'tinyint', 1, 1),
            new Column('created_at', 'datetime'),
            $created_by,
            new Column('updated_at', 'datetime'),
            $updated_by
        ));
        
        $this->setContentColumns(array(
            new Column('title', 'varchar', 1024),
            new Column('short', 'text'),
            new Column('full', 'text')
        ));
    }
    
    function __initial()
    {
        $method = $this->getName();
        if (!method_exists(ContentInitial::class, $method)) {
            return;
        }
        
        $this->setForeignKeyChecks(false);        
        ContentInitial::$method($this);        
        $this->setForeignKeyChecks();
    }
}
