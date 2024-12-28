@extends('layouts.app')

@section('content')
    <h2>Feedback</h2>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Give Feedback
    </button>
        
    <section class="mt-5">
        <div class="container-fluid w100">
            <div class="row">
                @foreach ($feedbacks as $key => $item)

                <div class="modal fade" id="detailModal{{ $key }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Give Feedback</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('feedback.update', $item['id']) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="name" value="{{ $item['name'] }}" required>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" name="rating" aria-label="Default select example">
                                                <option selected>Change Rating</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                                <option value="5">Five</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="mt-3 ms-2">
                                        <label for="exampleFormControlTextarea1" class="form-label">Rating :</label>
                                        @for ($i = 0; $i < $item['rating']; $i++)
                                        <span class="fa fa-star checked"></span>
                                        @endfor
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                                        <textarea class="form-control" name="feedback" id="exampleFormControlTextarea1" rows="3" placeholder="Give Your Feedback Here" required>{{ $item['feedback'] }}</textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <a type="submit" class="btn btn-danger" href="{{ route('feedback.delete' , $item['id']) }}">Delete</a>
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                          {{ $item['name'] }}'s Feedback
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">
                            @for ($i = 0; $i < $item['rating']; $i++)
                            <span class="fa fa-star checked"></span>
                            @endfor
                        </h5>
                          <p class="card-text">{{ $item['feedback'] }}</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal{{ $key }}">
                            View
                        </button>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Give Feedback</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('feedback.create') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="name" placeholder="Name" aria-label="name" required>
                            </div>
                            <div class="col">
                                <select class="form-select" name="rating" aria-label="Default select example" required>
                                    <option selected>Give Rating</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                  </select>
                            </div>
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>
                            <textarea class="form-control" name="feedback" id="exampleFormControlTextarea1" rows="3" placeholder="Give Your Feedback Here" required></textarea>
                          </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
