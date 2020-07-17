<div class="modal fade" id="modalCreate-product" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">   
            <div class="modal-body p-0">  
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header">
                        <div class="text-center mt-2 mb-3"><h3><i class="ni ni-briefcase-24 text-primary"></i> Kostum </h3></div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Please fill the box with the name of kostum</small>
                        </div>
                        <form action="{{ route('frontend.product.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-spaceship"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Name" name="name" type="text">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="input-first-name">Jenis Kostum</label>
                                <select id="category" class="form-control form-control-alternative" name="category_id">
                                    @foreach ($productCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" class="form-control" placeholder="status" name="status" value="Available">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>