@extends('layout.app')
@section('title')

Dashboard

@endsection
@section('content')
    <div class="container">
        <div class="body">
            <div class="container mt-5">
                <h3 class="mt-5`">Dashboard</h3>
                <hr>
                <div class="container d-flex">
                    <div class="card bg-primary m-2" style="width: 300px; height: 100px">
                        <div class="p-3">
                            <h2><b>20%</b></h2>
                            <h5>Completeness</h5>
                        </div>
                    </div>
                    <div class="card bg-danger m-2" style="width: 300px; height: 100px">
                        <div class="p-3">
                            <h2><b>4</b></h2>
                            <h5>Error</h5>
                        </div>
                    </div>
                    <div class="card bg-success m-2" style="width: 300px; height: 100px">
                    <div class="p-3">
                            <h2><b>10</b></h2>
                            <h5>Verfied</h5>
                        </div>
                    </div>
                    <div class="card bg-warning m-2" style="width: 300px; height: 100px">
                         <div class="p-3">
                            <h2><b>1</b></h2>
                            <h5>Application</h5>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pdfModal">
                    Open PDF Modal
                </button>
                <button id="togglePdfBtn">VIEW</button>
                <iframe id="pdfFrame" src="{{ asset('asset/image/Mobile applcation-1.pdf')}}" width="80%" height="700px" frameborder="0" style="display: none;"></iframe>
                <script>
                    function togglePdfDisplay() {
                        var pdfFrame = document.getElementById('pdfFrame');
                        if (pdfFrame.style.display === 'none') {
                            pdfFrame.style.display= 'block'; 
                        } else {
                            pdfFrame.style.display = 'none';
                        }
                    }

                    document.getElementById('togglePdfBtn').addEventListener('click', function() {
                        togglePdfDisplay(); 
                        });
                </script>
                <object data="{{ asset('asset/image/Mobile applcation-1.pdf')}}" type="appliction/pdf"  width="80%" height="700px">
                    <a href="{{ asset('asset/image/Mobile applcation-1.pdf')}}">Download the pdf</a>
                </object>
                <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe id="pdfFrame" src="{{ asset('asset/image/Mobile applcation-1.pdf')}}" width="100%" height="600px" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layout.footer')
@endsection