<!-- Modal -->
<form id="product-form" method="post" action="{{route('product-store')}}">
@csrf
{{-- <form id="product-form" method="post" action="/product/store"> --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    {{-- Name --}}
                    <label for="product_name">Name</label>
                    <input id="product_name" class="form-control" type="text" placeholder="Eg: Computer" name="product_name">

                    {{-- Price --}}
                    <label for="price">Price (RM)</label>
                    <input id="price" class="form-control" type="number" placeholder="Eg: 2.00" name="price">

                    {{-- Description --}}
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="product_description"></textarea>

                    {{-- Quantity --}}
                    <label for="quantity">Quantity</label>
                    <input id="quantity" class="form-control" type="number" placeholder="Eg: 10" name="quantity">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
