<?php include"header.php";?>
<div class="page-wrapper">
                  <!-- Header -->
                  <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                  <form method="post" action="search_result">
                <div class="input-group">
                  
                  <input type="text"  name="category_name" id="search-input" class="form-control" placeholder="ابحث هنا"
                    autofocus autocomplete="off" />
                    <button type="submit" name="search" value="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>search
                  </button>
                    </form>
                </div>
              
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                 
                  <li class="dropdown notifications-menu" style="display:none">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="../../app/assets/admin/img/user/u5.jpg" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">Alfalahy Shyma</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="../../app/assets/admin/img/user/u5.jpg" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Alfalahy Shyma <small class="pt-1">alfalahysh.com</small>
                        </div>
                      </li>

                      
                      <li class="dropdown-footer">
                        <a href="admin_sess/end_sess"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>
    <div class="content-wrapper">
          <div class="content">							
              <div class="row">
								<div class="col-lg-8">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Add New Category</h2>
										</div>
										<div class="card-body">
											<form method="post" action="admin_cat/add">
				
												<div class="form-group">
													<label for="category_name">Category Name:</label>
													<input class="form-control" type="text" id="category_name" name="category_name">
												</div>
                                                <div class="form-group">
													<label for="category_name">Category english Name:</label>
													<input class="form-control" type="text" id="category_name" name="category_english_name">
												</div>
												
                                                 <div class="form-group">
													<label for="category_parent">status</label>
													<select class="form-control" name="category_is_active" id="category_is_active">
														<option value=1>active</option>
														<option value=0>no-active</option>
                           				</select>
                                                </div>
                                               <div class="form-group">
													<label for="category_parent">Parent</label>
													<select class="form-control" name="category_parent">
														<option value=0>Parent</option>
                                                          <?php
                                                      $rows=$data['categories_parent'];

                                                      foreach($rows as $row){
                                                         echo "
                                                         <option value=$row->category_id>$row->category_name</option>
                                                               ";
                                                        }
                                                    ?>
                                                 </select>
                                                   <input type="text" class="form-control"  placeholder="" name="date_added" hidden="hidden" readonly required value="<?php echo date('y-m-d'); ?>">
                                                      <input type="text"  value="<?php echo $_SESSION['id'];?>" name="admin_who_added" hidden="hidden" readonly required >
                                                </div>

                                                <div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Add Category</button>
													<a type="submit" class="btn btn-secondary btn-default" href="categories">Cancel</a>
                                                </div>
                                                
											</form>
										</div>
									</div>

									

									
												


        </div>

<?php include'footer.php';?>
