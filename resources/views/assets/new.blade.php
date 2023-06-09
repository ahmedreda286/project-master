<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title>New Asset</title>
</head>
<body>
   <div class="contain">
    <div class="all">
      <div class="header">Assets</div>
        <form action="{{ route('machines.save') }}" method="post">
          @csrf
                    <div class="row">
                      <div class="col">
                        <label for="">Asset Name </label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="col">
                        <label for="">Asset Model </label>
                        <input type="text" class="form-control" >
                      </div>
                        <div class="col">
                          <label for="">Manufacturer </label>
                          <input type="text" class="form-control" >
                        </div>
                    </div>
                        <div class="row">
                          <div class="col">
                            <label for="">User Id</label>
                            <select class="form-select" aria-label="Default select example">
                              @foreach ($users as $user)
                              <option value="{{ $user->id }}">{{ $user->name }}</option>
                            </select>
                            @endforeach
                          </div>
                            <div class="col">
                              <label for="">Department Id</label>
                              @foreach ($departments as $department)
                              <select class="form-select" aria-label="Default select example">
                                <option value="{{$department->id}}">{{$department->name}}</option>
                              </select>
                              @endforeach
                            </div>
                          </div>
                            <div class="row">
                            <div class="col">
                              <label for="">Category Id</label>
                              @foreach ($categories AS $category)
                              <select class="form-select" aria-label="Default select example">
                                <option value="{{$category->id}}">{{$category->name}}</option>
                              </select>
                              @endforeach
                            </div>
                            <div class="col">
                              <label for="">Location Id</label>
                              @foreach ($locations AS $location)
                              <select class="form-select" aria-label="Default select example">
                                <option value="{{$location->id}}">{{$location->name}}</option>
                              </select>
                              @endforeach
                            </div>
                        </div>

                <div class=" mb-3">
                <label for="floatingInput">Contractor</label>
                <input type="text" class="form-control">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Asset Status</label>
                <input type="text" class="form-control">
              </div>
              <div class=" mb-3">
                <label for="floatingInput">Supplier</label>
                <input type="text" class="form-control">
              </div>
                  <div class="row">
                    <div class="col">
                      <label for="">Critcality Id</label>
                      @foreach ($criticals As $crtical)
                      <select class="form-select" aria-label="Default select example">
                        <option value="{{$crtical->id}}">{{$crtical->name}}</option>
                        @endforeach
                      </select>
                    </div>
                      <div class="col">
                        <label for="">Assets Code Id</label>
                        @foreach ($assetsCode AS $assetCode)
                        <select class="form-select" aria-label="Default select example">
                          <option value="{{$assetCode->id}}">{{$assetCode->name}}</option>
                        </select>
                        @endforeach
                      </div>
                      <div class="col">
                        <label for="">Serial Number</label>
                        <input type="text" class="form-control">
                      </div>
                  </div>

              <div class=" mb-3">
                <label for="floatingPassword">Contract Expiry Date</label>
                <input type="date" class="form-control">
              </div>


                <div class="">
                  <label for="floatingTextarea6">Note To Technection</label>
                  <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>

              <div class="">
                <label for="floatingTextarea6">Description</label>
                <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>
              <div class="button">
                <button class="submit" type="submit">Submit</button>
              </div>
            </div>
        </form>
    </div>
   </div>
  </div>

</body>
</html>
