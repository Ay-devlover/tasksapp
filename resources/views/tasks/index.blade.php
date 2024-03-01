<x-app-layout title="Tasks">

    <h1>Tasks</h1>
    <form action="/tasks" method="post">
        @csrf

        <input type="text" name="list" placeholder="Name New Tasks" required>
        <button type="submit">Add</button>

    </form>
    <ul style="list-style: none">
        @foreach ($tasks as $index => $task)
            <li style="margin: 15px 15px">
                {{ $index + 1 }} - {{ $task->list }}
                <div>
                    <a style="color: yellow" href="/tasks/{{ $task->id }}/edit">Edit</a>
                    <form action="/tasks/{{ $task->id }}" method="post" style="display: inline">
                        @csrf
                        @method('delete')

                        <button type="submit"> delete </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

</x-app-layout>
