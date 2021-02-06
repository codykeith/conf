<div class="text-right">
	<button class="inline-flex justify-center font-bold bg-blue-500 mb-5 px-8 py-2 text-sm text-white hover:bg-gray-800 hover:text-gray-100 rounded" id="preview_form">Preview Form</button>
	<button class="inline-flex justify-center font-bold bg-green-500 mb-5 px-8 py-2 text-sm text-white hover:bg-gray-800 hover:text-gray-100 rounded" id="add_field">Add a Field</button>
	<button class="inline-flex justify-center font-bold bg-red-500 mb-5 px-8 py-2 text-sm text-white hover:bg-gray-800 hover:text-gray-100 rounded hidden" id="cancel_add_field">Cancel</button>
</div>

<div class="hidden" id="field_selection">
	<div class="grid grid-cols-4 gap-4 mb-10">
		<div class="col-span-4">
			<h2 class="text-xl font-bold tracking-wide text-gray-600">Basic Inputs</h2>
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl" id="field_text">
			<h2 class="text-sm font-bold">Text</h2>
			Basic text input field.
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl" id="field_textarea">
			<h2 class="text-sm font-bold">Textarea</h2>
			Multi-line text input.
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Numbers</h2>
			Number input field.
		</div>
		<div class="col-span-4">
			<h2 class="text-xl font-bold tracking-wide text-gray-600">Validation Fields</h2>
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Email</h2>
			Email address with validation.
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Phone Number</h2>
			Phone number with validation.
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Website / URL</h2>
			Phone number with validation.
		</div>
		<div class="col-span-4">
			<h2 class="text-xl font-bold tracking-wide text-gray-600">Multiple Choices</h2>
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Radio Field</h2>
			Multiple choice, single input.
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Checkboxes</h2>
			Multiple choice, multiple input.
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Range</h2>
			Range selection tool.
		</div>
		<div class="col-span-4">
			<h2 class="text-xl font-bold tracking-wide text-gray-600">Dates &amp; Times</h2>
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Date</h2>
			Date selection field.
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Date Range</h2>
			Date range selection field.
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Time</h2>
			Time selection field.
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Time Range</h2>
			Time range selection field.
		</div>
		<div class="col-span-4">
			<h2 class="text-xl font-bold tracking-wide text-gray-600">Advanced Fields</h2>
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Address Block</h2>
			Address collection field.
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Array Collection</h2>
			Collect an array of similar data.
		</div>
		<div class="bg-gray-300 p-4 sm:rounded-lg shadow cursor-pointer">
			<h2 class="text-sm font-bold">Docusign <span class="text-xs text-green-600">(Paid)</span></h2>
			Digital signature collection.
		</div>
		<div class="col-span-4">
			<h2 class="text-xl font-bold tracking-wide text-gray-600">Utilities</h2>
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">File Upload</h2>
			File upload tool.
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Multiple File Upload</h2>
			Multiple file upload tool.
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Color Picker</h2>
			Color selection tool.
		</div>
		<div class="bg-white p-4 sm:rounded-lg shadow cursor-pointer hover:shadow-xl">
			<h2 class="text-sm font-bold">Button</h2>
			Button to link to external url.
		</div>
	</div>
</div>

<div id="field_list">
	<div class="flex flex-col">
		<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
			<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
				<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
					<table class="min-w-full divide-y divide-gray-200">
						<thead class="bg-gray-50">
							<tr>
								<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
									Field
								</th>
								<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
									Type
								</th>
								<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
									Restrictions
								</th>
								<th scope="col" class="relative px-6 py-3">
									<span class="sr-only">View / Edit</span>
								</th>
							</tr>
						</thead>
						<tbody class="bg-white divide-y divide-gray-200">
							<tr>
								<td class="px-6 py-4 whitespace-nowrap">
									<div class="text-sm font-medium text-gray-900">
										First Name
									</div>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									<div class="text-sm text-gray-500">Text Field</div>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
										Required
									</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
									<a href="{{route('admin-attendees-view')}}" class="text-indigo-400 hover:text-indigo-900">Edit</a>
								</td>
							</tr>
							<tr>
								<td class="px-6 py-4 whitespace-nowrap">
									<div class="text-sm font-medium text-gray-900">
										Last Name
									</div>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									<div class="text-sm text-gray-500">Text Field</div>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
										Required
									</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
									<a href="{{route('admin-attendees-view')}}" class="text-indigo-400 hover:text-indigo-900">Edit</a>
								</td>
							</tr>
							<tr>
								<td class="px-6 py-4 whitespace-nowrap">
									<div class="text-sm font-medium text-gray-900">
										Title
									</div>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									<div class="text-sm text-gray-500">Text Field</div>
								</td>
								<td class="px-6 py-4 whitespace-nowrap">
									<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
										Required
									</span>
								</td>
								<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
									<a href="{{route('admin-attendees-view')}}" class="text-indigo-400 hover:text-indigo-900">Edit</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@livewire('admin.fields.text')
@livewire('admin.fields.textarea')

<script>
	$( "#add_field" ).click(function() {
		$( "#field_selection" ).slideDown( "slow", function() {});
		$(this).hide();
		$( "#field_list" ).hide();
		$( "#preview_form" ).hide();
		$( "#cancel_add_field" ).show();
	});
	$( "#cancel_add_field" ).click(function() {
		$( "#field_selection" ).slideUp( "slow", function() {});
		$(this).hide();
		$( "#field_list" ).show();
		$( "#preview_form" ).show();
		$( "#add_field" ).show();
		$( "#field_text_add" ).hide();
		$( "#field_textarea_add" ).hide();
	});
	$( "#field_text" ).click(function() {
		$( "#field_selection" ).slideUp( "slow", function() {});
		$( "#field_text_add" ).show();
	});
	$( "#field_textarea" ).click(function() {
		$( "#field_selection" ).slideUp( "slow", function() {});
		$( "#field_textarea_add" ).show();
	});
</script>
