<div class="w-full h-screen flex bg-gradient-to-b from-primary to-secondary">
    <div class="hidden md:flex w-1/2 flex-col justify-center items-center p-10 shadow-2xl/50 shadow-neutral/50">
        <div class="max-w-md text-center space-y-6">
            <h2 class="text-4xl font-bold">
                {{ trans('pages/signup.title') }}
            </h2>

            <div class="flex justify-center">
                <img src="{{ asset('images/midnight/midnight-vertical.png') }}" alt="Midnight Knowledge"
                    class="w-70 h-100">
            </div>
        </div>
    </div>

    <div class="flex w-full md:w-1/2 flex-col justify-center items-center backdrop-blur bg-black/50 p-10">
        <div class="w-full max-w-md gap-6">
            <h5 class="text-xl text-center font-semibold">
                {{ trans('pages/signup.subtitle') }}
            </h5>

            <livewire:components.auth.register />
        </div>
    </div>
