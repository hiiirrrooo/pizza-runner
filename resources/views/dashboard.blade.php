<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <div>
            <form action='/admin/sales'>
                <input type='submit' value='Daily Sales'>
            </form>
            <form action='/admin/pizza'>
                <input type='submit' value='Pizza Count'>
            </form>
            <form action='/admin/unique'>
                <input type='submit' value='Unique Customers'>
            </form>
            <form action='/admin/successful'>
                <input type='submit' value='Successful Orders'>
            </form>
            <form action='/admin/cancelled'>
                <input type='submit' value='Cancelled Orders'>
            </form>
        </div>
    </body>
</html> -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/135e9c29ad.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- navbar -->

    <nav class="navbar text-bg-primary">

        <div class="container-fluid flex">
            <div class="d-flex">
                <a class="navbar-toggler" id="sidebar" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample"
                    role="button" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon mt-2" id="sidebar"></span>
                </a>
                <h1 class="navbar-brand text-light fs-2 ms-2">Pizza Runner</h1>
            </div>

        </div>


        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h3 class="offcanvas-title" id="offcanvasExampleLabel">Pizza Runner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="">
                    <ul style="list-style-type: none;" class="fs-4">
                        <li class="mb-3">
                            <button style="border:none; background-color: white;" class="d-flex">
                                <div class="me-3"><i class="fa-solid fa-table-columns  fs-3"></i></div>
                                <div>Dashboard</div>
                            </button>
                        </li>
                        <li class="mb-3">
                            <button style="border:none; background-color: white;" class="d-flex">
                                <div class><i class="fa-solid fa-cart-shopping me-3 fs-4"></i></div>
                                <div>Orders</div>
                            </button>
                        </li>
                        <li class="mb-3">
                            <button style="border:none; background-color: white;" class="d-flex">
                                <div class="me-3"><i class="fa-solid fa-clipboard fs-3"></i></div>
                                <div>Reports</div>
                            </button>
                        </li>
                        <li class="mb-3">
                            <button style="border:none; background-color: white;" class="d-flex">
                                <div class="me-3"><i class="fa-solid fa-database fs-3"></i></div>
                                <div>Data Mart</div>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- main -->
    <div class="container px-4 text-center">
        <h1 class="mb-5 mt-2">Welcome Admin!</h1>
        <div class="row d-flex justify-content-center gx-5">
            <form action='/admin/orders'>
                <button style="border: none; background-color: white;" class="col-3">
                    <div style="height:200px;" class="d-flex flex-column align-items-center text-bg-primary p-3">
                        <div style="font-size: 75px;"><i class="fa-solid fa-cart-shopping"></i></div>
                        <div class="mt-2">ORDERS</div>
                    </div>
                </button>
            </form>
            <form action='/admin/reports'>
                <button style="border: none; background-color: white;" class="col-3">
                    <div style="height:200px;" class="d-flex flex-column align-items-center text-bg-primary p-3">
                        <div style="font-size: 75px;"><i class="fa-solid fa-clipboard"></i></div>
                        <div class="mt-2">REPORTS</div>
                    </div>
                </button>
            </form>

            <button style="border: none; background-color: white;" class="col-3">
                <div style="height:200px;" class="d-flex flex-column align-items-center text-bg-primary p-3">
                    <div style="font-size: 75px;"><i class="fa-solid fa-database"></i></div>
                    <div>DATA MART</div>
                </div>
            </button>
        </div>
    </div>

</body>

</html>