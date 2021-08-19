<?php 

    class Home extends Controller{

        public function __construct($controller,$action)
        {
            parent::__construct($controller,$action);
        }

        public function indexAction ()
        {
            // $db = DB::getInstance();
            // $fields = [
            //     'fname' => 'John',
            //     'lname'=> 'Walker',
            //     'email'=> 'walker@gmail.com'
            // ];
            // // $contactsQ = $db->query("SELECT * from contacts ORDER BY lname,fname");
            // // $contact = $db->query("SELECT * from contacts ORDER BY lname,fname")->first();
            // // dnd($db->get_columns('contacts'));
            // $contacts = $db->findFirst('contacts',[
            //     'conditions'=>['id=?'],
            //     'bind' => [1],
            //     'order'=>"lname,fname",
            //     'limit'=>5
            // ]);

            // dnd($contacts);
            $this->view->render('home/index');
        }

        
    }
