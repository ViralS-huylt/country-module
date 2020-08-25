<div data-repeater-item class="outer">
    @component('common-components.forms.text')
        @slot('field') vi @endslot
        @slot('label') {{_t('field_vi')}} @endslot
        @slot('placeholder') {{_t('name_country_vi')}} @endslot
    @endcomponent

    @component('common-components.forms.text')
        @slot('field') en @endslot
        @slot('label') {{_t('field_en')}} @endslot
        @slot('placeholder') {{_t('name_country_en')}} @endslot
    @endcomponent

    @component('common-components.forms.text')
        @slot('field') code @endslot
        @slot('label') {{_t('code')}} @endslot
        @slot('placeholder')  {{_t('code')}} @endslot
    @endcomponent

</div>
