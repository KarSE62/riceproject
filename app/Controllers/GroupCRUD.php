<?php namespace App\Controllers;
use App\Models\GroupModel;
use CodeIgniter\Controller;

class GroupCRUD extends Controller{

    public function index(){
        $GroupModel = new GroupModel();
        $data['Group'] = $GroupModel->orderBy('group_id','ASCC')->findAll();
        return view('home', $data);
    }

    public  function group()
    {
       return view('addgroup');
    }

    public  function creategroup()
    {
        $GroupModel = new GroupModel();
        $data = [
            'group_name' => $this->request->getVar('group_name'),
            'group_pic' => $this->request->getVar('group_pic')
        ];
        $GroupModel->save($data);
        return $this->response->redirect(site_url('/home'));
    }

    public  function singleGroup($id=null)
    {
        $GroupModel = new GroupModel();
        $data['group'] = $GroupModel->where('group_id', $id)->first();
        return view('/editgroup', $data);
    }

    public  function updateGroup()
    {
        $GroupModel = new GroupModel();
        $id = $this->request->getVar('group_id');
        $data = [
            'group_name' => $this->request->getVar('group_name'),
            'group_pic' => $this->request->getVar('group_pic')
        ];
        $GroupModel->update($id, $data);
        return $this->response->redirect(site_url('/home'));
    }

    public function delete($id=null){
        $GroupModel = new GroupModel();
        $data['group'] = $GroupModel->where('group_id', $id)->delete($id);
        return $this->response->redirect(site_url('/home'));
    }


}