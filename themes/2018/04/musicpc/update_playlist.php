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
								<label for="exampleInputEmail11">Username</label>
								<input type="email" class="form-control" id="exampleInputEmail11" aria-describedby="emailHelp" placeholder="" value="AnhTu220791">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail12">Link URL của bạn</label>
								<input type="email" class="form-control disabled" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="" value="chiasenhac.com/anhtu220791">
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="exampleInputEmail13">Tên</label>
									<input type="email" class="form-control" id="exampleInputEmail13" aria-describedby="emailHelp" placeholder="" value="">
								</div>
								<div class="form-group col-md-6">
									<label for="exampleInputEmail14">Họ và đệm</label>
									<input type="email" class="form-control" id="exampleInputEmail14" aria-describedby="emailHelp" placeholder="" value="">
								</div>
								<div class="form-group col-md-6">
									<label for="exampleInputEmail15">City</label>
									<input type="email" class="form-control" id="exampleInputEmail15" aria-describedby="emailHelp" placeholder="" value="">
								</div>
								<div class="form-group col-md-6">
									<label for="exampleInputEmail16">Quốc gia</label>
									<input type="email" class="form-control" id="exampleInputEmail16" aria-describedby="emailHelp" placeholder="" value="">
								</div>
								<div class="form-group col-md-12">
									<label for="exampleInputEmail17">Thông tin</label>
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
			<div class="box_playlist border-0">
				<h3 class="title">CẬP NHẬT PLAYLIST</h3>
			</div>
			<div class="card card_playlist">
				<div class="card-body">
					<div class="row">
						<div class="col-md-9">
							<form action="update_playlist_submit" method="get" accept-charset="utf-8">
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-4 col-form-label">Tên Playlist</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="inputPassword" placeholder="Blooming Days - The 2nd Mini Album">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-4 col-form-label">Thể loại</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option>Default select</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-4 col-form-label">
										<label for="inputPassword">Hình ảnh playlist</label> <br>
										<small>(Hình tối thiểu 500 x 500 pixels. Nếu nhỏ hơn sẽ bị mất hình và lấy hình mặc định của NhacCuaTui)</small>
									</div>
									<div class="col-sm-8">
										<div class="media">
											<img class="mr-3" src="https://avatar-nct.nixcdn.com/playlist/2018/04/10/6/e/4/6/1523352297919.jpg" alt="">
											<div class="media-body">
												<div class="form-group">
													<label for="exampleFormControlFile1a">Chọn file</label>
													<input type="file" class="form-control-file" id="exampleFormControlFile1a">
												</div>
											</div>
										</div>	
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-4 col-form-label">Danh sách bài hát</label>
									<div class="col-sm-8">
										<div class="card border-0">
											<ul class="list-group list-group-sortable" id="editable">
								                <li class="list-group-item d-flex align-items-center justify-content-between"><span>1. <a class="name" href="#" title="">Người Âm Phủ</a> - <a class="author" href="#" title="">OSAD, VRT</a></span> <a class="delete js-remove" href="#" title=""><i class="fa fa-trash" aria-hidden="true"></i></a></li>
								                <li class="list-group-item d-flex align-items-center justify-content-between"><span>2. <a class="name" href="#" title="">Chạm Đáy Nỗi Đau</a> - <a class="author" href="#" title="">ERIK</a></span> <a class="delete js-remove" href="#" title=""><i class="fa fa-trash" aria-hidden="true"></i></a></li>
								                <li class="list-group-item d-flex align-items-center justify-content-between"><span>3. <a class="name" href="#" title="">Cô Gái M52</a> - <a class="author" href="#" title="">HuyR, Tùng Viu</a></span> <a class="delete js-remove" href="#" title=""><i class="fa fa-trash" aria-hidden="true"></i></a></li>
								                <li class="list-group-item d-flex align-items-center justify-content-between"><span>4. <a class="name" href="#" title="">Ai Khóc Nỗi Đau Này</a> - <a class="author" href="#" title="">Bảo Anh</a></span> <a class="delete js-remove" href="#" title=""><i class="fa fa-trash" aria-hidden="true"></i></a></li>
								                <li class="list-group-item d-flex align-items-center justify-content-between"><span>5. <a class="name" href="#" title="">Ngắm Hoa Lệ Rơi</a> - <a class="author"href="#" title="">Châu Khải Phong</a></span> <a class="delete js-remove" href="#" title=""><i class="fa fa-trash" aria-hidden="true"></i></a></li>
								            </ul>
								            <script type="text/javascript">
								            	var el = document.getElementById('editable');
												var sortable = Sortable.create(el,{
													filter: '.js-remove',
													onFilter: function (evt) {
														evt.item.parentNode.removeChild(evt.item);
													}
												});
								            </script>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>	
					<hr>
					<div class="row">
						<div class="col-md-9">
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-4 col-form-label"></label>
								<div class="col-sm-8">
									<button type="button" class="btn btn-primary btn-lg">Lưu</button>
									<button type="button" class="btn btn-primary btn-lg">Xóa</button>
								</div>
							</div>			
						</div>		
					</div>	
				</div>
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