<x-layouts.app title="{{ trans('titles.privacy_policy') }}">
   <div class="rounded-lg border border-accent bg-base-300 p-6 shadow shadow-accent/75 max-w-(--breakpoint-lg) mx-auto px-10 py-10">
       <div class="text-justify pb-6">
            <div class="text-4xl font-bold pb-3">
                <h1>{{ trans('titles.privacy_policy') }}</h1>
                <span class="text-sm text-gray-400">{{ trans('pages/privacy-policy.last_update') }} {{ now()->format('d/m/Y') }}</span>
            </div>
            <p>
                {{ trans('pages/privacy-policy.introduction') }}
            </p>
        </div>
        <div>
            <ol class="list-decimal list-inside marker:text-2xl marker:font-semibold">
                <div class="space-y-10 [&>li>h2]:text-2xl [&>li>h2]:font-semibold [&>li>h2]:inline">
                    <li>
                        <h2>{{ trans('pages/privacy-policy.titles.title_1') }}</h2>
                        <div class="space-y-5 pl-5">
                            <p>
                               {{trans('pages/privacy-policy.info_gathered.paragraphs.paragraph_1')}}
                            </p>
                            <div>
                                <h3 class="font-semibold pb-3">{{trans('pages/privacy-policy.info_gathered.subheadings.subheading_1')}}</h3>
                                <ul class="list-disc list-inside pl-5 marker:text-base">
                                    <li>
                                        {{trans('pages/privacy-policy.info_gathered.items.item_1')}}
                                    </li>
                                    <li>
                                        {{trans('pages/privacy-policy.info_gathered.items.item_2')}}
                                    </li>
                                    <li>
                                        {{trans('pages/privacy-policy.info_gathered.items.item_3')}}
                                    </li>
                                    <li>
                                        {{trans('pages/privacy-policy.info_gathered.items.item_4')}}
                                    </li>
                                    <li>
                                        {{trans('pages/privacy-policy.info_gathered.items.item_5')}}
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="font-semibold pb-3">{{ trans('pages/privacy-policy.info_gathered.subheadings.subheading_2') }}</h3>
                                <ul class="list-disc list-inside pl-5 marker:text-base">
                                    <li>
                                        {{ trans('pages/privacy-policy.info_gathered.items.item_6') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/privacy-policy.info_gathered.items.item_7') }}
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="font-semibold pb-3">{{ trans('pages/privacy-policy.info_gathered.subheadings.subheading_3') }}</h3>
                                <p>{{ trans('pages/privacy-policy.info_gathered.paragraphs.paragraph_3') }}</p>
                                <ul class="list-disc list-inside pl-5 marker:text-base">
                                    <li>
                                        {{ trans('pages/privacy-policy.info_gathered.items.item_8') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/privacy-policy.info_gathered.items.item_9') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/privacy-policy.info_gathered.items.item_10') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/privacy-policy.info_gathered.items.item_11') }}
                                    </li>
                                </ul>
                                <div class="pt-3">
                                    <p>
                                        {{ trans('pages/privacy-policy.info_gathered.paragraphs.paragraph_3') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                       <h2>{{ trans('pages/privacy-policy.titles.title_2') }}</h2>
                       <p>{{ trans('pages/privacy-policy.info_usage.paragraph') }}</p> 
                       <ul class="list-disc list-inside pt-5 pl-5 marker:text-base">
                            <li>
                                {{ trans('pages/privacy-policy.info_usage.items.item_1') }}
                            </li>
                            <li>
                                {{ trans('pages/privacy-policy.info_usage.items.item_2') }}
                            </li>
                            <li>
                                {{ trans('pages/privacy-policy.info_usage.items.item_3') }}                                
                            </li>
                            <li>
                                {{ trans('pages/privacy-policy.info_usage.items.item_4') }}
                            </li>
                            <li>
                                {{ trans('pages/privacy-policy.info_usage.items.item_5') }}
                            </li>
                       </ul>
                    </li>
                    <li>
                        <h2>{{ trans('pages/privacy-policy.titles.title_3') }}</h2>
                        <p>
                            {{ trans('pages/privacy-policy.legal_basis.paragraph') }}
                        </p>
                        <ul class="list-disc list-inside pt-5 pl-5 marker:text-base">
                            <li>
                                {{ trans('pages/privacy-policy.legal_basis.items.item_1') }}
                            </li>
                            <li>
                                {{ trans('pages/privacy-policy.legal_basis.items.item_2') }}
                            </li>
                            <li>
                                {{ trans('pages/privacy-policy.legal_basis.items.item_3') }}
                            </li>
                            <li>
                                {{ trans('pages/privacy-policy.legal_basis.items.item_4') }}
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h2>{{ trans('pages/privacy-policy.titles.title_4') }}</h2>
                        <p>
                            {{ trans('pages/privacy-policy.info_sharing.paragraph') }}
                        </p>
                        <ul class="list-disc list-inside pt-5 pl-5 marker:text-base">
                            <li>
                                {{ trans('pages/privacy-policy.info_sharing.items.item_1') }}
                            </li>
                            <li>
                                {{ trans('pages/privacy-policy.info_sharing.items.item_2') }}
                            </li>
                            <li>
                                {{ trans('pages/privacy-policy.info_sharing.items.item_3') }}
                            </li>
                            <li>
                                {{ trans('pages/privacy-policy.info_sharing.items.item_4') }}
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h2>{{ trans('pages/privacy-policy.titles.title_5') }}</h2>
                        <p>
                            {{ trans('pages/privacy-policy.data_retention.paragraph') }}
                        </p>
                        <ul class="list-disc list-inside pt-5 pl-5 marker:text-base">
                            <li>{{ trans('pages/privacy-policy.data_retention.items.item_1') }}</li>
                            <li>{{ trans('pages/privacy-policy.data_retention.items.item_2') }}</li>
                            <li>{{ trans('pages/privacy-policy.data_retention.items.item_3') }}</li>
                        </ul>
                    </li>
                    <li>
                        <h2>{{ trans('pages/privacy-policy.titles.title_6') }}</h2>
                        <p>{{ trans('pages/privacy-policy.privacy_rights.paragraph') }}</p>
                        <ul class="list-disc list-inside pt-5 pl-5 marker:text-base">
                            <li>{{ trans('pages/privacy-policy.privacy_rights.items.item_1') }}</li>
                            <li>{{ trans('pages/privacy-policy.privacy_rights.items.item_2') }}</li>
                            <li>{{ trans('pages/privacy-policy.privacy_rights.items.item_3') }}</li>
                            <li>{{ trans('pages/privacy-policy.privacy_rights.items.item_4') }}</li>
                        </ul>
                    </li>
                    <li>
                        <h2>{{ trans('pages/privacy-policy.titles.title_7') }}</h2>
                        <p>
                            {{ trans('pages/privacy-policy.info_security.paragraph') }}
                        </p>
                    </li>
                    <li>
                        <h2>{{ trans('pages/privacy-policy.titles.title_8') }}</h2>
                        <p>
                            {{ trans('pages/privacy-policy.info_security.paragraph') }}
                        </p>
                    </li>
                    <li>
                        <h2>{{ trans('pages/privacy-policy.titles.title_9') }}</h2>
                        <p>
                            {{ trans('pages/privacy-policy.international_data.paragraph') }}
                        </p>
                    </li>
                    <li>
                        <h2>{{ trans('pages/privacy-policy.titles.title_10') }}</h2>
                        <p>
                            {{ trans('pages/privacy-policy.contact.paragraph') }}
                        </p>
                        <div class="pt-5 flex flex-col [&>span]:font-bold">
                            <span>{{ trans('pages/privacy-policy.contact.responsible') }}</span>
                            <span>{{ trans('pages/privacy-policy.contact.email', ['mail' => env('MAIL_SUPPORT')] ) }}</span>
                        </div>
                    </li>
                </div>
            </ol>
        </div>
   </div>
</x-layouts.app>
