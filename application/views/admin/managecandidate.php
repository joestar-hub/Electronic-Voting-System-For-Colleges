         <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php      echo base_url(); ?>templates/./">Home</a></li>
              <li class="breadcrumb-item"></li>
              <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Candidates</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Emails</th>
                        <th>Votes</th>
                        <th>Manifesto</th>
                        <th>Start date</th>
                        <th>Details</th>
                      </tr>
                    </thead>
                      <?php 
                      
                      $gun=$this->db->query("SELECT * FROM  candidate");

                      $bun=$gun->result();

                      foreach($bun as $row):
                      
                      
                      ?>
                      
                     
                    <tbody>
                      <tr>
                        <td><?php  echo  $row->name; ?></td>
                        <td><?php echo  $row->email; ?></td>
                        <td><?php  echo  $row->votes; ?></td>
                        <td><?php echo $row->manifesto;  ?></td>
                        <td><?php echo $row->date_joined;    ?></td>
                        <td>
<a class="btn btn-danger" href="<?php echo base_url();      ?>index.php/delete/candi/<?php  echo $row->id;  ?>">Delete</a> </td>
                      <td>

<a class="btn btn-primary" href="<?php echo base_url();     ?>index.php/moredetails/<?php  echo $row->candidate_id;   ?>">Details</a>

                      </td>
                        
                        
                        
                      </td>
                      </tr>  
                    </tbody>

                    <?php     endforeach; ?>
                  </table>
                </div>
              </div>
            </div>   </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
         </div>
        <!---Container Fluid-->
      </div>

       