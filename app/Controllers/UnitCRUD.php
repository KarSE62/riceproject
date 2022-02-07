<?php namespace App\Controllers;
use App\Models\UnitModel;
use CodeIgniter\Controller;

class UnitCRUD extends Controller{

    public function index($id){
        $UnitModel = new UnitModel();
        $data['unit'] = $UnitModel->where('km_group',$id)->findAll();
        return view('seemore', $data);
    }

    public  function singleUnit($id=null)
    {
        $UnitModel = new UnitModel();
        $data['unit'] = $UnitModel->where('km_id', $id)->first();
        return view('/editunit', $data);
    }

    public  function updateUnit()
    {
        $UnitModel = new UnitModel();
        $km_id = $this->request->getVar('km_id');
        $data = [
            'km_name' => $this->request->getVar('km_name'),
            'km_pic' => $this->request->getVar('km_pic'),
            'km_detail' => $this->request->getVar('km_detail')
        ];
        $UnitModel->update($km_id, $data);
        return $this->response->redirect(site_url('/home'));
    }

    public function deleteUnit($id=null){
        $UnitModel = new UnitModel();
        $data = $UnitModel->where('km_id', $id)->delete($id);
        return $this->response->redirect(site_url('/home'));
    }

    public  function unit()
    {
       return view('addunit');
    }

    public  function saveUnit()
    {
        $UnitModel = new UnitModel();
        $data = [
            'km_name' => $this->request->getVar('km_name'),
            'km_pic' => $this->request->getVar('km_pic'),
            'km_group' => $this->request->getVar('km_group'),
            'km_detail' => $this->request->getVar('km_detail')
        ];
        $UnitModel->save($data);
        return $this->response->redirect(site_url('/home'));
    }
}