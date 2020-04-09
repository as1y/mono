<!-- Basic datatable -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Basic datatable</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
    </div>

    <table class="table datatable-basic">
        <thead>
        <tr>
            <th>Имя Фамилия</th>
            <th>Дата регистрации</th>
            <th>Ваш заработок</th>
        </tr>
        </thead>


        <tbody>
        <tr>
            <td>Вася</td>
            <td>Traffic Court Referee</td>
            <td>22 Jun 1972</td>
        </tr>
        <tr>
            <td>Jackelyn</td>
            <td>Weible</td>
            <td><a href="#">Airline Transport Pilot</a></td>
            <td>3 Oct 1981</td>
            <td><span class="badge badge-secondary">Inactive</span></td>
            <td class="text-center">
                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                            <i class="icon-menu9"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>




        </tbody>
    </table>
</div>
<!-- /basic datatable -->