<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">

                {{-- Update Profile Info --}}
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <h5 class="card-header">{{ __('Update Profile Information') }}</h5>
                        <div class="card-body">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>

                {{-- Update Password --}}
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <h5 class="card-header">{{ __('Update Password') }}</h5>
                        <div class="card-body">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>

                {{-- Delete Account --}}
                <div class="col-md-12 mb-4">
                    <div class="card border-danger">
                        <h5 class="card-header text-danger">{{ __('Delete Account') }}</h5>
                        <div class="card-body">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-dashboard.app-layout>
