          <!-- Container Fluid-->
          <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Position</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php      echo base_url(); ?>templates/./">Home</a></li>
              <li class="breadcrumb-item">Position</li>
              <li class="breadcrumb-item active" aria-current="page">Position</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                  <thead class="thead-light">
                      <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Details</th>
                       
                      </tr>
                    </thead>
                   
                    <tbody>
                    <?php  $hu=$this->db->query("SELECT * FROM position");
                    
                    $good=$hu->result();

                    $deal=$hu->num_rows();

                    foreach($good as $row):
                    
                    ?>
                   
                      <tr>
                        <td><?php  echo $row->position_name;    ?></td>
                        <td><?php   echo $row->position_desc;    ?></td>
                        <td><a class="btn btn-danger" href="<?php echo base_url();      ?>index.php/delete/posit/<?php  echo $row->id;  ?>" >Delete</a></td>
                        <td><a href="<?php  echo base_url();   ?>index.php/positiondetails/<?php  echo $row->position_id;  ?>" class="btn btn-primary">Details</a></td>
                        
                      </tr>  

                      <?php

                    endforeach;

?>
                    </tbody>
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

       