<?php
		$mess="";
		$repDefault="gõ chữ đi nào";
		$rep="";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    	// collect value of input field
	    	$content = $_POST['inputMess']; 
	    	if (empty($content)) {
	        	$rep="<span>sao chua nhap tin nhan ma gui</span>";
	    	}
	    	else{
	    		$mess=$content;
	    		if(strpos($mess,"vong")!==false || strpos($mess,"vọng")!==false || strpos($mess,"Vọng")!==false){
	    			$rep="Là một anh chàng hoàn hảo, cao 1m75, nặng 62kg, ngực nở vai rộng, bụng hằn những múi, đẹp trai, ga lăng, đá banh hay, đá cầu giỏi. Mặc dù da đen nhưng men lỳ, môi dày nhưng phúc hậu, mắt hí nhưng tốt bụng. Nhiệt tình với bạn bè, đối xử tốt với mọi người, đặc biệt luôn nhường nhịn mọi người, nhất là bạn cùng phòng, tuyệt đối không bao giờ giành ăn với bạn. Nói chung anh ấy cái gì cũng tốt, nói láo, nói dốc, ảo tưởng cũng tốt luôn.";
	    		}
	    		else if(strpos($mess,"chi")!==false || strpos($mess,"Chi")!==false){
	    			$rep="Bạn nữ đứng đầu danh sách lớp, thư ký lớp, mắt cận, dáng đẹp, trầm tính, ít nói, tốt bụng.";
	    		}
	    		else if(strpos($mess,"cuong")!==false || strpos($mess,"cường")!==false || strpos($mess,"Cường")!==false){
	    			$rep="Con ông Kiệt, đầu bự, mắt lồi, lâu rồi không đá banh.";
	    		}
	    		else if(strpos($mess,"Diễm")!==false || strpos($mess,"diem")!==false || strpos($mess,"Diem")!==false || strpos($mess,"diễm")!==false){
	    			$rep="Trong lớp là người đầu tiên được vinh dự ngồi gần bạn Vọng (đây là bot nói chứ Vọng không biết gì đâu), sở hữu làn da có số má trong lớp và nợ bạn Vọng một cái tát)";
	    		}
	    		else if(strpos($mess,"Bảo")!==false || strpos($mess,"bao")!==false || strpos($mess,"Bao")!==false || strpos($mess,"bảo")!==false){
	    			$rep="Con chó :), chuyên gia bức lông, là người đáng sợ nhất lớp.";
	    		}
	    		else if(strpos($mess,"Hồng Duyên")!==false || strpos($mess,"Hong Duyen")!==false){
	    			$rep="Bạn nữ dễ thương, nấu ăn ngon, biết nấu giỗ, học Duy Tân, chưa có bồ.";
	    		}
	    		else if(strpos($mess,"Duyên Duyên")!==false || strpos($mess,"Thị Duyên")!==false || strpos($mess,"Thi Duyen")!==false || strpos($mess,"Duyen Duyen")!==false){
	    			$rep="Nữ tánh, đảm đang, hiền lành, tốt bụng.";
	    		}
	    		else if(strpos($mess,"Dinh")!==false || strpos($mess,"Định")!==false || strpos($mess,"dinh")!==false || strpos($mess,"định")!==false){
	    			$rep="Hiền mà hổng hiền, lột xác ngoạn mục từ cấp 3 lên đại học, facebook có cả ngàn lượt theo dõi và hay 'cú đêm'";
	    		}
	    		else if(strpos($mess,"Đang")!==false || strpos($mess,"Dang")!==false || strpos($mess,"đang")!==false || strpos($mess,"dang")!==false){
	    			$rep="người nhỏ, mắt to, hội chị em bạn dì thân tình thắm thiết da diết mặn nồng với Hảo, Diễm, Linh, Diệu.";
	    		}
	 			else if(strpos($mess,"Diệu")!==false || strpos($mess,"Dieu")!==false || strpos($mess,"dieu")!==false || strpos($mess,"diệu")!==false){
	    			$rep="Lớp phó học tập A2, có tình cảm khăn khít sắn xít nút nít với Duyên, Đông, Phượng ở TPHCM. Đặc biệt đang thực hiện công cuộc tìm gấu thất lạc tại mặt trận CFS toàn thành phố, tương lai mở rộng quy mô ra toàn miền Nam và cả nước.";
	    		}
	    		else if(strpos($mess,"Đông")!==false || strpos($mess,"Dong")!==false || strpos($mess,"dong")!==false || strpos($mess,"đông")!==false){
	    			$rep="Cao gầy ớm đen và nhìn không giống cha cho lắm :v";
	    		}
	    		else if(strpos($mess,"Hạc")!==false || strpos($mess,"Hac")!==false || strpos($mess,"hac")!==false || strpos($mess,"hạc")!==false){
	    			$rep="Lớp trưởng, da trắng, đầu chơm chơm, đẹp trai nhiều đứa yêu";
	    		}
	    		else if(strpos($mess,"Hậu")!==false || strpos($mess,"Hau")!==false || strpos($mess,"hau")!==false || strpos($mess,"hậu")!==false){
	    			$rep="Là người nhưng mang trong mình máu con cún, máu lên thì đừng hỏi bố cháu là ai (chưa thấy bao giờ). Tính tình ngay thẳng, chính trực, dám nói dám làm, nhiệt tình với anh em. Dám cho bạn mượn 500k mà không dám cho luôn, cùi.";
	    		}
	    		else if(strpos($mess,"Hảo")!==false || strpos($mess,"Hao")!==false || strpos($mess,"hao")!==false || strpos($mess,"hảo")!==false){
	    			$rep="Hội chị em bạn dì thân thiết da diết thắm thiết mặn nồng với Đang, Diễm, Diệu, Linh. KHÔNG HỀ mê trai đẹp.";
	    		}
	    		else if(strpos($mess,"Ngọc Linh")!==false || strpos($mess,"ngoc linh")!==false || strpos($mess,"Ngoc Linh")!==false || strpos($mess,"ngọc linh")!==false){
	    			$rep="Hiền, nói chuyện dễ thương, tóc đẹp, dáng chạy cũng đẹp";
	    		}
	    		else if(strpos($mess,"Nhật Linh")!==false || strpos($mess,"nhat linh")!==false || strpos($mess,"Nhat Linh")!==false || strpos($mess,"nhật linh")!==false){
	    			$rep="Hiền, nói chuyện dễ thương, tóc đẹp, dáng chạy cũng đẹp";
	    		}
	    		else if(strpos($mess,"dang")!==false || strpos($mess,"Đảng")!==false || strpos($mess,"nhà nước")!==false || strpos($mess,"Đảng")!==false){
	    			$rep="Vọng đẹp trai";
	    		}
	    		else if(strpos($mess,"Na")!==false){
	    			$rep="mặt mụn, mới cạo";
	    		}
	    		else {
	    			$rep="have nothing to rep";
	    		}
	    	}
		}
	?>