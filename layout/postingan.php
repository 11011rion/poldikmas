<div class="container">
	<div class="postingan">
		<div class="row no-gutsters">
			<div class="col border-right-dash">
				<h3><i class="fa fa-stop"></i> 	Berita</h3>

				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">

						<?php $y = 1; while($y<4){ ?>
						<div class="carousel-item <?php echo $y==1 ? 'active':''; ?>">

							<?php $x = 1; while($x<4){ ?>
								<div class="headline-beritanya <?php echo $x==3 ? 'no-border':''; ?>">
									<div class="row ">
										<div class="col-md-4">
											<img src="img/no-img.png" alt="" class="img-fluid img-thumbnail">
										</div>
										<div class="col-md-8">
											<div class="desc">
												<span class="tgl">12 September 2017</span>
												<a href="#">
												Lorem ipsum dolor sit inventore exercitationem in iure delectus doloremque?
												</a>
											</div>
										</div>
									</div>
								</div>
							<?php $x++; } ?>

						</div>
						<?php $y++; } ?>
				
					</div>
				</div>
				<div class="row control">
					<div class="col"><a href=""><i class="fa fa-eye"></i> Lihat Semua</a></div>
					<div class="col text-right">
						<a href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
						&nbsp;&nbsp;<a href="#carouselExampleIndicators" role="button" data-slide="next"><i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
				


			</div>
			<div class="col">

				<h3><i class="fa fa-stop"></i> 	Artikel</h3>

				<div id="xcarouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">

						<?php $y = 1; while($y<4){ ?>
						<div class="carousel-item <?php echo $y==1 ? 'active':''; ?>">

							<?php $x = 1; while($x<4){ ?>
								<div class="headline-beritanya <?php echo $x==3 ? 'no-border':''; ?>">
									<div class="row ">
										<div class="col-md-4">
											<img src="img/no-img.png" alt="" class="img-fluid img-thumbnail">
										</div>
										<div class="col-md-8">
											<div class="desc">
												<span class="tgl">12 September 2017</span>
												<a href="#">
												Lorem ipsum dolor sit inventore exercitationem in iure delectus doloremque?
												</a>
											</div>
										</div>
									</div>
								</div>
							<?php $x++; } ?>

						</div>
						<?php $y++; } ?>
				
					</div>
				</div>


				<div class="row control">
					<div class="col"><a href=""><i class="fa fa-eye"></i> Lihat Semua</a></div>
					<div class="col text-right">
						<a href="#xcarouselExampleIndicators" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
						&nbsp;&nbsp;<a href="#xcarouselExampleIndicators" role="button" data-slide="next"><i class="fa fa-chevron-right"></i></a>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>