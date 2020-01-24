
    @extends('masterView') {{-- our controller sends us this view. This view extends masterView. the compiler will check through masterView
        and if there are any yields in there, it will insert a section(we called our section content) --}}
    @extends('links')



    @section('content')
    <h1>About us</h1>
    <p>This is a page about us</p>
    @endsection

    @section('title')
    About us
    @endsection
