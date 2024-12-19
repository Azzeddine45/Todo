<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Todo</title>
</head>
<body>
    <section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
            <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
                <div class="card-body py-4 px-4 px-md-5">

                    <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                    <i class="fas fa-check-square me-1"></i>
                    <u>Mes Taches</u>
                    </p>

                    <div class="pb-2">
                    <div class="card">
                        <div class="card-body">
                        <div class="d-flex flex-row align-items-center">
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                            placeholder="Add new...">
                            <a href="#!" data-mdb-tooltip-init title="Set due date"><i
                                class="fas fa-calendar-alt fa-lg me-3"></i></a>
                            <div>
                            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Ajouter</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <hr class="my-4">

                    <div class="d-flex justify-content-end align-items-center mb-4 pt-2 pb-3">
                    <p class="small mb-0 me-2 text-muted">Filtrer</p>
                    <select data-mdb-select-init>
                        <option value="1">Tous</option>
                        <option value="2">Complet</option>
                        <option value="3">Active</option>
                        <option value="4">A une date d'échéance</option>
                    </select>
                    <p class="small mb-0 ms-4 me-2 text-muted">Trier</p>
                    <select data-mdb-select-init>
                        <option value="1">Date d'ajout</option>
                        <option value="2">Date d'échéance</option>
                    </select>
                    <a href="#!" style="color: #23af89;" data-mdb-tooltip-init title="Ascending"><i
                        class="fas fa-sort-amount-down-alt ms-2"></i></a>
                    </div>

                    <ul class="list-group list-group-horizontal rounded-0 bg-transparent">
                        <li
                            class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                            <div class="form-check">
                            <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked1"
                                aria-label="..." checked />
                            </div>
                        </li>
                        <li
                            class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                            <p class="lead fw-normal mb-0"></p>
                        </li>
                        <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                            <div class="d-flex flex-row justify-content-end mb-1">
                            <a href="#!" class="text-info" data-mdb-tooltip-init title="Edit todo"><i
                                class="fas fa-pencil-alt me-3"></i></a>
                            <a href="#!" class="text-danger" data-mdb-tooltip-init title="Delete todo"><i
                                class="fas fa-trash-alt"></i></a>
                            </div>
                            <div class="text-end text-muted">
                            <a href="#!" class="text-muted" data-mdb-tooltip-init title="Created date">
                                <p class="small mb-0"><i class="fas fa-info-circle me-2"></i></p>
                            </a>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-group list-group-horizontal rounded-0">
                        <li
                            class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                            <div class="form-check">
                            <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked2"
                                aria-label="..." />
                            </div>
                        </li>
                    </ul>
                    <ul class="list-group list-group-horizontal rounded-0 mb-2">
                        <li
                            class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                            <div class="form-check">
                            <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked3"
                                aria-label="..." />
                            </div>
                        </li>
                        <li
                            class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                            <p class="lead fw-normal mb-0 bg-body-tertiary w-100 ms-n2 ps-2 py-1 rounded">Sign up for online
                            course</p>
                        </li>
                        <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                            <div class="d-flex flex-row justify-content-end mb-1">
                            <a href="#!" class="text-danger" data-mdb-tooltip-init title="Delete todo"><i
                                class="fas fa-trash-alt"></i></a>
                            </div>
                            <div class="text-end text-muted">
                            <a href="#!" class="text-muted" data-mdb-tooltip-init title="Created date">
                                <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>28th Jun 2020</p>
                            </a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>