<?php include("commons/header.php"); ?>
<div class="box_space"></div>
<div class="container">
	<div class="row row_wrapper">
		<div class="col-md-9">
			<ul class="nav nav-tabs nav-upload" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="upload_lyric-tab" data-toggle="tab" href="#upload_lyric" role="tab" aria-controls="upload_lyric" aria-selected="true">Upload bài hát</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="upload_album-tab" data-toggle="tab" href="#upload_album" role="tab" aria-controls="upload_album" aria-selected="false">upload album</a>
				</li>
			</ul>
			<div class="tab-content upload-content" id="myTabContent">
				<div class="tab-pane fade show active" id="upload_lyric" role="tabpanel" aria-labelledby="upload_lyric-tab">
					<div class="box_upload_file d-flex align-items-center justify-content-center">
						<div class="output">
							<label for="upload_lyric_file" class="text-center">
								<img src="imgs/ copy.png" alt="">
								<h3 class="title">Chọn file để upload</h3>
								<small>Bạn có thể kéo và thả file vào đây</small>
							</label>
						</div>
					</div>
					<script type="text/javascript">
						(function (window) {
						    function triggerCallback(e, callback) {
						        if (!callback || typeof callback !== 'function') {
						            return;
						        }
						        var files;
						        if (e.dataTransfer) {
						            files = e.dataTransfer.files;
						        } else if (e.target) {
						            files = e.target.files;
						        }
						        callback.call(null, files);
						    }

						    function makeDroppable(ele, callback) {
						        var input = document.createElement('input');
						        input.setAttribute('type', 'file');
						        input.setAttribute('multiple', true);
						        input.style.display = 'none';
						        input.addEventListener('change', function (e) {
						            triggerCallback(e, callback);
						        });
						        ele.appendChild(input);

						        ele.addEventListener('dragover', function (e) {
						            e.preventDefault();
						            e.stopPropagation();
						            ele.classList.add('dragover');
						        });

						        ele.addEventListener('dragleave', function (e) {
						            e.preventDefault();
						            e.stopPropagation();
						            ele.classList.remove('dragover');
						        });

						        ele.addEventListener('drop', function (e) {
						            e.preventDefault();
						            e.stopPropagation();
						            ele.classList.remove('dragover');
						            triggerCallback(e, callback);
						        });

						        ele.addEventListener('click', function () {
						            input.value = null;
						            input.click();
						        });
						    }

						    window.makeDroppable = makeDroppable;
						})(this);
						(function (window) {
						    makeDroppable(window.document.querySelector('.box_upload_file'), function (files) {
						        console.log(files);
						        var output = document.querySelector('.output');
						        output.innerHTML = '';
						        output.innerHTML += '<div class="box_process"> <div class="media">' + '<img class="mr-3 align-self-center" src="imgs/document.png" alt="">' + '<div class="media-body align-self-center">' + '<div class="d-flex align-items-center justify-content-between mb-1">' + '<h4 class="media-title"><a href="#" title="">Da-Lo-Yeu-Em-Nhieu-JustaTee.mp3</a> <small class="text-danger">1m 23s</small></h4>' + '<a href="#" title="" class="close"><i class="material-icons">close</i></a>' + '</div>' + '<div class="progress">' + '<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>' + '</div>' + '</div>' + '</div>' + '</div>';
						    });
						})(this);
					</script>
					<p class="text-center upload_text_desc"><small>Bạn có thể upload nhiều bài hát cùng lúc bằng cách nhấn giữ phím Ctrl và click chọn các files.</small></p>
					<hr>
					<div class="row row10px">
						<div class="col-3">
							<div class="card cover_upload">
								<div class="card-body d-flex align-items-center justify-content-center">
									<form>
										<div class="form-group text-center m-0">
											<label for="exampleFormControlFile2">
												<i class="material-icons">camera_alt</i>
												<div class="txt">Upload Cover</div>
											</label>
											<input type="file" class="form-control-file" id="exampleFormControlFile2">
										</div>
									</form>
								</div>	
							</div>
						</div>
						<div class="col-9">
							<div class="box_right_upload form-row">
								<div class="form-group col-12">
									<label for="exampleInputEmail1">Bài hát gốc</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
								</div>
								<div class="form-group col-12">
									<label for="exampleInputEmail1">Tên bài hát</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
								</div>
								<div class="form-group col-12">
									<label for="exampleInputEmail1">Ca sĩ</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
								</div>
								<div class="form-group col-12">
									<label for="exampleInputEmail1">Sáng tác</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
								</div>
								<div class="form-group col-4">
									<label for="exampleInputEmail1">Hãng sản xuất</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
								</div>
								<div class="form-group col-4">
									<label for="exampleInputEmail1">Hãng đĩa</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
								</div>
								<div class="form-group col-4">
									<label for="exampleInputEmail1">Năm phát hành</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
								</div>
								<div class="form-group col-3">
									<label for="exampleInputEmail1">Chuyên mục</label>
									<select class="form-control" id="exampleFormControlSelect1">
										<option>Nhạc Việt Nam</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<div class="form-group col-3">
									<label for="exampleInputEmail1" style="opacity: 0;">Hãng đĩa</label>
									<select class="form-control" id="exampleFormControlSelect1">
										<option>Nhạc pop, rock…</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<div class="form-group col-3">
									<label for="exampleInputEmail1" style="opacity: 0;">Năm phát hành</label>
									<select class="form-control" id="exampleFormControlSelect1">
										<option>Nhạc trẻ</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<div class="form-group col-3">
									<label for="exampleInputEmail1" style="opacity: 0;">Năm phát hành</label>
									<select class="form-control" id="exampleFormControlSelect1">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<div class="form-group col-12">
									<label for="exampleInputEmail1">Lời bài hát</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="9"></textarea>
								</div>
								<div class="form-group col-12">
									<label for="exampleInputEmail1">Ghi chú</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								</div>
								<div class="form-group col-12">
									<div class="d-flex align-items-center justify-content-between mb-2">
										<label for="exampleInputEmail1" class="m-0">Full link nguồn dowload</label>
										<small>Yêu cầu bắt buộc khi upload nhạc lossless</small>
									</div>	
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
								</div>
								<div class="text-center col-12">
									<button type="button" class="btn btn-danger btn-upload">Tải lên</button>
								</div>
							</div>	
						</div>
					</div>	
				</div>
				<div class="tab-pane fade" id="upload_album" role="tabpanel" aria-labelledby="upload_album-tab">...</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="sidebar_upload">
				<h3 class="title">Hướng dẫn Upload nhạc mới</h3>
				<ul class="list-unstyled">
					<li><span>Bước 1:</span> Nhấn nút + Chọn tập tin để tải lên... để upload bài hát từ máy tính lên server chiasenhac.com</li>
					<li><span>Bước 2:</span> Điền tên <span>Ca sĩ</span> trình bày ở dưới phần <span>Tên bài hát</span>.</li>
					<li><span>Bước 3:</span> Chỉnh sửa lại <span>Tên bài hát</span> cho chính xác.</li>
					<li><span>Bước 4:</span> Hệ thống sẽ tự động chọn 1 bài hát trong cơ sở dữ liệu có thông tin bài hát gần giống nhất với thông tin bạn đã điền vào. Nếu hệ thống chọn không chính xác, bạn hãy click vào <span>Chọn bài khác</span> ở khung <span>Bài hát gốc</span> để chọn lại cho đúng hoặc chỉnh sửa lại <span>Tên bài hát</span> 1 lần nữa giống bước 3 để tự bổ sung thông tin.</li>
					<li><span>Bước 5:</span> Bổ sung, chỉnh sửa các thông tin còn lại cho chính xác.</li>
					<li><span>Bước 6:</span> Nhập link nguồn nhạc mà bạn đã bài hát này về. Nếu bạn rip nhạc từ CD gốc thì vui lòng gửi link file ảnh bìa của CD để chứng minh.</li>
				</ul>
				<hr>
				<h3 class="title">Lưu ý</h3>
				<ul class="list-unstyled">
					<li>Nếu vì 1 lý do nào đó, bạn cần thay đổi Tên bài hát hoặc tên ca sĩ thì bạn phải thực hiện lại thứ tự các bước như trên.</li>
					<li>Bạn chỉ cần upload file bài hát ở chất lượng cao nhất mà bạn có, hệ thống sẽ xử lý thành các định dạng có chất lượng thấp hơn để phù hợp yêu cầu nghe nhạc của mọi người.</li>
					<li>Sau khi file nhạc và thông tin bài hát đã được tải lên hệ thống thành công, bạn phát hiện có thông tin nhập chưa chính xác, cần chỉnh sửa thì bạn vẫn có 5 phút để thể thay đổi. Sau thời hạn 5 phút mà hệ thống không phát hiện thay đổi nào mới thì hệ thống bắt đầu xử lý bài hát của bạn để đăng lên.</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="box_space"></div>
<?php include("commons/footer.php"); ?>