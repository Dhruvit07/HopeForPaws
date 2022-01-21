<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Hope For Paws -- Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
    <link href="css/styles.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
            crossorigin="anonymous"></script>
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>
<body class="sb-nav-fixed">
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <?php
        include 'leftmenu.php';
        ?>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Payment Summary</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Payment Summary</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Payment Receipts
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>Id#</th>
                                <th>Users</th>
                                <th>Transaction ID</th>
                                <th>Amount</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id#</th>
                                <th>Users</th>
                                <th>Transaction ID</th>
                                <th>Amount</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                            </tfoot>
                            <?php
                            $c = 1;
                            $productSQL = "SELECT user.u_name, transfer.payment_id, orders.order_id, orders.total, user.u_email, user.u_phone FROM `transfer` 
                                           JOIN orders ON orders.order_id = transfer.u_id JOIN user ON user.u_id = transfer.u_id;";
                            $result = $conn->query($productSQL);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tbody>';
                                    echo '<tr>';
                                    echo '</tr>';
                                    echo '<td>' . $c++ . '</td>';
                                    echo '<td>' . $row["u_name"] . '</td>';
                                    echo '<td>' . $row["payment_id"] . '</td>';
                                    echo '<td>₹' . $row["total"] . '</td>';
                                    echo '<td>' . $row["u_email"] . '</td>';
                                    echo '<td>' . $row["u_phone"] . '</td>';

                                    echo '</tbody>';
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>
