<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Pizzas Sold Per Day</title>
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

    <!-- table -->
    <div class="container mt-2">
        <h1>Pizzas Sold Per Day</h1>

        <table class="table table-primary table-striped">
            <thead class="fs-4">
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Pizza ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Pizza Sold</th>
                </tr>
            </thead>
            <tbody class="fs-5">
            @foreach($pizzacounts as $pizzacount)
                <tr>
                    <th scope="row">{{$pizzacount['Dates']}}</th>
                    <td>{{$pizzacount['PizzaID']}}</td>
                    <td>{{$pizzacount['PizzaName']}}</td>
                    <td>{{$pizzacount['PizzaCount']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <form action="/admin/reports">
            <button class="btn btn-link">Return to Reports</button>
        </form>
    </div>

</body>

</html>