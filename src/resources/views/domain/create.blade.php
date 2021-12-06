@extends('layout.app')

@section('content')

    <div class="columns">
        <div class="column">
            
            <form action="{{ route('domain.store') }}" method="POST" autocomplete="off">
                {!! csrf_field() !!}

                <div class="field">
                    <label for="" class="label">
                        Domain / Url
                    </label>
                    <div class="control">
                        <input type="text" class="input" name="domain" placeholder="https://example.com">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-success">
                            Add Domain
                        </button>
                    </div>
                    <div class="control">
                        <a href="{{ route('home') }}" class="button is-warning">
                            Cancel
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection