<?php
namespace Aura\Sql\Driver;

/**
 * Test class for Mysql.
 * Generated by PHPUnit on 2011-06-21 at 16:49:57.
 */
class MysqlTest extends AbstractDriverTest
{
    protected $extension = 'pdo_mysql';
    
    protected $driver_type = 'mysql';    
    
    protected $create_table = "CREATE TABLE aura_test_table (
         id                     INTEGER AUTO_INCREMENT PRIMARY KEY
        ,name                   VARCHAR(50) NOT NULL
        ,test_size_scope        NUMERIC(7,3)
        ,test_default_null      CHAR(3) DEFAULT NULL
        ,test_default_string    VARCHAR(7) DEFAULT 'string'
        ,test_default_number    NUMERIC(5) DEFAULT 12345
        ,test_default_ignore    TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB";
    
    protected $expect_fetch_table_list = ['aura_test_table'];
    
    protected $expect_fetch_table_list_schema = ['aura_test_table'];
    
    protected $expect_fetch_table_cols = [
        'id' => [
            'name' => 'id',
            'type' => 'int',
            'size' => 11,
            'scope' => null,
            'default' => null,
            'notnull' => true,
            'primary' => true,
            'autoinc' => true,
        ],
        'name' => [
            'name' => 'name',
            'type' => 'varchar',
            'size' => 50,
            'scope' => null,
            'default' => null,
            'notnull' => true,
            'primary' => false,
            'autoinc' => false,
        ],
        'test_size_scope' => [
            'name' => 'test_size_scope',
            'type' => 'decimal',
            'size' => 7,
            'scope' => 3,
            'default' => null,
            'notnull' => false,
            'primary' => false,
            'autoinc' => false,
        ],
        'test_default_null' => [
            'name' => 'test_default_null',
            'type' => 'char',
            'size' => 3,
            'scope' => null,
            'default' => null,
            'notnull' => false,
            'primary' => false,
            'autoinc' => false,
        ],
        'test_default_string' => [
            'name' => 'test_default_string',
            'type' => 'varchar',
            'size' => 7,
            'scope' => null,
            'default' => 'string',
            'notnull' => false,
            'primary' => false,
            'autoinc' => false,
        ],
        'test_default_number' => [
            'name' => 'test_default_number',
            'type' => 'decimal',
            'size' => 5,
            'scope' => null,
            'default' => '12345',
            'notnull' => false,
            'primary' => false,
            'autoinc' => false,
        ],
        'test_default_ignore' => [
            'name' => 'test_default_ignore',
            'type' => 'timestamp',
            'size' => null,
            'scope' => null,
            'default' => null,
            'notnull' => true,
            'primary' => false,
            'autoinc' => false,
        ],
    ];
    
    protected $expect_quote_scalar = "'\\\"foo\\\" bar \\'baz\\''";
    
    protected $expect_quote_array = "'\\\"foo\\\"', 'bar', '\'baz\''";
    
    protected $expect_quote_into = "foo = '\'bar\''";
    
    protected $expect_quote_into_many = "foo = '\'bar\'' AND zim = '\'baz\''";
    
    protected $expect_quote_multi = "id = 1 AND foo = 'bar' AND zim IN('dib', 'gir', 'baz')";
    
    protected $expect_quote_name_table_as_alias = '`table` AS `alias`';
    
    protected $expect_quote_name_table_col_as_alias = '`table`.`col` AS `alias`';
    
    protected $expect_quote_name_table_alias = '`table` `alias`';
    
    protected $expect_quote_name_table_col_alias = '`table`.`col` `alias`';
    
    protected $expect_quote_name_plain = '`table`';
    
    protected $expect_quote_names_in = "*, *.*, `foo`.`bar`, CONCAT('foo.bar', \"baz.dib\") AS `zim`";
    
    protected function createSchemas()
    {
        $this->driver->query("CREATE DATABASE aura_test_schema1");
        $this->driver->query("CREATE DATABASE aura_test_schema2");
        $this->driver->query("USE aura_test_schema1");
    }
    
    protected function dropSchemas()
    {
        $this->driver->query("DROP DATABASE IF EXISTS aura_test_schema1");
        $this->driver->query("DROP DATABASE IF EXISTS aura_test_schema2");
    }
}
