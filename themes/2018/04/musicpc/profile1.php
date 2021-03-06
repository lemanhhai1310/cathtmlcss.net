<?php include("commons/header.php"); ?>
<div class="box_profile">
	<div class="container">
		<div class="media user11">
			<div class="media-left mr-4 align-self-center">
				<img src="https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/30656592_875212052650180_4881000052937457664_n.jpg?_nc_cat=0&oh=aabcaaa4646781829967f7a9fc069ad4&oe=5B579C42" alt="">
			</div>
			<div class="media-body align-self-center">
				<h4 class="media-title">AnhTu220791</h4>
				<ul class="list-inline">
					<li class="list-inline-item"><b>193.085</b> <small>upload(17Gb)</small></li>
					<li class="list-inline-item"><b>193.085</b> <small>download</small></li>
				</ul>
				<button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".edit_profile">Chỉnh sửa <i class="material-icons">mode_edit</i></button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade edit_profile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<h4 class="title">Chỉnh sửa tài khoản</h4>
				<div class="row">
					<div class="col-md-3">
						<div class="change_avatar">
							<img src="https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/30656592_875212052650180_4881000052937457664_n.jpg?_nc_cat=0&oh=aabcaaa4646781829967f7a9fc069ad4&oe=5B579C42" alt="">
							<div class="form-group">
								<label for="file_avarta"><i class="material-icons">photo_camera</i> Thay đổi ảnh đại diện</label>
								<input type="file" class="form-control-file" id="file_avarta">
							</div>
						</div>
					</div>
					<div class="col-md-9">
						<form action="profile_submit" class="profile_submit1" method="get" accept-charset="utf-8">
							<div class="form-group">
								<label for="exampleInputEmail1">Username</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="AnhTu220791">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Link URL của bạn</label>
								<input type="email" class="form-control disabled" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="chiasenhac.com/anhtu220791">
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="exampleInputEmail1">Tên</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="">
								</div>
								<div class="form-group col-md-6">
									<label for="exampleInputEmail1">Họ và đệm</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="">
								</div>
								<div class="form-group col-md-6">
									<label for="exampleInputEmail1">City</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="">
								</div>
								<div class="form-group col-md-6">
									<label for="exampleInputEmail1">Quốc gia</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="">
								</div>
								<div class="form-group col-md-12">
									<label for="exampleInputEmail1">Thông tin</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								</div>
							</div>
							<div class="text-right">
								<a href="#" title="" class="cancel" data-dismiss="modal">Hủy</a>
								<button class="btn btn-secondary ml-3">Hoàn tất</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row row_wrapper">
		<div class="col-md-9">
			<ul class="nav nav-tabs nav-justified nav_bxh" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">việt nam</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">us-uk</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">k-pop</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">j-pop</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">c-pop</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">us-uk</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">k-pop</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">us-uk</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">k-pop</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<div class="media media-tab">
						<div class="media-left">
							<h2 class="media-title">Bảng xếp hạng <br> Vietnam</h2>
						</div>
						<div class="media-body">
							<p>Bảng Xếp Hạng CSN cập nhật vào thứ Hai hàng tuần dựa trên số liệu thống kê thực tế trên desktop và mobile CSN. Trong đó những trọng số quan trọng quyết định thứ hạng TOP 20 như sau: Nghe, Thích, Bình Luận, Chia sẻ, Tải v.v... Mỗi tương tác của người dùng đều tác động đến kết quả cuối cùng của BXH CSN.</p>
						</div>
					</div>
					<nav class="nav_sub_bxh d-flex justify-content-between align-items-center">
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">bài hát</a>
							<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">video</a>
						</div>
						<div>
							
						</div>
						<a class="d-flex align-items-center view_all" href="#" title="">Nghe tất cả <i class="material-icons">play_circle_outline</i></a>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<ul class="list-unstyled list_music bxh1">	
								<li class="media align-items-stretch up">
									<div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
										<span class="counter">01</span>
										<i class="material-icons">keyboard_arrow_up</i>
										<span class="rate">+1</span>
									</div>
									<div class="media-left align-items-stretch mr-2">
										<a href="#" title="">
											<img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/5/3/0/7/5307b38e7a651a805b56674e70d124ef.jpg" alt="">
											<i class="material-icons">play_circle_outline</i>
										</a>
									</div>
									<div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
										<div>
											<h5 class="media-title mt-0 mb-0"><a href="#" title="">sống xa anh chẳng dễ dàng</a></h5>
											<div class="author"><a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a></div>
										</div>
										<small class="type_music c1">Lossless</small>
									</div>
									<div class="media-right align-self-center">
										<small class="time_stt">75.837.763</small>
										<ul class="list-inline">
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
										</ul>
									</div>
								</li>
								<li class="media align-items-stretch down">
									<div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
										<span class="counter">02</span>
										<i class="material-icons">keyboard_arrow_down</i>
										<span class="rate">+8</span>
									</div>
									<div class="media-left align-items-stretch mr-2">
										<a href="#" title="">
											<img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/6/3/3/3/6333e47cefee8f7cf9317e0fc21c52b1.jpg" alt="">
											<i class="material-icons">play_circle_outline</i>
										</a>
									</div>
									<div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
										<div>
											<h5 class="media-title mt-0 mb-0"><a href="#" title="">đã lỡ yêu em rồi</a></h5>
											<div class="author"><a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a></div>
										</div>
										<small class="type_music c1">Lossless</small>
									</div>
									<div class="media-right align-self-center">
										<small class="time_stt">75.837.763</small>
										<ul class="list-inline">
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
										</ul>
									</div>
								</li>
								<li class="media align-items-stretch not">
									<div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
										<span class="counter">03</span>
										<i class="material-icons">remove</i>
										<span class="rate"></span>
									</div>
									<div class="media-left align-items-stretch mr-2">
										<a href="#" title="">
											<img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/6/3/3/3/6333e47cefee8f7cf9317e0fc21c52b1.jpg" alt="">
											<i class="material-icons">play_circle_outline</i>
										</a>
									</div>
									<div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
										<div>
											<h5 class="media-title mt-0 mb-0"><a href="#" title="">đã lỡ yêu em rồi</a></h5>
											<div class="author"><a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a></div>
										</div>
										<small class="type_music c1">Lossless</small>
									</div>
									<div class="media-right align-self-center">
										<small class="time_stt">75.837.763</small>
										<ul class="list-inline">
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
										</ul>
									</div>
								</li>
								<li class="media align-items-stretch not">
									<div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
										<span class="counter">04</span>
										<i class="material-icons">remove</i>
										<span class="rate"></span>
									</div>
									<div class="media-left align-items-stretch mr-2">
										<a href="#" title="">
											<img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/6/3/3/3/6333e47cefee8f7cf9317e0fc21c52b1.jpg" alt="">
											<i class="material-icons">play_circle_outline</i>
										</a>
									</div>
									<div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
										<div>
											<h5 class="media-title mt-0 mb-0"><a href="#" title="">đã lỡ yêu em rồi</a></h5>
											<div class="author"><a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a></div>
										</div>
										<small class="type_music c1">Lossless</small>
									</div>
									<div class="media-right align-self-center">
										<small class="time_stt">75.837.763</small>
										<ul class="list-inline">
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
										</ul>
									</div>
								</li>
								<li class="media align-items-stretch not">
									<div class="media_tmp align-self-center d-flex align-items-center mr-3 pl-3">
										<span class="counter">05</span>
										<i class="material-icons">remove</i>
										<span class="rate"></span>
									</div>
									<div class="media-left align-items-stretch mr-2">
										<a href="#" title="">
											<img src="https://zmp3-photo.zadn.vn/thumb/240_240/cover/6/3/3/3/6333e47cefee8f7cf9317e0fc21c52b1.jpg" alt="">
											<i class="material-icons">play_circle_outline</i>
										</a>
									</div>
									<div class="media-body align-items-stretch d-flex flex-column justify-content-between p-0">
										<div>
											<h5 class="media-title mt-0 mb-0"><a href="#" title="">đã lỡ yêu em rồi</a></h5>
											<div class="author"><a href="#" title="">Phương Ly</a> , <a href="#" title="">JustaTee</a></div>
										</div>
										<small class="type_music c1">Lossless</small>
									</div>
									<div class="media-right align-self-center">
										<small class="time_stt">75.837.763</small>
										<ul class="list-inline">
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">file_download</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">headset</i></a></li>
											<li class="list-inline-item"><a href="#" title=""><i class="material-icons">share</i></a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
					</div>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
			</div>
		</div>
		<div class="col-md-3">
			<a class="catalog1 weekend" style="background-image: url(https://i.scdn.co/image/6a6098cd1369420b9b6ff941ff41ded1b1dceb06);" href="#" title="">
				<span>weekend</span>
			</a>
			<a class="catalog1 edm" style="background-image: url(https://i.scdn.co/image/c8ffd7bd0df17c05fd8a1efef33ad793eea0e47d);" href="#" title="">
				<span>EDM</span>
			</a>
			<a class="catalog1 love" style="background-image: url(https://i.scdn.co/image/56228f9353b23405516a6ea8af1c22083f450b57);" href="#" title="">
				<span>love</span>
			</a>
			<br>
			<div class="card mb-3 cardads">
				<a class="card-img-top" href="#" title=""><img class="" src="http://adi.admicro.vn/adt/adn/2018/03/7a-ad-adx5aa737ceba8f7.jpg" alt=""></a>
			</div>
		</div>
	</div>
</div>
<?php include("commons/footer.php"); ?>