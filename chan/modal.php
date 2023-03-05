
<div class="modal fade" id="myModal<?php echo $row['ID']?>"tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Dancer Profile</h4>
                        </div>
                        <div class="modal-body">
                        
                            <p><h2><?php echo $row['firstname'];?> &nbsp;
                            <?php echo $row['midname'];?>&nbsp;
                            <?php echo $row['lastname'];?>
                            <ul>
                                <li><h4>Born on <?php echo $row['birthdate'];?></h4></li>
                                <li><h4> <?php echo $row['gender'];?></h4></li>
                                <li><h4>Lives in<?php echo $row['address'];?></h4></li>
                                <li><h4>Enrolled in<?php echo $row['school'];?></h4></li>
                            </ul>
                           
                        </div>
                        <div class="modal-footer">
                            
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>