<?php
    class Category {
        public $category;

        function __construct($basename) {
            $this->category = $basename;
        }

        function category() {
            return explode(".", $this->category)[0];
        }
    }
?>