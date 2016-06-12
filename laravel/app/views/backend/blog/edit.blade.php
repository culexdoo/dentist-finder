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
                    <li><a href="blog-list.html">Pregled svih objava</a></li>
                    <li class="active">Uredi objavu</li>
                </ul>
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Podaci o autoru
                        </header>
                        <div class="panel-body col-md-8">
                            <form role="form">
                                <div class="form-group">
                                    <label>Naslov</label>
                                    <input type="text" class="form-control" value="Nove tehnike za brušenje zubi">
                                </div> 
                                <div class="form-group">
                                    <label>Kratki sadržaj</label>
                                    <div class="textarea">
                                        <textarea style="width:100%; min-height: 100px; border: 1px solid #CCC; border-radius: 5px;"> </textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label>Sadržaj</label>
                                    <div class="textarea">
                                        <textarea style="width:100%; min-height: 150px; border: 1px solid #CCC; border-radius: 5px;"> </textarea>
                                    </div>
                                </div> 
                                <button type="submit" class="btn btn-info">Ažuriraj</button>
                            </form>
                        </div>
                        <div>
                            <div class="form-group">
                                <label class="col-md-5 control-label col-md-2" for="inputSuccess">Status</label>
                                <div class="col-md-4">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> Draft
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Odobreno
                                        </label>
                                    </div> 
                                    <img src="img/avatar.png" style="width: 300px; height: 300px;">
                                    <div class="input-profile-picture">
                                        <input type="file" class="filestyle" data-input="false">
                                    </div>
                                </div>
                            </div>
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
