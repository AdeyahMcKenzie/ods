    @foreach ($drivers as $driver)
        <div>{{ $driver->name }}, {{ $driver->telephone }}
        </div>
        @endforeach
      