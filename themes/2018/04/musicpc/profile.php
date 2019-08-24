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
					<div class="d-flex align-items-center justify-content-between" id="header_playlist">
						<h3 class="title">playlist | album</h3>
						<span><a class="btn btn-danger" href="#" title="" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-pencil" aria-hidden="true"></i> Tạo playlist</a><a class="btn btn-secondary" href="#" title=""><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</a></span>
					</div>
					<div class="row row10px" id="playlist">
						<div class="col">
							<div class="card card1">
								<div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg);">
									<a href="#" title="">
										<span class="icon-play"></span>
									</a>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="#" title="">Chạm khẽ tim anh một chút thôi</a></h3>
									<p class="card-text"><a href="#" title="">Kyo York</a> , <a href="#" title="">Thanh Tú</a></p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card card1">
								<div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2017/01/16/d/7/6/3/1484535771754_268.jpg);">
									<a href="#" title="">
										<span class="icon-play"></span>
									</a>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="#" title="">Sống xa anh chẳng dễ dàng</a></h3>
									<p class="card-text"><a href="#" title="">Noo Phước Thịnh</a></p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card card1">
								<div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg);">
									<a href="#" title="">
										<span class="icon-play"></span>
									</a>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="#" title="">Vài lần đón đưa (Touliver Remix)</a></h3>
									<p class="card-text"><a href="#" title="">Bảo Anh</a></p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card card1">
								<div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2017/02/13/2/0/8/c/1486960729549_268.jpg);">
									<a href="#" title="">
										<span class="icon-play"></span>
									</a>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="#" title="">Chạm khẽ tim anh một chút thôi</a></h3>
									<p class="card-text"><a href="#" title="">Soobin Hoàng Sơn</a></p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card card1">
								<div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2018/03/28/5/d/5/9/1522229043066_268.jpg);">
									<a href="#" title="">
										<span class="icon-play"></span>
									</a>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="#" title="">Sống xa anh chẳng dễ dàng</a></h3>
									<p class="card-text"><a href="#" title="">Sơn Tùng MTP</a></p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card card1">
								<div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2018/04/03/5/c/9/d/1522735856670_268.jpg);">
									<a href="#" title="">
										<span class="icon-play"></span>
									</a>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="#" title="">Chạm khẽ tim anh một chút thôi</a></h3>
									<p class="card-text"><a href="#" title="">Kyo York</a> , <a href="#" title="">Thanh Tú</a></p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card card1">
								<div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2017/01/16/d/7/6/3/1484535771754_268.jpg);">
									<a href="#" title="">
										<span class="icon-play"></span>
									</a>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="#" title="">Sống xa anh chẳng dễ dàng</a></h3>
									<p class="card-text"><a href="#" title="">Noo Phước Thịnh</a></p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card card1">
								<div class="card-header" style="background-image: url(https://avatar-nct.nixcdn.com/mv/2017/12/21/5/5/3/7/1513863104309_268.jpg);">
									<a href="#" title="">
										<span class="icon-play"></span>
									</a>
								</div>
								<div class="card-body">
									<h3 class="card-title"><a href="#" title="">Vài lần đón đưa (Touliver Remix)</a></h3>
									<p class="card-text"><a href="#" title="">Bảo Anh</a></p>
								</div>
							</div>
						</div>
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