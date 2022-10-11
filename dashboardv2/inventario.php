<div class="container-fluid px-4">
    <h1 class="mt-4">Inventario</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Inventario</li>
    </ol>
    <div class="row">

        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Ventas</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Mejores ventas</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Warning Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Success Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Ventas Mejores</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Ventas Mejores</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

        <!-- anadimos datos para visualizar-->


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Informe de ventas
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <!-- tabla con php-->
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>