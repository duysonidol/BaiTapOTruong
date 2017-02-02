
<?php 
	if( !isset( $_GET["id"] )  || ( !is_numeric( $_GET["id"] ) )){
		return alert("Nội dung bạn tìm không tồn tại :'( " , "alert-error");
	}



	$id = $_GET['id'];

	$sql =  "SELECT * FROM hoa WHERE id=$id LIMIT 1 ";
	$rs = mysqli_query($conn, $sql);

	$hoa = mysqli_fetch_array($rs, MYSQLI_ASSOC);


	if( isset( $_POST["submit"] ) ){


		//check file upload 

		$file = $_FILES["avatar"];

		$allow_types = array( "iamge/jpg" , "image/jpeg" , "image/png" , "image/gif" );

		$upload_dir = "../upload/";

		$save_file = $upload_dir . $file["name"];



		//nguoi dung co upload file len 
		if( !empty($file["type"]) ){
			if(in_array( strtolower($file["type"]) , $allow_types ) ){
				if( move_uploaded_file( $file["tmp_name"] ,  $save_file ) ){	

							$name = mysqli_real_escape_string( $conn , $_POST["name"]) ;
							$info = mysqli_real_escape_string($conn, $_POST["info"]);
							$excerpt = mysqli_real_escape_string($conn,$_POST["excerpt"]);
							$menu = mysqli_real_escape_string( $conn,  $_POST["menu"] );
							$price = mysqli_real_escape_string( $conn, $_POST["price"]);
							$id = $hoa["id"];
							$avatar = $file["name"];

							$sql = "UPDATE `hoa` SET `menu`={$menu}, `avatar`='{$avatar}' , `name`='{$name}',`info`='{$info}',`excerpt`='{$excerpt}',`price`='{$price}' WHERE id={$id} ";


							if( mysqli_query( $conn , $sql ) ){
								redirect("index.php?r=list-flower");
							} else{
								echo alert("Có lỗi xảy ra, xin thử lại sau!" . mysqli_error($conn), "alert-error");
							}
						}else{
							echo alert("Không thể tải ảnh lên, vui lòng thử lại" , "alert-error");
						}
			}else{
				echo alert("File không hợp lệ, vui lòng tải file dạng ảnh ! ");
			}
			
		}else{
			//nguoi dung ko upload file len 
				$name = mysqli_real_escape_string( $conn , $_POST["name"]) ;
				$info = mysqli_real_escape_string($conn, $_POST["info"]);
				$excerpt = mysqli_real_escape_string($conn,$_POST["excerpt"]);
				$menu = mysqli_real_escape_string( $conn,  $_POST["menu"] );
				$price = mysqli_real_escape_string( $conn, $_POST["price"]);
				$id = $hoa["id"];
				$avatar = $file["name"];

				$sql = "UPDATE `hoa` SET `menu`={$menu},`name`='{$name}',`info`='{$info}',`excerpt`='{$excerpt}',`price`='{$price}' WHERE id={$id} ";

				if( mysqli_query( $conn , $sql ) ){
					redirect("index.php?r=list-flower");
				} else{
					echo alert("Có lỗi xảy ra, xin thử lại sau!" . mysqli_error($conn), "alert-error");
				}
		}

		echo mysqli_errno($conn);
	}//post
	

?>
			<div class="form">
				<h2 class='alert alert-success'>Sửa hoa: <i> <?php echo $hoa["name"]; ?> </i></h2>
					<form  method="post" accept-charset="utf-8" enctype="multipart/form-data">

						<h2>Ảnh hoa</h2>
						<img class='avatar-big' src="../upload/<?php echo $hoa['avatar']?>">
						<input type="file" name="avatar"/>

						<h2>Tên hoa</h2>
						<input type="text" name="name" max-length='120' value="<?php echo $hoa['name'] ?>" />
						
						<h2>Thông tin giới thiệu</h2>
						<textarea name="info" class="textarea"><?php echo $hoa['info']; ?></textarea>
						
						<h2>Thông tin tóm tắt</h2>
						<textarea name="excerpt"><?php echo $hoa["excerpt"];?></textarea>

						<h2>Gía bán (VND)</h2>
						<input type="text" name="price" min-range="0" max-length='120' value="<?php echo $hoa['price'];?>" />

						<h2>Chọn danh mục</h2>
						<select name="menu">
						<?php 
							$menus = mysqli_query($conn, "SELECT id , name FROM menu");
							while( $menu = mysqli_fetch_array($menus, MYSQLI_ASSOC) ){
						?>
							<option value="<?php echo $menu['id']?>"  <?php echo ($menu['id'] == $hoa['menu'])  ? "selected" : "" ; ?> >
								<?php echo $menu["name"];?>
							</option>
							
						<?php }; ?>
						</select>
						<br/>
						<input type="submit" name="submit"  class="btn btn-submit" value="Thêm mới"/>
					</form>
			</div><!--form-->