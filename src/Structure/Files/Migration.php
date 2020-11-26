<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Migration_REPLACE_NAME_HERE extends CI_Migration
{
    public function __construct($config = array())
    {
        $this->load->library('rb');
        parent::__construct($config);
    }

    public function up()
    {
        $sql = '';
        R::exec($sql);
    }
}
