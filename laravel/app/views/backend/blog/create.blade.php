<!-- Main content -->
<ul class="breadcrumb">
    <li><a href="{{ URL::route('getDashboard') }}"><i class="fa fa-home"></i> Početna</a></li>
    <li><a href="{{ URL::route('BlogIndex') }}">Pregled svih objava</a></li>
    <li class="active">Dodaj objavu</li>
</ul>
<div class="panel-heading">
	<div class="row">
	    <div class="col-md-12">
    		<h5>Unos nove objave</h5>
    	</div>
    </div>
</div>
<div class="panel-body">
	<div class="row">
	    <div class="col-md-8">
	            <div class="form-group">
	                <label for="title">Naslov</label>
	                <input type="text" class="form-control" id="title" value="Naslov posta">
	            </div> 
	            <div class="form-group">
	                <label for="short-description">Kratki opis</label>
	                <div class="textarea">
	                    <textarea style="width:100%; min-height: 100px; border: 1px solid #CCC; border-radius: 5px;"> </textarea>
	                </div>
	            </div> 
	            <div class="form-group">
	                <label for="long-description">Dugi opis</label>
	                <div class="textarea">
	                    <textarea style="width:100%; min-height: 150px; border: 1px solid #CCC; border-radius: 5px;"> </textarea>
	                </div>
	            </div> 
	            <button type="submit" class="btn btn-info">Objavi</button>
	    </div>
	    <div class="col-md-4"> 
	       <div class="form-group">
	            <label class="col-md-12 control-label" for="status">Status</label>
	            <div class="col-md-12">
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
	            </div>
	        </div>
	        <div class="form-group"> 
	        	<label class="col-md-12 control-label" for="status">Istaknuta slika</label>
	            <div class="col-md-12">
	                <div class="input-profile-picture">
	                    <input type="file" class="filestyle" data-input="false">
	                </div>
                </div>
	        </div>
	    </div>
    </div>
</div>



<script type="text/javascript">
	$(document).ready(function() {
	    $(":file").filestyle();
	});
</script>