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
            <div class="row-top">
                <!-- Main content -->
                <ul class="breadcrumb">
                    <li><a href="dashboard.html"><i class="fa fa-home"></i> Početna</a></li>
                    <li><a href="quote-list.html">Upiti</a></li>
                    <li class="active">Vidi upit</li>
                </ul>
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Podaci o autoru
                        </header>
                        <div class="panel-body col-md-8">
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputName">Ime</label>
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="Ime" readonly="true">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputLastName">Prezime</label>
                                    <input type="text" class="form-control" id="exampleInputLastName" placeholder="Prezime" readonly="true">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email" readonly="true">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputKontakt">Kontakt</label>
                                    <input type="text" class="form-control" id="exampleInputKontakt" placeholder="Kontakt" readonly="true">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputDate">Datum kreiranja upita</label>
                                    <input type="text" class="form-control" id="exampleInputDate" placeholder="dd-mm-yyyy" readonly="true">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputQuoteTitle">Naslov oglasa</label>
                                    <input type="text" class="form-control" id="exampleInputQuoteTitle" placeholder="Naslov oglasa" readonly="true">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Sadržaj upita</label>
                                    <div class="textarea">
                                        <textarea rows="7" cols="150" style="border: 1px solid #CCC; border-radius: 5px;"> </textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="stat">
                                        <a href="#">
                                            <div class="stat-icon">
                                                <i class="fa fa-paperclip fa-2x stat-elem"></i>
                                            </div>
                                            <h5 class="stat-info">zub.png</h5>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>    
                        <!-- Odgovor na upit -->
                        <div class="panel-body col-md-9 ">
                            <label for="exampleInputTitle">Odgovor</label>
                            <div class="textarea">
                                <textarea rows="7" cols="150" style="border: 1px solid #CCC; border-radius: 5px;"> </textarea>
                            </div>
                            <a href="quote-edit.html">
                            <button type="button" class="btn btn-info">Uredi</button>
                            </a>
                        </div>
                        <!-- /Odgovor na upit -->
                    </section>
                </div>
            </div>
            <!-- /.content -->
            <div class="row">
                <div class="footer-main">
                    Copyright &copy dentist-finder, 2016
                </div>
            </div>
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- ./wrapper -->
