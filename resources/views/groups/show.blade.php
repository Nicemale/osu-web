{{--
    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
@extends('master')

@section('content')
    <div class="osu-page osu-page--groups">
        <div class="osu-page-header osu-page-header--groups">
            <h1 class="osu-page-header__title">
                {{ $group->group_name }}
            </h1>
            <div class="osu-page-header__title osu-page-header__title--small">
                {{ $group->group_desc }}
            </div>
        </div>
    </div>
    <div class="osu-page osu-page--generic osu-page--small osu-page--dark-bg">
        <div class="js-react--user-list"></div>
    </div>
@endsection

@section("script")
    @parent

    <script id="json-users" type="application/json">
        {!! json_encode($usersJson) !!}
    </script>

    @include('layout._extra_js', ['src' => 'js/react/user-list.js'])
@endsection
