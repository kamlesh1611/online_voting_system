
<style>
  input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
</style>

<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #202020 ;color: #e5e5e5 ; font-size: 15px; font-family:Times ">
            <div class="modal-header">
              <button type="button" class=" btn btn-close btn-curve pull-right" data-dismiss="modal" aria-label="Close" style="color:red; font-size: large;">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Voter</b></h4>
            </div>
            <div class="modal-body" style="color: #fca311;">
              <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">E-mail</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="aadhaar" class="col-sm-3 control-label">Aadhaar Number</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" id="aadhaar" name="aadhaar" required>
                      <span id="aadhaarError" style="color: red;"></span>
                    </div>
                </div> -->
                <!-- <div class="form-group">
                  <label for="assembly" class="col-sm-3 control-label">Assembly constituency</label>
                  <div class="col-sm-9">  
                    <input list="assembly" class="form-control">
                      <datalist id="assembly">
                        <option value="155 - Olpad Assembly Constituency">155 - Olpad Assembly Constituency</option>
                        <option value="156 - Maangrol Assembly Constituency">156 - Maangrol Assembly Constituency</option>
                        <option value="157 - Mandvi Assembly Constituency">157 - Mandvi Assembly Constituency</option>
                        <option value="158 - Kamrej Assembly Constituency">158 - Kamrej Assembly Constituency</option>
                        <option value="159 - Surat East Assembly Constituency">159 - Surat East Assembly Constituency</option>
                        <option value="160 - Surat North Assembly Constituency">160 - Surat North Assembly Constituency</option>
                        <option value="161 - Varachha Assembly Constituency">161 - Varachha Assembly Constituency</option>
                        <option value="162 - Karanj Assembly Constituency">162 - Karanj Assembly Constituency</option>
                        <option value="163 - Limbayat Assembly Constituency">163 - Limbayat Assembly Constituency</option>
                        <option value="164 - Udhna Assembly Constituency">164 - Udhna Assembly Constituency</option>
                        <option value="165 - Majura Assembly Constituency">165 - Majura Assembly Constituency</option>
                        <option value="166 - Katargaam Assembly Constituency">166 - Katargaam Assembly Constituency</option>
                        <option value="167 - Surat West Assembly Constituency">167 - Surat West Assembly Constituency</option>
                        <option value="168 - Choryasi Assembly Constituency">168 - Choryasi Assembly Constituency</option>
                        <option value="169 - Bardoli Assembly Constituency">169 - Bardoli Assembly Constituency</option>
                        <option value="170 - Mahuva Assembly Constituency">170 - Mahuva Assembly Constituency</option>
                      </datalist>
                  </div>
                </div> -->
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-curve pull-left"style='background-color:  #FFDEAD  ;color:black ; font-size: 12px; font-family:Times' data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-curve" style='background-color:  #9CD095  ;color:black ; font-size: 12px; font-family:Times' name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #202020 ;color: #e5e5e5 ; font-size: 15px; font-family:Times ">
            <div class="modal-header">
              <button type="button" class=" btn btn-close btn-curve pull-right" data-dismiss="modal" aria-label="Close" style="color:red; font-size: large;">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Voter</b></h4>
            </div>
            <div class="modal-body" style="color: #fca311;"> 
              <form class="form-horizontal" method="POST" action="voters_edit.php">
                <input type="hidden" class="id" name="id" style="color: #202020; font-weight: 900;">
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_email" class="col-sm-3 control-label">E-mail</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="edit_password" name="password">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-curve pull-left"style='background-color:  #FFDEAD  ;color:black ; font-size: 12px; font-family:Times' data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-curve"style='background-color:  #9CD095 ;color:black ; font-size: 12px; font-family:Times' name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #202020 ;color: #e5e5e5 ; font-size: 15px; font-family:Times ">
            <div class="modal-header">
              <button type="button" class=" btn btn-close btn-curve pull-right" data-dismiss="modal" aria-label="Close" style="color:red; font-size: large;">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE VOTER</p>
                    <h2 class="bold fullname" style="color: #fca311;"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-curve pull-left" style='background-color:  #FFDEAD  ;color:black ; font-size: 12px; font-family:Times'data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-curve"style='background-color:  #ff8e88  ;color:black ; font-size: 12px; font-family:Times' name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #202020 ;color: #e5e5e5 ; font-size: 15px; font-family:Times ">
            <div class="modal-header">
              <button type="button" class=" btn btn-close btn-curve pull-right"  data-dismiss="modal" aria-label="Close" style="color:red; font-size: large;">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname" style="color: #fca311;"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-curve pull-left"style='background-color: #FFDEAD  ;color:black ; font-size: 12px; font-family:Times' data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-curve"style='background-color: #9CD095 ;color:black ; font-size: 12px; font-family:Times' name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<script>
   // Function to validate Aadhaar number
   function validateAadhaar(aadhaar) {
            // Check length
            if (aadhaar.length !== 12) {
                return false;
            }

            // First digit cannot be 0
            if (aadhaar.charAt(0) === '0') {
                return false;
            }

            // Verhoeff Algorithm
            function verhoeffAlgorithm(aadhaar) {
                const multiplicationTable = [
                    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
                    [1, 2, 3, 4, 0, 6, 7, 8, 9, 5],
                    [2, 3, 4, 0, 1, 7, 8, 9, 5, 6],
                    [3, 4, 0, 1, 2, 8, 9, 5, 6, 7],
                    [4, 0, 1, 2, 3, 9, 5, 6, 7, 8],
                    [5, 9, 8, 7, 6, 0, 4, 3, 2, 1],
                    [6, 5, 9, 8, 7, 1, 0, 4, 3, 2],
                    [7, 6, 5, 9, 8, 2, 1, 0, 4, 3],
                    [8, 7, 6, 5, 9, 3, 2, 1, 0, 4],
                    [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
                ];

                const permutationTable = [
                    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
                    [1, 5, 7, 6, 2, 8, 3, 0, 9, 4],
                    [5, 8, 0, 3, 7, 9, 6, 1, 4, 2],
                    [8, 9, 1, 6, 0, 4, 3, 5, 2, 7],
                    [9, 4, 5, 3, 1, 2, 6, 8, 7, 0],
                    [4, 2, 8, 6, 5, 7, 3, 9, 0, 1],
                    [2, 7, 9, 3, 8, 0, 6, 4, 1, 5],
                    [7, 0, 4, 6, 9, 1, 3, 2, 5, 8]
                ];

                let check = 0;
                for (let i = 0; i < aadhaar.length; i++) {
                    check = multiplicationTable[check][permutationTable[(i + 1) % 8][parseInt(aadhaar.charAt(aadhaar.length - 1 - i))]];
                }
                return check === 0;
            }

            // Perform the Verhoeff Algorithm check
            return verhoeffAlgorithm(aadhaar);
        }

        // Function to handle input event
        function handleInput() {
            const aadhaarInput = document.getElementById('aadhaar');
            const aadhaarError = document.getElementById('aadhaarError');
            const aadhaar = aadhaarInput.value.trim();

            // Validate Aadhaar number
            if (validateAadhaar(aadhaar)) {
                aadhaarError.textContent = '';
            } else {
                aadhaarError.textContent = 'Invalid Aadhaar Number';
            }
        }

        // Add event listener to the input field
        document.getElementById('aadhaar').addEventListener('input', handleInput);
</script>
     