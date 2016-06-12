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
            <div class="row">
                <!-- Main content -->
                <div class="col-md-12">
                    <!-- Breadcrumbs -->
                    <ul class="breadcrumb">
                        <li><a href="dashboard.html"><i class="fa fa-home"></i> Početna</a></li>
                        <li><a href="dentist-list.html">Pregled svih zubara</a></li>
                        <li class="active">Dodaj zubara</li>
                    </ul>
                    <!-- /breadcrumbs -->
                    <!-- Slika, istaknute informacije, povijest bolesti -->
                    <div class="col-md-6">
                        <section class="panel">
                            <div class="panel-body">
                                <form role="form">
                                    <div class="col-md-6">
                                        <img src="img/avatar.png" style="width: 100%; height: auto;">
                                    </div>
                                    <div class="col-md-3"> 
                                    <div class="form-group">
                                    <label>Istaknuto:</label> 
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Datum registracije</label>
                                            <input type="text" class="form-control" id="exampleInputRegistrationDate" placeholder="Datum registracije">
                                        </div> 
                                        <div class="form-group">
                                            <label>OIB</label>
                                            <input type="text" class="form-control" placeholder="OIB">
                                        </div>
                                        <div class="form-group">
                                            <label>Email adresa 1</label>
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </form>
                                <div class="col-md-7 move-down">
                                <div class="form-group">
                                    <label for="exampleInputData">Podaci o ordinaciji</label> 
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputAdress">Adresa</label>
                                        <input type="text" class="form-control" id="exampleInputAdress" placeholder="Adresa">
                                    </div>
                                    <div class="form-group">
                                        <label>OIB</label>
                                        <input type="text" class="form-control" placeholder="OIB">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputKontakt">Kontakt</label>
                                        <input type="text" class="form-control" id="exampleInputKontakt" placeholder="Kontakt">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputWorkingHours">Radno vrijeme</label>
                                        <input type="email" class="form-control" id="exampleInputWorkingHours" placeholder="hh:mm - hh:mm">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputWorkingHours">Radno vrijeme</label>
                                        <input type="email" class="form-control" id="exampleInputWorkingHours" placeholder="hh:mm - hh:mm">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputWorkingHours">Radno vrijeme</label>
                                        <input type="email" class="form-control" id="exampleInputWorkingHours" placeholder="hh:mm - hh:mm">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="panel">
                        <div class="panel-body">
                        <div class="col-md-12">
                        <label for="exampleInputNotes">Bilješka zubaru</label>
                        <textarea cols="103" rows="8" style="border: 1px solid #CCC; border-radius: 5px;"> </textarea>
                        <div class="input-profile-picture">
                            <input type="file" class="filestyle" data-input="false">
                        </div>
                        <button type="submit" class="btn btn-info">Spremi</button>
                        </div>
                        </div>
                        </section>
                    </div>
                    <!-- / Slika, istaknute informacije, povijest bolesti -->
                    <!-- /pacijentova povijest -->
                    <!-- Informacije o pacijentu -->
                    <div class="col-md-6">
                        <section class="panel">
                            <div class="panel-body">
                                <form role="form">
                                <div class="form-group">
                                <label for="exampleInputData" class="move-left">Podaci o zubaru:</label>
                                </div>
                                    <div class="form-group">
                                        <label for="exampleInputName">Ime</label>
                                        <input type="text" class="form-control" id="exampleInputName" placeholder="Ime">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName">Prezime</label>
                                        <input type="text" class="form-control" id="exampleInputLastName" placeholder="Prezime">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAdress">Adresa</label>
                                        <input type="text" class="form-control" id="exampleInputAdress" placeholder="Adresa">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBirthday">Datum rođenja</label>
                                        <input type="text" class="form-control" id="exampleInputBirthday" placeholder="Datum rođenja">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email addresa 2</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputKontaktTel1">Kontakt Tel1</label>
                                        <input type="email" class="form-control" id="exampleInputKontaktTel1" placeholder="KontaktTel1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputKontaktTel2">Kontakt Tel2</label>
                                        <input type="email" class="form-control" id="exampleInputKontaktTel2" placeholder="KontaktTel2">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputYearsOfExperiance">Godine iskustva</label>
                                        <input type="text" class="form-control" id="exampleInputYearsOfExperiance" placeholder="Godine iskustva">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFeaturedOption">Istaknuti zubar</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value=""> Da
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- /Informacije o pacijentu -->
            <div class="row">
                <div class="footer-main">
                    Copyright &copy dentist-finder, 2016
                </div>
            </div>
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- ./wrapper -->
