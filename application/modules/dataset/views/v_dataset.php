<!-- Navber Area Start -->
<div class="navbar-area box-shadow" id="bg-white">
 <div class="plamb-responsive-nav">
     <div class="container">
         <div class="plamb-responsive-menu">
             <div class="logo">
                 <a href="index.html">
                     <img src="<?php echo base_url()?>assets/frontend2/img\common\logo.png" class="white-logo" alt="logo">
                     <img src="<?php echo base_url()?>assets/frontend2/img\common\logo.png" class="black-logo" alt="logo">
                 </a>
             </div>
         </div>
     </div>
 </div>
 <div class="plamb-nav">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.html">
                <img src="<?php echo base_url()?>assets/frontend2/img\common\logo-3.png" class="white-logo" alt="logo">
                <img src="<?php echo base_url()?>assets/frontend2/img\common\logo-3.png" class="black-logo" alt="logo">
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="<?php echo base_url()?>b_data" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="<?php echo base_url()?>dataset" class="nav-link">Data</a></li>
                    <!-- <li class="nav-item"> <a href="#!" class="nav-link">Dataset<i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="service.html" class="nav-link">BPS</a></li>
                            <li class="nav-item"><a href="service-2.html" class="nav-link">Sektoral</a></li>
                            <li class="nav-item"><a href="service-details.html" class="nav-link">Kecamatan</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item"> <a href="#!" class="nav-link">Publikasi</a></li>
                    <li class="nav-item"> <a href="#!" class="nav-link">Request Data</a></li>
                </ul>
                <div class="other-option"> <a class="btn btn-theme" href="contact.html">Login</a></div>
            </div>
        </nav>
    </div>
</div>
</div>
<!-- Navbar Area End -->

<section id="blog-main-area" class="py40">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="blog-wrapper-blog-item" >
              <div class="blog-wedget box-shadow">
                  <div class="blog-wedget-text">
                      <div class="blog-wedget-heading">
                          <h2><a href="blog-detail.html">Data Kabupaten Banyuwangi</a></h2>
                      </div>
                      <div class="blog-wedget-author">

                          <div class="blog-author-view">
                            <div class="project-details-sidebar">
                                <ul class="project-info-list">
                                    <li>
                                        <div class="project-infos-item">
                                            <a href="#!"><i class="icofont-book-alt"></i> Badan Pusat Statistik</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="project-infos-item">
                                          <a href="#!"><i class="icofont-book-alt"></i> Sektoral</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="project-infos-item">
                                          <a href="#!"><i class="icofont-book-alt"></i> Kecamatan</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                          </div>
                          <div class="blog-author-date">
                              <ul>
                                <!-- <li><a href="#!"><i class="icofont-eye-alt"></i> 68</a>
                                </li> -->

                              </ul>
                          </div>
                      </div>
                      <div class="blog-wedget-paragraph">
                          <p>kumpulan data Dalam kasus data tabular, kumpulan data sesuai dengan satu atau beberapa tabel database, di mana setiap kolom tabel mewakili variabel tertentu, dan setiap baris sesuai dengan rekaman tertentu dari kumpulan data yang dimaksud.
                          </p>
                      </div>
                  </div><br>

              </div>

          </div>

      </div>

    </div>
  </div>
