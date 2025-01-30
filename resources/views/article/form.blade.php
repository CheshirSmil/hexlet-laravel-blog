@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        <ul>
        </ul>
    </div>
@endif

{{  html()->label('Имя', 'name') }}
{{  html()->input('text', 'name') }}
{{  html()->label('Содержание', 'body') }}
{{  html()->textarea('body') }}

