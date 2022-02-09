<?php

require_once 'constant.php';

class ProductHelper
{
    private $conn;
    private $limit;

    public function __construct()
    {
        $this->conn = mysqli_connect(server, user, password, db) or die("Couldn't connect");
        $this->limit = 1;
    }


    public function fetchLinks()
    {
        $total_page_query = "SELECT * FROM `product`";
        $exe = mysqli_query($this->conn, $total_page_query);
        $total = mysqli_num_rows($exe);

        // How many items to list per page

        // How many pages will there be
        return ceil($total / $this->limit);


    }

    public function fetchProducts($page = 1)
    {

        /* $total_page_query = "SELECT count(*) as total_products FROM `product`";
         $total = $this->conn->query($total_page_query)->fetchColumn();

         // How many items to list per page
         $limit = 20;

         // How many pages will there be
         $pages = ceil($total / $limit);

         // What page are we currently on?
         $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
             'options' => array(
                 'default' => 1,
                 'min_range' => 1,
             ),
         )));*/

        $limit = $this->limit;

        // Calculate the offset for the query
        $offset = ($page - 1) * $limit;


        $query = "SELECT * FROM `product` LIMIT $offset,$limit";
        return $this->conn->query($query);


    }
}