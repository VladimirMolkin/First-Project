<div class="content-box-large">
  <div class="panel-heading">
    <div class="panel-title"><h3><?= $title;?></h3></div>
    <a href="/admin/posts/create"><button class="btn btn-primary pull-right"><span data-feather="plus"></span> Add New</button></a>
  </div>
</div>    

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Post Title</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody class="table-items">
                        <?php foreach ($posts as $post):?>
                          <tr>
                            <td><?php echo $post['id']?></td>
                            <td><?php echo $post['title']?></td>
                            <td>
                              <a href="/admin/posts/show/<?= $post['id']?>">
                                <button class="btn btn-default"><i class="glyphicon glyphicon-eye-open"></i> View</button>
                              </a>

                              <a href="/admin/posts/edit/<?= $post['id']?>">
                                <button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
                              </a>

                              <a href="/admin/posts/delete/<?= $post['id']?>">
                                <button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</button>
                              </a>
                            </td>
                          </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
