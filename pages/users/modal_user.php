<form method='POST' id='frm_submit' class="users">
    <div class="modal fade" id="modalEntry" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" style="margin-top: 50px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Add Entry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="hidden_id" name="input[user_id]">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">First name</label>
                            <input type="text" id="user_fname" class="form-control input-item" name="input[user_fname]" placeholder="Enter first name" autocomplete="off" required>
                        </div>
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Middle name</label>
                            <input type="text" id="user_mname" class="form-control input-item" name="input[user_mname]" placeholder="Enter middle name" autocomplete="off" required>
                        </div>
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Last name</label>
                            <input type="text" id="user_lname" class="form-control input-item" name="input[user_lname]" placeholder="Enter last name" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Address</label>
                            <textarea class="form-control input-item" name="input[user_address]" autocomplete="off" id="user_address" placeholder="Address" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Contact #</label>
                            <input type="text" id="user_contact_number" class="form-control input-item" name="input[user_contact_number]" placeholder="Enter contact number" autocomplete="off" required>
                        </div>
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Category</label>
                            <select class="form-control input-item select2" name="input[user_category]" id="user_category" required>
                                <option value="">&mdash; Please Select &mdash;</option>
                                <option value="A">Admin</option>
                                <option value="Biker">Biker</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Username</label>
                            <input type="text" class="form-control input-item" name="input[username]" autocomplete="off" id="username" placeholder="Username" maxlength=15 required>
                        </div>
                        <div class="col mb-3" id="div_password">
                            <label for="nameBasic" class="form-label">Password</label>
                            <input type="password" class="form-control input-item" name="input[password]" autocomplete="off" id="password" placeholder="Password" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal"><i class="fas fa-times"></i></button>
                    <button type="submit" class="btn btn-primary font-weight-bold"><i class='bx bx-check'></i></button>
                </div>
            </div>
        </div>
    </div>
</form>