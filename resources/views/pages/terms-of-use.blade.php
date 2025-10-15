<x-layouts.app>
    <div class="rounded-lg border border-accent bg-base-300 p-6 shadow shadow-accent/75 max-w-(--breakpoint-lg) mx-auto px-10 py-10">
        <div class="text-justify pb-6" >
            <div class="text-4xl font-bold pb-3">
                <h1>{{ trans('titles.terms_use') }}</h1>
                <span class="text-sm text-gray-400">{{ trans('pages/terms-use.last_update') }} {{ now()->format('d/m/Y') }}</span>
            </div>
            <p>
                {{ trans('pages/terms-use.introduction') }}
            </p>
        </div>
        <div>
            <ol class="list-decimal list-inside marker:text-2xl marker:font-semibold">
                <div class="space-y-10 [&>li>h2]:text-2xl [&>li>h2]:font-semibold [&>li>h2]:inline">
                    <li>
                        <h2>{{ trans('pages/terms-use.agreement_terms.title') }}</h2>
                        <div class="pt-5">
                            <ul class="list-disc list-inside space-y-5 pl-5 marker:text-base">
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.agreement_terms.subheadings.subheading_1') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.agreement_terms.items.item_1') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.agreement_terms.subheadings.subheading_2') }}</h3>
                                    <li>
                                        {{{ trans('pages/terms-use.agreement_terms.items.item_2') }}}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.agreement_terms.subheadings.subheading_3') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.agreement_terms.items.item_3') }}
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <h2>{{ trans('pages/terms-use.account_security.title') }}</h2>
                        <div class="pt-5">
                            <ul class="list-disc list-inside space-y-5 pl-5 marker:text-base">
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.account_security.subheadings.subheading_1') }}</h3>
                                    <li>
                                         {{ trans('pages/terms-use.account_security.items.item_1') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.account_security.subheadings.subheading_2') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.account_security.items.item_2') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.account_security.subheadings.subheading_3') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.account_security.items.item_3') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.account_security.subheadings.subheading_4') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.account_security.items.item_4') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.account_security.subheadings.subheading_5') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.account_security.items.item_5') }}
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <h2>{{ trans('pages/terms-use.conduct_code.title') }}</h2>
                        <div class="space-y-5 pl-5">
                            <p>{{ trans('pages/terms-use.conduct_code.paragraph') }}</p>
                            <ul class="list-disc list-inside space-y-5 marker:text-base">
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.conduct_code.subheadings.subheading_1') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.conduct_code.items.item_1') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.conduct_code.subheadings.subheading_2') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.conduct_code.items.item_2') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.conduct_code.subheadings.subheading_3') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.conduct_code.items.item_3') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.conduct_code.subheadings.subheading_4') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.conduct_code.items.item_4') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.conduct_code.subheadings.subheading_5') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.conduct_code.items.item_5') }}
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <h2>{{ trans('pages/terms-use.titles_moderation.title') }}</h2>
                        <div class="pt-5">
                            <ul class="list-disc list-inside space-y-5 pl-5 marker:text-base">
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.titles_moderation.subheadings.subheading_1') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.titles_moderation.items.item_1') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.titles_moderation.subheadings.subheading_2') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.titles_moderation.items.item_2') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.titles_moderation.subheadings.subheading_3') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.titles_moderation.items.item_3') }}
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <h2>{{ trans('pages/terms-use.system_moderation.title') }}</h2>
                        <div class="pt-5 pl-5 space-y-5">
                            <div>
                                <h3 class="font-semibold">{{ trans('pages/terms-use.system_moderation.subheadings.subheading_1') }}</h3>
                                <ul class="list-disc list-inside marker:text-base">
                                    <li>
                                        {{ trans('pages/terms-use.system_moderation.items.item_1') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/terms-use.system_moderation.items.item_2') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/terms-use.system_moderation.items.item_3') }}
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="font-semibold">{{ trans('pages/terms-use.system_moderation.subheadings.subheading_2') }}</h3>
                                <ul class="list-disc list-inside marker:text-base">
                                    <li>
                                        {{ trans('pages/terms-use.system_moderation.items.item_4') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/terms-use.system_moderation.items.item_5') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/terms-use.system_moderation.items.item_6') }}
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="font-semibold">{{ trans('pages/terms-use.system_moderation.subheadings.subheading_3') }}</h3>
                                <p>
                                    {{ trans('pages/terms-use.system_moderation.paragraph') }}
                                </p>
                                <ul class="list-disc list-inside marker:text-base">
                                    <li>
                                        {{ trans('pages/terms-use.system_moderation.items.item_7') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/terms-use.system_moderation.items.item_8') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/terms-use.system_moderation.items.item_9') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/terms-use.system_moderation.items.item_10') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h2>{{ trans('pages/terms-use.vip_special.title') }}</h2>
                        <div class="pt-5">
                            <ul class="list-disc list-inside space-y-5 pl-5 marker:text-base">
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.vip_special.subheadings.subheading_1') }}</h3>
                                    <p>
                                        {{ trans('pages/terms-use.vip_special.paragraph') }}
                                    </p>
                                    <li>
                                        {{ trans('pages/terms-use.vip_special.items.item_1') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/terms-use.vip_special.items.item_2') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.vip_special.subheadings.subheading_2') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.vip_special.items.item_3') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/terms-use.vip_special.items.item_4') }}
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <h2>{{ trans('pages/terms-use.copyright.title') }}</h2>
                        <div class="pt-5">
                            <ul class="list-disc list-inside space-y-5 pl-5 marker:text-base">
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.copyright.subheadings.subheading_1') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.copyright.items.item_1') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.copyright.subheadings.subheading_2') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.copyright.items.item_2') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.copyright.subheadings.subheading_3') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.copyright.items.item_3') }}
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <h2>{{ trans('pages/terms-use.self_protection.title') }}</h2>
                        <div class="pt-5">
                            <ul class="list-disc list-inside space-y-5 pl-5 marker:text-base">
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.self_protection.subheadings.subheading_1') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.self_protection.items.item_1') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.self_protection.subheadings.subheading_2') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.self_protection.items.item_2') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.self_protection.subheadings.subheading_3') }}</h3>
                                    <p>
                                        {{ trans('pages/terms-use.self_protection.paragraph') }}
                                    </p>
                                    <li>
                                        {{ trans('pages/terms-use.self_protection.items.item_3') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/terms-use.self_protection.items.item_4') }}
                                    </li>
                                    <li>
                                        {{ trans('pages/terms-use.self_protection.items.item_5') }}
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <h2>{{ trans('pages/terms-use.last_words.title') }}</h2>
                        <div class="pt-5">
                            <ul class="list-disc list-inside space-y-5 pl-5 marker:text-base">
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.last_words.subheadings.subheading_1') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.last_words.items.item_1') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.last_words.subheadings.subheading_2') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.last_words.items.item_2') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.last_words.subheadings.subheading_3') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.last_words.items.item_3') }}
                                    </li>
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ trans('pages/terms-use.last_words.subheadings.subheading_4') }}</h3>
                                    <li>
                                        {{ trans('pages/terms-use.last_words.items.item_4') }}
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <h2>{{ trans('pages/terms-use.contact.title') }}</h2>
                        <div class="pt-5">
                            <p>{{ trans('pages/terms-use.contact.paragraph', ['mail' => env('MAIL_SUPPORT')]) }}</p>
                        </div>
                    </li>
                </div>
            </ol>
        </div>
    </div>    
</x-layouts.app>