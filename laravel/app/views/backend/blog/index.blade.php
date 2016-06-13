 
 <ul class="breadcrumb">
    <li><a href="{{ URL::route('getDashboard') }}"><i class="fa fa-home"></i> Početna</a></li>
    <li class="active"><a href="{{ URL::route('BlogIndex') }}">Pregled svih objava</a></li>
    
    <a href="{{ URL::route('BlogCreate') }}" class="pull-right" style="margin-top: -5px;">
        <button class="btn btn-primary btn-addon btn-sm">
            <i class="fa fa-plus"></i> Dodaj novu objavu
        </button>
    </a>
</ul>
        
<div class="panel-heading">
    Pregled svih objava
</div>

<div class="panel-body table-responsive">

    <table class="table table-hover" id="blog-list">
        <thead>
            <tr>
                <th>Id</th>
                <th>Naslov</th>
                <th>Datum</th>
                <th>Istaknuta slika</th>
                <th>Kratki sadržaj</th>
                <th>Status</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-1" class="btn btn-danger btn-xs" data-target="#delete-blog-id-1"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-2" class="btn btn-danger btn-xs" data-target="#delete-blog-id-2"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-3" class="btn btn-danger btn-xs" data-target="#delete-blog-id-3"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-4" class="btn btn-danger btn-xs" data-target="#delete-blog-id-4"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-5" class="btn btn-danger btn-xs" data-target="#delete-blog-id-5"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-6" class="btn btn-danger btn-xs" data-target="#delete-blog-id-6"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-7" class="btn btn-danger btn-xs" data-target="#delete-blog-id-7"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-8" class="btn btn-danger btn-xs" data-target="#delete-blog-id-8"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-9" class="btn btn-danger btn-xs" data-target="#delete-blog-id-9"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-10" class="btn btn-danger btn-xs" data-target="#delete-blog-id-10"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>11</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-11" class="btn btn-danger btn-xs" data-target="#delete-blog-id-11"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>12</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-12" class="btn btn-danger btn-xs" data-target="#delete-blog-id-12"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>13</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-13" class="btn btn-danger btn-xs" data-target="#delete-blog-id-13"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>14</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-14" class="btn btn-danger btn-xs" data-target="#delete-blog-id-14"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>15</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-15" class="btn btn-danger btn-xs" data-target="#delete-blog-id-15"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>16</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-16" class="btn btn-danger btn-xs" data-target="#delete-blog-id-16"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>17</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-17" class="btn btn-danger btn-xs" data-target="#delete-blog-id-17"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>18</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-18" class="btn btn-danger btn-xs" data-target="#delete-blog-id-18"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>19</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-19" class="btn btn-danger btn-xs" data-target="#delete-blog-id-19"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>20</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-20" class="btn btn-danger btn-xs" data-target="#delete-blog-id-20"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>21</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-21" class="btn btn-danger btn-xs" data-target="#delete-blog-id-21"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>22</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-22" class="btn btn-danger btn-xs" data-target="#delete-blog-id-22"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>23</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-23" class="btn btn-danger btn-xs" data-target="#delete-blog-id-23"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>24</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-24" class="btn btn-danger btn-xs" data-target="#delete-blog-id-24"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>25</td>
                <td>Nove tehnike za brušenje zubi</td>
                <td>10.05.2016</td>
                <td> {{ HTML::image('img/avatar.png', '', array('class' => 'blog-post-image')) }}</td>
                <td>Lorem ipsum dolor sit amet, ne mucius appareat est. Nec quod maluisset ea. Partem fierent officiis vel id. No eam iusto placerat, sea...</td>
                <td>Objavljeno</td>
                <td>
                    <a href="blog-edit.html">
                        <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                    </a>
                    <button type="button" id="btn-delete-blog-id-25" class="btn btn-danger btn-xs" data-target="#delete-blog-id-25"><i class="fa fa-times"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>


    <!-- Modal 1-->
    <div class="modal fade" id="delete-blog-id-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 1?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->
    <div class="modal fade" id="delete-blog-id-2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 2?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-->
    <div class="modal fade" id="delete-blog-id-3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 3?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-->
    <div class="modal fade" id="delete-blog-id-4" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 4?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5-->
    <div class="modal fade" id="delete-blog-id-5" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 5?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6-->
    <div class="modal fade" id="delete-blog-id-6" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 6?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 7-->
    <div class="modal fade" id="delete-blog-id-7" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 7?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 8-->
    <div class="modal fade" id="delete-blog-id-8" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 8?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 9-->
    <div class="modal fade" id="delete-blog-id-9" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 9?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 10-->
    <div class="modal fade" id="delete-blog-id-10" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 10?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 11-->
    <div class="modal fade" id="delete-blog-id-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 11?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 12-->
    <div class="modal fade" id="delete-blog-id-12" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 12?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 13-->
    <div class="modal fade" id="delete-blog-id-13" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 13?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 14-->
    <div class="modal fade" id="delete-blog-id-14" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 14?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 15-->
    <div class="modal fade" id="delete-blog-id-15" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 15?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 16-->
    <div class="modal fade" id="delete-blog-id-16" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 16?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 17-->
    <div class="modal fade" id="delete-blog-id-17" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 17?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 18-->
    <div class="modal fade" id="delete-blog-id-18" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 18?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 19-->
    <div class="modal fade" id="delete-blog-id-19" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 19?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 20-->
    <div class="modal fade" id="delete-blog-id-20" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 20?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 21-->
    <div class="modal fade" id="delete-blog-id-21" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 21?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 22-->
    <div class="modal fade" id="delete-blog-id-22" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 22?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 23-->
    <div class="modal fade" id="delete-blog-id-23" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 23?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 24-->
    <div class="modal fade" id="delete-blog-id-24" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 24?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 25-->
    <div class="modal fade" id="delete-blog-id-25" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati blog post id: 25?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
    $(document).ready(function() {
        $("#btn-delete-blog-id-1").click(function() { 
            $('#delete-blog-id-1').modal('show');
        });
        $("#btn-delete-blog-id-2").click(function() {
            $('#delete-blog-id-2').modal('show');
        });
        $("#btn-delete-blog-id-3").click(function() {
            $('#delete-blog-id-3').modal('show');
        });
        $("#btn-delete-blog-id-4").click(function() {
            $('#delete-blog-id-4').modal('show');
        });
        $("#btn-delete-blog-id-5").click(function() {
            $('#delete-blog-id-5').modal('show');
        });
        $("#btn-delete-blog-id-6").click(function() {
            $('#delete-blog-id-6').modal('show');
        });
        $("#btn-delete-blog-id-7").click(function() {
            $('#delete-blog-id-7').modal('show');
        });
        $("#btn-delete-blog-id-8").click(function() {
            $('#delete-blog-id-8').modal('show');
        });
        $("#btn-delete-blog-id-9").click(function() {
            $('#delete-blog-id-9').modal('show');
        });
        $("#btn-delete-blog-id-10").click(function() {
            $('#delete-blog-id-10').modal('show');
        });
        $("#btn-delete-blog-id-11").click(function() {
            $('#delete-blog-id-11').modal('show');
        });
        $("#btn-delete-blog-id-12").click(function() {
            $('#delete-blog-id-12').modal('show');
        });
        $("#btn-delete-blog-id-13").click(function() {
            $('#delete-blog-id-13').modal('show');
        });
        $("#btn-delete-blog-id-14").click(function() {
            $('#delete-blog-id-14').modal('show');
        });
        $("#btn-delete-blog-id-15").click(function() {
            $('#delete-blog-id-15').modal('show');
        });
        $("#btn-delete-blog-id-16").click(function() {
            $('#delete-blog-id-16').modal('show');
        });
        $("#btn-delete-blog-id-17").click(function() {
            $('#delete-blog-id-17').modal('show');
        });
        $("#btn-delete-blog-id-18").click(function() {
            $('#delete-blog-id-18').modal('show');
        });
        $("#btn-delete-blog-id-19").click(function() {
            $('#delete-blog-id-19').modal('show');
        });
        $("#btn-delete-blog-id-20").click(function() {
            $('#delete-blog-id-20').modal('show');
        });
        $("#btn-delete-blog-id-21").click(function() {
            $('#delete-blog-id-21').modal('show');
        });
        $("#btn-delete-blog-id-22").click(function() {
            $('#delete-blog-id-22').modal('show');
        });
        $("#btn-delete-blog-id-23").click(function() {
            $('#delete-blog-id-23').modal('show');
        });
        $("#btn-delete-blog-id-24").click(function() {
            $('#delete-blog-id-24').modal('show');
        });
        $("#btn-delete-blog-id-25").click(function() {
            $('#delete-blog-id-25').modal('show');
        });
        $('#blog-list').DataTable( 
        {
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.11/i18n/Croatian.json"
            }
        }

        );
    });
    </script>