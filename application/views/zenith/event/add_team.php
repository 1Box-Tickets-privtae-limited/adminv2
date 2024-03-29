<?php  $this->load->view(THEME.'common/header'); ?>
<?php   $tab = @$_GET['tab'] ?  $_GET['tab'] :"home";; ?>
<div id="overlay" style="display: none;">
<div id="loader">
<!-- Add your loading spinner HTML or image here -->
<img src="<?php echo base_url(); ?>assets/zenith_assets/img/loading.gif" alt="loader">
</div>
</div>
<style type="text/css">
    
    #overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
    }


</style>
<!-- Begin main content -->
<div class="main-content">
      <!-- content -->
      <div class="page-content">
        <!-- page header -->
        <div class="page-title-box tick_details">
          <div class="container-fluid">
            <div class="row">
               <div class="col-sm-8">
                  <h5 class="card-title">Add or Edit <?php echo ucfirst($segment); ?></h5>
               </div>
             <!--   <div class="col-sm-4">
                  <div class="float-sm-right mt-2 mt-sm-0 ml-sm-1 mx-sm-2">
                     <a href="#" data-toggle="modal" data-target="#add-board-modal" class="btn btn-primary mb-2">BACK</a>
                        <a href="#" data-toggle="modal" data-target="#add-general-task-modal" class="btn btn-success mb-2 ml-2">SAVE</a>
                  </div>
               </div> -->
            </div>
          </div>
        </div>
        <!-- page content -->
         <div class="page-content-wrapper mt--45 box-details">
          <div class="container-fluid">
            <div class="card">
               <div class="card-body">            
                  <div class="row">
                     <div class="col-lg-12">
                        <ul class="nav nav-tabs nav-bordered">
                            <li class="nav-item">
                              <a href="#home-b1" data-id="home" data-toggle="tab" aria-expanded="false" class="nav-link <?php echo $tab=="home" ? "active" : ""  ;?>">
                                Add or Edit <?php echo ucfirst($segment); ?>
                              </a>
                            </li>
                            <?php if (isset($teams->id)) { ?>
                            <?php
                            if($this->session->userdata('role') == 7 || $this->session->userdata('role') == 6 || $this->session->userdata('role') == 9 || $this->session->userdata('role') == 13 ){?>
                            <li class="nav-item">
                              <a href="#profile-b1" data-id="seo-content"  data-toggle="tab" aria-expanded="true" class="nav-link <?php echo $tab=="seo-content" ? "active" : ""  ;?> ">
                                SEO Content
                              </a>
                            </li>
                            <?php } ?>
                        <?php } ?>
                         <?php if (isset($teams->id)) { ?>
                            <?php
                            if($this->session->userdata('role') == 7 || $this->session->userdata('role') == 6 || $this->session->userdata('role') == 9 || $this->session->userdata('role') == 13 ){?>
                            <li class="nav-item">
                              <a href="#page-b1"  data-id="content"  data-toggle="tab" aria-expanded="true" class="nav-link  <?php echo $tab=="content" ? "active" : ""  ;?>">
                                On Page Content
                              </a>
                            </li>
                            <?php } ?>
                        <?php } ?>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane show <?php echo $tab=="home" ? "active" : ""  ;?>" id="home-b1">
                            <form id="add-team-form" enctype='multipart/form-data' method="post" class="<?php echo (isset($teams->id)) ? 'validate_form_edit' : 'validate_form_v1' ;?> login-wrapper" action="<?php echo base_url().'settings/teams/save_team/'.$segment; ?>">
                             <input type="hidden" name="teamId" value="<?php if (isset($teams->id)) {
                                             echo $teams->id;
                                             } ?>">
                              <div class="team_info_details mt-3">
                                <h5 class="card-title"><?php echo ucfirst($segment); ?> Info</h5>
                                <p>Fill the following <?php echo ucfirst($segment); ?> information</p>
                              </div>
                              <div class="row">
                                <div class="col-8">
                                  <div class="card">
                                      <div class="row column_modified">
                                       <div class="col-lg-4">
                                          <div class="form-group">
                                               <label for="teamname"><?php echo ucfirst($segment); ?> Name <span class="text-danger">*</span></label>
                                           <input required type="text" name="teamname" id="teamname" class="form-control" placeholder="Enter Team Name" value="<?php  if (isset($teams->team)) { echo $teams->team; } ?>">
                                          </div> 
                                       </div>
                                       <?php if($segment=="teams") { ?>
                                       <div class="col-lg-4">
                                          <div class="form-group">
                                              <label for="example-select">Event Category <span class="text-danger">*</span></label>
                                                 <select class="custom-select" id="gamecategory" name="gamecategory" required>
                                                      <option value="">Select Category</option>
                                                      <?php foreach ($gcategory as $category) { ?>
                                                            <option value="<?php echo $category->id; ?>" <?php if (isset($teams->category)) {
                                                               if ($teams->category == $category->id) {
                                                                  echo ' selected  ';
                                                               }
                                                               } ?>><?php echo $category->category_name; ?></option>
                                                            <?php
                                                               } ?>                                                        
                                                 </select>
                                          </div> 
                                       </div> 
                                       <?php } else { ?>
                                        <input type="hidden" value="4" name ="gamecategory">
                                        <!-- <div class="col-lg-4">
                                          <div class="form-group">
                                              <label for="example-select">Event Category <span class="text-danger"></span></label>
                                                 <select class="custom-select" id="" name="" required disabled>
                                                      <option value="4" selected="selected" >Other Events</option>
                                                 </select>
                                                
                                          </div> 
                                       </div>  -->
                                       <?php }  ?>
                            <?php if($segment!="artists") { ?>
                                       <div class="col-lg-4">
                                          <div class="form-group">
                                              <label for="stadium">Default Stadium</label>
                                              <select class="custom-select" name="stadium" id="stadium" >
                                                <option value="">Select Stadium</option>
                                                <?php foreach($stadiums as $stadium){
                                                                $stadium_name = $stadium->stadium_name;
                                                                if($stadium->stadium_variant != ''){
                                                                    $stadium_name = $stadium->stadium_name.'-'.$stadium->stadium_variant;
                                                                }
                                                              ?>
                                                            <option <?php if($teams->stadium == $stadium->s_id){?> selected <?php } ?> value="<?php echo $stadium->s_id;?>"><?php echo $stadium_name.' - '.$stadium->s_id;?></option>
                                                            <?php } ?>
                                              </select>
                                          </div> 
                                       </div>
                                   
                                       <div class="col-lg-4">
                                          <div class="form-group">
                                              <label for="country">Country</label>
                                               <select class="custom-select" id="country" name="country" onchange="get_state_city(this.value);" >
                                                            <option value="">Select Country</option>
                                                              <?php foreach($countries as $country){ ?>
                                                            <option <?php if($teams->country == $country->id){?> selected <?php } ?> value="<?php echo $country->id;?>"><?php echo $country->name;?></option>
                                                            <?php } ?>
                                                        </select> 
                                          </div> 
                                       </div> 
                                       <div class="col-lg-4">
                                          <div class="form-group">
                                              <label for="city">City</label>
                                               <?php $cityArray = $this->General_Model->get_state_cities($teams->country);
                                                    ?>                                                
                                                 <select class="custom-select" id="city" name="city" >
                                                            <option value="">Select City</option>
                                                            <?php

                                                                
                                                                foreach ($cityArray as $cityArr) {
                                                                    ?>
                                                                    <option value="<?= $cityArr->id; ?>" <?php
                                                                    if ($teams->city): if ($teams->city == $cityArr->id) {
                                                                            echo 'selected';
                                                                        } endif;
                                                                    ?>><?= $cityArr->name; ?></option>
                                                                            <?php
                                                                        }
                                                                ?>
                                                        </select> 
                                          </div> 
                                       </div>
                               <?php   } ?>
                               
                                       <div class="col-lg-4">
                                          <div class="form-group">
                                           <label for="simpleinput"><?php echo ucfirst($segment); ?> Color <span class="text-danger">*</span></label>
                                           <input type="color" name="teamcolor" id="teamcolor" class="form-control" placeholder="Select Team Color" value="<?php if (isset($teams->team_color)) {
                                                      echo $teams->team_color;
                                                      } ?>" required>
                                          </div>
                                       </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="example-select"><?php echo ucfirst($segment); ?> Image(40*40)</label>
                                                <div class="prev_back_img">
                                                  <label class="custom-upload mb-0"><input type="hidden" name="exs_file" value="<?php if (isset($teams->teamImg)) {
                                                echo $teams->teamImg;
                                                } ?>"><input type="file"  class="form-control-file input"  name="team_image" id="team_image" value=""  onchange="loadFiles(event,'team_img_file')"> Upload JPEG File</label>
                                                  <p>Previous <?php echo ucfirst($segment); ?> Image</p>
                                                  <a id="team_img_file_link" target="_blank" href="javascript:void(0);" onclick="return popitup('<?php if (isset($teams->teamImg)) {
                                                echo UPLOAD_PATH.'uploads/teams/'.$teams->teamImg;
                                                } ?>')" class="view_bg">
                                                <img width="30" height="30" src="<?php if (isset($teams->teamImg)) {
                                                echo UPLOAD_PATH.'uploads/teams/'.$teams->teamImg;
                                                }else { echo UPLOAD_PATH.'uploads/general_settings/no-image.png';} ?>" id="team_img_file">
                                            </a>
                                                </div>
                                            </div> 
                                         </div>

                                         <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="example-select">Background Image</label>
                                                <div class="prev_back_img">
                                                  <label class="custom-upload mb-0"> <input type="hidden" name="exs_filebg" value="<?php if (isset($teams->teambgImg)) {
                                                echo $teams->teambgImg;
                                                } ?>"><input type="file"  class="form-control-file input"  name="team_bg" id="team_bg" value=""  onchange="loadFiles(event,'team_bg_file')">Upload JPEG File</label>
                                                  <p>Previous Background Image</p>
                                                   <a id="team_bg_file_link" target="_blank" href="javascript:void(0);" onclick="return popitup('<?php if (isset($teams->teamImg)) {
                                                echo UPLOAD_PATH.'uploads/background/'.$teams->teambgImg;
                                                } ?>')" class="view_bg">
                                                <img width="30" height="30" src="<?php if (isset($teams->teambgImg)) {
                                                echo UPLOAD_PATH.'uploads/background/'.$teams->teambgImg;
                                                }else { echo UPLOAD_PATH.'uploads/general_settings/no-image.png';} ?>" id="team_bg_file">
                                            </a>
                                                </div>
                                            </div> 
                                         </div>

                                    
                                      <div class="col-lg-12">
                                          <div class="form-group">
                                           <label for="simpleinput">Url <span class="text-danger">*</span></label>
                                           <input type="text" name="url_key" id="team_url_key" class="form-control" placeholder="Url Key" value="<?php if (isset($teams->url_key)) {
                                                      echo $teams->url_key;
                                                      } ?>" required>
                                          </div>
                                       </div>


                                       
                                       
                                        
                                    </div> <!-- end col -->
                                  </div> <!-- end card -->
                                </div><!-- end col -->
                                <div class="col-4">
                                   <div class="card">
                                    <div class="row column_modified">
                                       <div class="col-lg-12">
                                          <div class="data_edit">
                                             <table style="width: 100%;">
                                                <tr>
                                                   <td><label for="sellers" class="mb-0">Status</label></td>
                                                   <td>
                                                      <div class="form-group mb-1 cust-switch">
                                                         Inactive / Active
                                                         <div class="custom-control custom-switch">
                                                            <input type="checkbox" id="status" class="custom-control-input is-switch" name="is_active" value="1" <?php 
                                                            if ($teams->status == '1' || $teams->status == "" ) { ?> checked <?php }
                                                            ?>>
                                                            <label class="custom-control-label" for="status"></label>
                                                         
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>

                                        <?php  if($segment=="teams"){ ?>

                                                <tr>
                                                   <td> <label for="sellers" class="mb-0">Top <?php echo ucfirst($segment); ?></label></td>
                                                   <td>
                                                      <div class="form-group mb-1 cust-switch">
                                                         No / Yes
                                                         <div class="custom-control custom-switch">
                                                            <input type="checkbox" id="popular_team" class="is-switch custom-control-input" name="topteam" value="1" <?php if (isset($teams->popular_team)) {
                                                            if ($teams->popular_team == '1') { ?> checked <?php }
                                                            } ?> >
                                                            <label class="custom-control-label" for="popular_team"></label>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <?php } ?>
                                                <tr>
                                                   <td> <label for="header_footer" class="mb-0">Show In Header / Footer </label></td>
                                                   <td>
                                                      <div class="form-group mb-1 cust-switch">
                                                         No / Yes
                                                         <div class="custom-control custom-switch">
                                                            <input type="checkbox" id="header_footer" class="is-switch custom-control-input" name="header_footer" value="1" <?php if (isset($teams->header_top_teams)) {
                                                            if ($teams->header_top_teams == '1') { ?> checked <?php }
                                                            } ?> >
                                                            <label class="custom-control-label" for="header_footer"></label>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <?php  if($segment=="teams"){ ?>
                                                <tr>
                                                   <td> <label for="header_footer" class="mb-0">Show <?php echo ucfirst($segment); ?></label></td>
                                                   <td>
                                                      <div class="form-group mb-1 cust-switch">
                                                         No / Yes
                                                         <div class="custom-control custom-switch">
                                                            <input type="checkbox" id="show_status" class="is-switch custom-control-input" name="show_status" value="1" <?php
                                                            if ($teams->show_status == '1' || $teams->show_status == '' ) { ?> checked <?php }
                                                            ?> >
                                                            <label class="custom-control-label" for="show_status"></label>
                                                         </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                          <?php } ?>

                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                </div>
                               
                              </div>
                              <!-- end row -->
                              <div class="clearfix"></div>

                              
                              
                              <!-- end row -->
                              <div class="tick_details border-top">
                                 <div class="row">
                                    <div class="col-sm-8">
                                       <!-- <h5 class="card-title">Matches</h5> -->
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="float-sm-right mt-2 mt-sm-0 ml-sm-1 mx-sm-2">
                                        <?php 
                                          if($segment=="teams")
                                              $seg="untrashed";
                                          else if($segment=="artist")
                                              $seg="artist";
                                        ?>
                                          <a href="<?php echo base_url() . 'settings/teams/'.$seg;?>" class="btn btn-primary mb-2 mt-3">Back</a>
                                             <button type="submit" class="btn btn-success mb-2 ml-2 mt-3">Save</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                          </form>
                           </div>
                           <div class="tab-pane <?php echo $tab=="seo-content" ? "active" : ""  ;?>" id="profile-b1">
                            <form id="add-team-form-content-1" enctype='multipart/form-data' method="post" class="<?php echo (isset($teams->id)) ? 'validate_edit_v2' : 'validate_form_v2' ;?>   login-wrapper" action="<?php echo base_url().'settings/teams/save_team_content/'.$segment; ?>">
                             <input type="hidden" name="teamId" value="<?php if (isset($teams->id)) {
                                             echo $teams->id;
                                             } ?>">
                              <div class="row">
                                <div class="col-12">
                                  <div class="card">
                                    <div class="">
                                      <h5 class="card-title">Team Content Info</h5>
                                      <p>Fill the Team Content Information</p>
                                    </div>
                                    <div class="">
                                       <div class="row column_modified">
                                        <?php //echo "<pre>";print_r($teams);?>

                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                 <label for="simpleinput">Team Name <span class="text-danger">*</span></label>
                                                   <input type="text" id="" name="seo_team_name" readonly  class="form-control" placeholder="Enter Team "  value="<?php if (isset($teams->team_name)) { echo $teams->team_name;} ?>" required>
                                               </div>
                                          </div>


                                          <div class="col-lg-6">
                                             <div class="form-group">
                                                 <label for="simpleinput">Meta Title <span class="text-danger">*</span></label>
                                                   <input type="text" id="pagetitle" name="pagetitle" class="form-control" placeholder="Enter Meta Title"  value="<?php if (isset($teams_lang->page_title)) {
                                 echo $teams_lang->page_title;
                                 } ?>" required>
                                               </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                 <label for="example-textarea">Meta Description</label>
                                                  <textarea class="form-control height_auto" rows="4" placeholder="Meta Description" name="metadescription" ><?php if (isset($teams_lang->meta_description)) {
                                 echo $teams_lang->meta_description;
                                 } ?></textarea>
                                               </div>
                                          </div> 
                             
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                 <label for="simpleinput">Seo Keywords</label>
                                                 <input type="text" id="choices-text-remove-button" class="form-control" placeholder="Enter Seo Keywords" value="<?php echo $teams->seo_keywords;?>" name="seo_keywords">
                                               </div>
                                          </div> 
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                 <label for="simpleinput">Search Keywords</label>
                                                 <input type="text" id="search_keywords"  class="form-control" placeholder="Enter Search Keywords" value="<?php echo $teams->search_keywords;?>" name="search_keywords">
                                               </div>
                                          </div> 
                                           <div class="col-lg-12">
                                             <div class="form-group">
                                                 <label for="simpleinput">Team URL Key <span class="text-danger">*</span></label>
                                                 <input type="text" id="url_key" class="form-control" placeholder="Enter Team URL Key" value="<?php echo $teams->url_key;?>" name="url_key" required>
                                               </div>
                                          </div> 
                                          <div class="col-lg-12">
                                        <!-- end row -->
                              <div class="tick_details border-top">
                                 <div class="row">
                                    <div class="col-sm-8">
                                       <!-- <h5 class="card-title">Matches</h5> -->
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="float-sm-right mt-2 mt-sm-0 ml-sm-1 mx-sm-2">
                                          <a href="<?php echo base_url() . 'settings/teams/'.$seg;?>" class="btn btn-primary mb-2 mt-3">Back</a>
                                             <button type="submit" class="btn btn-success mb-2 ml-2 mt-3">Save</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                                          </div>                     
                                       </div> <!-- end col -->

                                    </div> <!-- end card-body -->
                                  </div> <!-- end card -->
                                </div><!-- end col -->
                              </div>
                          </form>
                           </div>
                           <div class="tab-pane <?php echo $tab=="content" ? "active" : ""  ;?>" id="page-b1">
                            <form id="onpage-content" enctype='multipart/form-data' method="post" class=" login-wrapper" action="<?php echo base_url().'settings/teams/save_team_onpage_content/'.$segment; ?>">
                           
                             <input type="hidden" name="teamId" value="<?php if (isset($teams->id)) {
                                             echo $teams->id;
                                             } ?>">
                              <div class="row">
                                <div class="col-12">
                                  <div class="card">
                                    <div class="">
                                      <h5 class="card-title">Page Content</h5>
                                      <p>Fill the Page Content Information</p>
                                    </div>
                                    <div class="">
                                       <div class="row">
                                       
                                         
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                 <label for="example-textarea">Content 1</label>
<textarea id="editor1" name="page_content_1" required><?php echo trim($teams_lang->page_content_1); ?></textarea>

                                               </div>
                                          </div>
                                           <div class="col-lg-12">
                                             <div class="form-group">
                                                 <label for="example-textarea">Content 2</label>
