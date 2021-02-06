<div class="flex rounded-md shadow-sm">
	<span class="inline-flex items-center px-4 rounded-l-md border border-r-0 border-gray-900 bg-gray-900 font-bold text-white text-sm">
		<i class="fas fa-search text-white pr-3"></i> Search
	</span>
	<input type="text" name="search" id="search" class="p-3 text-xl focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md border-gray-300" placeholder="Click to begin your search...">
</div>
<div class="hidden"  id="search_details">
	<div class="grid grid-cols-3 gap-4 mt-4">
		<div class="p-4 bg-gray-900">
			<h3 class="text-white font-bold text-xl tracking-wider mb-3">Role</h3>
			<select class="js-example-basic-multiple" name="states[]" multiple="multiple" style="width:100%;" placeholder="Select a Category">
				<option value="admn">Admin</option>
				<option value="unreg">Unregistered</option>
				<option value="spkr">Speaker</option>
				<option value="athr">Author</option>
			</select>
		</div>
		<div class="p-4 bg-gray-900">
			<h3 class="text-white font-bold text-xl tracking-wider mb-3">Ticket Type</h3>
			<select class="js-example-basic-multiple" name="states[]" multiple="multiple" style="width:100%;" placeholder="Select a Category">
				<option value="full">Full Conference</option>
				<option value="done">Day Two (May 9)</option>
				<option value="dtwo">Day Two (May 9)</option>
				<option value="dthree">Day Three (May 10)</option>
			</select>
		</div>
		<div class="p-4 bg-gray-900">
			<h3 class="text-white font-bold text-xl tracking-wider mb-3">Organization</h3>
			<select class="js-example-basic-multiple" name="states[]" multiple="multiple" style="width:100%;" placeholder="Select a Category">
				<option value="ow">OpenWater</option>
				<option value="dell">Dell</option>
				<option value="aapl">Apple</option>
			</select>
		</div>
	</div>
</div>
<div class="text-right">
	<button class="inline-flex justify-center font-bold bg-red-100 text-gray-800 mt-5 px-8 py-2 mr-5 text-sm text-white hover:bg-gray-800 hover:text-gray-100 rounded hidden" id="search_cancel">Cancel</button>
	<button class="inline-flex justify-center font-bold bg-blue-500 mt-5 px-8 py-2 text-sm text-white hover:bg-gray-800 hover:text-gray-100 rounded" id="search_button">Search</button>
</div>
<script>
	$("#search").focus(function() {
		$("#search_details").slideDown();
		$("#search_cancel").show();
	});
	$("#search_cancel").click(function() {
		$("#search_details").slideUp();
		$("#search_cancel").hide();
	});
</script>
