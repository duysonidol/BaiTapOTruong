		<!-- start menu -->
		<div class="menu">
			<ul>
					<li><a href="index.php?r=home" title="home">Trang chủ</a></li>
					<li><a href="#" title="gioithieu">Giới thiệu</a></li>

				<?php 
					$sql = "SELECT * FROM menu";
					$rs = mysqli_query($conn, $sql);
					while( $r = mysqli_fetch_array($rs, MYSQLI_ASSOC) ):
				?>
					<li><a href="index.php?r=category&id=<?php echo $r['id']; ?>" title="<?php echo $r['info']?>"><?php echo $r["name"];?></a></li>

				<?php endwhile;?>

				<li><a href="index.php?r=about" title="lienhe">Liên hệ</a></li>
				<li><a href="index.php?r=dk" title="Đăng kí">Đăng kí</a></li>
				<li><a href="index.php?r=login" title="Đăng nhập">Đăng nhập</a></li>
				<li><a href="admin">đăng nhập quản trị</a></li>
			</ul>
		</div>
		<!-- end menu -->