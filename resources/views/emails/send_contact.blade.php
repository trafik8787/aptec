@component('mail::message')
# Форма контакта

##### Имя: {{$data['name']}}
##### Адрес: {{$data['address']}}
##### Телефон: {{$data['phone']}}
##### E-mail: {{$data['email']}}

@endcomponent
