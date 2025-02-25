<!-- Preview -->
<div class="modal fade" id="preview_modal">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #202020 ;color: #e5e5e5 ; font-size: 15px; font-family:Times" >
            <div class="modal-header">
              <button type="button"  class=" btn btn-close btn-curve pull-right" data-dismiss="modal" aria-label="Close" style="color:red;">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" style="color: #e5e5e5 ; font-size: 15px; font-family:Times">Vote Preview</h4>
            </div>
            <div class="modal-body">
              <div id="preview_body" style="color: #fca311;"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-curve pull-left" style='background-color:  #FFDEAD  ;color:black ; font-size: 12px; font-family:Times' data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Platform -->
<div class="modal fade" id="platform">
    <div class="modal-dialog" >
        <div class="modal-content" style='background-color: #202020 ;color: #e5e5e5;'>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: large; color: red;">
                  <span aria-hidden="true" style="color: red;">&times;</span></button>
              <h4 class="modal-title" style="color: #fca311;"><b><span class="candidate"></b></h4>
            </div>
            <div class="modal-body">
              <p id="plat_view"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- View Ballot -->
<div class="modal fade" id="view">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #202020 ;color: #e5e5e5 ; font-size: 15px; font-family:Times ">
            <div class="modal-header">
              <button type="button" class=" btn btn-close btn-curve pull-right" data-dismiss="modal" aria-label="Close" style=" color:red;">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"> <b>Your Votes </b></h4>
            </div>
            <div class="modal-body" style="color:#fca311;">
              <?php
                $id = $voter['id'];
                $sql = "SELECT *, candidates.firstname AS canfirst, candidates.lastname AS canlast FROM votes LEFT JOIN candidates ON candidates.id=votes.candidate_id LEFT JOIN positions ON positions.id=votes.position_id WHERE voters_id = '$id'  ORDER BY positions.priority ASC";
                $query = $conn->query($sql);
                while($row = $query->fetch_assoc()){
                  echo "
                    <div class='row votelist'>
                      <span class='col-sm-4'><span class='pull-right'><b>".$row['description']." :</b></span></span> 
                      <span class='col-sm-8'>".$row['canfirst']." ".$row['canlast']."</span>
                    </div>
                  ";
                }
              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-curve pull-left" style='background-color:  #FFDEAD  ;color:black ; font-size: 12px; font-family:Times' data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>
