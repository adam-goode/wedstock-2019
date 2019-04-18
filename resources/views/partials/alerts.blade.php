<div class="ellis-modal modal fade" tabindex="-1" role="dialog" id="alertModal">
    <div class="modal-dialog" role="document">
        @if (Session::has('success'))
            <div class="modal-content alert alert-success">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {!! Session::get('success') !!}
                </div>
            </div>
        @endif

        @if (Session::has('warning'))
            <div class="modal-content alert alert-warning">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {!! Session::get('warning') !!}
                </div>
            </div>
        @endif

        @if (Session::has('danger'))
            <div class="modal-content alert alert-danger">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {!! Session::get('danger') !!}
                </div>
            </div>
        @endif

        @if (Session::has('info'))
            <div class="modal-content alert alert-info">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {!! Session::get('info') !!}
                </div>
            </div>
        @endif
    </div>
</div>