<textarea id="editor2" name="page_content_2" required><?php echo trim($teams_lang->page_content_2); ?></textarea>

                                               </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                 <label for="example-textarea">Content 3</label>
<textarea id="editor3" name="page_content_3" required><?php echo trim($teams_lang->page_content_3); ?></textarea>

                                               </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="form-group">
                                                 <label for="example-textarea">Content 4</label>
<textarea id="editor-4" name="page_content_4" required><?php echo trim($teams_lang->page_content_4); ?></textarea>

                                               </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="tick_details border-top">
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <!-- <h5 class="card-title">Matches</h5> -->
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="float-sm-right mt-2 mt-sm-0 ml-sm-1 mx-sm-2">
                                                      <a href="<?php echo base_url() . 'settings/teams/'.$seg;?>" class="btn btn-primary mb-2 mt-3">Back</a>
                                                         <button type="submit" class="btn btn-success mb-2 ml-2 mt-3">Save</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          </div>                     
                                       </div> <!-- end col -->

                                    </div> <!-- end card-body -->
                                  </div> <!-- end card -->
                                </div><!-- end col -->
                              </div>
                          </form>
                           </div>
                        </div>
                     </div> 
                  </div>
               </div>
            </div>
            <div class="edit_modal_popup">
               <!-- <div class="button-list">
                   <button type="button" class="btn btn-info edit_ticket_btn">Edit Ticket Type</button>

                        <button type="button" class="btn btn-info edit_clone_info">Clone</button>
               </div> -->
                  <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog"
                      aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <!-- <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4> -->
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          </div>
                          <div class="modal-body">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="section_left" id="content_1">
                                <div class="team_name">
                                   <h3>Portugal vs Ghana-Football World Cup - Qatar 2022</h3>
                                   <p>Thursday, 24 November 2022 </p>
                                   <p><span>Stadium 974, Doha, Qatar</span></p>
                                 </div>
                                <div class="ticket_status">
                                    <div class="row">
                                      <div class="col-md-4"> 
                                        <label>Available Tickets <span>*</span></label>
                                        <div class="input-group">
                                          <input type="text" class="form-control" placeholder="" aria-label="Available Tickets" aria-describedby="basic-addon2">
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <label>Ticket Seperation</label>
                                        <select class="custom-select">
                                          <option selected="">Category 3</option>
                                          <option value="1">Category 4</option>
                                          <option value="2">Category 5</option>
                                          <option value="3">Category 6</option>
                                        </select>
                                      </div>
                                      <div class="col-md-4">
                                        <label>Quantity Sold</label>
                                        <div class="input-group">
                                          <input type="text" class="form-control" placeholder="0" aria-label="Available Tickets" aria-describedby="basic-addon2">
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="section">
                                   <div class="row">
                                     <div class="col-md-4">
                                       <label>Category <span>*</span></label>
                                        <select class="custom-select">
                                          <option selected="">Category 3</option>
                                          <option value="1">Category 4</option>
                                          <option value="2">Category 5</option>
                                          <option value="3">Category 6</option>
                                        </select>
                                     </div>
                                     <div class="col-md-4">
                                       <label>Block</label>
                                        <select class="custom-select">
                                          <option selected="">Category 3</option>
                                          <option value="1">Category 4</option>
                                          <option value="2">Category 5</option>
                                          <option value="3">Category 6</option>
                                        </select>
                                     </div>
                                     <div class="col-md-4">
                                       <label>Row</label>
                                      <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Available Tickets" aria-describedby="basic-addon2">
                                      </div>
                                     </div>
                                   </div>
                                </div>
                                <div class="away_section">
                                   <div class="row">
                                     <div class="col-md-6">
                                       <label>Home or Away Section? <span>*</span></label>
                                         <select class="custom-select">
                                          <option selected="">Category 3</option>
                                          <option value="1">Category 4</option>
                                          <option value="2">Category 5</option>
                                          <option value="3">Category 6</option>
                                        </select>
                                     </div>
                                     <div class="col-md-6">
                                       <label>Seats</label>
                                       <div class="input-group_new row">
                                        <div class="col-md-5">
                                          <div class="input-group">
                                          <input type="text" class="form-control" placeholder="" aria-label="Available Tickets" aria-describedby="basic-addon2">
                                        </div>
                                        </div>
                                        <div class="col-md-2"><div class="seperate_to">To</div></div>
                                        <div class="col-md-5">
                                          <div class="input-group">
                                          <input type="text" class="form-control" placeholder="" aria-label="Available Tickets" aria-describedby="basic-addon2">
                                        </div>
                                        </div>
                                     </div>
                                   </div>
                                  </div>
                                </div>
                                <div class="price">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Website Price <span>*</span></label>
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1"><img src="assets/images/pound.svg"></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="900" aria-label="" aria-describedby="basic-addon1">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Proceeds <span>*</span></label>
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1"><img src="assets/images/pound.svg"></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="900" aria-label="" aria-describedby="basic-addon1">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Currency</label>
                                      <select class="custom-select">
                                          <option selected="">Category 3</option>
                                          <option value="1">Category 4</option>
                                          <option value="2">Category 5</option>
                                          <option value="3">Category 6</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="select_restrictions">
                                  <div class="row">
                                    <div class="col-md-12">
                                      
                                      <div id="general2" class="custom-accordion">
                                         <div class="card shadow-none mb-3">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="true"
                                              aria-controls="collapseSix">
                                              <div class="card-header py-3" id="headingSix">
                                                <h6 class="mb-0">Select Restrictions on Use <span>*</span>
                                                  <i class="mdi mdi-chevron-up float-right toggle-icon fs-sm"></i>
                                                </h6>
                                              </div>
                                            </a>

                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#general2">
                                  <div class="card-body">
                                    <div class="select_option">
                                       <p><i class="fas fa-info-circle"></i> If any of the following conditions apply to your tickets, please select them from the list below. If there is a restriction on the use of your ticket not shown here, please stop listing and contact us</p>
                                          <ul>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Cocession Ticket Senior Sitizen</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> 21 And Over Ticket</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Under 21 Ticket</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Over 18 Ticket</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Under 18 Ticket</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Under 15s accompanied by An Adult</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> No under 14s</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Meet Up With Seller</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Wheelchair User Only</li>
                                          </ul>
                                        </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card shadow-none mb-3">
                                <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="true"
                                  aria-controls="collapseSeven">
                                  <div class="card-header py-3" id="headingSeven">
                                    <h6 class="mb-0">Listing Notes
                                      <i class="mdi mdi-chevron-up float-right toggle-icon fs-sm"></i>
                                    </h6>
                                  </div>
                                </a>

                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#general2">
                                  <div class="card-body">
                                    <div class="select_option">
                                          <!-- <h6>Listing Notes</h6> -->
                                          <ul>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Limited Or Restricted View</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Access To VIP Lounge</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Side Or Rear View</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Ticket with meal</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Restricted Leg Room</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Includes VIP Pass</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Standing only</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Includes Unlimited Food & Drinks <br>(Beer, Wine & Soft Drinks)</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Aisle Seat</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Tickets Seated In Pairs</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Includes Parking</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Up to Four Seats Together</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Alcohol Free Area</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Tickets Not Seated Together</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Sponsor / Federation Tickets</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Screenshot</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> All Tickets Seated Together</li>
                                            <li><input class="tdcheckbox " type="checkbox" name=""> Match Day Delivery</li>
                                          </ul>
                                        </div>
                                  </div>
                                </div>
                              </div>
                                      </div>
                                      </div>
                                      <!-- <input class="tdcheckbox " type="checkbox" name="">Cocession Ticket Child -->

                                      <div class="col-md-12">
                                        <div class="clone_btn">
                                          <button type="button" class="btn btn-primary">Clone</button>
                                          <button type="button" class="btn btn-outline-danger">Delete</button>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="section_right">
                                <div class="publish_sec">
                                  <div class="content">
                                      <div class="custom-control custom-switch">
                                                              <input type="checkbox" class="custom-control-input" id="customSwitch35">
                                                              <label class="custom-control-label" for="customSwitch35"><span class="align">Publish</span></label>
                                                            </div>
                                  </div>

                                </div>
                                <div class="active_listing">
                                  <input class="tdcheckbox" type="checkbox" name=""> <span class="align">Active listing</span>
                                </div>
                                <div class="ticket_type">
                                  <h6>Ticket Type</h6>
                                  <p>Mobile Ticket Transfer</p>
                                  <a href="">Change</a>
                                </div>
                                <div class="listing_id">
                                  <h6>Listing ID</h6>
                                  <p>5099203512</p>
                                </div>
                                <!-- <div class="contact_link">
                                  <a href="">Contact Us</a> | <a href="">Report Event Issue</a>
                                </div> -->
                                <div class="btn_save">
                                  <button type="button" class="btn btn-primary">Save</button>
                                  <button type="button" class="btn btn-cancel">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>
                           </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->


                  <div class="modal fade" id="clone-example-modal-lg" tabindex="-1" role="dialog"
                      aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <!-- <h4 class="modal-title" id="myLargeModalLabel">Clone</h4> -->
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          </div>
                          <div class="modal-body clone-listing">
            <h4 class="clone-title fs-20">Clone Listing</h4>
            <p class="fs-16 mt-3"><i class="fas fa-info-circle"></i> By cloning this listing you are confirming that all information provided about the listings you want to create, except the fields you explicitly change, are the same.</p>
            <h3 class="clone-match-title fs-20 mt-4">Cheeron Alix</h3>
            <p class="clone-match-date fs-17">12345678 </p>
            <!-- <p class="clone-match-stadium fs-16" >Stadium 974, Doha, Qatar</p> -->
            <div class="clone-listing-table-div">
              <table class="table  table-borderless clone-listing-table">
                  <tr>
                    <td class="w-20">Ticket Type</td>
                    <td class="w-20">Category</td>
                    <td class="w-10">Block</td>
                    <td>Row</td>
                    <td class="w-20">Split type</td>
                    <td>Qty</td>
                    <td>Price</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  <tr id="clone-listing-table-tr">
                    <td>
                        <select name="" class="form-control custom-select">
                           <option value="">E-Tickets</option>
                           <option value="">E-Tickets</option>
                           <option value="">E-Tickets</option>
                           <option value="">E-Tickets</option>
                           <option value="">E-Tickets</option>
                        </select>
                     </td>
                    <td>
                        <select name="" class="form-control custom-select">
                           <option value="">Shortside Upper Tier</option>
                           <option value="">Category 3</option>
                           <option value="">Category 3</option>
                           <option value="">Category 3</option>
                           <option value="">Category 3</option>
                        </select>
                     </td>
                    <td>
                        <select name="" class="form-control custom-select">
                           <option value="">Any</option>
                           <option value="">Category 3</option>
                           <option value="">Category 3</option>
                           <option value="">Category 3</option>
                           <option value="">Category 3</option>
                        </select>
                     </td>
                    <td><input type="text" name="" class="form-control"></td>
                    <td>
                        <select name="" class="form-control custom-select">
                           <option value="">No Preference</option>
                           <option value="">Category 3</option>
                           <option value="">Category 3</option>
                           <option value="">Category 3</option>
                           <option value="">Category 3</option>
                        </select>
                     </td>
                    <td><input type="text" name="" class="form-control" placeholder="6"></td>
                    <td><input type="text" name="" class="form-control" placeholder="349.95"></td>
                    <td><a href="javascript:void(0)" class="td_close" style="display: none;"><i class="fas fa-times-circle"></i></a></td>
                    <!-- <td><a href="javascript:void(0)" class="btn clone-plus-btn fs-16"><i class="fas fa-plus"></i></a><a href="javascript:void(0)" class="td_close" style="display: none;"><i class="fas fa-times-circle"></i></a></td> -->
                  </tr>

              </table>
            </div>
            <p><div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label fs-12" for="customCheck1">I agree to List my Ticket’s <a href="">Terms and Conditions</a>. I confirm I own these tickets or have the right to be issued these tickets. If you are unable to deliver the correct tickets, List my Ticket reserves the right to charge you the cost of replacing the tickets for your buyer.</label>
              </div></p>
              <div class="row">
                <div class="col-lg-6">
                  <a href="javascript:void(0)" class="btn clone-listing-btn fs-16"><i class="fas fa-plus"></i> Add Another Clone</a>
                </div>
                <div class="col-lg-6">
                  <p class="text-right">
                    <a href="" class="btn clone-listing-save-btn fs-16"> Save</a>
                    <a href="" class="btn clone-listing-cancel-btn fs-16" data-dismiss="modal"> Cancel</a>
                  </p>
                </div>
              </div>
          </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
            </div>
          </div>
        </div>
      </div>
      <!-- main content End -->
