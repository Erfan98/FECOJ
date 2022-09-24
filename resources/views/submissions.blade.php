@extends('layouts.masterWithoutside')

@section('body')
{{-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

<div class="position-fixed top-0 end-0 p-3" tabindex="-2" style="z-index: 11">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div> --}}
    <div id="submissions">
        <div class="modal fade" id="submission_details" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            By <a href="" id="handle">Erfan Ahmed Siam</a>,
                            contest: <a href="#">FEC Round 16</a>,
                            <a href="#" id="problem">problem: (A) Heist</a>,
                            <i id="verdict"></i>,
                            <a href="#" id="copy">#Copy</a>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
            <pre>
                <code id="code" style="
                padding: 1.5rem;
                background: #f1f1f1;
                border-radius: 20px;">
                </code>
            </pre>
                    </div>
                    {{-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
                </div>
            </div>
        </div>





        <table class="table table-striped" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">When</th>
                    <th scope="col">Who</th>
                    <th scope="col">Problem</th>
                    <th scope="col">Lang</th>
                    <th scope="col">Verdict</th>
                    <th scope="col">Time</th>
                    <th scope="col">Memory</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($submissions as $submission)
                    <tr>
                        <th><a href="#" class="show_code">{{ $submission->id }}</a></th>
                        <td>{{Carbon\Carbon::parse($submission->created_at)->timezone('Asia/Dhaka')->format('M-d-Y || H:i:s')}}<sup>GMT6+</sup></td>
                        <td><a href="#">{{ $submission->user->name }}</a></td>
                        <td><a href="#">{{ $submission->problem }}</a></td>
                        <td>{{ $submission->language->lang }}</td>
                        <td style="color:{{ $submission->verdict == 'Accepted' ? 'green' : 'red' }};">{{ $submission->verdict }}</td>
                        <td>{{ (float)$submission->time*1000 }} ms</td>
                        <td>{{ $submission->memory }} KB</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('script')
<script src="js/jquery.copiq.min.js"></script>
<script>
    $('#myTable').DataTable(
        {order:[[0,"desc"]],
        lengthMenu: [
            [50, 100, 200, -1],
            [50, 100, 200, 'All'],
        ]
    }

        );
    $(".show_code").click(function() {
        var sc = jQuery(this).text();
        $.ajax({
            type: "GET",
            url: "get_source/" + sc,
            success: function(response) {
                $('#handle').text(response.user.name);
                $('#verdict').text(response.verdict).css("color", response.verdict == "Accepted" ?
                    "green" : "red");
                $("code").text(atob(response.source_code));
                hljs.highlightAll();
                hljs.initLineNumbersOnLoad();
                $("#submission_details").modal("toggle");
            }
        });
    });

    $('#copy').copiq({
        content: "#code"
    });
    // $('#copy').click(function () {
    //     $(".toast-body").text("Copied to clipboard")
    //     $("#liveToast").toast("show");
    // });

</script>
@endsection
