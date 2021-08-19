<?php

    class Register extends Controller{

        public function __construct($controller,$action) {
            parent::__construct($controller,$action);
            $this->load_model('Users');
            $this->view->setLayout('default');
        }

        public function loginAction(){
            // echo password_hash('password',PASSWORD_DEFAULT);
            $validation = new Validate();
            if ($_POST){
                // form validation
                $validation->check($_POST,[
                    'username'=>[
                        'display'=>"Username",
                        'reguired'=>true,
                    ],
                    'password'=>[
                        'display'=>"Password",
                        'reguired'=>true,
                        'min'=>6
                    ]

                ]);
                if ($validation->passed()){
                    $user = $this->UsersModel->findByUserName($_POST['username']);
                    if ($user && password_verify(Input::get('password'),$user->password)){
                        $remember = (isset($_POST['remember_me'])) && Input::get('remember_me') ? true : false;
                        $user->login($remember);
                        Router::redirect('');

                    }else {
                        $validation->addError("There is an error with your username and password");
                    }
                }
            }

            $this->view->displayErrors = $validation->displayErrors();
            $this->view->render('register/login');

        }

        public function logoutAction(){
            if (currentUser()){
                currentUser()->logout();
            }
            Router::redirect('register/login');
        }

        public function registerAction(){
            $validation = new Validate();
            $posted_values = ['fname'=> '','lname'=>'','username'=>'','email'=>'','password'=>'','confirm'=>''];

            if ($_POST){
                $posted_values = posted_values($_POST);
                $validation->check($_POST,[
                    'fname'=>[
                        'display'=>'First Name',
                        'reguired'=>true
                    ],
                    'lname'=>[
                        'display'=>'Last Name',
                        'reguired'=>true
                    ],
                    'username'=>[
                        'display'=>'Username',
                        'reguired'=>true,
                        'unique'=>'users',
                        'min'=>6,
                        'max'=> 150
                    ],
                    'email'=>[
                        'display'=>'Email',
                        'reguired'=>true,
                        'unique'=>'users',
                        'max'=> 150,
                        'valaid_email'=>true
                    ],
                    'password'=>[
                        'display'=>'Password',
                        'reguired'=>true,
                        'min'=>6,
                    ],
                    'confirm'=>[
                        'display'=>'Confirm password',
                        'reguired'=>true,
                        'matches'=>'password'
                    ]
                ]);
            }

            if ($validation->passed()){
                $newUser = new Users();
                $newUser->registerNewUser($_POST);
                $newUser->login();
                Router::redirect('register/login');
            }

            $this->view->post = $posted_values;
            $this->view->displayErrors = $validation->displayErrors();
            $this->view->render('register/register');
        }
    }