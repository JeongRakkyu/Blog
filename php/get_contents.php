<?php
    class GetContents {
        private $contents;
        private $arr_1;
        private $arr_2;

        function __construct($url) {
            $this->contents = file_get_contents($url);
        }

        function extractHTML($start_1, $count_1, $start_2, $count_2) {
            $this->contents = explode("\n", $this->contents);
            $this->arr_1 = array_slice($this->contents, $start_1, $count_1);
            $this->arr_2 = array_slice($this->contents, $start_2, $count_2);
            $this->contents = array_merge($this->arr_1, $this->arr_2);
            return $this->contents;
        }

        function json($array) {
            $this->contents = json_encode($this->contents);
            return $this->contents;
        }
    }
?>