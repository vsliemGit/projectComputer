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

    $sql_sp = "SELECT * FROM sanpham";
    $result_sp = $conn->query($sql_sp);

    if ($result_sp->num_rows > 0) {
        while($row = $result_sp->fetch_assoc()) {
			array_push($data["intents"], json_decode('{"tag": "'.$row["sp_ten"].'",
                                                        "patterns":["'.$row["sp_ten"].'",
                                                            "Tôi định mua '.$row["sp_ten"].', bạn có thể tư vấn không?",
                                                            "Thông tin về '.$row["sp_ten"].'",
                                                            "Giá của '.$row["sp_ten"].' là bao nhiêu?",
                                                            "Tôi định mua '.$row["sp_ten"].', bạn có thể tư vấn không?",
                                                            "'.$row["sp_ten"].' thì sao?"],
                                                        "responses": ["Xem thông tin chi tiết tại:<br> <u><a href=\'http://localhost/projectComputer/public/san-pham/'.$row["sp_ma"].'\'>'.$row["sp_ten"].'</a></u>",
                                                            "Bạn vui lòng tham khảo đường link: <br> <u><a href=\'http://localhost/projectComputer/public/san-pham/'.$row["sp_ma"].'\'>'.$row["sp_ten"].'</a></u>"
                                                            ]}'));
        } 
    }

    $sql_hang = "SELECT * FROM chitietsanpham";
    $result_hang = $conn->query($sql_hang);

    if ($result_hang->num_rows > 0) {
        while($row = $result_hang->fetch_assoc()) {
            array_push($data["intents"], json_decode('{"tag": "'.$row["ctsp_hang"].'",
                                                        "patterns":["'.$row["ctsp_hang"].'",
                                                            "Tôi định mua laptop thuoc hang '.$row["ctsp_hang"].', bạn có thể tư vấn không?",
                                                            "Hãng '.$row["ctsp_hang"].' có những loại laptop nào?",
                                                            "Giá của '.$row["ctsp_hang"].' là bao nhiêu?",
                                                            "Có laptop hãng '.$row["ctsp_hang"].' không ạ?",
                                                            "Hãng '.$row["ctsp_hang"].' thì sao?"],
                                                        "responses": ["Xem thông tin chi tiết hãng '.$row["ctsp_hang"].' tại:<br> <u><a href=\'http://localhost/projectComputer/public/ket-qua-tim-kiem?tuKhoa='.$row["ctsp_hang"].'\'>Danh sách laptop hãng '.$row["ctsp_hang"].'</a></u>",
                                                            "Shop chúng tôi hiện đang có một số laptop '.$row["ctsp_hang"].' ,bạn vui lòng tham khảo tại: <br> <u><a href=\'http://localhost/projectComputer/public/ket-qua-tim-kiem?tuKhoa='.$row["ctsp_hang"].'\'> Danh sách laptop '.$row["ctsp_hang"].'</a></u>",
                                                            "Bạn vui lòng tham khảo đường link: <br> <u><a href=\'http://localhost/projectComputer/public/ket-qua-tim-kiem?tuKhoa='.$row["ctsp_hang"].'\'> Danh sách laptop '.$row["ctsp_hang"].'</a></u>"
                                                            ]}'));
        }
        
    }


    $file_2 = fopen("data.json","w");
    fwrite($file_2,json_encode($data, JSON_UNESCAPED_UNICODE));


?>
