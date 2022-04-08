@extends('layout_admin')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Thương Hiệu Sản Phẩm
                        </header>

                        <div class="panel-body">
                            <?php
								use Illuminate\Support\Facades\Session;
							  	$message=Session::get('message');
								  if($message){
									  echo '<span class="text-danger">',$message,'</span>';
									  Session::put('message',null);
								  }
							?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Thương Hiệu</label>
                                    <input type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả</label>
                                    <textarea style="resize: none;" rows="8" class="form-control" name="brand_product_desc" id="exampleInputPassword1" placeholder="Mô Tả "></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hiển Thị</label>
                                    <select name="brand_product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiện</option>
                                    </select>
                                </div>
                                <button type="submit" name="add_brand_product" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>
</div>
@endsection          