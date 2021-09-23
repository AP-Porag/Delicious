@extends('layouts.app')
@section('content')
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <div class="d-flex justify-content-between">
                            <h6 class="card-title card-padding pb-0">Event List</h6>
                            <a href="{{route('events')}}" class="mdc-button mdc-button--unelevated mdc-ripple-upgraded mr-4 mb-2 mt-4">Add event</a>
                        </div>
                        <div class="template-demo">
                            <form action="{{route('store-event')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mdc-layout-grid__inner">
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input type="text" class="mdc-text-field__input" id="text-field-hero-input" @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label" style="">Title</label>
                                                    @error('title')
                                                    <label for="text-field-hero-input" class="mdc-floating-label" style="">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input type="text" class="mdc-text-field__input" id="text-field-hero-input" @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label" style="">Price</label>
                                                    @error('price')
                                                    <label for="text-field-hero-input" class="mdc-floating-label" style="">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <textarea type="text" class="mdc-text-field__input" id="text-field-hero-input" @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label" style="">Description</label>
                                                    @error('description')
                                                    <label for="text-field-hero-input" class="mdc-floating-label" style="">{{$message}}</label>
                                                    @enderror
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
                                            <input type="file" class="mdc-text-field__input" id="text-field-hero-input" name="thumbnail">
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label" style="">Thumbnail</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                        <button type="submit" class="mdc-button mdc-button--raised">
                                            Save Event
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
