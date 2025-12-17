<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Projects') }}
        </h2>
                <a class="btn btn-primary text-white"  href="{{ route('projects.index') }}">ALL projects </a>


    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('projects.update',$project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                     <div>
                         <x-input-label for="title" :value="__('Title')" />
                         <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title',$project->title)" required autofocus autocomplete="title" />
                         <x-input-error :messages="$errors->get('title')" class="mt-2" />
                     </div>
                     <div>
                         <x-input-label for="image" :value="__('Image')" />
                         <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image',$project->image)" required autofocus autocomplete="image" />
                         <x-input-error :messages="$errors->get('image')" class="mt-2" />
                     </div>
                     <div>
                         <x-input-label for="link" :value="__('Link')" />
                         <x-text-input id="link" class="block mt-1 w-full" type="text" name="link" :value="old('link',$project->link)"  autofocus autocomplete="link" />
                         <x-input-error :messages="$errors->get('link')" class="mt-2" />
                     </div>
                     <div>
                         <x-input-label for="description" :value="__('Description')" />
                         <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description',$project->description)" required autofocus autocomplete="description" />
                         <x-input-error :messages="$errors->get('description')" class="mt-2" />
                     </div>

                     <button class="btn btn-primary text-white">Update</button>
                    </form>

                    {{-- class="mt-lg-4 bg-gradient-primary-to-secondary text-white-50 rounded-l-md px-lg-4 py-12 text-lg-center hover:bg-gradient-primary-to-secondary" --}}
                    {{--  --}}
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</x-app-layout>
