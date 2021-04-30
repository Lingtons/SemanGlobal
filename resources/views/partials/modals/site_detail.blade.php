
<!-- Modal -->
<div class="modal fade" id="plotDetailModal{{$plot->id}}" tabindex="-1" role="dialog" aria-labelledby="addVendorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close pt-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body">
                <div class="contact-info-box">
                    <h5 class="contact-title">{{$plot->plot_number}}</h5>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{route('manage.plots.show', $plot->id)}}" class="btn btn-outline-secondary">Go to Plot {{$plot->plot_number}}</a>
            </div>
        </div>

    </div>
</div>
