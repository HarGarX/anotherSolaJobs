@csrf
<div class="flex justify-between gap-3">
    <span class="w-1/2">
        <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Company
            Name</label>
        <input id="name" type="text" name="name" placeholder="Zain" autocomplete="given-name"
            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
            required />
    </span>
</div>

<label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">email</label>
<input id="email" type="text" name="email" placeholder="admin@admin.com" autocomplete="email"
    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
    required />

<label for="state" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">state</label>
<input id="state" type="text" name="state" placeholder="Red Nile" autocomplete=" given-state"
    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
    required />


<label for="logo" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">logo</label>
<input id="logo" type="file" name="logo" 
class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
    required />

