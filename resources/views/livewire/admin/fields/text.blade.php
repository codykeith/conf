<div class="hidden" id="field_text_add">
	<div class="bg-white shadow overflow-hidden p-4 border-b border-gray-200 sm:rounded-lg">
		<div class="mb-3 pb-3 border-b text-xs">
			Field Alias: {profile.<span id="field_text_alias"></span>}
		</div>
		<div class="grid grid-cols-6 gap-6">
			<div class="col-span-6 sm:col-span-4">
				<label for="field_text_title" class="block text-sm font-medium text-gray-700">
					<h2 class="text-lg">Field Title</h2>
					Enter the label for this text field.
				</label>
				<input type="text" name="field_text_title" id="field_text_title" autocomplete="field-text-title" class="mt-1 p-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-200 rounded-md">
			</div>
			<div class="col-span-6 sm:col-span-1">
				<label for="field_text_size" class="block text-sm font-medium text-gray-700 mb-1">
					<h2 class="text-lg">Size</h2>
					Select field size.
				</label>
				<select id="field_text_size" name="field_text_size" autocomplete="field_text_size" class="mt-1 block w-full p-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
					<option value="4">Full Width</option>
					<option value="3">3/4 Width</option>
					<option value="2">1/2 Width</option>
					<option value="1">1/4 Width</option>
				</select>
			</div>
			<div class="col-span-6 sm:col-span-1">
				<label for="field_text_required" class="block text-sm font-medium text-gray-700">
					<h2 class="text-lg">Required</h2>
					Is this field required
				</label>
				<input id="field_text_required" name="field_text_required" type="checkbox" class="focus:ring-indigo-500 mt-2 h-4 w-4 text-indigo-600 border-gray-300 rounded">
			</div>
		</div>
		<div class="my-6 pt-4 border-t">
			<label for="field_text_help" class="block text-sm font-medium text-gray-700 mb-4">
				<h2 class="text-lg">Instructions and Help</h2>
				Enter information to assist with completing this field.
			</label>
			<textarea name="field_text_help" id="field_text_help"></textarea>
		</div>
		<button class="inline-flex justify-center font-bold bg-green-500 mb-5 px-8 py-2 text-sm text-white hover:bg-gray-800 hover:text-gray-100 rounded" id="save_text_field">Add Field</button>
	</div>
	<h1 class="text-lg my-4 font-bold">Preview</h1>
	<div class="bg-white shadow overflow-hidden p-4 border-b border-gray-200 sm:rounded-lg">
		<div class="grid grid-cols-4 gap-6">
			<div class="col-span-4" id="preview_field_text_size">
				<label for="none" class="block text-sm font-medium text-gray-700" styl>
					<h2 class="text-lg"><span  id="preview_field_text_title"></span><sup class="hidden text-red-700" id="preview_field_text_required">*</sup></h2>
					<div id="preview_field_text_help"></div>
				</label>
				<input type="text" class="mt-2 p-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-200 rounded-md">
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
	    $('#field_text_title').keyup(function(){
	        var txtBoxVal = $(this).val();
			var slug = txtBoxVal.toLowerCase().replace(/[^\w ]+/g,'').replace(/ +/g,'-');
	        $('#field_text_alias').text(slug);
			$('#preview_field_text_title').text(txtBoxVal);
	    });
	});
	$('#field_text_size').on('change', function (e) {
	    var optionSelected = $('option:selected', this);
	    var valueSelected = this.value;
		if (valueSelected == 4) {
			$('#preview_field_text_size').removeClass().addClass('col-span-4');
		} else if (valueSelected == 3) {
			$('#preview_field_text_size').removeClass().addClass('col-span-3');
		} else if (valueSelected == 2) {
			$('#preview_field_text_size').removeClass().addClass('col-span-2');
		} else if (valueSelected == 1) {
			$('#preview_field_text_size').removeClass().addClass('col-span-1');
		}
	});

$(document).ready(function() {
	$('#field_text_required').change(function() {
		if(this.checked) {
			$('#preview_field_text_required').show();
		} else {
			$('#preview_field_text_required').hide();
		}
	});
});
</script>
