<div>
    @if ($success)
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden flex justify-between bg-green-300 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">
                    {{ $success }}
                </div>
                <button wire:click='removeSuccess' class=" px-2"><svg class="w-10 h-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM8.96963 8.96965C9.26252 8.67676 9.73739 8.67676 10.0303 8.96965L12 10.9393L13.9696 8.96967C14.2625 8.67678 14.7374 8.67678 15.0303 8.96967C15.3232 9.26256 15.3232 9.73744 15.0303 10.0303L13.0606 12L15.0303 13.9696C15.3232 14.2625 15.3232 14.7374 15.0303 15.0303C14.7374 15.3232 14.2625 15.3232 13.9696 15.0303L12 13.0607L10.0303 15.0303C9.73742 15.3232 9.26254 15.3232 8.96965 15.0303C8.67676 14.7374 8.67676 14.2625 8.96965 13.9697L10.9393 12L8.96963 10.0303C8.67673 9.73742 8.67673 9.26254 8.96963 8.96965Z"
                                fill="#fff"></path>
                        </g>
                    </svg></button>
            </div>
        </div>
    </div>
    @endif
    <div class="pt-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form wire:submit='create' class="w-full">
                        <h1 class="py-3 text-2xl font-bold">Create Todo</h1>
                        <div class="pt-2">
                            <label for="name" class="block font-medium text-md">Name : </label>
                            <input type="text" wire:model="form.name" id="name" class="w-full rounded-md dark:bg-gray-800">
                            @error('form.name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="pt-5">
                            <label for="description" class="block font-medium text-md">Description : </label>
                            <textarea wire:model="form.description" id="description" cols="30" rows="10" class="w-full rounded-md dark:bg-gray-800"></textarea>
                            @error('form.description')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="px-5 py-2 mt-4 text-white bg-green-400 rounded-lg">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>