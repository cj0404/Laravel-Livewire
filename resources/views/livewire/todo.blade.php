<center>
<div>
    <input type="text" class="p-2 rounded-md bg-gray-800 text-teal-200" placeholder="Add a new todo" wire:model="todo">
    <button class="p-2 bg-teal-600 rounded-md text-white" wire:click="addTodo">Add Todo</button>

    <ul>
        @foreach ($todos as $todo)
            <li class="p-2 text-teal-200 font-bold">{{ $todo }}</li>
        @endforeach
    </ul>

</div>
</center>

{{--<center>
    <div class="space-y-4">
        <div>
            <input 
                type="text" 
                class="p-2 rounded-md bg-gray-800 text-teal-200" 
                placeholder="Add a new todo" 
                wire:model="todo"
            >
            <button 
                class="p-2 bg-teal-600 rounded-md text-white" 
                wire:click="addTodo"
            >
                Add Todo
            </button>
        </div>
    
        <div class="bg-gray-700 p-4 rounded-md">
            <ul class="space-y-3">
                @foreach ($todos as $todo)
                    <li class="p-2 text-teal-200 font-bold">{{ $todo }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    </center>-}}
    

