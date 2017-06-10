<?php
    //neu tồn tại biến term từ gửi sang
    function _debug($data) {

        echo '<pre style="background: #000; color: #fff; width: 100%; overflow: auto">';
        echo '<div>Your IP: ' . $_SERVER['REMOTE_ADDR'] . '</div>';

        $debug_backtrace = debug_backtrace();
        $debug = array_shift($debug_backtrace);

        echo '<div>File: ' . $debug['file'] . '</div>';
        echo '<div>Line: ' . $debug['line'] . '</div>';

        if(is_array($data) || is_object($data)) {
            print_r($data);
        }
        else {
            var_dump($data);
        }
        echo '</pre>';
    }
    if(isset($_GET['keyword']))
    {
        //lay từ khóa cần tìm kiếm
        $key = $_GET['keyword'];
         
        //cau hinh thong tin ket noi CSDL
       //Kết nối tới csdl
        $conn = mysqli_connect("localhost", "root", "","doantotnghiep") or die("can't connect database");
        //Lựa chọn csdl và cho phép hiển thị mã utf8
        // mysql_select_db("autocomplete",$conn);
        mysqli_set_charset($conn,"utf8");
         
        //cau lenh truy van tim kiem voi tu khoa
        $req = "SELECT name "
            . "FROM product "
                . "WHERE name LIKE '%" . $key . "%' ";
         
        $result = mysqli_query($conn,$req) or die("Lỗi  truy vấn sql " .mysqli_error($conn));
        $data = [];
        if( $result)
        {
            while ($num = mysqli_fetch_assoc($result))
            {
                $data[] = $num;
            }
        }    

    } 
    _debug($data);
?>


   <?php if(isset($data)  && count($data) > 0):?>
<ul>
    <?php foreach($data as $item) :?>
    <li onClick="selectCountry('<?php echo $item["name"]; ?>');"><?php echo $item["name"]; ?></li>
<?php endforeach ; ?>
</ul>
<?php else : ?>
    không có dữ liệu
<?php endif ; ?>
