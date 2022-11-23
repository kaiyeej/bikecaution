
<?php
include 'core/config.php';
if (!isset($_SESSION['user']['id'])) {
  
 header("location:./login/index.php");
}
echo $_SESSION['user']['id'];
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Bike Caution</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />

  <link href="assets/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="assets/vendor/sweetalert/sweetalert.css">
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />
  <link rel="stylesheet" type="text/css" href="assets/datatables/jquery.dataTables.css">
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script type="text/javascript" charset="utf8" src="assets/datatables/jquery.dataTables.js"></script>
  <!-- Page CSS -->

  <script src="assets/vendor/sweetalert/sweetalert.js"></script>
  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/js/config.js"></script>
</head>
<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.php" class="app-brand-link">
            <span class="app-brand-logo demo">
              <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
                  <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
                  <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
                  <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
                </defs>
                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                    <g id="Icon" transform="translate(27.000000, 15.000000)">
                      <g id="Mask" transform="translate(0.000000, 8.000000)">
                        <mask id="mask-2" fill="white">
                          <use xlink:href="#path-1"></use>
                        </mask>
                        <use fill="#696cff" xlink:href="#path-1"></use>
                        <g id="Path-3" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-3"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                        </g>
                        <g id="Path-4" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-4"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                        </g>
                      </g>
                      <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                        <use fill="#696cff" xlink:href="#path-5"></use>
                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Bike</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <?php include "components/sidebar.php"; ?>

      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                      <i style="font-size: 3rem;" class='bx bxs-user-circle'></i>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar">
                            <i style="font-size: 3rem;" class='bx bxs-user-circle'></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block" id="fullname_label"></span>
                          <small class="text-muted" id="category_label"></small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="profile">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a  onclick="logout()" class="dropdown-item" href="#">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <?php require 'routes/routes.php'; ?>
          
          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                USLS
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->
  <script type='text/javascript'>
    <?php
    echo "var route_settings = " . $route_settings . ";\n";
    echo "var user_profile = " . $user_profile . ";\n";
    ?>
  </script><script type="text/javascript">
    var modal_detail_status = 0;
    $(document).ready(function() {
      $("#fullname_label").html(user_profile[1]);
      $("#category_label").html(user_profile[2]);
    });

    function logout() {
      swal({
          title: "Are you sure?",
          text: "Your session will expire!",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Yes, sign me out!",
          cancelButtonText: "No, stay me in!",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm) {
          if (isConfirm) {

            $.ajax({
              type: "POST",
              url: "controllers/sql.php?c=Users&q=logout",
              success: function(data) {
                window.location = "./";
              }
            });


          } else {
            swal("Cancelled", "Entries are safe :)", "error");
          }
        });
      }

    function schema() {
      $.ajax({
        type: "POST",
        url: "controllers/sql.php?c=" + route_settings.class_name + "&q=schema",
        data: [],
        success: function(data) {
          var json = JSON.parse(data);
          console.log(json.data);
        }
      });
    }

    function success_add() {
      swal("Success!", "Successfully added entry!", "success");
    }

    function success_update() {
      swal("Success!", "Successfully updated entry!", "success");
    }

    function success_delete() {
      swal("Success!", "Successfully deleted entry!", "success");
    }

    function entry_already_exists() {
      swal("Cannot proceed!", "Entry already exists!", "warning");
    }

    function amount_is_greater() {
      swal("Cannot proceed!", "Amount is greater than balance!", "warning");
    }

    function failed_query(data) {
      swal("Failed to execute query!", data, "warning");
      //alert('Something is wrong. Failed to execute query. Please try again.');
    }

    function checkAll(ele, ref) {
      var checkboxes = document.getElementsByClassName(ref);
      if (ele.checked) {
        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = true;
          }
        }
      } else {
        for (var i = 0; i < checkboxes.length; i++) {
          //console.log(i)
          if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = false;
          }
        }
      }
    }


    function addModal() {
      modal_detail_status = 0;
      $("#hidden_id").val(0);
      document.getElementById("frm_submit").reset();

      var element = document.getElementById('reference_code');
      if (typeof(element) != 'undefined' && element != null) {
        generateReference(route_settings.class_name);
      }

      $("#modalLabel").html("<i class='flaticon2-add'></i> Add Entry");
      $("#modalEntry").modal('show');
    }

    $("#frm_submit").submit(function(e) {
      e.preventDefault();

      $("#btn_submit").prop('disabled', true);
      $("#btn_submit").html("<span class='fa fa-spinner fa-spin'></span> Submitting ...");

      var hidden_id = $("#hidden_id").val();
      var q = hidden_id > 0 ? "edit" : "add";
      $.ajax({
        type: "POST",
        url: "controllers/sql.php?c=" + route_settings.class_name + "&q=" + q,
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          getEntries();
          var json = JSON.parse(data);
          if (route_settings.has_detail == 1) {
            if (json.data > 0) {
              $("#modalEntry").modal('hide')
              hidden_id > 0 ? success_update() : success_add();
              hidden_id > 0 ? $("#modalEntry2").modal('hide') : '';
              hidden_id > 0 ? getEntryDetails2(hidden_id) : getEntryDetails2(json.data);
            } else if (json.data == -2) {
              entry_already_exists();
            } else {
              failed_query(json);
            }
          } else {
            if (json.data == 1) {
              hidden_id > 0 ? success_update() : success_add();
              $("#modalEntry").modal('hide');
            } else if (json.data == 2) {
              entry_already_exists();
            } else {
              failed_query(json);
            }
          }
          $("#btn_submit").prop('disabled', false);
          $("#btn_submit").html("<span class='fa fa-check-circle'></span> Submit");
        }
      });
    });

    function getEntryDetails(id, is_det = 0) {
      $.ajax({
        type: "POST",
        url: "controllers/sql.php?c=" + route_settings.class_name + "&q=view",
        data: {
          input: {
            id: id
          }
        },
        success: function(data) {
          var jsonParse = JSON.parse(data);
          const json = jsonParse.data;

          $("#hidden_id").val(id);

          $('.input-item').map(function() {
            //console.log(this.id);
            const id_name = this.id;
            this.value = json[id_name];
          });

          $("#modalLabel").html("<i class='flaticon-edit'></i> Update Entry");
          $("#modalEntry").modal('show');
        }
      });

      if (is_det == 1) {
        modal_detail_status == 1 ? setTimeout(() => {
          $("#modalEntry2").modal('hide')
        }, 500) : '';
      } else {
        modal_detail_status = 0;
      }
    }

    function deleteEntry() {

      var count_checked = $("input[class='dt_id']:checked").length;

      if (count_checked > 0) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover these entries!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            cancelButtonClass: "btn-primary",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm) {
            if (isConfirm) {
              var checkedValues = $("input[class='dt_id']:checked").map(function() {
                return this.value;
              }).get();

              $.ajax({
                type: "POST",
                url: "controllers/sql.php?c=" + route_settings.class_name + "&q=remove",
                data: {
                  input: {
                    ids: checkedValues
                  }
                },
                success: function(data) {
                  getEntries();
                  var json = JSON.parse(data);
                  console.log(json);
                  if (json.data == 1) {
                    success_delete();
                  } else {
                    failed_query(json);
                  }
                }
              });

              $("#btn_delete").prop('disabled', true);

            } else {
              swal("Cancelled", "Entries are safe :)", "error");
            }
          });
      } else {
        swal("Cannot proceed!", "Please select entries to delete!", "warning");
      }
    }

    // MODULE WITH DETAILS LIKE SALES

    function getEntryDetails2(id) {
      $("#hidden_id_2").val(id);
      modal_detail_status = 1;
      $.ajax({
        type: "POST",
        url: "controllers/sql.php?c=" + route_settings.class_name + "&q=view",
        data: {
          input: {
            id: id
          }
        },
        success: function(data) {
          var jsonParse = JSON.parse(data);
          const json = jsonParse.data;

          $('.label-item').map(function() {
            const id_name = this.id;
            const new_id = id_name.replace('_label', '');
            this.innerHTML = json[new_id];
          });

          var transaction_edit = document.getElementById("menu-edit-transaction");
          var transaction_delete_items = document.getElementById("menu-delete-selected-items");
          var transaction_finish = document.getElementById("menu-finish-transaction");
          var col_list = document.getElementById("col-list");
          var col_item = document.getElementById("col-item");

          if (json.status == 'F') {
            transaction_edit.classList.add('disabled');
            (typeof(transaction_delete_items) != 'undefined' && transaction_delete_items != null) ? transaction_delete_items.classList.add('disabled'): '';
            transaction_finish.classList.add('disabled');

            transaction_edit.setAttribute("onclick", "");
            (typeof(transaction_delete_items) != 'undefined' && transaction_delete_items != null) ? transaction_delete_items.setAttribute("onclick", ""): '';
            transaction_finish.setAttribute("onclick", "");

            (typeof(col_item) != 'undefined' && col_item != null) ? col_item.style.display = "none": '';
            (typeof(col_list) != 'undefined' && col_list != null) ? col_list.classList.remove('col-8'): '';
            (typeof(col_list) != 'undefined' && col_list != null) ? col_list.classList.add('col-12'): '';
          } else {
            transaction_edit.classList.remove('disabled');
            (typeof(transaction_delete_items) != 'undefined' && transaction_delete_items != null) ? transaction_delete_items.classList.remove('disabled'): '';
            transaction_finish.classList.remove('disabled');

            transaction_edit.setAttribute("onclick", "getEntryDetails(" + id + ",1)");
            (typeof(transaction_delete_items) != 'undefined' && transaction_delete_items != null) ? transaction_delete_items.setAttribute("onclick", "deleteEntry2()"): '';
            transaction_finish.setAttribute("onclick", "finishTransaction()");

            (typeof(col_item) != 'undefined' && col_item != null) ? col_item.style.display = "block": '';
            (typeof(col_list) != 'undefined' && col_list != null) ? col_list.classList.remove('col-12'): '';
            (typeof(col_list) != 'undefined' && col_list != null) ? col_list.classList.add('col-8'): '';
          }
          getEntries2();
          $("#modalEntry2").modal('show');
        }
      });
    }

    $("#frm_submit_2").submit(function(e) {
      e.preventDefault();

      $("#btn_submit_2").prop('disabled', true);
      $("#btn_submit_2").html("<span class='fa fa-spinner fa-spin'></span> Submitting ...");

      $.ajax({
        type: "POST",
        url: "controllers/sql.php?c=" + route_settings.class_name + "&q=add_detail",
        data: $("#frm_submit_2").serialize(),
        success: function(data) {
          getEntries2();
          var json = JSON.parse(data);
          if (json.data == 1) {
            success_add();
            document.getElementById("frm_submit_2").reset();
            $('.select2').select2().trigger('change');
          } else if (json.data == 2) {
            entry_already_exists();
          } else if (json.data == 3) {
            amount_is_greater();
          } else {
            failed_query(json);
            $("#modalEntry2").modal('hide');
          }
          $("#btn_submit_2").prop('disabled', false);
          $("#btn_submit_2").html("<span class='fa fa-check-circle'></span> Submit");
        }
      });
    });

    function deleteEntry2() {

      var count_checked = $("input[class='dt_id_2']:checked").length;

      if (count_checked > 0) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover these entries!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            cancelButtonClass: "btn-primary",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm) {
            if (isConfirm) {
              var checkedValues = $("input[class='dt_id_2']:checked").map(function() {
                return this.value;
              }).get();

              $.ajax({
                type: "POST",
                url: "controllers/sql.php?c=" + route_settings.class_name + "&q=remove_detail",
                data: {
                  input: {
                    ids: checkedValues
                  }
                },
                success: function(data) {
                  getEntries2();
                  var json = JSON.parse(data);
                  console.log(json);
                  if (json.data == 1) {
                    success_delete();
                  } else {
                    failed_query(json);
                  }
                }
              });

              $("#btn_delete").prop('disabled', true);

            } else {
              swal("Cancelled", "Entries are safe :)", "error");
            }
          });
      } else {
        swal("Cannot proceed!", "Please select entries to delete!", "warning");
      }
    }

    function finishTransaction() {
      var id = $("#hidden_id_2").val();

      var count_checked = $("input[class='dt_id_2']").length;
      if (count_checked > 0) {
        swal({
            title: "Are you sure?",
            text: "This entries will be finished!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-info",
            cancelButtonClass: "btn-primary",
            confirmButtonText: "Yes, finish it!",
            cancelButtonText: "No, cancel!",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm) {
            if (isConfirm) {
              $.ajax({
                type: "POST",
                url: "controllers/sql.php?c=" + route_settings.class_name + "&q=finish",
                data: {
                  input: {
                    id: id
                  }
                },
                success: function(data) {
                  getEntries();
                  var json = JSON.parse(data);
                  if (json.data == 1) {
                    success_add();
                    $("#modalEntry2").modal('hide');
                  } else {
                    failed_query(json);
                  }
                }
              });
            } else {
              swal("Cancelled", "Entries are safe :)", "error");
            }
          });
      } else {
        swal("Cannot proceed!", "No entries found!", "warning");
      }
    }
    // END MODULE

    function getSelectOption(class_name, primary_id, label, param = '', attributes = [], pre_value='', pre_label = 'Please Select') {
      $.ajax({
        type: "POST",
        url: "controllers/sql.php?c=" + class_name + "&q=show",
        data: {
          input: {
            param: param
          }
        },
        success: function(data) {
          var json = JSON.parse(data);
          $("#" + primary_id).html("<option value='" + pre_value + "'> &mdash; " + pre_label + " &mdash; </option>");

          

          for (list_index = 0; list_index < json.data.length; list_index++) {
            const list = json.data[list_index];
            var data_attributes = {};
            data_attributes['value'] = list[primary_id];
            for (var attr_index in attributes) {
              const attr = attributes[attr_index];
              data_attributes[attr] = list[attr];
            }
            $('#' + primary_id).append($("<option></option>").attr(data_attributes).text(list[label]));
          }
        }
      });
    }

    function generateReference(class_name) {
      $.ajax({
        type: "POST",
        url: "controllers/sql.php?c=" + class_name + "&q=generate",
        data: [],
        success: function(data) {
          var json = JSON.parse(data);
          $("#reference_code").val(json.data);
        }
      });
    }

    function printCanvas() {
      var printContents = document.getElementById('print_canvas').innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
      window.close();
      location.reload();

    }
  </script>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="assets/js/dashboards-analytics.js"></script>



</body>

</html>