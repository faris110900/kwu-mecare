<div>

    @foreach ($ceritas as $cerita)
    <div class=" p-4 my-4 bg-white shadow rounded-md">
        <div>
            <span class="text-xl">{{ $cerita->user->name }}</span>
            <span class="text-gray-600">{{ $cerita->created_at->diffForHumans() }}</span>
            <button wire:click="showUpdateForm({{ $cerita->id }})" class="p-2 bg-teal-600 hover:bg-teal-500 text-white rounded-md" >Edit</button>
        </div>
        @if ($updateStateId !== $cerita->id)
            <span>{{ $cerita->content }}</span>
        @endif

        @if ($updateStateId === $cerita->id)
        <textarea wire:model="content" class="mt-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="content" id="" rows="3"></textarea>
        @endif

        <div class="flex justify-end">
            <button wire:click="update({{ $cerita->id }})" class="mt-2 px-4 py-2 bg-blue-600 text-white hover:bg-blue-400 rounded-md">Save</button>
        </div>
    </div>
    @endforeach

</div>