</section>


    <section id="blog-main-area" >
        <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-12 col-sm-12 col-12" style="padding-bottom: 20px;">
              	<div class="check-heading">
              		<h5>Filter Kategori</h5>
              	</div>
              	<div class="left-head-blog right-side">
              		<div class="box-shadow">
              			<div class="form-group">
              				<!-- <label for="city">State/City</label> -->
              				<select class="form-control first_null" id="city">
              					<option value="">Kategori</option>
              					<option value="AX">Badan Pusat Statistik</option>
              					<option value="AF">Sektoral</option>
              					<option value="AF">Kecamatan</option>
              				</select>
              			</div>
              		</div>
              	</div>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12 col-12" style="padding-bottom: 20px;">
            	<div class="check-heading">
            		<h5>Filter Urusan</h5>
            	</div>
            	<div class="left-head-blog right-side">
            		<div class="box-shadow">
            			<div class="form-group">
            				<!-- <label for="zip">State/City</label> -->
            				<select class="form-control first_null" id="city">
            					<option value="">Urusan</option>
            					<option value="AX">Pendidikan</option>
            					<option value="AF">Kesehatan</option>
            					<option value="AF">Kependudukan</option>
            				</select>
            			</div>
            		</div>
            	</div>
            </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-12" style="padding-bottom: 20px;">
                <div class="check-heading">
                  <h5>Pencarian Data</h5>
                </div>
                  <div class="left-head-blog right-side">
                      <div class="box-shadow">
                        <div class="cta-search-area">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari Indikator">
                                <div class="input-group-append">
                                    <button class="btn btn-cta" type="button"><i class="fa fa-search"></i>
                                        Cari Data
                                    </button>
                                </div>
                            </div>
                        </div>
                          <!-- <form action="#">
                              <div class="blog-search-option">
                                  <input type="text" placeholder="Cari Data">
                                  <button class="button" type="submit"> <i class="fa fa-search"></i>
                                  </button>
                              </div>
                          </form> -->
                      </div>
                  </div>
                </div>
            </div>


                	<div class="blog-wedget box-shadow">
                			<div class="blog-wedget-text">
                				<div class="blog-wedget-heading">
                          <div class="media-body">
                            <div class="media-header" style="padding-bottom: 4px;">
                                <div class="media-name">
                                      <h4><a href="<?php echo base_url() ?>dataset/dtl_i">Angka Parsitipasi Kasar PAUD</a></h4>
                                </div>
                            </div>
                        </div>
                				</div>
                				<div class="blog-wedget-author">
                					<div class="blog-author-view">
                						<ul style="padding-top: 5px;">
                							<li> <a href="#!"><i class="icofont-book-alt"></i> Pendidikan</a>
                							</li>
                							<li><a href="#!"><i class="icofont-building-alt"></i> Dinas Pendidikan</a>
                							</li>
                							<li><a href="#!"><i class="icofont-eye-alt"></i> Dilihat 108</a>
                							</li>
                              <li><a href="#"><i class="icofont-calendar"></i> 14 juli 2020</a>
                              </li>
                						</ul>
                					</div>
                					<div class="blog-author-date">
                						<ul>
                                <button class="btn btn-theme btn-shop" data-toggle="modal" data-target="#exampleModalCenter">Preview Data</button>
                						</ul>
                					</div>
                				</div>
                			</div>
                		</div>
                	<div class="blog-wedget box-shadow">
                  		<div class="blog-wedget-text">
                  			<div class="blog-wedget-heading">
                          <div class="media-body">
                            <div class="media-header" style="padding-bottom: 4px;">
                                <div class="media-name">
                                      <h4><a href="<?php echo base_url() ?>dataset/dtl_v">Jumlah Sekolah Dasar</a></h4>
                                </div>
                            </div>
                        </div>
                  			</div>
                  			<div class="blog-wedget-author">
                  				<div class="blog-author-view">
                  					<ul style="padding-top: 4px;">
                  						<li><a href="#!"><i class="icofont-book-alt"></i> Pendidikan</a>
                  						</li>
                  						<li><a href="#!"><i class="icofont-building-alt"></i> Dinas Pendidikan</a>
                  						</li>
                  						<li><a href="#!"><i class="icofont-eye-alt"></i> Dilihat 68</a>
                  						</li>
                              <li><a href="#"><i class="icofont-calendar"></i> 14 Maret 2020</a>
                              </li>
                  					</ul>
                  				</div>
                  				<div class="blog-author-date">
                  					<ul>
                                  <button class="btn btn-theme btn-shop">Preview Data</button>
                  					</ul>
                  				</div>
                  			</div>
                     </div>
                	</div>

                	<!-- pagination start -->
                	<div class="blog-pagination d-flex justify-content-center text-center">
                		<div class="wrapper blog-wrapper">
                			<p id="pagination-here">
                				<ul class="pagination bootpag">
                					<li data-lp="1" class="prev"><a href="#result-page-1">PREV</a>
                					</li>
                					<li data-lp="1" class=""><a href="#result-page-1">1</a>
                					</li>
                					<li data-lp="2" class="active"><a href="#result-page-2">2</a>
                					</li>
                					<li data-lp="3"><a href="#result-page-3">3</a>
                					</li>
                					<li data-lp="4"><a href="#result-page-4">4</a>
                					</li>
                					<li data-lp="5" class="next"><a href="#result-page-5">NEXT</a>
                					</li>
                				</ul>
                			</p>
                		</div>
                	</div>
                	<!-- pagination end -->

        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-wedget">
                        <h3>Contact Us</h3>
                        <ul>
                            <li>
                                <i class="icofont-location-pin"></i> 205 Auburn Street, New York
                            </li>
                            <li>
                                <i class="icofont-phone"></i><a href="#!">+1 (123) 456-7890</a>
                            </li>
                            <li>
                                <i class="icofont-email"></i> <a href="#!">info@yourcompany.com</a>
                            </li>
                        </ul>
                    </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
