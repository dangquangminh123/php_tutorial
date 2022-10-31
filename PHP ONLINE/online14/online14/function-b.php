<?php 
    $data = file('options.txt') or die("Cannot read file");
    // echo "Mảng ban đầu là: <br>";
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    array_shift($data);//Xóa phần tử đầu tiên trong mảng

    // echo "Mảng đã qua xử lý là: <br>";
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    $arrOptions = array();
    foreach($data as $key => $value) {
        $tmp = explode("|", $value); //tách chuỗi có giá trị trong mảng dựa vào ký tự |
        /* sau khi tách ra xong thì biến tmp sẽ có 4 giá trị: đầu tiên bên là số, thứ 2 phần tử tùy chọn câu trả (a,b,c,d)
        thứ 3 là phần tử câu trả lời, cuối cùng là phần tử giá trị điểm số của câu trả lời (phần tử 3) */
        $questionID = $tmp[0];
        $optionsID = $tmp[1];
        $answer = $tmp[2];
        $point = $tmp[3];
    
        $arrOptions[$questionID][$optionsID]["options"] = $answer;
        $arrOptions[$questionID][$optionsID]["point"] = $point;
    }

    echo "<pre>";
    print_r($arrOptions);
    echo "</pre>";

?>