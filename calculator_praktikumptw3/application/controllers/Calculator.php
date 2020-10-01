<?php
class Calculator extends CI_Controller
{
    public function index()
    {
        $this->load->view('index');
        $this->load->library('kalkulator');
    }

    public function hitung()
    {
        $this->load->model('Model_Calculator');
        $data['bilangan1'] = $this->input->post('bilangan1');
        $data['bilangan2'] = $this->input->post('bilangan2');
        $data['operator'] = $this->input->post('operator');
        $data['hasil'] = $this->Model_Calculator->kalkulator($data['bilangan1'], $data['bilangan2'], $data['operator']);
        $this->load->view('index', $data);
    }
}
