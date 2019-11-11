<?php

use Illuminate\Database\Seeder;
use App\CauHoi;

class ThemCauHoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('cau_hoi')->insert([
['noi_dung'=>'Chú bé rắc rối là tác phẩm nhà văn nào sau đây?','linh_vuc_id'=>5,'phuong_an_a'=>'Nguyễn Việt Hà','phuong_an_b'=>'Nguyễn Ngọc Tư','phuong_an_c'=>'Nguyễn Trinh Thu Huệ','phuong_an_d'=>'Nguyễn Nhật Ánh','dap_an'=>'Nguyễn Nhật Ánh','key'=>'q1_2'],
['noi_dung'=>'Nhân vật nào sau đây gắn với truyền thuyết bánh chưng bánh dày?','linh_vuc_id'=>5,'phuong_an_a'=>'Trọng Thủy','phuong_an_b'=>'Sơn Tinh','phuong_an_c'=>'Lang Liêu','phuong_an_d'=>'Trương Chi','dap_an'=>'Lang Liêu','key'=>'q1_8'],
 ['noi_dung'=>'Đèo Ô Quý Hồ nói liền tỉnh Lào Cai với tỉnh nào?','linh_vuc_id'=>4,'phuong_an_a'=>'Lai Châu','phuong_an_b'=>'Hà Giang','phuong_an_c'=>'Yên Bái','phuong_an_d'=>'King Quang','dap_an'=>'Lai Châu','key'=>'q1_9'],
 ['noi_dung'=>'Nhà thơ nào đã tự vía lòng ta là "Lòng ta là những hàng thành quách cũ
 Từ ngàn năm bỗng vẳng tiếng loa xưa"?','linh_vuc_id'=>5,'phuong_an_a'=>'Vũ Đình Liên','phuong_an_b'=>'Huy Cận','phuong_an_c'=>'Tản Đà','phuong_an_d'=>'Chế Lan Viên','dap_an'=>'Vũ Đình Liên','key'=>'q1_10'],
['noi_dung'=>'Từ nào còn thiếu trong câu ca dao sau "Thân em như hạt ...,
 Hạt vào đài các, hạt ra ruộng cày"?','linh_vuc_id'=>5,'phuong_an_a'=>'Tuyết Rơi','phuong_an_b'=>'Bông Trắng','phuong_an_c'=>'Mưa Đá','phuong_an_d'=>'Mưa sa','dap_an'=>'Mưa sa','key'=>'q1_11'],
['noi_dung'=>'Thành ngữ có câu "Trần như ... gì"?','linh_vuc_id'=>5,'phuong_an_a'=>'Nhộng','phuong_an_b'=>'Kén','phuong_an_c'=>'Sâu','phuong_an_d'=>'Ong','dap_an'=>'Nhộng','key'=>'q1_14'],
['noi_dung'=>'Nguyễn Kim Thành là tên khai sinh của nhà thơ nào?','linh_vuc_id'=>5,'phuong_an_a'=>'Xuân Diệu','phuong_an_b'=>'Tố Hữu','phuong_an_c'=>'Huy Cận','phuong_an_d'=>'Hàn Mặc Tử','dap_an'=>'Tố Hữu','key'=>'q1_16'],
['noi_dung'=>'Bài hát tiếng ve gọi hè là sáng tác của ai?','linh_vuc_id'=>2,'phuong_an_a'=>'Phạm Trọng Cầu','phuong_an_b'=>'Phong Nhã','phuong_an_c'=>'Hoàng Long-Hoàng Lân','phuong_an_d'=>'Trịnh Công Sơn','dap_an'=>'Trịnh Công Sơn','key'=>'q1_18'],
['noi_dung'=>'Từ nào sau đây là động từ?','linh_vuc_id'=>5,'phuong_an_a'=>'Nhất','phuong_an_b'=>'Lục','phuong_an_c'=>'Kiểu','phuong_an_d'=>'Tứ','dap_an'=>'Nhất','key'=>'q2_4'],
 ['noi_dung'=>'"Nước non nặng một nhời thề
 Nước đi đi mãi không về cùng non" là những câu thơ của tác giả nào?','linh_vuc_id'=>5,'phuong_an_a'=>'Tản Đà','phuong_an_b'=>'Chính Hữu','phuong_an_c'=>'Hàn Mặc Tử','phuong_an_d'=>'Thế Lử','dap_an'=>'Tản Đà','key'=>'q2_7'],
['noi_dung'=>'Theo một câu truyện dân gian con vật nào chạy đua với rùa?','linh_vuc_id'=>5,'phuong_an_a'=>'Trâu','phuong_an_b'=>'Thỏ','phuong_an_c'=>'Ngựa','phuong_an_d'=>'Hươu','dap_an'=>'Thỏ','key'=>'q2_10'],
 ['noi_dung'=>'Đâu là một tên thiện nhắn của nhà thơ Thạch Lam','linh_vuc_id'=>5,'phuong_an_a'=>'Ba Đứa Trẻ','phuong_an_b'=>'Bốn Đứa Trẻ','phuong_an_c'=>'Năm Đứa Trẻ','phuong_an_d'=>'Hai Đứa Trẻ','dap_an'=>'Hai Đứa Trẻ','key'=>'q2_11'],
 ['noi_dung'=>'Tỉnh nào sau đây không giáp biển?','linh_vuc_id'=>4,'phuong_an_a'=>'Lạng Sơn','phuong_an_b'=>'Cà Mau','phuong_an_c'=>'Quảng Bình','phuong_an_d'=>'Khánh Hòa','dap_an'=>'Lạng Sơn','key'=>'q2_12'],
['noi_dung'=>'Đâu là một trò chơi dân gian của Việt Nam?','linh_vuc_id'=>7,'phuong_an_a'=>'Bóng Bầu Dục','phuong_an_b'=>'Ném Đĩa Bay','phuong_an_c'=>'Bịt Mắt Bắt Dê','phuong_an_d'=>'Trượt Băng Nghệ Thuật','dap_an'=>'Bịt Mắt Bắt Dê','key'=>'q2_13'],
 ['noi_dung'=>'Nữ ca sĩ nào được mệnh danh là mama monster?','linh_vuc_id'=>2,'phuong_an_a'=>'Prit Ni Spia','phuong_an_b'=>'Lady Gaga','phuong_an_c'=>'Pink','phuong_an_d'=>'Rihanna','dap_an'=>'Lady Gaga','key'=>'q2_15'],
['noi_dung'=>'Quốc kỳ nước ta có mấy màu?','linh_vuc_id'=>3,'phuong_an_a'=>'1','phuong_an_b'=>'2','phuong_an_c'=>'3','phuong_an_d'=>'4','dap_an'=>'2','key'=>'q2_21'],
['noi_dung'=>'Khí hậu Việt Nam là loại khí hậu gì?','linh_vuc_id'=>3,'phuong_an_a'=>'Địa Trung Hãi','phuong_an_b'=>'Ôn Đới','phuong_an_c'=>'Hàn Đới','phuong_an_d'=>'Nhiệt Đới','dap_an'=>'Nhiệt Đới','key'=>'q2_22'],
['noi_dung'=>'Bài hát nào sau đây của nhạc sĩ Trần Long Ẩn nằm trong phong trào hát cho đồng bào tôi nghe?','linh_vuc_id'=>2,'phuong_an_a'=>'Tình Đất Đỏ Miền Đông','phuong_an_b'=>'Đêm Thành Phố Đầy Sao','phuong_an_c'=>'Một Đời Người Một Rừng Cây','phuong_an_d'=>'Người Mẹ Bàn Cờ','dap_an'=>'Người Mẹ Bàn Cờ','key'=>'q3_1'],
['noi_dung'=>'Đâu không phải tên của một kiển bơi?','linh_vuc_id'=>1,'phuong_an_a'=>'Bơi Ếch','phuong_an_b'=>'Bơi Bướm','phuong_an_c'=>'Bơi Ruồi','phuong_an_d'=>'Bơi Chó','dap_an'=>'Bơi Ruồi','key'=>'q3_2'],
['noi_dung'=>'Có câu "Ăn chắc mặc ... gì"?','linh_vuc_id'=>5,'phuong_an_a'=>'Xin','phuong_an_b'=>'Bền','phuong_an_c'=>'Chắc','phuong_an_d'=>'Phổng','dap_an'=>'Bền','key'=>'q3_3'],
['noi_dung'=>'Tranh đông hồ truyền thống được vẽ trên chất liệu gì?','linh_vuc_id'=>7,'phuong_an_a'=>'Cát','phuong_an_b'=>'Giấy Gió','phuong_an_c'=>'Tường','phuong_an_d'=>'Giấy Điệp','dap_an'=>'Giấy Điệp','key'=>'q3_5'],
['noi_dung'=>'Hòn đảo tôm hùm là tên gọi khác của đảo nào sau đây của nước ta?','linh_vuc_id'=>4,'phuong_an_a'=>'Đảo Bình Ba','phuong_an_b'=>'Đảo Hoàng Hôn','phuong_an_c'=>'Đảo Ngọc','phuong_an_d'=>'Đảo Lý Sơn','dap_an'=>'Đảo Bình Ba','key'=>'q3_9'],
['noi_dung'=>'Loài hoa nào sau đây được xuất hiện trong ca khúc Chị Tôi của nhạc sĩ Trọng Tài?','linh_vuc_id'=>2,'phuong_an_a'=>'Hoa Gạo','phuong_an_b'=>'Hoa Bưởi','phuong_an_c'=>'Hoa Xoan','phuong_an_d'=>'Hoa Hiến Chi','dap_an'=>'Hoa Gạo','key'=>'q3_13'],
['noi_dung'=>'Từ nào còn thiếu trong câu sau"Gió đưa cành ... la đà"?','linh_vuc_id'=>2,'phuong_an_a'=>'Tre','phuong_an_b'=>'Trúc','phuong_an_c'=>'Viết','phuong_an_d'=>'Na','dap_an'=>'Trúc','key'=>'q3_14'],
['noi_dung'=>'Loại áo nào đã từng được trang bị cho các chiến sĩ bộ đội kháng chiến chống pháp?','linh_vuc_id'=>3,'phuong_an_a'=>'Áo Bào','phuong_an_b'=>'Áo Dài','phuong_an_c'=>'Áo Trấn Thủ','phuong_an_d'=>'Áo Lụa','dap_an'=>'Áo Trấn Thủ','key'=>'q3_15'],
['noi_dung'=>'Hàm Nghi là vị vua triều đại nào?','linh_vuc_id'=>3,'phuong_an_a'=>'Trần','phuong_an_b'=>'Lê','phuong_an_c'=>'Lý','phuong_an_d'=>'Nguyễn','dap_an'=>'Nguyễn','key'=>'q3_17'],
['noi_dung'=>'Đâu là tên một hồ nổi tiếng ở Hà Nội?','linh_vuc_id'=>4,'phuong_an_a'=>'Biển Hồ','phuong_an_b'=>'Hồ Than Thở','phuong_an_c'=>'Hồ Ngọc Hà','phuong_an_d'=>'Hồ Láng','dap_an'=>'Hồ Láng','key'=>'q4_1'],
['noi_dung'=>'Trong bài hát mẹ yêu không nào con cò đã đậu rên cành gì?','linh_vuc_id'=>2,'phuong_an_a'=>'Cành Trúc','phuong_an_b'=>'Cành Tre','phuong_an_c'=>'Cành Mai','phuong_an_d'=>'Cành Bưởi','dap_an'=>'Cành Tre','key'=>'q4_2'],
['noi_dung'=>'Theo truyện cổ tích lọ nước thần "Dọc bằng đòn gánh
Củ bằng bình vôi" là câu rao bán loại củ gì?','linh_vuc_id'=>5,'phuong_an_a'=>'Củ Cải','phuong_an_b'=>'Củ Hành','phuong_an_c'=>'Củ Từ','phuong_an_d'=>'Củ Ấu','dap_an'=>'Củ Hành','key'=>'q4_8'],
['noi_dung'=>'Hoa sấu có màu gì?','linh_vuc_id'=>8,'phuong_an_a'=>'Tím','phuong_an_b'=>'Đỏ','phuong_an_c'=>'Trắng','phuong_an_d'=>'Vàng Nhạt','dap_an'=>'Vàng Nhạt','key'=>'q1_12'],
['noi_dung'=>'Quả gì được nhắc đến trong câu thơ sau "Quả ... nho nhỏ, cái vỏ vân vân"?','linh_vuc_id'=>8,'phuong_an_a'=>'Khế','phuong_an_b'=>'Chanh','phuong_an_c'=>'Mít','phuong_an_d'=>'Cau','dap_an'=>'Cau','key'=>'q1_13'],
['noi_dung'=>'Loài hoa nào thường nở vào buổi tối?','linh_vuc_id'=>8,'phuong_an_a'=>'Hoa 10 Giờ','phuong_an_b'=>'Hoa Quỳnh','phuong_an_c'=>'Hoa Đồng Tiền','phuong_an_d'=>'Hoa Hậu','dap_an'=>'Hoa 10 Giờ','key'=>'q2_3'],
['noi_dung'=>'Con vật nào sau đâ không có sừng?','linh_vuc_id'=>6,'phuong_an_a'=>'Dê','phuong_an_b'=>'Tê Giác','phuong_an_c'=>'Trâu','phuong_an_d'=>'Gà Lôi','dap_an'=>'Gà Lôi','key'=>'q2_9'],
['noi_dung'=>'Đâu là tên một loài hoa?','linh_vuc_id'=>8,'phuong_an_a'=>'Em Đào','phuong_an_b'=>'Anh Đào','phuong_an_c'=>'Bác Đào','phuong_an_d'=>'Chú Đào','dap_an'=>'Anh Đào','key'=>'q2_20'],
['noi_dung'=>'Con còng là con gì?','linh_vuc_id'=>6,'phuong_an_a'=>'Dã Tràng','phuong_an_b'=>'Muỗi','phuong_an_c'=>'Bọ Cạp','phuong_an_d'=>'Bạch Tuộc','dap_an'=>'Dã Tràng','key'=>'q2_23'],
['noi_dung'=>'Loài cá nào sau đây thuộc loại động vật vú?','linh_vuc_id'=>6,'phuong_an_a'=>'Cá Nhà Táng','phuong_an_b'=>'Cá Kiếm','phuong_an_c'=>'Cá Đuối','phuong_an_d'=>'Cá Mập','dap_an'=>'Cá Nhà Táng','key'=>'q3_18'],
['noi_dung'=>'Theo phương hướng nam bộ thì khóm là quả gì?','linh_vuc_id'=>8,'phuong_an_a'=>'Na','phuong_an_b'=>'Bưởi','phuong_an_c'=>'Dứa','phuong_an_d'=>'Mít','dap_an'=>'Dứa','key'=>'q4_4'],
['noi_dung'=>'Loài vật nào sau đây không biết bơi?','linh_vuc_id'=>6,'phuong_an_a'=>'Rái Cá','phuong_an_b'=>'Hà Mã','phuong_an_c'=>'Mèo','phuong_an_d'=>'Vịt Xiêm','dap_an'=>'Mèo','key'=>'q4_14'],
['noi_dung'=>'Đâu không phải là từ miêu tả khuôn mặt?','linh_vuc_id'=>5,'phuong_an_a'=>'Trái Xoan','phuong_an_b'=>'Vuông Chữ Điền','phuong_an_c'=>'Tròn','phuong_an_d'=>'Trái Chuối','dap_an'=>'Trái Chuối','key'=>'q4_15'],
['noi_dung'=>'Loài vật nào được biết đến là chim báo bão?','linh_vuc_id'=>6,'phuong_an_a'=>'Vịt Trời','phuong_an_b'=>'Hải Âu','phuong_an_c'=>'Thiên Nga','phuong_an_d'=>'Chim Cánh Cụt','dap_an'=>'Hải Âu','key'=>'q4_16'],
['noi_dung'=>'Dừa sáp được coi là đặt sản của tỉnh nào?','linh_vuc_id'=>4,'phuong_an_a'=>'Trà Vinh','phuong_an_b'=>'Thái Bình','phuong_an_c'=>'Đồng Nai','phuong_an_d'=>'Quãng Nam','dap_an'=>'Trà Vinh','key'=>'q4_17'],
['noi_dung'=>'Địa danh nào sau đây không nằm ở tỉnh Bắc Kạn?','linh_vuc_id'=>4,'phuong_an_a'=>'Chợ Chu','phuong_an_b'=>'Chợ Mới','phuong_an_c'=>'Chợ Đồn','phuong_an_d'=>'Chợ Rã','dap_an'=>'Chợ Chu','key'=>'q4_20'],
['noi_dung'=>'Sakura là tên loài hoa nào ở Nhật Bản?','linh_vuc_id'=>8,'phuong_an_a'=>'Anh Đào','phuong_an_b'=>'Lan','phuong_an_c'=>'Huệ','phuong_an_d'=>'Hồng','dap_an'=>'Anh Đào','key'=>'q5_3'],
['noi_dung'=>'Nguyễn Thị Ánh Viên là vận động viên nỗi tiếng trong bộ môn thể thao nào?','linh_vuc_id'=>1,'phuong_an_a'=>'Bơi Lội','phuong_an_b'=>'Gool','phuong_an_c'=>'Bóng Đá','phuong_an_d'=>'Wushu','dap_an'=>'Bơi Lội','key'=>'q5_5'],
['noi_dung'=>'Đâu là một tính từ?','linh_vuc_id'=>5,'phuong_an_a'=>'Nới','phuong_an_b'=>'Với','phuong_an_c'=>'Mới','phuong_an_d'=>'Bới','dap_an'=>'Mới','key'=>'q5_6'],
['noi_dung'=>'Cầu tóc hành là biệt danh của tay vợt nào?','linh_vuc_id'=>1,'phuong_an_a'=>'Devil Federer','phuong_an_b'=>'Granada','phuong_an_c'=>'Notargo Covit','phuong_an_d'=>'Roger Federer','dap_an'=>'Roger Federer','key'=>'q5_8'],
['noi_dung'=>'Đâu là một tên gọi khác của cây gạo?','linh_vuc_id'=>8,'phuong_an_a'=>'Mộc Hương','phuong_an_b'=>'Mộc Miên','phuong_an_c'=>'Mọc Hoa','phuong_an_d'=>'Mộc Tập','dap_an'=>'Mộc Miên','key'=>'q5_10'],
['noi_dung'=>'Từ nào chỉ tên một loài ốc ăn được?','linh_vuc_id'=>5,'phuong_an_a'=>'Mống Tay','phuong_an_b'=>'Mống Tôm','phuong_an_c'=>'Mống Cua','phuong_an_d'=>'Mống Bò','dap_an'=>'Mống Tay','key'=>'q5_14'],
['noi_dung'=>'Đâu là tên một bài hát nỗi tiếng của nhạc sĩ Trần Long Ẩn?','linh_vuc_id'=>2,'phuong_an_a'=>'Tình Đất Đỏ Miền Bắc','phuong_an_b'=>'Tình Đất Đỏ Miền Nam','phuong_an_c'=>'Tình Đất Đỏ Miền Trung','phuong_an_d'=>'Tình Đất Đỏ Miền Đông','dap_an'=>'Tình Đất Đỏ Miền Đông','key'=>'q5_15'],
['noi_dung'=>'Madona là nữ ca sĩ nổi tiếng của nước nào?','linh_vuc_id'=>2,'phuong_an_a'=>'Áo','phuong_an_b'=>'Ý','phuong_an_c'=>'Mỹ','phuong_an_d'=>'Đức','dap_an'=>'Ý','key'=>'q5_16'],
['noi_dung'=>'Nhà hát kẹo ngọt đầu tiên trên thế nằm ở quốc gia nào?','linh_vuc_id'=>2,'phuong_an_a'=>'Bỉ','phuong_an_b'=>'Nhật Bản','phuong_an_c'=>'Singapore','phuong_an_d'=>'Pháp','dap_an'=>'Singapore','key'=>'q5_17'],
['noi_dung'=>'Từ nào sau đây chỉ đứa trẻ thông minh có năng khiếu đặt biệt?','linh_vuc_id'=>5,'phuong_an_a'=>'Thần Nhom','phuong_an_b'=>'Thần Bạc','phuong_an_c'=>'Thành Đồng','phuong_an_d'=>'Thần Nhựa','dap_an'=>'Thành Đồng','key'=>'q6_4'],
['noi_dung'=>'Câu ca dao "Lá xanh bông trắng lại che nhị vàng" miêu tả loại hoa nào?','linh_vuc_id'=>5,'phuong_an_a'=>'Sen','phuong_an_b'=>'Chanh','phuong_an_c'=>'Bưởi','phuong_an_d'=>'Nâu','dap_an'=>'Sen','key'=>'q6_5'],
['noi_dung'=>'Đâu là tên một sáng tác của nhạc sĩ Quốc Bảo?','linh_vuc_id'=>2,'phuong_an_a'=>'Em Về Tóc Bạc','phuong_an_b'=>'Em Về Tóc Tai','phuong_an_c'=>'Em Về Tóc Tém','phuong_an_d'=>'Em Về Tóc Xanh','dap_an'=>'Em Về Tóc Xanh','key'=>'q6_6'],
['noi_dung'=>'Hang Trống và Hang Trinh Nữ là những địa danh thuộc tỉnh nào?','linh_vuc_id'=>4,'phuong_an_a'=>'Quãng Ninh','phuong_an_b'=>'Ninh Bình','phuong_an_c'=>'Khánh Hòa','phuong_an_d'=>'Cà Mau','dap_an'=>'Ninh Bình','key'=>'q6_8'],
['noi_dung'=>'Chùa nào còn có tên gọi là chùa ve chai?','linh_vuc_id'=>4,'phuong_an_a'=>'Chùa Linh Phước','phuong_an_b'=>'Chùa Vĩnh Ngiêm','phuong_an_c'=>'Chùa Thiên Mụ','phuong_an_d'=>'Chùa Keo','dap_an'=>'Chùa Linh Phước','key'=>'q6_11'],
['noi_dung'=>'Con vật nào không phải là gia cầm?','linh_vuc_id'=>6,'phuong_an_a'=>'Vịt','phuong_an_b'=>'Gà','phuong_an_c'=>'Trâu','phuong_an_d'=>'Ngỗng','dap_an'=>'Trâu','key'=>'q6_13'],
['noi_dung'=>'Cầu Thê Húc là cây câu nỗi tiếng của tỉnh thành nào?','linh_vuc_id'=>4,'phuong_an_a'=>'Bình Dương','phuong_an_b'=>'Hà Nội','phuong_an_c'=>'Hòa Bình','phuong_an_d'=>'Hà Tĩnh','dap_an'=>'Hà Nội','key'=>'q6_14'],
['noi_dung'=>'Đâu là tên của một loài hoa?','linh_vuc_id'=>8,'phuong_an_a'=>'Cẳng Gà','phuong_an_b'=>'Đầu Gà','phuong_an_c'=>'Mào Gà','phuong_an_d'=>'Cánh Gà','dap_an'=>'Mào Gà','key'=>'q6_15'],
['noi_dung'=>'Đâu là tên một tác phẩm nỗi tiếng của nhà văn?','linh_vuc_id'=>5,'phuong_an_a'=>'Tiếng Thét Nơi Hoang Dã','phuong_an_b'=>'Tiếng Kêu Nơi Hoang Dã','phuong_an_c'=>'Tiếng Quát Nơi Hoang Dã','phuong_an_d'=>'Tiếng Gọi Nơi Hoang Dã','dap_an'=>'Tiếng Gọi Nơi Hoang Dã','key'=>'q6_17'],
['noi_dung'=>'Pongour - Ngọn thác hùng vĩ nhất Đông Dương nằm ở tỉnh nào?','linh_vuc_id'=>4,'phuong_an_a'=>'Kon Tum','phuong_an_b'=>'Lâm Đồng','phuong_an_c'=>'Đắk Nông','phuong_an_d'=>'Đắk Lắk','dap_an'=>'Lâm Đồng','key'=>'q6_20'],
['noi_dung'=>'Đâu là tên một loại râu thơm?','linh_vuc_id'=>8,'phuong_an_a'=>'Vị','phuong_an_b'=>'Bùi','phuong_an_c'=>'Hương','phuong_an_d'=>'Sắt','dap_an'=>'Bùi','key'=>'q7_3'],
['noi_dung'=>'Đâu là tên một loại mướp?','linh_vuc_id'=>8,'phuong_an_a'=>'Cay','phuong_an_b'=>'Bùi','phuong_an_c'=>'Nồng','phuong_an_d'=>'Đắng','dap_an'=>'Đắng','key'=>'q7_5'],
['noi_dung'=>'Cụm từ nào sau đây viết đúng chính tả?','linh_vuc_id'=>5,'phuong_an_a'=>'Giàn Tráo','phuong_an_b'=>'Giàn Giáo','phuong_an_c'=>'Giàn Ráo','phuong_an_d'=>'Ràn Giáo','dap_an'=>'Giàn Giáo','key'=>'q7_6'],
['noi_dung'=>'Nhạc cụ nào được nhắt đến trong câu sau"Phi ... bất thành chèo"?','linh_vuc_id'=>2,'phuong_an_a'=>'Sáo','phuong_an_b'=>'Bầu','phuong_an_c'=>'Kèn','phuong_an_d'=>'Trống','dap_an'=>'Trống','key'=>'q7_7'],
['noi_dung'=>'Nước nào sau đây có rừng Taiga?','linh_vuc_id'=>8,'phuong_an_a'=>'Na Uy','phuong_an_b'=>'Đức','phuong_an_c'=>'Áo','phuong_an_d'=>'Hà Lan','dap_an'=>'Na Uy','key'=>'q7_9'],
['noi_dung'=>'Con vật nào sau đây thường được ví là chậm chạp?','linh_vuc_id'=>6,'phuong_an_a'=>'Chim Cắt','phuong_an_b'=>'Bò Tót','phuong_an_c'=>'Rùa','phuong_an_d'=>'Ngựa','dap_an'=>'Rùa','key'=>'q7_12'],
['noi_dung'=>'Chùa Thiên Mụ nằm ở địa phận tỉnh nào?','linh_vuc_id'=>4,'phuong_an_a'=>'Thanh Hóa','phuong_an_b'=>'Thừa Thiên Huế','phuong_an_c'=>'Bình Dương','phuong_an_d'=>'Tiền Giang','dap_an'=>'Thừa Thiên Huế','key'=>'q7_13'],
['noi_dung'=>'Thành phố hoa phượng đỏ là cách gọi khác về thành phố nào sau đây?','linh_vuc_id'=>4,'phuong_an_a'=>'Đà Nẵng','phuong_an_b'=>'Nha Trang','phuong_an_c'=>'Hải Phòng','phuong_an_d'=>'TP.HCM','dap_an'=>'Hải Phòng','key'=>'q7_15'],
['noi_dung'=>'Đâu là tên một khác của nhạc sĩ Phạm Toàn Thắng?','linh_vuc_id'=>2,'phuong_an_a'=>'Bốn Chữ X','phuong_an_b'=>'Bốn Chữ H','phuong_an_c'=>'Bốn Chữ Nhớ','phuong_an_d'=>'Bốn Chữ Lắm','dap_an'=>'Bốn Chữ Lắm','key'=>'q7_16'],
['noi_dung'=>'Hồ nào sau đây là hồ nhân tạo?','linh_vuc_id'=>4,'phuong_an_a'=>'Hồ Thác Bà','phuong_an_b'=>'Hồ Lắk','phuong_an_c'=>'Hồ Hoàn Kiếm','phuong_an_d'=>'Hồ Thang Hen','dap_an'=>'Hồ Thác Bà','key'=>'q7_17'],
['noi_dung'=>'Ngạt ngư là tên gọi khác của con vật nào?','linh_vuc_id'=>6,'phuong_an_a'=>'Cá Kình','phuong_an_b'=>'Cá Sấu','phuong_an_c'=>'Cá Chình','phuong_an_d'=>'Cá Mập','dap_an'=>'Cá Sấu','key'=>'q7_20'],
['noi_dung'=>'Giải đấu fifa world cup nào duy nhất không tổ chức trận đấu chung kết?','linh_vuc_id'=>1,'phuong_an_a'=>'1934','phuong_an_b'=>'1938','phuong_an_c'=>'1950','phuong_an_d'=>'1954','dap_an'=>'1950','key'=>'q7_21'],
['noi_dung'=>'Đâu là một động từ?','linh_vuc_id'=>5,'phuong_an_a'=>'Khế','phuong_an_b'=>'Bận','phuong_an_c'=>'Đào','phuong_an_d'=>'Mít','dap_an'=>'Đào','key'=>'q8_2'],
['noi_dung'=>'Con vật nào sau đây to hơn cả?','linh_vuc_id'=>8,'phuong_an_a'=>'Chim Ruồi','phuong_an_b'=>'Chim Sẻ','phuong_an_c'=>'Gà Tre','phuong_an_d'=>'Gà Tây','dap_an'=>'Gà Tây','key'=>'q8_3'],
['noi_dung'=>'Từ tha thước thường được dùng để miêu tả loại áo nào ?','linh_vuc_id'=>5,'phuong_an_a'=>'Áo Chống Đạn','phuong_an_b'=>'Áo Dài','phuong_an_c'=>'Áo Chống Cháy','phuong_an_d'=>'Áo Phao','dap_an'=>'Áo Dài','key'=>'q8_4'],
['noi_dung'=>'Ga tàu nào không nằm trên trục đường sắt Bắc Nam?','linh_vuc_id'=>4,'phuong_an_a'=>'Hải Phòng','phuong_an_b'=>'Phủ Lý','phuong_an_c'=>'Riêu Trì','phuong_an_d'=>'Biên Hòa','dap_an'=>'Hải Phòng','key'=>'q8_6'],
['noi_dung'=>'Ngọn núi nào ở Châu Phi mang tên một vị thần Hy Lạp?','linh_vuc_id'=>4,'phuong_an_a'=>'Siemens','phuong_an_b'=>'Angon','phuong_an_c'=>'Atlas','phuong_an_d'=>'Meu','dap_an'=>'Atlas','key'=>'q8_8'],
['noi_dung'=>'Quốc gia nào không nằm ở Châu Á?','linh_vuc_id'=>4,'phuong_an_a'=>'Nhật Bản','phuong_an_b'=>'Thái Lan','phuong_an_c'=>'Costa Rica','phuong_an_d'=>'Philippines','dap_an'=>'Costa Rica','key'=>'q8_11'],
['noi_dung'=>'Loài hoa thường có mùi hương ngào ngạt khi nở?','linh_vuc_id'=>8,'phuong_an_a'=>'10 Giờ','phuong_an_b'=>'Rau Muống','phuong_an_c'=>'Súp lơ','phuong_an_d'=>'Hoa Sữa','dap_an'=>'Hoa Sữa','key'=>'q8_13'],
['noi_dung'=>'Đâu là tên là một bài thơ nỗi tiếng của nhà thơ Xuân Quỳnh?','linh_vuc_id'=>5,'phuong_an_a'=>'Thuyền Và Lái','phuong_an_b'=>'Thuyền Và Biển','phuong_an_c'=>'Thuyền Và Bờ','phuong_an_d'=>'Thuyền Và Đáy','dap_an'=>'Thuyền Và Biển','key'=>'q8_14'],
['noi_dung'=>'Thành phố Nha Trang còn được gọi với tên nào sau đây?','linh_vuc_id'=>4,'phuong_an_a'=>'TP Sương','phuong_an_b'=>'TP Rông Rêu','phuong_an_c'=>'TP Biển','phuong_an_d'=>'TP Núi','dap_an'=>'TP Biển','key'=>'q8_15'],
['noi_dung'=>'"Đầu thần chưa rơi xuống đất, xin bệ hạ đừng lo" là của vị danh thần nào?','linh_vuc_id'=>3,'phuong_an_a'=>'Trần Hưng Đạo','phuong_an_b'=>'Lê Phụ Trần','phuong_an_c'=>'Trần Thủ Độ','phuong_an_d'=>'Trần Bình Trọng','dap_an'=>'Trần Thủ Độ','key'=>'q8_18'],
['noi_dung'=>'"Hai vay xinh xinh" là câu mở đầu bài hát nào sau đây?','linh_vuc_id'=>2,'phuong_an_a'=>'Cá Voi Bơi','phuong_an_b'=>'Cá Mập Bơi','phuong_an_c'=>'Cá Vàng Bơi','phuong_an_d'=>'Cá Heo Bơi','dap_an'=>'Cá Vàng Bơi','key'=>'q8_19'],

['noi_dung'=>'Đâu là một tên bài thơ nỗi tiếng của nhà thơ Nguyễn Bính?','linh_vuc_id'=>5,'phuong_an_a'=>'Tương Thân','phuong_an_b'=>'Tương Đương','phuong_an_c'=>'Tương Tư','phuong_an_d'=>'Tương Đồng','dap_an'=>'Tương Tư','key'=>'q8_21'],
['noi_dung'=>'"Yêu thì củ ấu cũng tròn
Ghét thì quả bồ hòn cũng ..."?','linh_vuc_id'=>5,'phuong_an_a'=>'Béo','phuong_an_b'=>'Méo','phuong_an_c'=>'Vẹo','phuong_an_d'=>'Teo','dap_an'=>'Méo','key'=>'q8_23'],
['noi_dung'=>'Truyền thuyết chín chúa tranh vua nói về thời kì lịch sử nào nước ta?','linh_vuc_id'=>3,'phuong_an_a'=>'Hùng Vương','phuong_an_b'=>'Thục Phán ADV','phuong_an_c'=>'Nam Bắc Triều','phuong_an_d'=>'Vua Lê Chúa Trịnh','dap_an'=>'Vua Lê Chúa Trịnh','key'=>'q8_26'],
['noi_dung'=>'Đâu là tên một bài hát của nhạc sĩ Thế Hiện?','linh_vuc_id'=>2,'phuong_an_a'=>'Tóc Em Đuôi Voi','phuong_an_b'=>'Tóc Em Đuôi Ngựa','phuong_an_c'=>'Tóc Em Đuôi Sam','phuong_an_d'=>'Tóc Em Đuôi Gà','dap_an'=>'Tóc Em Đuôi Gà','key'=>'q9_1'],
['noi_dung'=>'Bộ dạng khét lét, sợ sệch, nét tránh không dám nhìn thẵng được gọi là gi?','linh_vuc_id'=>5,'phuong_an_a'=>'Hừng Hựt','phuong_an_b'=>'Hân Hoan','phuong_an_c'=>'Loan Lét','phuong_an_d'=>'Hung Hản','dap_an'=>'Loan Lét','key'=>'q9_2'],
['noi_dung'=>'27/2 là ngày kỉ niệm nào sau đây?','linh_vuc_id'=>2,'phuong_an_a'=>'Ngày Thầy Thuốc VN','phuong_an_b'=>'NgàQy uốc Tế TN','phuong_an_c'=>'Ngày Quốc Tế PN','phuong_an_d'=>'Ngày Giải Phóng','dap_an'=>'Ngày Thầy Thuốc VN','key'=>'q9_3'],
['noi_dung'=>'Từ nào còn thiếu trong câu sau "Hay làm thì đói, hay ... thì no"?','linh_vuc_id'=>5,'phuong_an_a'=>'Đi Chơi','phuong_an_b'=>'Ăn Chơi','phuong_an_c'=>'Nói','phuong_an_d'=>'Lười Nhát','dap_an'=>'Nói','key'=>'q9_5'],
['noi_dung'=>'Đội quân màu thiên thanh là biệt danh đội bóng nước nào?','linh_vuc_id'=>1,'phuong_an_a'=>'Hà Lan','phuong_an_b'=>'Ý','phuong_an_c'=>'Đức','phuong_an_d'=>'Na Uy','dap_an'=>'Ý','key'=>'q9_6'],
['noi_dung'=>'Linh vật của thế vận hội Olympic 2016 mang hình ảnh con vật gì?','linh_vuc_id'=>1,'phuong_an_a'=>'Dê','phuong_an_b'=>'Ngựa','phuong_an_c'=>'Chó','phuong_an_d'=>'Mèo','dap_an'=>'Mèo','key'=>'q9_7'],
['noi_dung'=>'Tục căng môi bằng đĩa là của thổ dân đất nước nào?','linh_vuc_id'=>7,'phuong_an_a'=>'Ethiopia','phuong_an_b'=>'SuDang','phuong_an_c'=>'Balettin','phuong_an_d'=>'Ai Cập','dap_an'=>'Ethiopia','key'=>'q9_8'],
['noi_dung'=>'Hạt na có màu gì?','linh_vuc_id'=>8,'phuong_an_a'=>'Tím','phuong_an_b'=>'Đen','phuong_an_c'=>'Xanh Lục','phuong_an_d'=>'Đỏ','dap_an'=>'Đen','key'=>'q9_13'],
['noi_dung'=>'Lâm Vông là điệu múa nỗi tiếng của đất nước nào?','linh_vuc_id'=>7,'phuong_an_a'=>'Trung Quốc','phuong_an_b'=>'Lào','phuong_an_c'=>'Nga','phuong_an_d'=>'Mexico','dap_an'=>'Lào','key'=>'q9_14'],
['noi_dung'=>'Bãi tắm Đá Nhảy là danh thắng quốc gia thuộc tỉnh nào?','linh_vuc_id'=>4,'phuong_an_a'=>'Bình Thuận','phuong_an_b'=>'Quảng Trị','phuong_an_c'=>'Phú Yên','phuong_an_d'=>'Quảng Bình','dap_an'=>'Quảng Bình','key'=>'q9_16'],
['noi_dung'=>'Địa danh Thanh Trì Hà Nội nổi tiếng với món ăn gì?','linh_vuc_id'=>4,'phuong_an_a'=>'Trà Dưa','phuong_an_b'=>'Bánh Cuốn','phuong_an_c'=>'Bún Bò','phuong_an_d'=>'Bánh Canh','dap_an'=>'Bánh Cuốn','key'=>'q10_2'],
['noi_dung'=>'Đâu là tên một loài hoa nổi tiếng ở các tỉnh miền núi phía Bắc?','linh_vuc_id'=>8,'phuong_an_a'=>'Tam Giác Mạch','phuong_an_b'=>'Tứ Giác Mạch','phuong_an_c'=>'Ngũ Giác Mạch','phuong_an_d'=>'Lục Giác Mạch','dap_an'=>'Tam Giác Mạch','key'=>'q10_3'],
['noi_dung'=>'Từ nào thường được dùng để miêu tả vẻ đẹp của một chành trai?','linh_vuc_id'=>5,'phuong_an_a'=>'Yểu Điệu','phuong_an_b'=>'Thước Tha','phuong_an_c'=>'Cường Tráng','phuong_an_d'=>'Nhu Mì','dap_an'=>'Cường Tráng','key'=>'q10_4'],
['noi_dung'=>'Thôn cao Hưng Yên nổi tiếng với nghề truyền thống nào?','linh_vuc_id'=>4,'phuong_an_a'=>'Làm Hương','phuong_an_b'=>'Đóng Tàu','phuong_an_c'=>'Làm Mộc','phuong_an_d'=>'Rèn','dap_an'=>'Làm Hương','key'=>'q10_6'],
['noi_dung'=>'Bài hát chàng buông vạt áo em ra thuộc loại hình nghệ thuật dân gian nào?','linh_vuc_id'=>2,'phuong_an_a'=>'Tuồng','phuong_an_b'=>'Chèo','phuong_an_c'=>'Cải Lương','phuong_an_d'=>'Dân Ca Quan Họ','dap_an'=>'Dân Ca Quan Họ','key'=>'q10_9'],
['noi_dung'=>'Từ nào chỉ tên một giống lợn nổi tiếng của người mông?','linh_vuc_id'=>6,'phuong_an_a'=>'Cắp Sách','phuong_an_b'=>'Cắp Nách','phuong_an_c'=>'Cắp Balo','phuong_an_d'=>'Cắp Vali','dap_an'=>'Cắp Nách','key'=>'q10_12'],
['noi_dung'=>'Voi rừng là biệt danh của cầu thủ nào?','linh_vuc_id'=>1,'phuong_an_a'=>'Didier Drogba','phuong_an_b'=>'Smuan Deto','phuong_an_c'=>'Mario Paloteli','phuong_an_d'=>'Den Papa','dap_an'=>'Didier Drogba','key'=>'q10_15'],
['noi_dung'=>'Lễ Rước Cộ Bà là lể hội truyền thống của tỉnh nào?','linh_vuc_id'=>5,'phuong_an_a'=>'Quảng Ngãi','phuong_an_b'=>'Quảng Trị','phuong_an_c'=>'Quảng Bình','phuong_an_d'=>'Quảng Nam','dap_an'=>'Quảng Nam','key'=>'q10_21'],
['noi_dung'=>'Bác Hồ viết "Lời kêu gọi toàn quốc kháng chiến tại đâu"?','linh_vuc_id'=>1,'phuong_an_a'=>'Làng Vạn Phúc','phuong_an_b'=>'Làng Bác Tràng','phuong_an_c'=>'Làng Hương Trà','phuong_an_d'=>'Làng Nhỉ Khánh','dap_an'=>'Làng Vạn Phúc','key'=>'q11_9'],
['noi_dung'=>'Hình ảnh vị anh hùng dân tộc nào được tái hiện trong vở tuồng cổ "Câu Thơ Yên Ngựa"?','linh_vuc_id'=>1,'phuong_an_a'=>'Lý Thường Kiệt','phuong_an_b'=>'Lê Hoàng','phuong_an_c'=>'Trần Quan Khải','phuong_an_d'=>'Nguyễn Trãi','dap_an'=>'Lý Thường Kiệt','key'=>'q14_8'],
        ]);
    }
}