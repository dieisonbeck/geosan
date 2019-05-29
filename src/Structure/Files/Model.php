<?php
defined('BASEPATH') or exit('No direct script access allowed');
class REPLACE_NAME_HERE extends MY_Model
{
    public $table_name = 'REPLACE_NAME_TABLE';

    public function __construct()
    {
        parent::loader($this->table_name);
    }
}
