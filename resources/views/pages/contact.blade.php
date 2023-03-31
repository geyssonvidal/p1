@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form role="form" method="POST" action={{ route('contact') }} enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Contact Form</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                            </div>
                        </div>
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Name</label>
                                        <input class="form-control" type="text" name="contactName" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Apellido</label>
                                        <input class="form-control" type="text" name="contactLasName" value="">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email</label>
                                        <input class="form-control" type="text" name="contactEmail" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">phone</label>
                                        <input class="form-control" type="number" name="contactPhone" value="">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Coment</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="contactComent" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Image</label>
                                        <input class="form-control" type="file" name="contactImage" value="">

                                    </div>
                                </div>
                                
                            </div>
                            
                            <hr class="horizontal dark">
                            
                        </div>
                    </form>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Images</label>
                            @foreach ($img as $itemimg)
                                <img src="{{ $itemimg->image }}" alt="Imagen" class="w-4 h-auto">
                            @endforeach
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection


