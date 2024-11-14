@extends('layouts.app')
@section('content')
<div class="card">
    <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
    <div class="card-body">
        <h4 class="card-title">Title</h4>
        <p class="card-text"><!-- Button trigger modal -->
        <button
            type="button"
            class="btn btn-primary btn-lg"
            data-bs-toggle="modal"
            data-bs-target="#modalId"
        >
            Launch
        </button>
        
        <!-- Modal -->
        <div
            class="modal fade"
            id="modalId"
            tabindex="-1"
            role="dialog"
            aria-labelledby="modalTitleId"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Modal title
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <div
                            class="table-responsive"
                        >
                            <table
                                class="table table-striped table-hover table-borderless table-primary align-middle"
                            >
                                <thead class="table-light">
                                    <caption>
                                        Table Name
                                    </caption>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                        <th>Column 3</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr
                                        class="table-primary"
                                    >
                                        <td scope="row">Item</td>
                                        <td>Item</td>
                                        <td>Item</td>
                                    </tr>
                                    <tr
                                        class="table-primary"
                                    >
                                        <td scope="row">Item</td>
                                        <td>Item</td>
                                        <td>Item</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    
                                </tfoot>
                            </table>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            var modalId = document.getElementById('modalId');
        
            modalId.addEventListener('show.bs.modal', function (event) {
                  // Button that triggered the modal
                  let button = event.relatedTarget;
                  // Extract info from data-bs-* attributes
                  let recipient = button.getAttribute('data-bs-whatever');
        
                // Use above variables to manipulate the DOM
            });
        </script>
        </p>
    </div>
</div>

@endsection