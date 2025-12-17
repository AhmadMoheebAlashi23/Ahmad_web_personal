<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>

    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('settings') }}" method="POST">
                        @csrf
                        @method('PUT')
                     <div>
                         <x-input-label for="site_name" :value="__('Site_name')" />
                         <x-text-input id="site_name" class="block mt-1 w-full" type="text" name="site_name" :value="old('site_name',$settings['site_name'] ?? '')"  autocomplete="site_name" />
                         <x-input-error :messages="$errors->get('site_name')" class="mt-2" />
                     </div>
                     <div>
                         <x-input-label for="facebook" :value="__('Facebook')" />
                         <x-text-input id="facebook" class="block mt-1 w-full" type="text" name="facebook" :value="old('facebook',$settings['facebook'] ?? '')"  autocomplete="facebook" />
                         <x-input-error :messages="$errors->get('facebook')" class="mt-2" />
                     </div>
                     <div>
                         <x-input-label for="twitter" :value="__('Twitter')" />
                         <x-text-input id="twitter" class="block mt-1 w-full" type="text" name="twitter" :value="old('twitter',$settings['twitter'] ?? '')"  autocomplete="twitter" />
                         <x-input-error :messages="$errors->get('twitter')" class="mt-2" />
                     </div>
                     <div>
                         <x-input-label for="linkedin" :value="__('Linkedin')" />
                         <x-text-input id="linkedin" class="block mt-1 w-full" type="text" name="linkedin" :value="old('linkedin',$settings['linkedin'] ?? '')"  autocomplete="linkedin" />
                         <x-input-error :messages="$errors->get('linkedin')" class="mt-2" />
                     </div>
                     <div>
                         <x-input-label for="github" :value="__('Github')" />
                         <x-text-input id="github" class="block mt-1 w-full" type="text" name="github" :value="old('github',$settings['github'] ?? '')"  autocomplete="github" />
                         <x-input-error :messages="$errors->get('github')" class="mt-2" />
                     </div>

                     <button class="btn btn-primary text-white">Save</button>
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
