<?php

    $file  = fopen("./intents.json","r");

    $data = json_decode(fread($file, filesize("./intents.json")),true);


    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "computer";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM sanpham";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
			array_push($data["intents"], json_decode('{"tag": "'.$row["sp_ten"].'",
                                                            "patterns":["Giá của '.$row["sp_ten"].' là bao nhiêu?"],
                                                            "responses": ["<a href=\'http://localhost/projectComputer/public/ket-qua-tim-kiem?tuKhoa='.$row["sp_ten"].'\'>'.$row["sp_ten"].'</a>"],
                                                            "context_set": ""}'));
        }
        
    }
// array_push($data["intents"], json_decode('{"tag": "'.$row["sp_ten"].'",
//                                             "patterns": 
//                                                 ["Giá của '.$row["sp_ten"].' là bao nhiêu?",
//                                                 "Tôi định mua '.$row["sp_ten"].', bạn có thể tư vấn không?",
//                                                 "Thông tin về '.$row["sp_ten"].'",
//                                                 "'.$row["sp_ten"].'",
//                                                 "'.$row["sp_ten"].' thì sao?"],
//                                             "responses": 
//                                                 ["<h5>Sản phẩm '.$row["sp_ten"].'</h5>
//                                                     <ul><li>Giá: '.number_format($row["sp_giaBan"],0,",",".").' VNĐ</li>
//                                                         <li>Thông tin chi tiết tại <a href=\'http://localhost/projectComputer/public/ket-qua-tim-kiem?tuKhoa='.$row["sp_ten"].'\'>'.$row["sp_ten"].'</a> 
//                                                     </ul>",
//                                                 "Bạn vui lòng tham khảo đường link <a href=\'http://localhost/projectComputer/public/ket-qua-tim-kiem?tuKhoa='.$row["sp_ten"].'\'>'.$row["sp_ten"].'</a>",
//                                                 "Tuyệt vời! <b>'.$row["sp_ten"].'</b> là mẫu laptop hiện tại đang rất hot. Bạn vui lòng truy cập đường linh để xem thông tin chi tiết nhé <a href=\'http://localhost/projectComputer/public/ket-qua-tim-kiem?tuKhoa='.$row["sp_ten"].'\'>'.$row["sp_ten"].'</a>"],
//                                             "context_set": ""
//                                             }'));


 //   array_push($data["intents"], '{"tag": "'.$row["PRO_NAME"].'","patterns": ["Giá của '.$row["PRO_NAME"].' là bao nhiêu?"],"responses": ["<h3 class=\'product_title\'>Sản phẩm '.$row["PRO_NAME"].'</h3><ul><li>Giá: '.$row["PRO_PRICE"].' VNĐ</li> <li>RAM: '.$row["PRO_RAM"].' GB</li><li>Vi xử lí: '.$row["PRO_CHIP"].'</li><li>Bộ nhớ trong: '.$row["PRO_ROM"].' GB</li><li>Camera: '.$row["PRO_B_CAMERA"].' Mgpixel</li><li>Thông tin chi tiết tại <a href=\'http://localhost/nl_2020/public/product/'.$row["PRO_ID"].'/'.$row["PRO_ENGLISH_NAME"].'\'>'.$row["PRO_NAME"].'</a> <ul>","Bạn vui lòng tham khảo đường link <a href=\'http://localhost/nl_2020/public/product/'.$row["PRO_ID"].'/'.$row["PRO_ENGLISH_NAME"].'\'>Chi tiết về '.$row["PRO_NAME"].'</a>"],"context_set": ""}');


    $file_2 = fopen("data.json","w");
    fwrite($file_2,json_encode($data, JSON_UNESCAPED_UNICODE));


?>
