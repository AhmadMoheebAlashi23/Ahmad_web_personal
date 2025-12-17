<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Experience') }}
        </h2>
                <a class="btn btn-primary text-white"  href="{{ route('experience.index') }}">ALL experienes </a>


    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('experience.update',$experience->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                     <div>
                         <x-input-label for="title" :value="__('Title')" />
                         <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title',$experience->title)" required autofocus autocomplete="title" />
                         <x-input-error :messages="$errors->get('title')" class="mt-2" />
                     </div>
                     <div class="mt-4">
                         <x-input-label for="company" :value="__('Company')" />
                         <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company',$experience->company)" required autofocus autocomplete="company" />
                         <x-input-error :messages="$errors->get('company')" class="mt-2" />
                     </div>
                     <div class="mt-4">
                         <x-input-label for="location" :value="__('Location')" />
                         <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location',$experience->location)" required autofocus autocomplete="location" />
                         <x-input-error :messages="$errors->get('location')" class="mt-2" />
                     </div>
                     <div class="mt-4">
                         <x-input-label for="start_date" :value="__('Start date')" />
                         <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" :value="old('start_date',$experience->start_date)" required autofocus autocomplete="start_date" />
                         <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                     </div>
                     <div class="mt-4">
                         <x-input-label for="end_date" :value="__('End date')" />
                         <x-text-input id="end_date" class="block mt-1 w-full" type="date" name="end_date" :value="old('end_date',$experience->end_date)" required autofocus autocomplete="end_date" />
                         <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                     </div>

                     <div class="mt-4">
                         <x-input-label for="description" :value="__('Description')" />
                         <textarea id="description" name="description" class="block mt-1 w-full" required>{{ old('description', $experience->description) }}</textarea>

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
