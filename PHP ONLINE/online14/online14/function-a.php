<?php 
    $data = file('question.txt') or die("Cannot read file");
    echo "Mảng ban đầu là: <br>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    array_shift($data);//Xóa phần tử đầu tiên trong mảng

    echo "Mảng đã qua xử lý là: <br>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    $arrQuestions = array();//Khởi tạo mảng arrQuestions
    foreach($data as $key => $value) {
       $tmp = explode("|", $value); //tách chuỗi có giá trị trong mảng dựa vào ký tự |
       //sau khi tách ra xong thì biến tmp sẽ có 2 giá trị: 1 bên là số, 1 bên là chuỗi( câu hỏi)
       $id = $tmp[0];//biến id sẽ lấy giá trị số từ biến tmp
       $question = $tmp[1];//biến question sẽ lấy giá trị câu hỏi từ tmp
       $arrQuestions[$id] = array("question" => $question);
    }
    echo "<pre>";
    print_r($arrQuestions);
    echo "</pre>";
?>