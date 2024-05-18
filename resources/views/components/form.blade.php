<form class="max-w-sm mx-auto" method="post" action="/write/store">
    @csrf
    <div class="mb-5">
        <label for="author" class="block mb-2 text-sm font-medium text-gray-900">Author</label>
        <input type="text" id="author" name="author"
               class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:ring-1 focus:outline-none focus:ring-blue-200"
               required/>
    </div>
    <div class="mb-5">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
        <input type="text" id="title" name="title"
               class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:ring-1 focus:outline-none focus:ring-blue-200"
               required/></div>
    <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 ">
        <div class="px-4 py-2 bg-white rounded-t-lg">
            <textarea id="body" name="body" rows="4"
                      class="w-full px-0 text-sm text-gray-900 bg-white border-0 focus:outline-none"
                      placeholder="Write a story"></textarea>
        </div>
        <div class="flex items-center justify-between px-3 py-2 border-t">
            <button type="submit"
                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-800">
                Post story
            </button>
        </div>
    </div>
</form>
