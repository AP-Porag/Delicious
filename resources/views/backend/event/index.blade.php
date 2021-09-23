@extends('layouts.app')
@section('content')
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="mdc-card p-0">
                        <div class="d-flex justify-content-between">
                            <h6 class="card-title card-padding pb-0">Event List</h6>
                            @if($events->count() < 5)
                            <a href="{{route('add-event')}}" class="mdc-button mdc-button--unelevated mdc-ripple-upgraded mr-4 mb-2 mt-4">Add event</a>
                            @endif
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hoverable">
                                <thead>
                                <tr>
                                    <th class="text-left">SL.</th>
                                    <th class="text-left">Thumbnail</th>
                                    <th class="text-left">Title</th>
                                    <th class="text-left">description</th>
                                    <th class="text-left">Price</th>
                                    <th class="text-right">Action</th>
                                </thead>
                                <tbody>
                                @foreach($events as $event)
                                <tr>
                                    <td class="text-left">{{$loop->index+1}}</td>
                                    <td class="text-left">
                                        <img src="{{$event->thumbnail}}" alt="{{$event->title}}" class="mdc-image-list__image" style="width: 75px">
                                    </td>
                                    <td class="text-left">{{$event->title}}</td>
                                    <td class="text-left">{{$event->description}}</td>
                                    <td class="text-left">{{$event->price}}</td>
                                    <td class="text-right">
                                        <div class="">
                                            <button class="mdc-button mdc-button--info mdc-button--leading">
                                                <i class="material-icons mdc-button__icon" aria-hidden="true">edit</i>
                                            </button>

                                            <button class="mdc-button mdc-button--danger mdc-button--leading">
                                                <i class="material-icons mdc-button__icon" aria-hidden="true">delete</i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
