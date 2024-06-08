<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="overflow-auto h-[32rem]">
                <h2 class="my-2 mb-2 ml-2 text-lg text-gray-600">All Chats</h2>
                @forelse ($users as $user)
                    <li>
                        <a href="{{ route('chat', $user->id) }}" 
                           class="flex rounded-lg items-center px-3 py-2 text-sm transition duration-150 ease-in-out bg-gray-100 border-b border-gray-300 cursor-pointer focus:outline-none" wire:navigate.hover>
                            <img class="object-cover w-10 h-10 rounded-full"
                                 src="{{ $user->avatar_url ?? 'https://cdn.pixabay.com/photo/2015/03/04/22/35/avatar-659652_1280.png' }}"
                                 alt="{{ $user->name }}" />
                            <div class="w-full pb-2">
                                <div class="flex justify-between">
                                    <span class="block ml-2 font-semibold text-gray-600 text-lg" style="margin-top: 9px">{{ $user->name }}</span>
                                    <span class="block ml-2 text-sm text-gray-600"></span>
                                </div>
                                <span class="block ml-2 text-sm text-gray-600">{{ $user->last_message }}</span>
                            </div>
                        </a>
                    </li>
                @empty
                    <p class="text-red-600 ml-2">No Users Found.</p>
                @endforelse
            </div>            
        </div>
    </div>
</x-app-layout>
