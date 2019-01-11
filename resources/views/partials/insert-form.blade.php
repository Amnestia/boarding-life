<div class="form-wrapper">
    <form action="/insert" method="POST" id="insert-form">
        {{csrf_field()}}
        <div class="form__group">
            <label for="name" class="form__label">Name</label>
            <input type="text" class="form__field" id="name" name="name" placeholder="ex: Bunis University" required autofocus>
        </div>
        <div class="form__group">
            <label for="address" class="form__label">Address</label>
            <input type="text" class="form__field" id="address" name="address" placeholder="ex: Jalan Kebon Jeruk Raya No.27" required>
        </div>
        <div class="form__group">
            <label for="type" class="form__label">Type</label>
            <select name="type-select" id="type-select" class="custom-select">
                <option value="-1">Select a type</option>
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->type}}</option>
                @endforeach
            </select>
        </div>
        @if($errors->any() && $errors->first()!='login')
            <div class="form__group">
                <div class="err-message">{{$errors->first()}}</div>
            </div>
        @endif
        <div class="form__group">
            <input type="submit" id="btn-insert" class="form__submit" value="Insert">
        </div>
    </form>
</div>
