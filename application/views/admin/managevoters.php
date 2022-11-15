           <!-- Container Fluid-->
           <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Voters</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php      echo base_url(); ?>templates/./">Home</a></li>
              <li class="breadcrumb-item">Voters</li>
              <li class="breadcrumb-item active" aria-current="page">Voters</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Voters</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                  <thead class="thead-light">
                      <tr>
                        <th>Name</th>
                        <th>Alias</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>DOB</th>
                        <th>Level</th>
                        <th>Date Entered</th>
                        <th>Details</th>
                       
                      </tr>
                    </thead>
                    <?php  $hu=$this->db->query("SELECT * FROM voter");
                    
                    $good=$hu->result();

                    $deal=$hu->num_rows();

                    foreach($good as $row):
                    
                    ?>
                    
                   
                    <tbody>
                      <tr>
                        <td><?php  echo $row->name;    ?></td>
                        <td><?php   echo $row->alias;    ?></td>
                        <th><?php    echo $row->gender; ?> </td>
                        <th><?php    echo $row->department; ?> </td>
                        <th><?php    echo $row->dob; ?> </td>
                        <td><?php echo $row->level; ?></td>
                        <td><?Php   echo $row->date_joined;      ?></td>

                        <td><a class="btn btn-danger" href="<?php echo base_url();      ?>index.php/delete/voter/<?php  echo $row->id;  ?>" >Delete</a></td>
                        <td><a href="#" class="btn btn-primary">Details</a></td>
                        
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

       