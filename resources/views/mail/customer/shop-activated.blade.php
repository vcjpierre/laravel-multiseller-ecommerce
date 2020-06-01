@component('mail::message')
# Congratulations

Your shop {{ $shopName }} is now active

@component('mail::button', ['url' => route('shops.show', 1)])
Visit Your Shop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent