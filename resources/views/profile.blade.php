

    @foreach ($users as $user)

        <h1>{{ $user['name'] }}</h1>



        <h3>{{ $user['email'] }}</h3>


        @if (!str_ends_with($user['email'], '@gmail.com'))
            <p>This user isn't using "@gmail.com</p>
        @endif
        <hr>

    @endforeach



@copyright {{date ('Y')}}
