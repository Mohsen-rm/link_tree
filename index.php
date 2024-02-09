<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>Link Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin-top: 20px;
            background: #f5f5f5;
        }

        .ui-w-100 {
            width: 100px !important;
            height: auto;
        }

        .card {
            background-clip: padding-box;
            box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012);
        }

        .user-view-table td:first-child {
            width: 9rem;
        }

        .user-view-table td {
            padding-right: 0;
            padding-left: 0;
            border: 0;
        }

        .text-light {
            color: #babbbc !important;
        }

        .card .row-bordered>[class*=" col-"]::after {
            border-color: rgba(24, 28, 33, 0.075);
        }

        .text-xlarge {
            font-size: 170% !important;
        }
    </style>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <div class="container bootdey flex-grow-1 container-p-y">
        <div class="media align-items-center py-3 mb-3">
            <img src="img/profile.png" alt class="d-block ui-w-100 rounded-circle">
            <div class="media-body ml-4">
                <h4 class="font-weight-bold mb-0">
                    <?php echo $_SESSION['fullname']; ?><span class="text-muted font-weight-normal">
                        <?php echo "@".$_SESSION['username']; ?>
                    </span>
                </h4>
                <div class="text-muted mb-2">ID:
                    <?php echo $_SESSION['id']; ?>
                </div>
                <a href="javascript:void(0)" class="btn btn-primary btn-sm">Home</a>&nbsp;
                <a href="profile" class="btn btn-default btn-sm">Edit</a>&nbsp;
                <a href="javascript:void(0)" class="btn btn-default btn-sm icon-btn"><i class="fa fa-mail"></i></a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <table class="table user-view-table m-0">
                    <tbody>
                        <tr>
                            <td>Latest Login:</td>
                            <td>01/23/2017</td>
                        </tr>
                        <tr>
                            <!-- <td>Latest activity:</td>
<td>01/23/2018 (14 days ago)</td>
</tr> -->
                            <!-- <tr>
<td>Verified:</td>
<td><span class="fa fa-check text-primary"></span>&nbsp; Yes</td>
</tr> -->
                        <tr>
                            <td>Account:</td>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td><span class="badge badge-outline-success">Active</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr class="border-light m-0">
            <div class="table-responsive">
                <table class="table card-table m-0">
                    <tbody>
                        <tr>
                            <th>Links</th>
                            <th>Clicks</th>
                        </tr>
                        <tr>
                            <td>Users</td>
                            <td><span class="text-primary">200</span></td>
                            <!-- <td><span class="fa fa-times text-light"></span></td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>