@component('mail::message')
# Introduction

Thank you for registering!

@component('mail::button', ['url' => ''])
Start Browsing
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
