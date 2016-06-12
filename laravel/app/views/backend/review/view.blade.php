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
                    <li><a href="review-list.html">Pregled svih recenzija</a></li>
                    <li class="active">Vidi recenziju</li>
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
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="Ime">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputLastName">Prezime</label>
                                    <input type="text" class="form-control" id="exampleInputLastName" placeholder="Prezime">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputKontakt">Kontakt</label>
                                    <input type="text" class="form-control" id="exampleInputKontakt" placeholder="Kontakt">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDentist">Ime zubara</label>
                                    <input type="text" class="form-control" id="exampleInputDentist" placeholder="Ime zubara">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Recenzija pacijenta</label>
                                    <div class="textarea">
                                        <textarea rows="7" cols="150"> </textarea>
                                    </div>
                                </div>
                                <div class="stars">
                                    <form action="">
                                        <input class="star star-5" id="star-5" type="radio" name="star" />
                                        <label class="star star-5" for="star-5"></label>
                                        <input class="star star-4" id="star-4" type="radio" name="star" />
                                        <label class="star star-4" for="star-4"></label>
                                        <input class="star star-3" id="star-3" type="radio" name="star" />
                                        <label class="star star-3" for="star-3"></label>
                                        <input class="star star-2" id="star-2" type="radio" name="star" />
                                        <label class="star star-2" for="star-2"></label>
                                        <input class="star star-1" id="star-1" type="radio" name="star" />
                                        <label class="star star-1" for="star-1"></label>
                                    </form>
                                </div>
                                <a href="review-edit.html">
                                <button type="button" class="btn btn-info">Uredi</button>
                                </a>
                            </form>
                        </div> 
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
   
