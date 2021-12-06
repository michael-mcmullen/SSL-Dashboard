@extends('layout.app')

@section('content')

    <div class="columns">
        <div class="column">
            <div class="field is-grouped">
                <div class="control">
                    <a href="{{ route('check.all') }}" class="button is-link">Check All Domains</a>
                </div>
                <div class="control">
                    <a href="{{ route('domain.create') }}" class="button is-primary">Add Domain</a>
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <table class="table is-fullwidth is-bordered is-striped is-hoverable">
                <thead>
                    <tr>
                        <th>
                            Domain
                        </th>
                        <th class="has-text-centered">
                            Status
                        </th>
                        <th class="has-text-right">
                            Last Checked
                        </th>
                        <th class="has-text-right">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($domains as $domain)
                        <tr>
                            <td class="is-vcentered">
                                {{ $domain->domain }}
                            </td>
                            <td class="{{ $domain->is_valid ? 'has-text-success' : 'has-text-danger' }} is-vcentered has-text-centered">
                                @if($domain->is_valid)
                                    <span class="tag is-success">
                                        Valid
                                    </span>
                                @else
                                    <span class="tag is-danger">
                                        Invalid
                                    </span>
                                @endif
                            </td>
                            <td class="is-vcentered has-text-right">
                                @if($domain->last_checked_at)
                                    {{ $domain->last_checked_at->format('F d, Y') }}
                                @else
                                    Never
                                @endif
                            </td>
                            <td class="is-vcentered has-text-right">
                                <a href="{{ route('domain.destroy', $domain) }}" class="button is-outlined is-danger" onclick="return confirm('Are you sure?');">Remove Domain</a>
                                <a href="{{ route('check.domain', $domain) }}" class="button is-link">Check Domain</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection