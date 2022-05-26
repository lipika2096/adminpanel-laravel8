@extends('layoutdashboard')
@section('content')
        <!-- BEGIN: Notification -->
        <div class="col-span-12 mt-6 -mb-6 intro-y">
            <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6" role="alert">
                <span>Dashboard /  Product </span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-4 h-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> </button>
            </div>
        </div>
        <!-- END: Notification -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Product
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-12">
                <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5">                    
                    <div >
                        <label for="crud-form-1" class="form-label">Select Category</label>
                        <select data-placeholder="Select Category" class="tail-select w-full" id="crud-form-2" >
                        <option value="0">---Select Category---</option>
                        <option value="1" selected>Microscopes</option>
                        </select>
                    </div>
                    <div >
                        <label for="crud-form-2" class="form-label">Select SubCategory</label>
                        <select data-placeholder="Select Subcategory" class="tail-select w-full" id="crud-form-2">
                            <option value="0">---Select Subcategory---</option>
                            <option value="1" selected>Microscope Subcat</option>
                        </select>
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">Products Name</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Product Name" value="Product 1">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">Product Price</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Product Price" value="6789.00">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">Product Model</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Product Model" value="model1">
                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">Availability</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Availability" value="available">
                    </div>
                    <div >
                        <label for="crud-form-3" class="form-label">Product Quantity</label>
                        <div class="input-group">
                            <input id="crud-form-3" type="text" class="form-control" placeholder="Product Quantity" aria-describedby="input-group-1" value="56">
                            
                        </div>
                    </div>
                    <div >
                        <label>Product Description</label>
                        <div class="mt-2">
                            <div class="editor">
                                <p>There are Some Product Description</p>
                            </div>
                        </div>
                    </div>
                    <div >
                        <label for="crud-form-3" class="form-label">Product Features</label>
                        <div class="input-group">
                            <input id="crud-form-3" type="text" class="form-control" placeholder="Product Features" aria-describedby="input-group-1" value="available">
                            
                        </div>
                    </div>
                    <div >
                        <label for="crud-form-3" class="form-label">Add Product Images</label>
                        <div class="input-group">
                            <input id="crud-form-3" type="file" class="form-control" accept="image/*" placeholder="Product Image" aria-describedby="input-group-1">
                            
                        </div>
                        <img src="{{asset('dist/images/1646244835.jpg')}}" id="output" width="150px" height="120px">
                    </div>
                    <div >
                        <label for="crud-form-3" class="form-label">Keyword</label>
                        <div class="input-group">
                            <input id="crud-form-3" type="text" class="form-control" placeholder="Keywords" aria-describedby="input-group-1" value="Keywords">
                            
                        </div>
                    </div>
                    <div >
                        <label for="crud-form-3" class="form-label">Page Desc</label>
                        <div class="input-group">
                            <input id="crud-form-3" type="text" class="form-control" placeholder="Page Desc" aria-describedby="input-group-1" value="Decsription">
                            
                        </div>
                    </div>
                    <div >
                        <label for="crud-form-1" class="form-label">Select Product-1</label>
                        <select data-placeholder="Select Products" class="tail-select w-full" id="crud-form-2" >
                            <option value="1" selected>---Select Product-1---</option>
                            <option value="1">Product-1</option>
                        </select>
                    </div>
                    <div >
                        <label for="crud-form-2" class="form-label">Select Product-2</label>
                        <select data-placeholder="Select Products" class="tail-select w-full" id="crud-form-2" >
                        <option value="1" selected>---Select Product-2---</option>
                            <option value="1">Product-1</option>
                        </select>
                    </div>
                    <div >
                        <label for="crud-form-1" class="form-label">Select Product-3</label>
                        <select data-placeholder="Select Products" class="tail-select w-full" id="crud-form-2" >
                        <option value="1" selected>---Select Product-3---</option>
                            <option value="1">Product-1</option>
                        </select>
                    </div>
                    <div >
                        <label for="crud-form-2" class="form-label">Select Product-4</label>
                        <select data-placeholder="Select Products" class="tail-select w-full" id="crud-form-2" >
                        <option value="1" selected>---Select Product-4---</option>
                            <option value="1">Product-1</option>
                        </select>
                    </div>
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>
                <!-- END: Form Layout -->
            </div>
        </div>

@endsection