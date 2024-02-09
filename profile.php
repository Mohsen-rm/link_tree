<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <title>Edit Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style type="text/css">
    body {
      background: #f7f7ff;
      margin-top: 20px;
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid transparent;
      border-radius: 0.25rem;
      margin-bottom: 1.5rem;
      box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%),
        0 2px 6px 0 rgb(206 206 238 / 54%);
    }

    .me-2 {
      margin-right: 0.5rem !important;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="main-body">
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="img/profile.png" alt="Admin"
                  class="rounded-circle p-1 bg-primary" width="110" />
                <div class="mt-3">
                  <h4>
                    <?php echo $_SESSION['fullname']; ?>
                  </h4>
                </div>
              </div>
              <hr class="my-4" />
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-globe me-2 icon-inline">
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="2" y1="12" x2="22" y2="12"></line>
                      <path
                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                      </path>
                    </svg>Website
                  </h6>
                  <span class="text-secondary">https://linkme.com/v?u=<?php echo $_SESSION['username']; ?></span>
                </li>

                <br>

                <div class="row">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-9 text-secondary">
                    <button type="button" class="btn btn-primary px-4">Add Links</button>
                  </div>
                </div>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="<?php echo $_SESSION['fullname']; ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Username</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="<?php echo $_SESSION['username']; ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="<?php echo $_SESSION['email']; ?>" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Account</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="normal" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Old Password</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="" />
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">New Password</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="" />
                </div>
              </div>

              <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                  <input type="button" class="btn btn-primary px-4" value="Save Changes" />
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
              <div class="container bootstrap snippets bootdey">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="main-box no-header clearfix">
                              <div class="main-box-body clearfix">
                                  <div class="table-responsive">
                                      <table class="table user-list">
                                          <thead>
                                              <tr>
                                              <th><span>Links</span></th>
                                              <th><span>Created</span></th>
                                              <th class="text-center"><span>Clicks</span></th>
                                              <!-- <th><span>Email</span></th> -->
                                              <th>&nbsp;</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>
                                                      <div>
                                                        1 : <img src="https://bootdey.com/img/Content/user_1.jpg" class="rounded-circle p-1" width="50" alt=""> Facebook
                                                        <span class="user-subhead"></span>
                                                      </div>
                                   
                                                  </td>
                                                  <td>2013/08/12</td>
                                                  <td class="text-center">
                                                      <span class="label label-default">45364</span>
                                                  </td>
                                                  <!-- <td>
                                                      <a href="#">marlon@brando.com</a>
                                                  </td> -->
                                                  <td style="width: 20%;">
                                                      <!-- <a href="#" class="table-link text-warning">
                                                          <span class="fa-stack">
                                                              <i class="fa fa-square fa-stack-2x"></i>
                                                              <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                          </span>
                                                      </a> -->
                                                      <a href="#" class="table-link text-info">
                                                          <span class="fa-stack">
                                                              <i class="fa fa-square fa-stack-2x"></i>
                                                              <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                          </span>
                                                      </a>
                                                      <a href="#" class="table-link danger">
                                                          <span class="fa-stack">
                                                              <i class="fa fa-square fa-stack-2x"></i>
                                                              <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                          </span>
                                                      </a>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript"></script>
</body>

</html>