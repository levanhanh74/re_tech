@extends('LayoutClient.index')
@section('title')
    Category
@endsection
@section('contents')
    <div class="container">
        <div class="row row-cols-2 ">
            {{-- begin navbar --}}
            <div class="col-lg-3 col-xl-3 col-xxl-3 col-md-12 col-sm-12 col-12 bg-primary">
                <nav class="nav flex-xxl-column flex-sm-row flex-md-row flex-lg-column d-inline  p-3 ">
                    <h4 class="nav-link text-white p-0 d-sm-none d-md-none d-lg-block d-none d-xl-block" aria-current="page">
                        Danh mục
                    </h4>
                    @if (isset($cateAll))
                        @foreach ($cateAll as $item)
                            <a class="nav-link  d-inline  d-lg-block d-md-block d-sm-inline  text-white"
                                href="{{ route('client.categoryJoin', ['id' => $item->id]) }}">{{ $item->name }}</a>
                        @endforeach
                    @endif
                </nav>
            </div>
            {{-- end navbar --}}

            <div class="col-lg-9 col-xxl-9 col-xl-9 col-sm-12 col-md-12 col-12">
                {{-- begin carousel by slider --}}
                <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active">
                            <img class="w-100" style="max-height: 400px; max-height: 300px; object-fit: inherit"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsaxxNGANPVpC46sQLnO3P14WSShTdGVcLhA&usqp=CAU=65E78030"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100" style="max-height: 400px; max-height: 300px; object-fit: inherit"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQt4UVYcJye4sJL8kVHoiWFQuyasJ49rITF0w&usqp=CAU"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100" style="max-height: 400px; max-height: 300px; object-fit: inherit"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJBe67hDXzPyUNrZWrGOQYzcACK2cH_o4soQ&usqp=CAU"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon text-black bg-black" aria-hidden="true"></span>
                        <span class="visually-hidden bg-black">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon text-black bg-black" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                {{-- end carousel by slider --}}

                {{-- begin Product feauted --}}
                {{-- <div class="container mt-5">
                    <h5>SẢN PHẨM NỔI BẬT</h5>
                    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-xs-2 row-cols-xl-4">
                        @if (isset($featureAll))
                            @foreach ($featureAll as $item)
                                <div class="col g-1">
                                    <div class="card" style="max-width: 300px;">
                                        <a href="{{ 'client/productDetail/' . $item->id }}"><img
                                                src="{{ asset('storage/' . $item->image) }}"
                                                style="width: 100%; min-height: 250px; object-fit: cover"
                                                class="card-img-top" alt="{{ $item->name }}"></a>
                                        <div class="card-body">
                                            <p class="card-text">{{ $item->name }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/430901251_10231273819125687_4867357176627735653_n.jpg?stp=dst-jpg_p526x296&_nc_cat=107&ccb=1-7&_nc_sid=c42490&_nc_ohc=eLzZtmuuWrQAX8KiOJr&_nc_ht=scontent.fdad3-4.fna&oh=00_AfAZABqTaqMwnwRb2NT4VgC5g5laCX6jVz5coP1Ey6BCFg&oe=65E92AE5"
                                    style="width: 100%; min-height: 200px; object-fit: cover" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="https://scontent.fdad3-5.fna.fbcdn.net/v/t39.30808-6/430178146_122148640562074297_3335695384804709994_n.jpg?stp=dst-jpg_p526x296&_nc_cat=1&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=I63egtuSausAX-lQdin&_nc_ht=scontent.fdad3-5.fna&oh=00_AfBxgUx-KJE2xs39GLC18E0fz0ae3Gvk8KJnA4QivFu-_A&oe=65E8D856"
                                    style="width: 100%; max-height: 300px; min-height: 200px; object-fit: "
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/417543254_3691257187809568_7484268223022899917_n.jpg?stp=dst-jpg_p180x540&_nc_cat=101&ccb=1-7&_nc_sid=c42490&_nc_ohc=-tULh5lZUuAAX8zsOeE&_nc_ht=scontent.fdad3-4.fna&oh=00_AfC3twpe9qU6O736gcVtaEUZb6CUR90TesesMjrdRjvVmA&oe=65E87B33"
                                    style="width: 100%; max-height: 300px; min-height: 200px; object-fit: "
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- end Product feauted --}}

                {{-- begin new producrt  --}}
                <div class="container mt-5">
                    <h5>SẢN PHẨM MỚI</h5>
                    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 row-cols-xl-4 row-cols-xxl-4">
                        @if (isset($cateJoin))
                            @foreach ($cateJoin as $item)
                                <div class="col-lg-5 col-md-4 col-sm-4 col-6 col-xl-4 col-xxl-4 g-1">
                                    <div class="card" style="max-width: 300px; min-height: 300px;">
                                        <a href="{{ route('client.productDetail', ['id' => $item->id]) }}"> <img
                                                src="{{ asset('storage/' . $item->image) }}" class="card-img-top"
                                                style="width: 100%; max-height: 150px; object-fit: contain"
                                                alt="{{ $item->name }}">
                                        </a>
                                        <div class="card-body">
                                            <p class="card-text">{{ $item->name }}</p>
                                        </div>
                                        <div class="card-body p-1">
                                            <div class="row">
                                                <div class="col-5">
                                                    <form action="{{ route('client.addCart', ['id' => $item->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <button class="btn btn-primary p-1" type="submit">Add cart</button>
                                                    </form>
                                                </div>
                                                <div class="col-7">
                                                    <p class="card-text " style="color: #dba624;">
                                                        {{ number_format($item->price, 3, '.') }} VND</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        {{-- <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col g-1">
                            <div class="card" style="max-width: 300px;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- end new producrt  --}}
            </div>
        </div>
    </div>
@endsection
