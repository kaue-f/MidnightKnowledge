<div class="hidden absolute pt-3 w-full" id="capsWarningDiv">
    <x-alert class="alert-warning alert-sm" title="{{ trans('passwords.alert-capslock') }}" icon="o-exclamation-triangle"/>
</div>

@push('scripts')
    @script
        <script>
            document.addEventListener('livewire:initialized', () => {
                const capsWarningDiv = document.querySelector('#capsWarningDiv');
                
                const passwordField = document.querySelector('input[type="password"]');
                passwordField.addEventListener('focus', (e) => {
                    passwordField.addEventListener('keydown', (e) => {
                        capsWarningDiv.classList.toggle('hidden', !e.getModifierState('CapsLock'));
                    });
                });
            });
        </script>
    @endscript
@endpush