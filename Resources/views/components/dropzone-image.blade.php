<div id="{{$id}}" class="dropzone-{{$size}} dropzone-{{$name}}">

	<input type="hidden" id="image" name="{{$name}}" value="{{$image or ''}}">
	<input type="hidden" id="uploading" name="uploading" value="0">

	<div class="dropzone-container" @if($image != null) style="display:none;" @endif>

		<div id="image-dropzone" class="dropzone image-container">

			<div class="progress-bar"></div>
			<div class="background-image" @if($size == 'avatar') style="background-image:url('{{asset('images/default-avatar.png')}}')" @endif></div>

			<div class="dz-message"></div>

            <div class="fallback">
                <input name="image" type="file" multiple />
            </div>

            <div class="message">
    			<p>Glissez une image ou<br><span class="link"><i class="fa fa-upload"></i> &nbsp; cliquez-ici</span></p>
					@if(isset($sizeText))
						<p>( Taille {{$sizeText}} )</p>
					@endif
    		</div>
    	</div>

	</div>


	<div class="image-container uploaded" @if($image == null) style="display:none;" @endif>
		<div class="background-image" @if($image != null) style="background-image:url('{{ Storage::url($image)}}')" @endif>
		</div>
		<div class="actions">
			<a href="" class="btn btn-table" id="remove-picture"><i class="fa fa-trash"></i> &nbsp; Supprimer </a>
		</div>
	</div>

</div>

<!-- End drop zone -->
@push('javascripts')
	<script>

		var resizeWidth = {{ isset($resizeWidth) ? $resizeWidth : 'null' }};

		$(".dropzone-{{$name}}").imageUploader({
			resizeWidth : resizeWidth,
			//submitForm : '.submit-form',
			csrf_token : "{{ csrf_token() }}"
		});
	</script>

@endpush
