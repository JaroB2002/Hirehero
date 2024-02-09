<div id="errors" class="mb-8">

    <div>
        <h2>errors</h2>
        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    
    </div>
</div>

