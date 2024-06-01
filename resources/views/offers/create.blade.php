<x-layout>
    <form class="max-w-md" action="/offers" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Your offer's
                title</label>
            <input type="text" id="title" name="title"
                   class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="title"
                   value="{{old('title')}}"
            />

            @error('title')
            <p class="mt-2 text-sm text-red-600"><span
                    class="font-medium">Oops!</span> {{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="salary" class="block mb-2 text-sm font-medium text-gray-900 ">Your offer's
                salary</label>
            <input type="text" id="salary" name="salary"
                   class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="salary"
                   value="{{old('salary')}}"

            />
            @if($errors->has('salary'))
                @foreach($errors->get('salary') as $errrorMessage)
                    <p class="mt-2 text-sm text-red-600"><span
                            class="font-medium">Oops!</span> {{$errrorMessage}}</p>
                @endforeach
            @endif
        </div>
        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Your offers's
                description(optional)</label>
            <textarea id="description" rows="4" name="description"
                      class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                      placeholder="description"


            >{{old('description')}}</textarea>
        </div>
        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Tags</label>
            <select id="tags" rows="4" name="tags[]" multiple value="{{old('tags')}}"
                    class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
            >
                @forelse($tags as $tag)
                    <option value="{{$tag->id}}">{{ $tag->name }}</option>
                @empty
                    <option>No tags yet</option>
                @endforelse

            </select>
        </div>
        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Logo</label>
            <input type="file" name="logo">
        </div>
        <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            Post
        </button>
    </form>
</x-layout>
