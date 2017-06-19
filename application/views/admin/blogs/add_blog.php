
<div class="content-area py-1">
            <div class="container-fluid">
                
    </div>
       <h1><a href="http://localhost/main-website/admin/blogs/add_blog">Add New Blog</h1></a>
     <hr>

  <div class="row row-md mb-2">

            <div class="col-md-12">
                <div class="box bg-white">
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="box box-block bg-white">

                            <div class="form-group row">
                                <label for="url" class="col-xs-2 col-form-label">URL</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" name="url">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-xs-2 col-form-label">Title</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" name="title">
                                </div>
                            </div>

                    
                            <div class="form-group row">
                                <label for="image" class="col-xs-2 col-form-label">Image</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="file"  name="files">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-xs-2 col-form-label">Description</label>
                                <div class="col-xs-8">
                                <textarea class="form-control" rows="4" name="description"></textarea>
                            </div>
                            </div>

                  
                            <div class="form-group row">
                                <label for="meta_title" class="col-xs-2 col-form-label">Meta_Title</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" name="meta_title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="meta_robot" class="col-xs-2 col-form-label">Meta_Robot</label>
                                 <div class="col-xs-8">
                                <select class="form-control" name="meta_robot">
                                <option>......</option>
                                    <option>NOINDEX , NOFOLLOW</option>

                                    <option>INDEX , NOFOLLOW</option>

                                    <option>NOINDEX , FOLLOW</option>
                                   </select>
                                  </div>
                                 
                                </div>
                            

                     



                                  <div class="form-group row">
                                <label for="meta_description" class="col-xs-2 col-form-label">Meta_Description</label>
                                <div class="col-xs-8">
                                <textarea class="form-control" rows="4" name="meta_description"></textarea>
                            </div>
                            </div>

                                  <div class="form-group row">
                                <label for="author" class="col-xs-2 col-form-label">Author</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" name="author">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-number-input" class="col-xs-2 col-form-label"></label>
                                <div class="col-xs-10 text-md-right">
                                    <input class="btn btn-danger" type="submit" name="submit" value="Add Blog" id="example-number-input">
                                </div>
                            </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>



</div>