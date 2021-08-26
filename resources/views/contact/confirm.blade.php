@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" action="{{ route('contact.send') }}">
    @csrf
    
    <h4 class="mail-h4">お問合せフォーム</h4>

    <div class="mail-flex2">
        <div class="mail-info">
            <span class="col-1"><label>お名前</label></span>
	<span class="col-2">{{ $inputs['title'] }}
        <input
            name="title"
            value="{{ $inputs['title'] }}"
            type="hidden">
	</span>
        </div>
    
        <div class="mail-info">
            <span class="col-1"><label>メール</label></span>
        <span class="col-2">{{ $inputs['email'] }}
        <input
            name="email"
            value="{{ $inputs['email'] }}"
            type="hidden">
	</span>
        </div>
    
        <div class="mail-info">
            <span class="col-1"><label>メール確認用</label></span>
        <span class="col-2">{{ $inputs['email'] }}
        <input
            name="email"
            value="{{ $inputs['email'] }}"
            type="hidden">
	</span>
        </div>
    
        <div class="mail-info">
            <span class="col-1"><label>お問合せ内容</label></span>
        <span class="col-2">{!! nl2br(e($inputs['body'])) !!}
        <input
            name="body"
            value="{{ $inputs['body'] }}"
            type="hidden">
        	</span>
        </div>
    </div>

    <button type="submit" name="action" value="back" class="mail-button">
        入力内容修正
    </button>
    <button type="submit" name="action" value="submit" class="mail-button">
        送信する
    </button>
</form>
</div>
@endsection