<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4>Student Form</h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="">Product Id</label>
                            <input type="text" name="bw_id" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Product title</label>
                            <input type="text" name="bw_id" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Product Price</label>
                            <input type="int" name="bw_price" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Product Description</label>
                            <input type="text" name="bw_desc" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Product Quantity</label>
                            <input type="int" name="bw_quantity" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Upload Image 1</label>
                            <input type="file" name="bw_img1" required class="course form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Upload Image 2</label>
                            <input type="file" name="bw_img2" required class="course form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Upload Image 3</label>
                            <input type="file" name="bw_img3" required class="course form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Upload Image 4</label>
                            <input type="file" name="bw_img4" required class="course form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Upload Image 5</label>
                            <input type="file" name="bw_img5" required class="course form-control">
                        </div>


                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>