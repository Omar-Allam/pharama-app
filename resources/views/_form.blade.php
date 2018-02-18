<div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" value="{{$medicine->name ?? ''}}" id="exampleInputName" placeholder="Name" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputACName">Active constituent</label>
        <input type="text" class="form-control" id="exampleInputACName"
               placeholder="Active constituent" name="active_constituent" value="{{$medicine->active_constituent ?? ''}}">
    </div>


    <div class="form-group">
        <label for="exampleInputDose">Dose</label>
        <input type="text" class="form-control" name="dose" id="exampleInputDose" placeholder="Dose" value="{{$medicine->dose ?? ''}}">
    </div>

    <div class="form-group">
        <label for="exampleInputDose">Dose (Arabic)</label>
        <input type="text" class="form-control" name="dose_arabic" id="exampleInputDose" placeholder="Dose" value="{{$medicine->dose_arabic ?? ''}}">
    </div>


    <div class="form-group">
        <label for="exampleInputType">Usage</label>
        <input type="text" class="form-control"
               name="usage" id="exampleInputType" placeholder="Usage" value="{{$medicine->usage ?? ''}}">
    </div>

    <div class="form-group">
        <label for="exampleInputType">Usage (Arabic)</label>
        <input type="text" class="form-control"
               name="usage_arabic" id="exampleInputType" placeholder="Usage" value="{{$medicine->usage_arabic ?? ''}}">
    </div>

</div>

<div class="col-md-6">

    <div class="form-group">
        <label for="exampleInputArName">Arabic Name</label>
        <input type="text" class="form-control" name="ar_name" id="exampleInputArName"
               placeholder="Arabic Name" value="{{$medicine->ar_name ?? ''}}">
    </div>

    <div class="form-group">
        <label for="exampleInputType">Type</label>
        <select class="form-control selection" name="type_id">
            <option value="">Select Type</option>
            @foreach(\App\Type::all() as $type)
                <option value="{{$type->name}}" @if($type->name == $medicine->type) selected @endif >{{$type->name}}</option>
            @endforeach
        </select>
    </div>



    <div class="form-group">
        <label for="exampleInputCompany">Company</label>
        <select class="form-control selection" name="company_id">
            <option value="">Select Company</option>
            @foreach(\App\Company::all() as $company)
                <option value="{{$company->name}}" @if($company->name == $medicine->company) selected @endif>{{$company->name}}</option>
            @endforeach
        </select>

    </div>

    <div class="form-group">
        <label for="exampleInputPrice">Price</label>
        <input type="text" name="price" class="form-control" id="exampleInputPrice" placeholder="Price" value="{{$medicine->price ?? ''}}">
    </div>

    <div class="form-group">
        <label for="exampleInputPrice">Capacity</label>
        <input type="text" name="capacity" class="form-control" id="exampleInputCapacity"
               placeholder="Capacity" value="{{$medicine->capacity ?? ''}}">
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" id="image" name="image">
    </div>

    <button type="submit" class="btn btn-success pull-left">Save</button>

</div>