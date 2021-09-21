@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header text-light  text-center " style="background-color: #1e8574;"> <h2> <i class="fas fa-heart"></i> <i class="fas fa-heart"></i><i class="fas fa-heart"></i> {{ __('عبر عن ولائك لوطنك  ') }}  <i class="fas fa-heart"></i> 
                    <i class="fas fa-heart"></i><i class="fas fa-heart"></i></h2></div>

                <div class="card-body  border border-success">

                    <section style="direction: rtl">
                        <div class="" style="padding: 4%">
                          <form class="row g-3"  action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data" >
                            @csrf

                            <div class="col-12">
                                <textarea class="form-control" name="text" placeholder="أضف عبارة وطنية هنا" id="floatingTextarea2" style="height: 100px"></textarea>
                            </div>
                            <div class="col-12">
                              <button type="submit" class="btn btn-lg mt-4  " style="background-color: #1e8574; color: white">إضافة</button>
                            </div>
                          </form>
                        </div>
                      </section>

                  
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
