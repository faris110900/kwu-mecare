<div>

    @foreach ($ceritas as $cerita)
    <div class=" p-4 my-4 bg-white shadow rounded-md">
        <div>
            <span class="text-xl">{{ $cerita->user->name }}</span>
            <span class="text-gray-600">{{ $cerita->created_at->diffForHumans() }}</span>
        </div>
        <span>{{ $cerita->content }}</span>
    </div>
    @endforeach

</div>