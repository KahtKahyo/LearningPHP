<?php 

class User {
    // Properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;

    // struct
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

}

//$userone = new User();
//$userone->set_name('John');

$user = new User('John', 'a@b.com', '123456');

echo $user->name;

// Inheritance

class employee extends User {
    public $title;

    public function __construct($name, $email , $password, $title){
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}


$employee_one = new employee('Sara', '123@gmail.com', '23342341sdf', 'Manager');

echo $employee_one->get_title();


