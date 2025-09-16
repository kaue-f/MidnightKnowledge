<div x-data="backgroundSwitcher()" x-init="init()"
    class="flex bg-cover bg-center bg-no-repeat w-full h-full justify-center items-center transition-all duration-700"
    :style="`background-image: url('${background}')`">
    <div class="flex flex-col items-center w-full max-w-md mx-auto">
        <a href="/" wire:navigate class="max-sm:mt-6">
            <img src="{{ asset('images/midnight/midnight-horizontal.png') }}" class="h-28 sm:h-48">
        </a>
        <div class="w-full p-6 sm:p-8">
            <livewire:components.auth.login />
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function backgroundSwitcher() {
            return {
                morning: "{{ asset('images/backgrounds/morning.png') }}",
                night: "{{ asset('images/backgrounds/night.png') }}",
                background: '',

                init() {
                    this.setBackground();
                    setInterval(() => this.setBackground(), 60000);
                },

                setBackground() {
                    const hour = new Date().getHours();
                    if (hour >= 6 && hour < 18) {
                        this.background = this.morning;
                    } else {
                        this.background = this.night;
                    }
                }
            }
        }
    </script>
@endpush
