<div class="container-xxl flex-grow-1 container-p-y">
    <a href="#" onclick="addUser()" data-container="body" data-offset="20px 20px" data-toggle="popover" data-placement="top" data-content="Add New Entry" class="btn btn-success">
        <i class="flaticon2-add"></i>
    </a>
    <a href="#"  data-container="body" data-offset="20px 20px" data-toggle="popover" data-placement="top" data-content="Delete Selected Entry" onclick='deleteEntry()' class="btn btn-danger">
        <i class="flaticon-delete-1"></i>
    </a>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Manage Users</h5>
        <div class="container">
            <div class="table-responsive">
                <table class="table" id="dt_entries">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Actions</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Contact #</th>
                            <th>Username</th>
                            <th>Date Modified</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include "modal_user.php"; ?>
<script type="text/javascript">
    function addUser(){
        addModal();
        $("#div_password").show();
    }

    function getUserDetails(id){
        $("#div_password").hide();
        getEntryDetails(id);
    }

    function getEntries() {
        $("#dt_entries").DataTable().destroy();
        $("#dt_entries").DataTable({
            "processing": true,
            "ajax": {
                "url": "controllers/sql.php?c=" + route_settings.class_name + "&q=show",
                "dataSrc": "data"
            },
            "columns": [{
                    "mRender": function(data, type, row) {
                        return "<input type='checkbox' value=" + row.user_id + " class='dt_id' style='position: initial; opacity:1;'>";
                    }
                },
                {
                    "mRender": function(data, type, row) {
                        return '<div class="dropdown">'+
                                    '<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">'+
                                       '<i class="bx bx-dots-vertical-rounded"></i>'+
                                    '</button>'+
                                    '<div class="dropdown-menu">'+
                                        '<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>'+
                                        '<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>'+
                                    '</div>'+
                                '</div>';
                    }
                },
                {
                    "data": "fullname"
                },
                {
                    "data": "category"
                },
                {
                    "data": "user_contact_number"
                },
                {
                    "data": "username"
                },
                {
                    "data": "date_last_modified"
                }
            ]
        });
    }
    
    $(document).ready(function() {
        getEntries();
    });
</script>