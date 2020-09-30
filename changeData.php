<?php
    require 'conn.php';
    $table=$_POST['table'];
    $sql = $_POST['sql'];

    class Product {
        public $title;
        public $imageUrl;
        public $description;
    }

    class Tweet{
        public $title;
        public $imageUrl;
        public $description;
        public $reg_time;
        public $url;
    }

	
    $result = $conn->query($sql);
    
    if($table == "productlist"){
        if($result) {
            //echo "查询成功";
            while ($row = mysqli_fetch_array($result)) {
                if($row["status"]==1){
                    $product = new Product();
                    $product->title = $row["title"];
                    $product->imageUrl = $row["imageUrl"];
                    $product->description = $row["description"];
                    $data[]=$product;
                }
            }
            //把数据转换为JSON数据.
            $json = json_encode($data);
            echo $json;
        } else {
            echo "查询失败";
        }
    }else if ($table == "wechatlist"){
        if($result) {
            //echo "查询成功";
            while ($row = mysqli_fetch_array($result)) {
                if($row["status"]==1){
                    $tweet = new Tweet();
                    $tweet->title = $row["title"];
                    $tweet->imageUrl = $row["imageUrl"];
                    $tweet->description = $row["description"];
                    $tweet->reg_time = $row["reg_time"];
                    $tweet->url = $row["url"];
                    $data[]=$tweet;
                }
            }
            //把数据转换为JSON数据.
            $json = json_encode($data);
            echo $json;
        } else {
            echo "查询失败";
        }
    }


    

    $conn->close();
?>