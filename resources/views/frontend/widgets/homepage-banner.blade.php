<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div style="color: red; font-size: 50;" ><b>Sản phẩm HOT</b></div><br>
        <div class="row">
            @foreach($data as $index=>$sp)
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block{{$index+1}} -->
                    <div class="block1 wrap-pic-w"><img src="{{ asset('storage/photos/'. ($sp->sp_hinh)) }}" alt="IMG-BANNER"><a
                            href="{{ route('frontend.productDetail', ['id' => $sp->sp_ma]) }}" id="" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l"><span class="block1-name ltext-102 trans-04 p-b-8">{{ $sp->sp_ten }}
                                </span><span class="block1-info stext-102 trans-04">Hàng hot 2019 </span></div>
                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">Mua ngay </div>
                            </div>
                        </a></div>
            </div>
            @endforeach
        </div>
    </div>
</div>