<?php

namespace App\Controllers;

//model connection
use App\Models\StudentModel;
use CodeIgniter\RESTful\ResourceController;
// use app\Models\StudentModel;

class Student extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $modeldata = new StudentModel();
        $data['students'] = $modeldata->findAll();
        $data['title'] = "All Students";
        $data['copyright'] = "Copyright &copy; 2022 All rights reserved";
        // print_r($data);
        return view("students/student_list", $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data['title'] = "Add Students";
        $data['copyright'] = "Copyright &copy; 2022 All rights reserved";
        return view("students/add_student", $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $model = new StudentModel();
        // $data['name'] = $this->request->getPost('name');
        // $data['phone'] = $this->request->getPost('phone');
        // $data['email'] = $this->request->getPost('email');
        // $data['address'] = $this->request->getPost('address');

        //getPost work for post method 
        $data = $this->request->getPost();
        if ($model->save($data)) { //save method used for save data in database
            return redirect("Student"); //redirect to a specific page
            // return redirect()->back(); //back method used for back current page
            // return $this->index(); //index method used for show index page but some problem in this method that it will submit previous data after reload
        };
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $model = new StudentModel();
        $data['student'] = $model->find($id);
        $data['title'] = "All Students";
        $data['copyright'] = "Copyright &copy; 2022 All rights reserved";
        return view("students/edit_student", $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $model = new StudentModel();
        $data = $this->request->getPost();
        if ($model->update($id, $data)) { //update method should gave two parameters one id and second data and sequence must be maintain first will pass id second will data
            return redirect()->to("student");
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to("student");
    }
}
