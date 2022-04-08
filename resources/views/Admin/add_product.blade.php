@extends('layout_admin')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Sản Phẩm
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
                                <form role="form" action="{{URL::to('/save-product')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Sản Phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Sản Phẩm</label>
                                    <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Giá Sản Phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Size Sản Phẩm</label>
                                    <input type="text" name="product_size" class="form-control" id="exampleInputEmail1" placeholder="Size Sản Phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh Sản Phẩm</label>
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" placeholder="Hình Ảnh Sản Phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả</label>
                                    <textarea style="resize: none;" rows="8" class="form-control" name="product_desc" id="exampleInputPassword1" placeholder="Mô Tả Sản Phẩm"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội Dung</label>
                                    <textarea style="resize: none;" rows="8" class="form-control" name="product_content" id="exampleInputPassword1" placeholder="Nội Dụng Sản Phẩm"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Danh Mục Sản Phẩm</label>
                                    <select name="product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiện</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Thương Hiệu Sản Phẩm</label>
                                    <select name="product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiện</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hiển Thị</label>
                                    <select name="product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiện</option>
                                    </select>
                                </div>
                                <button type="submit" name="add_category_product" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>
</div>
@endsection          