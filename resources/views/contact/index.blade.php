@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" action="{{ route('contact.confirm') }}">
    @csrf
    
    <h4 class="mail-h4">お問合せフォーム</h4>
    <div class="mail-mark">
        <p><span>※</span>は必須事項です。</p>
    </div>
    
    <div class="mail-flex">
        <div class="mail-title">
            <label class="mail-label">お名前<span>※</span></label>
        </div>
        <div class="mail-text">
            <input
                name="title"
                value="{{ old('title') }}"
                type="text" class="mail-message">
            @if ($errors->has('title'))
                <p class="error-message">{{ $errors->first('title') }}</p>
            @endif
        </div>
    
        <div class="mail-title">
            <label class="mail-label">メール<span>※</span></label>
        </div>
        <div class="mail-text">
            <input
                name="email"
                value="{{ old('email') }}"
                type="text" class="mail-message">
            @if ($errors->has('email'))
                <p class="error-message">{{ $errors->first('email') }}</p>
            @endif
        </div>
        
        <div class="mail-title">
            <label class="mail-label">メール確認用<span>※</span></label>
        </div>
        <div class="mail-text">
            <input
                name="email"
                value="{{ old('email') }}"
                type="text" class="mail-message">
            @if ($errors->has('email'))
                <p class="error-message">{{ $errors->first('email') }}</p>
            @endif
    </div>
    
        <div class="mail-title d-flex align-items-center">
            <label class="mail-label">お問合せ内容<span>※</span></label>
        </div>
        <div class="mail-text">
            <textarea name="body" class="mail-textarea">{{ old('body') }}</textarea>
        @if ($errors->has('body'))
            <p class="error-message">{{ $errors->first('body') }}</p>
        @endif
        </div>
        <div class="mail-button-content">
        <button type="submit" class="mail-button">
            確　認
        </button>
    </div>
    </div>
</form>
</div>
@endsection