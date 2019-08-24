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
			<div class="box_playlist">
				<h3 class="title">playlist</h3>
				<div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<a href="#" title="" class="btn btn-secondary"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
						<a href="#" title="" class="btn btn-danger"><i class="fa fa-pencil" aria-hidden="true"></i> Tạo playlist</a>
					</div>
				</div>
			</div>
			<div class="table-responsive" id="list_table">
				<table class="table">					
					<tbody>
						<tr>
							<td class="pl-0">
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
								</div>
							</td>
							<td>
								<div class="media">
									<a class="mr-3" href="#" title=""><img src="https://avatar-nct.nixcdn.com/playlist/2018/05/02/e/a/6/2/1525229718113.jpg" alt=""></a>
									<div class="media-body">
										<h4 class="media-title"><a href="#" title="">Blooming Days - The 2nd Mini Album</a></h4>
										<ul class="list-unstyled">
											<li><i class="material-icons">mic</i> Đang cập nhật</li>
											<li><i class="material-icons">headset</i> 0</li>
										</ul>
									</div>
								</div>
							</td>
							<td>
								<a href="#" title="" class="btn btn-danger"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</a>
								<a href="#" title="" class="btn btn-secondary"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
							</td>
						</tr>
						<tr>
							<td class="pl-0">
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
								</div>
							</td>
							<td>
								<div class="media">
									<a class="mr-3" href="#" title=""><img src="https://avatar-nct.nixcdn.com/playlist/2018/05/02/e/a/6/2/1525229718113.jpg" alt=""></a>
									<div class="media-body">
										<h4 class="media-title"><a href="#" title="">Blooming Days - The 2nd Mini Album</a></h4>
										<ul class="list-unstyled">
											<li><i class="material-icons">mic</i> Đang cập nhật</li>
											<li><i class="material-icons">headset</i> 0</li>
										</ul>
									</div>
								</div>
							</td>
							<td>
								<a href="#" title="" class="btn btn-danger"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</a>
								<a href="#" title="" class="btn btn-secondary"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
							</td>
						</tr>
						<tr>
							<td class="pl-0">
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
								</div>
							</td>
							<td>
								<div class="media">
									<a class="mr-3" href="#" title=""><img src="https://avatar-nct.nixcdn.com/playlist/2018/05/02/e/a/6/2/1525229718113.jpg" alt=""></a>
									<div class="media-body">
										<h4 class="media-title"><a href="#" title="">Blooming Days - The 2nd Mini Album</a></h4>
										<ul class="list-unstyled">
											<li><i class="material-icons">mic</i> Đang cập nhật</li>
											<li><i class="material-icons">headset</i> 0</li>
										</ul>
									</div>
								</div>
							</td>
							<td>
								<a href="#" title="" class="btn btn-danger"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</a>
								<a href="#" title="" class="btn btn-secondary"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
							</td>
						</tr>
					</tbody>
				</table>
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