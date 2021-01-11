<?php

/* Tạo lớp cầu thủ bóng đá
gồm các thuộc tính: 
tên
năm sinh
quốc tịch
giải đấu tham gia
số trận đã đá
số bàn thắng
lương 

thực hiện viết và kiểm tra lại kết quả các hàm sau:
hàm ghi_ban($sobanthang)
hàm tang_luong($soluongtangthem)
hàm gia_thi_truong() => tính bằng công thức:
Nếu cầu thủ dưới 23 tuổi => 15tr + mỗi bàn thằng trị giá 300k
Nếu cầu thủ từ 23 - 27 tuổi => 30tr + mỗi bàn thắng trị giá 500k
Nếu cầu thủ trên 27 tuổi => 25tr + mỗi bàn thắng trị giá 200k
*/
class CauThuBongDa{
    var $ten;
    var $namSinh;
    var $quocTich;
    var $giaiDau;
    var $soTranRaSan;
    var $soBanThang;
    var $luong;

    function ghi_ban($soBanThang = 0){
        $this->soBanThang += $soBanThang;
    }

    function tang_luong($soLuongTangThem){
        $this->luong += $soLuongTangThem;
    }

    function gia_thi_truong(){
        // nam hien tai - nam sinh => so tuoi
        $nam = date('Y');
        $tuoi = $nam - $this->namSinh;
        if($tuoi < 23){
            $giaThiTruong = 15000000 + ($this->soBanThang*300000);
        }else if($tuoi <= 27){
            $giaThiTruong = 30000000 + ($this->soBanThang*500000);
        }else{
            $giaThiTruong = 25000000 + ($this->soBanThang*200000);
        }
        return $giaThiTruong;
    }
}
$trung = new CauThuBongDa();
$trung->namSinh = 1998;
$trung->soBanThang = 10;
echo number_format($trung->gia_thi_truong(), 0, '.', '.') ;


?>