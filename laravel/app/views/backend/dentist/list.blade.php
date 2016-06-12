  <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="img/avatar3.png" class="img-circle" alt="User Image" />
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
            <div class="row-top">
                <!-- Tablica -->
                <div class="col-md-12">
                    <!-- Tipka za dodaj novog zubara -->
                    <div class="panel-footer bg-white">
                        <a href="dentist-add.html">
                            <button class="btn btn-primary btn-addon btn-sm">
                                <i class="fa fa-plus"></i> Dodaj novog zubara
                            </button>
                        </a>
                    </div>
                    <!-- Kraj tipke -->
                    <section class="panel">
                        <header class="panel-heading">
                            Pregled svih zubara
                        </header>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover" id="dentist-list">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Ime</th>
                                        <th>Prezime</th>
                                        <th>Kontakt</th>
                                        <th>Lokacija</th>
                                        <th>Usluge</th>
                                        <th><i class="fa fa-star"></i></th>
                                        <th>Akcije</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
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
                                        <td>Jozo</td>
                                        <td>Jozić</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
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
                                        <td>Mijo</td>
                                        <td>Mijić</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
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
                                        <td>Mirko</td>
                                        <td>Mirič</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Daruvar</td>
                                        <td>Brušenje zubi </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
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
                                        <td>Dinka</td>
                                        <td>Božić</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Zagreb</td>
                                        <td>Stavljanje krunice</td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-5" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-25"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Borna</td>
                                        <td>Šarić</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Zadar</td>
                                        <td>Brušenje zubi</td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
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
                                        <td>Nikolina</td>
                                        <td>Tikić</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Slavonski Brod</td>
                                        <td>Ugradnja plombi </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
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
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
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
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
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
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
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
                                    <tr>
                                        <td>11</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-11" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-11"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-12" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-12"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-13" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-13"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-14" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-14"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-15" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-15"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-16" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-16"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-17" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-17"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-18" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-18"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-19" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-19"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-20" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-20"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-21" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-21"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-22" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-22"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-23" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-23"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-24" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-24"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Marko</td>
                                        <td>Marković</td>
                                        <td>09x/xxx-xx-xx</td>
                                        <td>Osijek</td>
                                        <td>Brušenje zubi, ugradnja plombi, </td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="dentist-view.html">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="dentist-edit.html">
                                                <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button type="button" id="btn-delete-dentist-id-25" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-25"><i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
                <!--Kraj tablice -->
            </div>
            <div class="row">
                <div class="footer-main">
                    Copyright &copy dentist-finder, 2016
                </div>
            </div>
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- Modal 1-->
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
    <!-- Modal 2-->
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
    <!-- Modal 3-->
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
    <!-- Modal 4-->
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
    <!-- Modal 5-->
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
    <!-- Modal 6-->
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
    <!-- Modal 7-->
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
    <!-- Modal 8-->
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
    <!-- Modal 9-->
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
    <!-- Modal 10-->
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
    <!-- Modal 11-->
    <div class="modal fade" id="delete-dentist-id-11" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 11?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 12-->
    <div class="modal fade" id="delete-dentist-id-12" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 12?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 13-->
    <div class="modal fade" id="delete-dentist-id-13" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 13?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 14-->
    <div class="modal fade" id="delete-dentist-id-14" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 14?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 15-->
    <div class="modal fade" id="delete-dentist-id-15" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 15?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 16-->
    <div class="modal fade" id="delete-dentist-id-16" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 16?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 17-->
    <div class="modal fade" id="delete-dentist-id-17" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 17?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 18-->
    <div class="modal fade" id="delete-dentist-id-18" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 18?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 19-->
    <div class="modal fade" id="delete-dentist-id-19" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 19?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 20-->
    <div class="modal fade" id="delete-dentist-id-20" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 20?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 21-->
    <div class="modal fade" id="delete-dentist-id-21" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 21?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 22-->
    <div class="modal fade" id="delete-dentist-id-22" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 22?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 23-->
    <div class="modal fade" id="delete-dentist-id-23" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 23?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 24-->
    <div class="modal fade" id="delete-dentist-id-24" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 24?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 25-->
    <div class="modal fade" id="delete-dentist-id-25" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara id: 25?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal za brisanje zubara -->
    <!-- Le javascript
