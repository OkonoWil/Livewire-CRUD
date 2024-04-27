<div class="m-auto">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Todos lists
        </h2>
    </x-slot>
    

    <livewire:create />
    
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full">
                        <thead>
                            <tr class="flex justify-between w-full py-5">
                                <th class="w-1/4 text-center border-r">Name</th>
                                <th class="w-1/4 text-center border-r">User</th>
                                <th class="w-1/4 text-center border-r">Completed</th>
                                <th class="w-1/4 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="w-full">
                            @foreach ( $todos as $todo)
                                <livewire:todo-idem :todo="$todo" :key="$todo->id"/>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>