<?php  $this->load->view(THEME.'common/footer'); ?>
<script>

     function popitup(url,temp='')
   {

      newwindow=window.open(url,'name','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,,height=500,width=700');

      if (window.focus) {newwindow.focus()}
      return false;
   }


 var loadFiles = function(event,team_bg_file) {

  var formData = new FormData();
formData.append('file', event.target.files[0]);

$.ajax({
       url : "<?php echo base_url();?>event/upload_files",
       type : 'POST',
       data : formData,
       processData: false,  // tell jQuery not to process the data
       contentType: false,  // tell jQuery not to set contentType
       dataType: 'json',
       success : function(data) {

          if(data.uploaded_file){
            var src = "<?php echo UPLOAD_PATH;?>uploads/temp/"+data.uploaded_file;
            var output = document.getElementById(team_bg_file);
            output.src = src;
            $("#"+team_bg_file+"_link").attr("onclick", "return popitup('"+src+"');");
          }
           
     

       }
});

   
  };
      $(document).ready(function(){

        new Choices(document.getElementById("search_keywords"), { delimiter: ",", editItems: !0, removeItemButton: !0 });
        new Choices(document.getElementById("choices-text-remove-button"), { delimiter: ",", editItems: !0, removeItemButton: !0 });




            window.addEventListener('load', function() {
    // Get the current URL
    var currentUrl = window.location.href;
    
    // Check if the URL contains "tab-2"
    if (currentUrl.includes("tab-2")) {
      // Simulate a click event on the tab link with the "profile-b1-link" id
      document.getElementById('profile-b1-link').click();
    }
  });
});


       $(".nav-tabs a[data-toggle=tab]").on("click", function(e) {
        var href =  $(this).data("id");
      <?php if(empty($teams->id)){ ?>
         if(href != "home"){
            swal('Attention!', ' Please Fill The Tournament Details', 'error');
            return false;
         }
     <?php  } else{
      ?>
       
         // Get current URL parts
         const path = window.location.pathname;
         const params = new URLSearchParams(window.location.search);
         const hash = window.location.hash;
         // Update query string values
         params.set('tab', href);

         window.history.replaceState({}, '', `${path}?${params.toString()}${hash}`);
      <?php } ?>
   });


    function slugfly(str) {
        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();

        // remove accents, swap ñ for n, etc
        var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
        var to   = "aaaaaeeeeeiiiiooooouuuunc------";
        for (var i = 0, l = from.length; i < l; i++) {
          str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }

        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                 .replace(/\s+/g, '-') // collapse whitespace and replace by -
                 .replace(/-+/g, '-'); // collapse dashes

        return str;
   }


 <?php if(empty($teams->id)) { ?>
    $("#teamname").on('keyup', function(){
        var val = $("#teamname").val();
        slug = slugfly(val + "-tickets");
        $("#team_url_key").val(slug);
    });
   <?php  } ?>

   

</script>