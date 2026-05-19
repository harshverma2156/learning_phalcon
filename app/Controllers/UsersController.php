<?php

use Phalcon\Mvc\Controller;

class UsersController extends Controller
{
    
    public function indexAction()
    {
        $users = Users::find();

        $this->view->users = $users;
    }

    
    public function createAction()
    {

    }

    public function storeAction()
    {
        $name = trim($this->request->getPost('name'));
        $email = trim($this->request->getPost('email'));
        $number = trim($this->request->getPost('number'));
        $city = trim($this->request->getPost('city'));
        $state = trim($this->request->getPost('state'));
        $country = trim($this->request->getPost('country'));
        $pincode = trim($this->request->getpost('pincode'));
        
        if(
            empty($name) ||
            empty($email) ||
            empty($number) ||
            empty($city) ||
            empty($state) ||
            empty($country) ||
            empty($pincode)
        ) {
            echo "All fields are required...";

            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";

            exit;
        }



        $user = new Users();

        $user->name = $this->request->getPost('name');
        $user->email = $this->request->getPost('email');
        $user->number = $this->request->getPost('number');
        $user->city = $this->request->getPost('city');
        $user->state = $this->request->getPost('state');
        $user->country = $this->request->getPost('country');
        $user->pincode = $this->request->getPost('pincode');

        if ($user->save()) {

            header('Location: /learning_phalcon/public/users');
            exit;
        }

        echo "Failed to save user";
    }

    public function editAction($di)
    {
        $user = Users::findFirst($di);

        $this->view->user = $user;
    }

    public function updateAction()
    {
    $id = $this->request->getPost('id');

    $user = Users::findFirst($id);

    $user->name = $this->request->getPost('name');
    $user->email = $this->request->getPost('email');
    $user->number = $this->request->getPost('number');
    $user->city = $this->request->getPost('city');
    $user->state = $this->request->getPost('state');
    $user->country = $this->request->getPost('country');
    $user->pincode = $this->request->getPost('pincode');

    if ($user->save()) {

        header('Location: /learning_phalcon/public/users');
        exit;
    }

    echo "Update Failed";
    }

    public function deleteAction($di)
    {
        $user = Users::findFirst($di);
        if ($user) {
            $user->delete();
        }

        header('Location: /learning_phalcon/public/users');
    }
}