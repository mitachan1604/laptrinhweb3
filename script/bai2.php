                         
<?php
    //khởi tạo mảng
    $mangbandau = [15, 25, 5, 7, 9, 4, 8, 10, 15];
    //lấy độ dài của mảng
    $dodaimang = count($mangbandau);
    // Tách số lẻ ra 1 mảng riêng
    $mangsole = [];

    foreach ($mangbandau as $phantu) {
        if ($phantu % 2 !== 0) {
            $mangsole[] = $phantu;
        }
    }

    // Sắp xếp mảng số lẻ tăng dần
    sort($mangsole);
    
    $vitri = 0;
    //duyệt qua từng phần tử của mảng ban đầu
    foreach ($mangbandau as $phantu) {
        //nếu là số lẻ thì in số lẻ từ mangbandauay mangsole đã sắp xếp 
        if ($phantu % 2 !== 0) {
            echo " $mangsole[$vitri]";
            $vitri = $vitri+1;
        }
        //còn là số chẵn thì sẽ in bình thường 
        else {
            
            echo " $phantu";
        }
    }
?>

