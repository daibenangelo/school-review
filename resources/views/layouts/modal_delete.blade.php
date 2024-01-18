<div
    class="modal fade"
    id="delete_{{$s -> subject_id}}"
    tabindex="-1"
    >
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm deletion of subject {{$s -> subject_id}}</h5>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                ></button>
            </div>
            <div class="modal-body">
            <ul>
                <li><b>Name: </b> {{$s->name}}</li>
                <li><b>Department: </b>{{$s->department}}</li>
            </ul>    
            Are you sure you want to delete this entry (deletion is permanent)?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Close
                </button>
                <form action="/subjects/{{$s -> subject_id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
            </div>
        </div>
    </div>