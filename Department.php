<?php
    class Department {
        public $id;
        public $name;
        public $address;
        public $phone;
        public $website;
        public $email;
        public $headOfDepartment;

        function __construct($_id, $_name)
        {
            $this->id = $_id;
            $this->name = $_name;
        }
    }
?>