<?php
class Model_Calculator extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('kalkulator');
    }
    public function kalkulator($bilangan1, $bilangan2, $operator)
    {
        switch ($operator) {
            case 'tambah':
                return $bilangan1 + $bilangan2;
                break;
            case 'kurang':
                return $bilangan1 - $bilangan2;
                break;
            case 'kali':
                return $bilangan1 * $bilangan2;
                break;
            case 'bagi':
                return $bilangan1 / $bilangan2;
                break;
            default:
                return '';
                break;
        }
    }
}
