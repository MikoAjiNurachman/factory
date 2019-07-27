<!-- /.row -->


<!-- /.row -->
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Tambah Data Asset</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
              </div>
              <!-- /.box-header -->
              <div class="box-body">
              <div class="col-md-12">

          <form action = "backend/p_t_asset.php" method = "post">
              <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
              <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
              <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


               <div align="right">
                <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
               </div>
               <br />
               <form method="post" id="user_form">
                <div class="table-responsive">
                 <table class="table table-striped table-bordered" id="user_data">
                  <tr>
                    <th>No Akun</th>
                    <th>Nama Akun</th>
                   <th>Debet</th>
                   <th>Kredit</th>
                   <th></th>
                  </tr>
                 </table>
                </div>
                <div align="center">
                 <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />
                </div>
               </form>

               <br />


              <div id="user_dialog" title="Add Data">
                <div class="form-group">
                 <label>No Akun</label>      <span id="error_no_akun" class="text-danger pull-right"></span>
                 <?php
               include 'config/koneksi.php';
               $result = mysqli_query($koneksi_akun,"select * from ms_akun");
               $jsArray = "var prdName = new Array();\n";
               echo '

               <select name="no_akun" id="no_akun" class = "form-control select2" required onchange="changeValue(this.value)" >';
               echo '<option>Pilih No Akun</option>';
               while ($row = mysqli_fetch_array($result)) {
               echo '<option value="'.$row['kodeakun'].'" >'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
               $jsArray .= "prdName['" . $row['kodeakun'] . "'] = {namaakun:'" . addslashes($row['namaakun']) . "'};\n";
               }
               echo '</select>';
               ?>
                </div>


                <div class="form-group">
                 <label>Nama Akun</label>  <span id="error_namaakun" class="text-danger pull-right"></span>
                 <input type="text" name="namaakun" id="namaakun" class="form-control" readonly />
                </div>


               <div class="form-group">
                <label>Debet</label>   <span id="error_debet" class="text-danger pull-right"></span>
                <input type="number" name="debet" id="debet" class="form-control" />

               </div>
               <div class="form-group">
                <label>Kredit</label>   <span  id="error_kredit" class="text-danger pull-right"></span>
                <input type="number" name="kredit" id="kredit" class="form-control" />

               </div>


               <div class="form-group" align="center">
                <input type="hidden" name="row_id" id="hidden_row_id" />
                <button type="button" name="save" id="save" class="btn btn-info">Save</button>
               </div>
              </div>
              <div id="action_alert" title="Action">

              </div>


            <script>
            $(document).ready(function(){

             var count = 0;

             $('#user_dialog').dialog({
              autoOpen:false,
              width:400
             });

             $('#add').click(function(){
              $('#user_dialog').dialog('option', 'title', 'Add Data');

              $('#no_akun').val('');
              $('#namaakun').val('');

              $('#debet').val('');
              $('#kredit').val('');

              $('#error_no_akun').text('');
              $('#error_namaakun').text('');


              $('#no_akun').css('border-color', '');
              $('#namaakun').css('border-color', '');


              $('#save').text('Save');
              $('#user_dialog').dialog('open');
             });

             $('#save').click(function(){
              var error_no_akun = '';

              var no_akun = '';
              var namaakun = '';
              var debet = '';
              var kredit = '';

              //QUERY 1

              if($('#no_akun').val() == '')
              {
               error_no_akun = 'No Akun tidak boleh kosong !';
               $('#error_no_akun').text(error_no_akun);
               $('#no_akun').css('border-color', '#cc0000');
               no_akun = '';
              }
              else
              {
               error_no_akun = '';
               $('#error_no_akun').text(error_no_akun);
               $('#no_akun').css('border-color', '');
               no_akun = $('#no_akun').val();
              }


              if($('#namaakun').val() == '')
              {
               error_namaakun = 'Nama Akun tidak boleh kosong !';
               $('#error_namaakun').text(error_namaakun);
               $('#namaakun').css('border-color', '#cc0000');
               namaakun = '';
              }
              else
              {
               error_namaakun = '';
               $('#error_namaakun').text(error_namaakun);
               $('#namaakun').css('border-color', '');
               namaakun = $('#namaakun').val();
              }


              //QUERY 2


              if(!($('#debet').val() == '' || $('#kredit').val() == ''))
              {
                error_debet = 'Inputkan salah satu saja ! debet/kredit ';
                $('#error_debet').text(error_debet);
                $('#debet').css('border-color', '#cc0000');
                debet = $('#debet').val();
              }
              else if ($('#debet').val() == '' && $('#kredit').val() == '') {
                error_debet = 'Debet tidak boleh kosong !';
                $('#error_debet').text(error_debet);
                $('#debet').css('border-color', '#cc0000');
                debet = $('#debet').val();
              }
              else
              {
               error_debet = '';
               $('#error_debet').text(error_debet);
               $('#debet').css('border-color', '');
               debet = $('#debet').val();
              }


              if(!($('#kredit').val() == '' || $('#debet').val() == ''))
              {
                error_kredit = 'Inputkan salah satu saja ! debet/kredit ';
                $('#error_kredit').text(error_kredit);
                $('#kredit').css('border-color', '#cc0000');
                kredit = $('#kredit').val();
              }
              else if ($('#kredit').val() == '' && $('#debet').val() == '') {
                error_kredit = 'Kredit tidak boleh kosong !';
                $('#error_kredit').text(error_kredit);
                $('#kredit').css('border-color', '#cc0000');
                kredit = $('#kredit').val();
              }
              else
              {
               error_kredit = '';
               $('#error_kredit').text(error_kredit);
               $('#kredit').css('border-color', '');
               kredit = $('#kredit').val();
              }



              if(error_no_akun != '' || error_namaakun != '' || error_debet != '' || error_kredit != '')
              {
               return false;
              }
              else
              {
               if($('#save').text() == 'Save')
               {
                count = count + 1;
                output = '<tr id="row_'+count+'">';
                output += '<td>'+no_akun+' <input type="hidden" name="hidden_no_akun[]" id="no_akun'+count+'" value="'+no_akun+'" /></td>';
                output += '<td>'+namaakun+' <input type="hidden" name="hidden_namaakun[]" id="namaakun'+count+'" value="'+namaakun+'" /></td>';
                output += '<td>'+debet+' <input type="hidden" name="hidden_debet[]" id="debet'+count+'" class="debet" value="'+debet+'" /></td>';
                output += '<td>'+kredit+' <input type="hidden" name="hidden_kredit[]" id="kredit'+count+'" value="'+kredit+'" /></td>';

                output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
                output += '</tr>';
                $('#user_data').append(output);
               }
               else
               {
                var row_id = $('#hidden_row_id').val();
                output = '<tr id="row_'+count+'">';
                output += '<td>'+no_akun+' <input type="hidden" name="hidden_no_akun[]" id="no_akun'+count+'" value="'+no_akun+'" /></td>';
                output += '<td>'+namaakun+' <input type="hidden" name="hidden_namaakun[]" id="namaakun'+count+'" value="'+namaakun+'" /></td>';
                output += '<td>'+debet+' <input type="hidden" name="hidden_debet[]" id="debet'+count+'" class="debet" value="'+debet+'" /></td>';
                output += '<td>'+kredit+' <input type="hidden" name="hidden_kredit[]" id="kredit'+count+'" value="'+kredit+'" /></td>';

                output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
                $('#row_'+row_id+'').html(output);
               }

               $('#user_dialog').dialog('close');
              }
             });


             $(document).on('click', '.remove_details', function(){
              var row_id = $(this).attr("id");
              if(confirm("Are you sure you want to remove this row data?"))
              {
               $('#row_'+row_id+'').remove();
              }
              else
              {
               return false;
              }
             });

             $('#action_alert').dialog({
              autoOpen:false
             });

             $('#user_form').on('submit', function(event){
              event.preventDefault();
              var count_data = 0;
              $('.debet').each(function(){
               count_data = count_data + 1;
              });
              if(count_data > 0)
              {
               var form_data = $(this).serialize();
               $.ajax({
                url:"insert.php",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                 $('#user_data').find("tr:gt(0)").remove();
                 $('#action_alert').html('<p>Data Inserted Successfully</p>');
                 $('#action_alert').dialog('open');
                }
               })
              }
              else
              {
               $('#action_alert').html('<p>Please Add atleast one data</p>');
               $('#action_alert').dialog('open');
              }
             });

            });
            </script>
            <script type="text/javascript">
            <?php echo $jsArray; ?>
            function changeValue(id){
            document.getElementById('namaakun').value = prdName[id].namaakun;
            };
            </script>

                </form>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <input type = "reset" value = "Reset" class = "btn btn-danger" ></input>
        <input type = "submit" id = "simpan" name = "simpan"  value = "Simpan" class = "btn btn-info" ></input>
      </div>


    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
