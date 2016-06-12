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
                        <li class="active">Vidi zubara</li>
                    </ul>
                    <!-- /breadcrumbs -->
                    <!-- Informacije o pacijentu -->
                    <div class="col-md-6">
                        <section class="panel">
                            <div class="panel-body">
                                <form role="form">
                                    <div class="col-md-6">
                                        <img src="img/avatar04.png" style="width: 100%; height: auto;">
                                    </div>
                                    <div class="col-md-6"> 
                                    <div class="form-group">
                                    <label for="examplePointedOut">Istaknuto:</label> 
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputRegistrationDate">Datum registracije</label>
                                            <input type="text" class="form-control" id="exampleInputRegistrationDate" value="15.05.2016" readonly="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNumberOfReviews">Broj recenzija</label>
                                            <input type="text" class="form-control" id="exampleInputNumberOfReviews" value="5" readonly="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputOIB">OIB</label>
                                            <input type="text" class="form-control" id="exampleInputOIB" value="123456789" readonly="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputKontakt">Kontakt</label>
                                            <input type="email" class="form-control" id="exampleInputKontakt" value="09x/xxx/xx-xx" readonly="true">
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
                                        <input type="text" class="form-control" id="exampleInputAdress" value="Zagrebačka 1" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputOIB">OIB</label>
                                        <input type="text" class="form-control" id="exampleInputOIB" value="123456789" readonly="true">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputKontakt">Kontakt</label>
                                        <input type="text" class="form-control" id="exampleInputKontakt" value="09x/xxx-xx-xx" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputWorkingHours">Radno vrijeme</label>
                                        <input type="email" class="form-control" id="exampleInputWorkingHours" value="08:00 - 20:00" readonly="true">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="panel">
                        <div class="panel-body">
                        <div class="col-md-12">
                        <label for="exampleInputNotes">Bilješka zubaru</label>
                        <textarea cols="103" rows="8" style="border: 1px solid #CCC; border-radius: 5px;"> </textarea>
                        <a href="dentist-edit.html">
                            <button type="button" class="btn btn-info">Uredi</button>
                        </a>
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
                                        <input type="text" class="form-control" id="exampleInputName" value="Ivo" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName">Prezime</label>
                                        <input type="text" class="form-control" id="exampleInputLastName" value="Ivić" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email addresa</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" value="test@gmail.com" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAdress">Adresa</label>
                                        <input type="text" class="form-control" id="exampleInputAdress" value="Zagrebačka 2" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputOIB">OIB</label>
                                        <input type="text" class="form-control" id="exampleInputOIB" value="123456798" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBirthday">Datum rođenja</label>
                                        <input type="text" class="form-control" id="exampleInputBirthday" value="10.05.2066" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputKontaktTel1">Kontakt1</label>
                                        <input type="email" class="form-control" id="exampleInputKontaktTel1" value="03x/xxx-xxx" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputKontaktTel2">Kontakt2</label>
                                        <input type="email" class="form-control" id="exampleInputKontaktTel2" value="03x/xxx-xxx" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputKontaktMob1">Kontakt1</label>
                                        <input type="email" class="form-control" id="exampleInputKontaktMob1" value="09x/xxx-xx-xx" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputKontaktMob2">Kontakt2</label>
                                        <input type="email" class="form-control" id="exampleInputKontaktMob2" value="09x/xxx-xx-xx" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputYearsOfExperiance">Godine iskustva</label>
                                        <input type="text" class="form-control" id="exampleInputYearsOfExperiance" value="10" readonly="true">
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
                <!-- Informacije o pacijentu -->
                <div class="row">
                    <div class="footer-main">
                        Copyright &copy dentist-finder, 2016
                    </div>
                </div>
            </div>
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- ./wrapper -->
