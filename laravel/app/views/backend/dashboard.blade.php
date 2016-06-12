  <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="img/avatar2.png" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Josip Čes</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li>
                        <a href="dashboard.html">
                            <i class="fa fa-dashboard"></i> <span>Početna</span>
                        </a>
                    </li>
                    <li>
                        <a href="dentist-list.html">
                            <i class="fa fa-male"></i> <span>Zubari</span>
                        </a>
                    </li>
                    <li>
                        <a href="patient-list.html">
                            <i class="fa fa-user"></i> <span>Pacijenti</span>
                        </a>
                    </li>
                    <li>
                        <a href="blog-list.html">
                            <i class="fa fa-book"></i> <span>Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="quote-list.html">
                            <i class="fa fa-asterisk"></i> <span>Upiti</span>
                        </a>
                    </li>
                    <li>
                        <a href="review-list.html">
                            <i class="fa fa-comment"></i> <span>Recenzije</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Main content -->
            <section class="content">
                <div class="row" style="margin-bottom:5px;">
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-red"><i class="fa fa-user"></i></span>
                            <div class="sm-st-info">
                                <span>3200</span> Ukupno pacijenata
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-violet"><i class="fa fa-male"></i></span>
                            <div class="sm-st-info">
                                <span>2200</span> Ukupno zubara
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-green"><i class="fa fa-asterisk"></i></span>
                            <div class="sm-st-info">
                                <span>4567</span> Ukupno upita za posao
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-blue"><i class="fa fa-comment"></i></span>
                            <div class="sm-st-info">
                                <span>100,320</span> Ukupno recenzija
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="bg-white">
                            <header class="panel-heading">
                                Pregled zadnje dodanih zubara
                            </header>
                            <div class="panel-body table-responsive">
                                <table class="table table-hover" id="dentist-list">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Ime</th>
                                            <th>Prezime</th>
                                            <th>Datum</th>
                                            <th>Akcije</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Pero</td>
                                            <td>Perić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="dentist-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="dentist-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-dentist-id-1" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-1"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Pero</td>
                                            <td>Perić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="dentist-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="dentist-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-dentist-id-2" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-2"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Pero</td>
                                            <td>Perić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="dentist-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="dentist-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-dentist-id-3" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-3"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Pero</td>
                                            <td>Perić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="dentist-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="dentist-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-dentist-id-4" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-4"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Pero</td>
                                            <td>Perić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="dentist-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="dentist-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-dentist-id-5" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-5"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Pero</td>
                                            <td>Perić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="dentist-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="dentist-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-dentist-id-6" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-6"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Pero</td>
                                            <td>Perić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="dentist-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="dentist-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-dentist-id-7" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-7"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Pero</td>
                                            <td>Perić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="dentist-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="dentist-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-dentist-id-8" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-8"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Pero</td>
                                            <td>Perić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="dentist-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="dentist-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-dentist-id-9" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-9"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Pero</td>
                                            <td>Perić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="dentist-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="dentist-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-dentist-id-10" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-10"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" bg-white">
                            <header class="panel-heading">
                                Pregled zadnje dodanih pacijenata
                            </header>
                            <div class="panel-body table-responsive">
                                <table class="table table-hover" id="patient-list">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Ime</th>
                                            <th>Prezime</th>
                                            <th>Datum</th>
                                            <th>Akcije</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ivo</td>
                                            <td>Ivić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="patient-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="patient-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-patient-id-1" class="btn btn-danger btn-xs" data-target="#delete-patient-id-1"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ivo</td>
                                            <td>Ivić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="patient-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="patient-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-patient-id-2" class="btn btn-danger btn-xs" data-target="#delete-patient-id-2"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ivo</td>
                                            <td>Ivić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="patient-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="patient-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-patient-id-3" class="btn btn-danger btn-xs" data-target="#delete-patient-id-3"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Ivo</td>
                                            <td>Ivić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="patient-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="patient-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-patient-id-4" class="btn btn-danger btn-xs" data-target="#delete-patient-id-4"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Ivo</td>
                                            <td>Ivić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="patient-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="patient-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-patient-id-5" class="btn btn-danger btn-xs" data-target="#delete-patient-id-5"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Ivo</td>
                                            <td>Ivić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="patient-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="patient-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-patient-id-6" class="btn btn-danger btn-xs" data-target="#delete-patient-id-6"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Ivo</td>
                                            <td>Ivić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="patient-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="patient-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-patient-id-7" class="btn btn-danger btn-xs" data-target="#delete-patient-id-7"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Ivo</td>
                                            <td>Ivić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="patient-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="patient-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-patient-id-8" class="btn btn-danger btn-xs" data-target="#delete-patient-id-8"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Ivo</td>
                                            <td>Ivić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="patient-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="patient-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-patient-id-9" class="btn btn-danger btn-xs" data-target="#delete-patient-id-9"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Ivo</td>
                                            <td>Ivić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="patient-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="patient-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-patient-id-10" class="btn btn-danger btn-xs" data-target="#delete-patient-id-10"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt30">
                    <div class="col-md-6">
                        <div class="bg-white">
                            <header class="panel-heading">
                                Pregled zadnjih upita
                            </header>
                            <div class="panel-body table-responsive">
                                <table class="table table-hover" id="quote-list">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Ime</th>
                                            <th>Prezime</th>
                                            <th>Datum</th>
                                            <th>Akcije</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Marko</td>
                                            <td>Merić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="quote-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="quote-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-quote-id-1" class="btn btn-danger btn-xs" data-target="#delete-quote-id-1"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Marko</td>
                                            <td>Merić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="quote-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="quote-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-quote-id-2" class="btn btn-danger btn-xs" data-target="#delete-quote-id-2"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Marko</td>
                                            <td>Merić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="quote-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="quote-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-quote-id-3" class="btn btn-danger btn-xs" data-target="#delete-quote-id-3"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Marko</td>
                                            <td>Merić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="quote-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="quote-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-quote-id-4" class="btn btn-danger btn-xs" data-target="#delete-quote-id-4"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Marko</td>
                                            <td>Merić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="quote-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="quote-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-quote-id-5" class="btn btn-danger btn-xs" data-target="#delete-quote-id-5"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Marko</td>
                                            <td>Merić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="quote-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="quote-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-quote-id-6" class="btn btn-danger btn-xs" data-target="#delete-quote-id-6"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Marko</td>
                                            <td>Merić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="quote-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="quote-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-quote-id-7" class="btn btn-danger btn-xs" data-target="#delete-quote-id-7"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Marko</td>
                                            <td>Merić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="quote-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="quote-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-quote-id-8" class="btn btn-danger btn-xs" data-target="#delete-quote-id-8"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Marko</td>
                                            <td>Merić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="quote-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="quote-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-quote-id-9" class="btn btn-danger btn-xs" data-target="#delete-quote-id-9"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Marko</td>
                                            <td>Merić</td>
                                            <td>01.01.2000</td>
                                            <td>
                                                <a href="quote-view.html">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                                </a>
                                                <a href="quote-edit.html">
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <button type="button" id="btn-delete-quote-id-10" class="btn btn-danger btn-xs" data-target="#delete-quote-id-10"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                     <div class="bg-white">
                        <header class="panel-heading">
                            Pregled zadnjih recenzija
                        </header>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover" id="review-list">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Ime</th>
                                        <th>Prezime</th>
                                        <th>Datum</th>
                                        <th>Akcije</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Đuro</td>
                                        <td>Đurić</td>
                                        <td>01.01.2000</td>
                                        <td>
                                            <a href="review-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="review-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-review-id-1" class="btn btn-danger btn-xs" data-target="#delete-review-id-1"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Đuro</td>
                                        <td>Đurić</td>
                                        <td>01.01.2000</td>
                                        <td>
                                            <a href="review-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="review-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-review-id-2" class="btn btn-danger btn-xs" data-target="#delete-review-id-2"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Đuro</td>
                                        <td>Đurić</td>
                                        <td>01.01.2000</td>
                                        <td>
                                            <a href="review-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="review-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-review-id-3" class="btn btn-danger btn-xs" data-target="#delete-review-id-3"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Đuro</td>
                                        <td>Đurić</td>
                                        <td>01.01.2000</td>
                                        <td>
                                            <a href="review-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="review-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-review-id-4" class="btn btn-danger btn-xs" data-target="#delete-review-id-4"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Đuro</td>
                                        <td>Đurić</td>
                                        <td>01.01.2000</td>
                                        <td>
                                            <a href="review-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="review-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-review-id-5" class="btn btn-danger btn-xs" data-target="#delete-review-id-5"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Đuro</td>
                                        <td>Đurić</td>
                                        <td>01.01.2000</td>
                                        <td>
                                            <a href="review-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="review-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-review-id-6" class="btn btn-danger btn-xs" data-target="#delete-review-id-6"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Đuro</td>
                                        <td>Đurić</td>
                                        <td>01.01.2000</td>
                                        <td>
                                            <a href="review-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="review-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-review-id-7" class="btn btn-danger btn-xs" data-target="#delete-review-id-7"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Đuro</td>
                                        <td>Đurić</td>
                                        <td>01.01.2000</td>
                                        <td>
                                            <a href="review-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="review-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-review-id-8" class="btn btn-danger btn-xs" data-target="#delete-review-id-8"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Đuro</td>
                                        <td>Đurić</td>
                                        <td>01.01.2000</td>
                                        <td>
                                            <a href="review-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="review-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-review-id-9" class="btn btn-danger btn-xs" data-target="#delete-review-id-9"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Đuro</td>
                                        <td>Đurić</td>
                                        <td>01.01.2000</td>
                                        <td>
                                            <a href="review-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="review-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-review-id-10" class="btn btn-danger btn-xs" data-target="#delete-review-id-10"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
                </div>
            </section>
            <!-- /.content -->
            <div class="row">
                <div class="footer-main">
                    Copyright &copy dentist-finder, 2016
                </div>
            </div>
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- Modal 1-zubar-->
    <div class="modal fade" id="delete-dentist-id-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 1?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-zubar-->
    <div class="modal fade" id="delete-dentist-id-2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 2?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-zubar-->
    <div class="modal fade" id="delete-dentist-id-3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 3?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-zubar-->
    <div class="modal fade" id="delete-dentist-id-4" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 4?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5-zubar-->
    <div class="modal fade" id="delete-dentist-id-5" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 5?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6-zubar-->
    <div class="modal fade" id="delete-dentist-id-6" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 6?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 7-zubar-->
    <div class="modal fade" id="delete-dentist-id-7" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 7?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 8-zubar-->
    <div class="modal fade" id="delete-dentist-id-8" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 8?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 9-zubar-->
    <div class="modal fade" id="delete-dentist-id-9" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 9?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 10-zubar-->
    <div class="modal fade" id="delete-dentist-id-10" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 10?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 1-pacijent-->
    <div class="modal fade" id="delete-patient-id-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati pacijenta id: 1?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-pacijent-->
    <div class="modal fade" id="delete-patient-id-2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati pacijenta id: 2?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-pacijent-->
    <div class="modal fade" id="delete-patient-id-3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati pacijenta id: 3?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-pacijent-->
    <div class="modal fade" id="delete-patient-id-4" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati pacijenta id: 4?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5-pacijent-->
    <div class="modal fade" id="delete-patient-id-5" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati pacijenta id: 5?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6-pacijent-->
    <div class="modal fade" id="delete-patient-id-6" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati pacijenta id: 6?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 7-pacijent-->
    <div class="modal fade" id="delete-patient-id-7" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati pacijenta id: 7?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 8-pacijent-->
    <div class="modal fade" id="delete-patient-id-8" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati pacijenta id: 8?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 9-pacijent-->
    <div class="modal fade" id="delete-patient-id-9" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati pacijenta id: 9?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 10-pacijent-->
    <div class="modal fade" id="delete-patient-id-10" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati pacijenta id: 10?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 1-upit-->
    <div class="modal fade" id="delete-quote-id-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati upit id: 1?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-upit-->
    <div class="modal fade" id="delete-quote-id-2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati upit id: 2?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-upit-->
    <div class="modal fade" id="delete-quote-id-3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati upit id: 3?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-upit-->
    <div class="modal fade" id="delete-quote-id-4" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati upit id: 4?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5-upit-->
    <div class="modal fade" id="delete-quote-id-5" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati upit id: 5?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6-upit-->
    <div class="modal fade" id="delete-quote-id-6" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati upit id: 6?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 7-upit-->
    <div class="modal fade" id="delete-quote-id-7" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati upit id: 7?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 8-upit-->
    <div class="modal fade" id="delete-quote-id-8" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati upit id: 8?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 9-upit-->
    <div class="modal fade" id="delete-quote-id-9" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati upit id: 9?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 10-upit-->
    <div class="modal fade" id="delete-quote-id-10" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati upit id: 10?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 1-recenzija-->
    <div class="modal fade" id="delete-review-id-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati recenziju id: 1?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-recenzija-->
    <div class="modal fade" id="delete-review-id-2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati recenziju id: 2?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-recenzija-->
    <div class="modal fade" id="delete-review-id-3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati recenziju id: 3?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-recenzija-->
    <div class="modal fade" id="delete-review-id-4" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati recenziju id: 4?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5-recenzija-->
    <div class="modal fade" id="delete-review-id-5" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati recenziju id: 5?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6-recenzija-->
    <div class="modal fade" id="delete-review-id-6" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati recenziju id: 6?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 7-recenzija-->
    <div class="modal fade" id="delete-review-id-7" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati recenziju id: 7?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 8-recenzija-->
    <div class="modal fade" id="delete-review-id-8" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati recenziju id: 8?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 9-recenzija-->
    <div class="modal fade" id="delete-review-id-9" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati recenziju id: 9?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 10-recenzija-->
    <div class="modal fade" id="delete-review-id-10" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati recenziju id: 10?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ./wrapper -->
    <!-- Le javascript
