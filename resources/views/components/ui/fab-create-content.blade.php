 <div class="fab">
     <x-button tabindex="0" class="btn-circle btn btn-primary" icon="lucide.plus"
         tooltip-left="{{ trans('components/ui/fab-create-content.tooltip') }}" />

     <div class="fab-close">
         {{ trans('components/ui/fab-create-content.close') }}
         <span class="btn btn-circle btn-secondary">
             <x-icon name="lucide.pen-tool" />
         </span>
     </div>

     @foreach (\App\Enums\ContentTypeEnum::fabItems() as $item)
         <div>
             {{ $item['label'] }}
             <x-button icon="lucide.plus" class="btn btn-circle btn-neutral" link="{{ $item['route'] }}" />
         </div>
     @endforeach
 </div>
