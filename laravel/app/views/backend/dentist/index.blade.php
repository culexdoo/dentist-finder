 
 <ul class="breadcrumb">
    <li><a href="{{ URL::route('getDashboard') }}"><i class="fa fa-home"></i> Početna</a></li>
    <li class="active"><a href="{{ URL::route('DentistIndex') }}">Pregled svih zubara</a></li>
    
    <a href="{{ URL::route('DentistCreate') }}" class="pull-right" style="margin-top: -5px;">
        <button class="btn btn-success btn-addon btn-sm">
            <i class="fa fa-plus"></i> Dodaj novog zubara
        </button>
    </a>
</ul>
        
<div class="panel-heading">
    <h4>Pregled svih zubara</h4>
</div>

<div class="panel-body table-responsive">

    <table class="table table-hover" id="entries-list">
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
             @if (count($entries['entries']) > 0) 
                @foreach($entries['entries'] as $entry)
                <tr>
                    <td>{{ $entry->id }}</td>
                    <td>{{ $entry->title }}</td>
                    <td>10.05.2016</td>
                    <td>
                        @if ($entry->image != '' || $entry->image != null)
                            <img src="{{ url('/') }}/uploads/frontend/dentist/{{ $entry->image }}" class="dentist-post-image img-responsive" />
                        @endif 
                    </td>
                    <td>{{ $entry->intro }}</td>
                    <td>{{ $entry->status }}</td>
                    <td class="col-md-1">
                        <a href="#" target="_blank">
                            <button class="btn btn-info btn-xs"><i class="fa fa-eye"></i></button>
                        </a>
                        <a href="{{ URL::route('DentistEdit', array('id' => $entry->id)) }}">
                            <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                        </a>
                        <button type="button" id="btn-delete-dentist-id-{{ $entry->id }}" class="btn btn-danger btn-xs" data-target="#delete-dentist-id-{{ $entry->id }}"><i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

@if (count($entries['entries']) > 0) 
    @foreach($entries['entries'] as $entry)
    <!-- Modal {{ $entry->id }}-->
    <div class="modal fade" id="delete-dentist-id-{{ $entry->id }}" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pozor!</h4>
                </div>
                <div class="modal-body">
                    <p>Želite li obrisati zubara: {{ $entry->title }}?</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ URL::route('DentistDestroy', array('id' => $entry->id)) }}">
                        <button type="button" class="btn btn-default" data-ok="modal">U redu</button>
                    </a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endif 


    <script type="text/javascript">
    $(document).ready(function() {
        @if (count($entries['entries']) > 0) 
            @foreach($entries['entries'] as $entry)
                $("#btn-delete-dentist-id-{{ $entry->id }}").click(function() { 
                    $('#delete-dentist-id-{{ $entry->id }}').modal('show');
                });
            @endforeach
        @endif 
        $('#entries-list').DataTable( 
        {
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.11/i18n/Croatian.json"
            }
        }

        );
    });
    </script>