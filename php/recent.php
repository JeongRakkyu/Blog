<?php
    class Recent_text
    {
        private $query;
        private $recent;
        private $idx;
        private $sub;
        private $request_Data;
        
        function __construct() {
            include ('X');
            $this->query = "SELECT X, subject, X FROM X WHERE X = 'javascript' ORDER BY X DESC";
            $this->recent = $sql_connection->query($this->query);
            $sql_connection->close();
        }

        function load() {
            include ('X');
            if ($this->recent->num_rows > 0) {
                while ($this->request_Data = $this->recent->fetch_assoc()) {
                    $this->idx = $this->request_Data['X'];
                    $this->sub = $this->request_Data['X'];
                    echo "<p><a href='javascript.html?idx=$this->idx'>$this->sub</a></p>";
                }
            }
            $sql_connection->close();
        }
    }
?>